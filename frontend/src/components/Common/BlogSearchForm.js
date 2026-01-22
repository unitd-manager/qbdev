'use client';
import { useState, useEffect } from 'react';
import { useRouter, useSearchParams } from 'next/navigation';
import { DivTag } from './HTMLTags';

export default function BlogSearchForm() {
    const searchParams = useSearchParams();
    const defaultSearch = searchParams?.get('search') || '';
    const [search, setSearch] = useState(defaultSearch);
    const router = useRouter();

    useEffect(() => {
        setSearch(defaultSearch);
    }, [defaultSearch]);

    const handleSubmit = (e) => {
        e.preventDefault();
        if (search.trim()) {
            // Clean the search query - remove special characters that cause issues
            const cleanedSearch = search.trim()
                .replace(/[:"']/g, ' ') // Replace colons, quotes with spaces
                .replace(/\s+/g, ' ') // Replace multiple spaces with single space
                .trim();
            
            if (cleanedSearch) {
                router.push(`/blog?search=${encodeURIComponent(cleanedSearch)}`);
            }
        }
    };

    const handleClear = () => {
        setSearch('');
        router.push('/blog');
    };

    return (
        <form className="row" onSubmit={handleSubmit}>
            <DivTag className="input-col position-relative">
                <input
                    type="text"
                    name="search"
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                    className="form-control pe-5"
                    placeholder="Search for blogs"
                />
                {search && (
                    <button
                        type="button"
                        onClick={handleClear}
                        className="btn btn-sm position-absolute top-50 end-0 translate-middle-y me-2 p-0 border-0 bg-transparent"
                        aria-label="Clear search"
                        style={{ fontSize: '1.2rem', lineHeight: '1', color: '#999' }}
                    >
                        &times;
                    </button>
                )}
            </DivTag>
            <DivTag className="btn-col">
                <button type="submit" className="btn btn-primary w-100">
                    Search
                </button>
            </DivTag>
        </form>
    );
}