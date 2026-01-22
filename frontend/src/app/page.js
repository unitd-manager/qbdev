import { fetchPageBySlug } from '@/lib/wordpress';
import { DivTag, H1Tag, PTag } from '../components/Common/HTMLTags';

import {
  DynamicComponent,
  applyPaddingToLayouts,
  processLayoutData,
  insertSearchSection // 👈 keep search insertion logic
} from '@/lib/page-layout-utils';
import { generatePageMetadatas, getStructuredData } from '@/lib/rankmath-utils';
import StructuredData from '@/components/Common/StructuredData';

const slug = 'home';
const parent_path = '';

export async function generateMetadata() {
  return generatePageMetadatas(slug, 'page', parent_path, {});
}

export default async function HomePage() {
  try {
    const pageData = await fetchPageBySlug(slug);
    const metadata = await generatePageMetadatas(slug, 'page', parent_path, {});
    const structuredData = getStructuredData(metadata);
    if (!pageData || !pageData.acf || !pageData.acf.layouts?.length) {
      return (
    <DivTag className="home-page">
       <StructuredData data={structuredData} />
      <DivTag className="d-flex flex-column justify-content-center align-items-center text-center min-vh-100">
        <H1Tag>Welcome</H1Tag>
        <PTag>Content is being updated. Please check back soon.</PTag>
      </DivTag>
    </DivTag>
      );
    }

    // Apply padding logic
    let processedLayouts = applyPaddingToLayouts(pageData.acf.layouts);

    // 👇 Extra search component if not in CMS
    //processedLayouts = insertSearchSection(processedLayouts);

    // Process all layouts
    const finalLayouts = await processLayoutData(processedLayouts);

    return (
      <DivTag className="home-page">
         <StructuredData data={structuredData} />
        {finalLayouts.map((item) => (
          <DynamicComponent
            key={`${item.layout.layout_type}-${item.index}`}
            layout={item.layout}
            data={item.data}
            hasCustomPadding={item.hasCustomPadding}
          />
        ))}
      </DivTag>
    );
  } catch (error) {
    console.error('Error rendering HomePage:', error);

    return (
      <DivTag className="home-page">
        <div className="text-center py-16">
          <h1>Something went wrong</h1>
          <p>We are experiencing technical difficulties. Please try again later.</p>
        </div>
      </DivTag>
    );
  }
}
