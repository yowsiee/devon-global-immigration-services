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
            'title' => 'Dev\'s Domain - Professional IT Solutions & Web Development Services',
            'description' => 'Dev\'s Domain offers professional IT solutions, web development, mobile apps, API integrations, and business process automation. Transform your business with digital excellence.',
            'keywords' => 'web development, mobile app development, IT services, API integration, business automation, PowerApps, LogicApps, custom software',
            'author' => 'Dev\'s Domain',
            'image' => Base_URL . '/images/og-image.jpg',
            'url' => Base_URL . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ''),
            'type' => 'website',
            'site_name' => 'Dev\'s Domain',
            'locale' => 'en_US',
            'canonical' => null,
            'robots' => 'index, follow',
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_site' => '@devsdomain'
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
        $output .= '<meta name="theme-color" content="#4c51bf">' . "\n";
        $output .= '<meta name="msapplication-TileColor" content="#4c51bf">' . "\n";
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
            'name' => 'Dev\'s Domain',
            'url' => Base_URL,
            'logo' => Base_URL . '/images/logo.png',
            'description' => 'Professional IT solutions and web development services',
            'email' => 'info@devsdomain.com',
            'phone' => '+1 (555) 123-4567',
            'address' => [
                'streetAddress' => '25 Maracas Avenue, Xavien Plaza Heights',
                'addressLocality' => 'Arima',
                'addressRegion' => 'Trinidad and Tobago',
                'postalCode' => '',
                'addressCountry' => 'TT'
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
                'serviceType' => $structured['serviceType'] ?? 'IT Services',
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

