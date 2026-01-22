export async function GET(_, { params }) {
  const { sitemap } = params; // e.g. "post-sitemap", "page-sitemap"

  const wpSitemap = await fetch(`${process.env.WP_URL}/${sitemap}.xml`);
  let xml = await wpSitemap.text();

  // Rewrite backend URLs → frontend URLs
  xml = xml.replaceAll(process.env.WP_URL, process.env.NEXT_PUBLIC_SITE_BASE_URL);

  return new Response(xml, {
    headers: {
      "Content-Type": "application/xml",
    },
  });
}
