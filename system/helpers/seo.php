<?php

/**
 * SEO Helper Functions
 * Provides SEO-related utilities for meta tags, structured data, etc.
 */

if (!function_exists('seo_meta_tags')) {
    /**
     * Generate comprehensive SEO meta tags
     */
    function seo_meta_tags($data = []) {
        $defaults = [
            'title' => 'Devon Global Immigration Services - Licensed Canadian Immigration Consultants',
            'description' => 'Devon Global Immigration Services offers professional immigration services to Canada and the United States. Licensed RCIC consultants providing expert guidance for study permits, work permits, Express Entry, permanent residence, and citizenship.',
            'keywords' => 'Canadian immigration, immigration consultant Toronto, study permit Canada, work permit Canada, Express Entry, permanent residence Canada, family sponsorship, Canadian citizenship, RCIC consultant, Devon Global Immigration Services',
            'author' => 'Devon Global Immigration Services',
            'image' => Base_URL . '/images/og-image.jpg',
            'url' => Base_URL . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ''),
            'type' => 'website',
            'site_name' => 'Devon Global Immigration Services',
            'locale' => 'en_US',
            'canonical' => null,
            'robots' => 'index, follow',
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_site' => '@devonglobalimmigration'
        ];
        
        $seo = array_merge($defaults, $data);
        
        // Set canonical URL
        if (empty($seo['canonical'])) {
            $seo['canonical'] = $seo['url'];
        }
        
        // Clean URL (remove query strings for canonical)
        $seo['canonical'] = strtok($seo['canonical'], '?');
        
        $output = '';
        
        // Basic Meta Tags
        $output .= '<meta name="description" content="' . htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="keywords" content="' . htmlspecialchars($seo['keywords'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="author" content="' . htmlspecialchars($seo['author'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="robots" content="' . htmlspecialchars($seo['robots'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="googlebot" content="' . htmlspecialchars($seo['robots'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        
        // Canonical URL
        $output .= '<link rel="canonical" href="' . htmlspecialchars($seo['canonical'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        
        // Open Graph Meta Tags
        $output .= '<meta property="og:title" content="' . htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:description" content="' . htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:image" content="' . htmlspecialchars($seo['image'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:url" content="' . htmlspecialchars($seo['url'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:type" content="' . htmlspecialchars($seo['og_type'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:site_name" content="' . htmlspecialchars($seo['site_name'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta property="og:locale" content="' . htmlspecialchars($seo['locale'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        
        // Twitter Card Meta Tags
        $output .= '<meta name="twitter:card" content="' . htmlspecialchars($seo['twitter_card'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="twitter:title" content="' . htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="twitter:description" content="' . htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        $output .= '<meta name="twitter:image" content="' . htmlspecialchars($seo['image'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        if (!empty($seo['twitter_site'])) {
            $output .= '<meta name="twitter:site" content="' . htmlspecialchars($seo['twitter_site'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        }
        
        // Additional SEO Meta Tags
        $output .= '<meta name="theme-color" content="#1B3358">' . "\n";
        $output .= '<meta name="msapplication-TileColor" content="#1B3358">' . "\n";
        $output .= '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
        $output .= '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">' . "\n";
        
        return $output;
    }
}

if (!function_exists('seo_structured_data')) {
    /**
     * Generate JSON-LD structured data
     */
    function seo_structured_data($type = 'Organization', $data = []) {
        $defaults = [
            'name' => 'Devon Global Immigration Services',
            'url' => Base_URL,
            'logo' => Base_URL . '/images/logo.png',
            'description' => 'Licensed immigration consultants helping you achieve your Canadian immigration goals',
            'email' => 'canada@ttworktravel.com',
            'phone' => '347-324-7220',
            'address' => [
                'streetAddress' => '5-112 Elizabeth St.',
                'addressLocality' => 'Toronto',
                'addressRegion' => 'ON',
                'postalCode' => 'M5G1P9',
                'addressCountry' => 'CA'
            ],
            'sameAs' => [
                // Add social media links here
            ]
        ];
        
        $structured = array_merge($defaults, $data);
        
        if ($type === 'Organization') {
            $json = [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => $structured['name'],
                'url' => $structured['url'],
                'logo' => $structured['logo'],
                'description' => $structured['description'],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => $structured['phone'],
                    'contactType' => 'Customer Service',
                    'email' => $structured['email']
                ],
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $structured['address']['streetAddress'],
                    'addressLocality' => $structured['address']['addressLocality'],
                    'addressRegion' => $structured['address']['addressRegion'],
                    'postalCode' => $structured['address']['postalCode'],
                    'addressCountry' => $structured['address']['addressCountry']
                ]
            ];
            
            if (!empty($structured['sameAs'])) {
                $json['sameAs'] = $structured['sameAs'];
            }
        } elseif ($type === 'WebSite') {
            $json = [
                '@context' => 'https://schema.org',
                '@type' => 'WebSite',
                'name' => $structured['name'],
                'url' => $structured['url'],
                'description' => $structured['description'],
                'potentialAction' => [
                    '@type' => 'SearchAction',
                    'target' => [
                        '@type' => 'EntryPoint',
                        'urlTemplate' => $structured['url'] . '/search?q={search_term_string}'
                    ],
                    'query-input' => 'required name=search_term_string'
                ]
            ];
        } elseif ($type === 'Service') {
            $json = [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'serviceType' => $structured['serviceType'] ?? 'Immigration Services',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => $structured['name']
                ],
                'description' => $structured['description'],
                'areaServed' => 'Worldwide'
            ];
        } elseif ($type === 'BreadcrumbList') {
            $items = $structured['items'] ?? [];
            $json = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => []
            ];
            
            foreach ($items as $index => $item) {
                $json['itemListElement'][] = [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $item['name'],
                    'item' => $item['url']
                ];
            }
        }
        
        return '<script type="application/ld+json">' . json_encode($json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}

if (!function_exists('seo_breadcrumbs')) {
    /**
     * Generate breadcrumb structured data
     */
    function seo_breadcrumbs($items = []) {
        if (empty($items)) {
            return '';
        }
        
        return seo_structured_data('BreadcrumbList', ['items' => $items]);
    }
}

?>

