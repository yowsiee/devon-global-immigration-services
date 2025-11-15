<?php
/**
 * SEO Testing Tool
 * Visit: http://localhost/lightweight/test-seo.php
 */

$baseUrl = 'http://localhost/lightweight';
$pages = [
    '' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'portfolio' => 'Portfolio',
    'contact' => 'Contact'
];

$results = [];
$errors = [];

foreach ($pages as $path => $name) {
    $url = $baseUrl . ($path ? '/' . $path : '');
    
    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        $errors[$name] = "HTTP $httpCode";
        continue;
    }
    
    if (!$html) {
        $errors[$name] = "Failed to fetch";
        continue;
    }
    
    // Extract SEO elements
    $pageResults = [
        'url' => $url,
        'status' => 'OK',
        'title' => null,
        'meta_description' => null,
        'meta_keywords' => null,
        'canonical' => null,
        'og_title' => null,
        'og_description' => null,
        'og_image' => null,
        'twitter_card' => null,
        'structured_data_count' => 0,
        'breadcrumbs' => false
    ];
    
    // Title
    if (preg_match('/<title>(.*?)<\/title>/is', $html, $matches)) {
        $pageResults['title'] = trim(html_entity_decode($matches[1]));
        $pageResults['title_length'] = strlen($pageResults['title']);
    }
    
    // Meta Description
    if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['meta_description'] = html_entity_decode($matches[1]);
        $pageResults['meta_description_length'] = strlen($pageResults['meta_description']);
    }
    
    // Meta Keywords
    if (preg_match('/<meta\s+name=["\']keywords["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['meta_keywords'] = html_entity_decode($matches[1]);
    }
    
    // Canonical
    if (preg_match('/<link\s+rel=["\']canonical["\']\s+href=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['canonical'] = $matches[1];
    }
    
    // Open Graph
    if (preg_match('/<meta\s+property=["\']og:title["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['og_title'] = html_entity_decode($matches[1]);
    }
    if (preg_match('/<meta\s+property=["\']og:description["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['og_description'] = html_entity_decode($matches[1]);
    }
    if (preg_match('/<meta\s+property=["\']og:image["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['og_image'] = $matches[1];
    }
    
    // Twitter Card
    if (preg_match('/<meta\s+name=["\']twitter:card["\']\s+content=["\'](.*?)["\']/is', $html, $matches)) {
        $pageResults['twitter_card'] = $matches[1];
    }
    
    // Structured Data
    $pageResults['structured_data_count'] = substr_count($html, 'application/ld+json');
    
    // Breadcrumbs
    $pageResults['breadcrumbs'] = strpos($html, 'BreadcrumbList') !== false;
    
    $results[$name] = $pageResults;
}

// Test Sitemap
$sitemapUrl = $baseUrl . '/sitemap.xml';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sitemapUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$sitemapXml = curl_exec($ch);
$sitemapHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$sitemapStatus = ($sitemapHttpCode === 200 && $sitemapXml) ? 'OK' : 'ERROR';
$sitemapUrlCount = $sitemapXml ? substr_count($sitemapXml, '<url>') : 0;

// Test Robots.txt
$robotsUrl = $baseUrl . '/robots.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $robotsUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$robotsTxt = curl_exec($ch);
$robotsHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$robotsStatus = ($robotsHttpCode === 200 && $robotsTxt) ? 'OK' : 'ERROR';
$hasSitemapDirective = $robotsTxt && strpos($robotsTxt, 'Sitemap:') !== false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Testing Results - Dev's Domain</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f7fa;
            padding: 2rem;
            color: #2d3748;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            color: #4c51bf;
            margin-bottom: 2rem;
        }
        .test-section {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .test-section h2 {
            color: #1a202c;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        th {
            background: #f7fafc;
            font-weight: 600;
            color: #4a5568;
        }
        .status-ok { color: #48bb78; font-weight: 600; }
        .status-error { color: #f56565; font-weight: 600; }
        .status-warning { color: #ed8936; font-weight: 600; }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-success { background: #c6f6d5; color: #22543d; }
        .badge-error { background: #fed7d7; color: #742a2a; }
        .badge-warning { background: #feebc8; color: #7c2d12; }
        .summary {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .summary-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .summary-card h3 {
            font-size: 0.875rem;
            color: #718096;
            margin-bottom: 0.5rem;
        }
        .summary-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: #4c51bf;
        }
        code {
            background: #f7fafc;
            padding: 0.125rem 0.25rem;
            border-radius: 3px;
            font-size: 0.875rem;
            color: #e53e3e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 SEO Testing Results</h1>
        
        <div class="summary">
            <div class="summary-card">
                <h3>Pages Tested</h3>
                <div class="value"><?php echo count($results); ?></div>
            </div>
            <div class="summary-card">
                <h3>Sitemap Status</h3>
                <div class="value <?php echo $sitemapStatus === 'OK' ? 'status-ok' : 'status-error'; ?>">
                    <?php echo $sitemapStatus; ?>
                </div>
                <small><?php echo $sitemapUrlCount; ?> URLs found</small>
            </div>
            <div class="summary-card">
                <h3>Robots.txt Status</h3>
                <div class="value <?php echo $robotsStatus === 'OK' ? 'status-ok' : 'status-error'; ?>">
                    <?php echo $robotsStatus; ?>
                </div>
            </div>
        </div>

        <!-- Page Results -->
        <div class="test-section">
            <h2>Page SEO Analysis</h2>
            <table>
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Title</th>
                        <th>Title Length</th>
                        <th>Meta Desc</th>
                        <th>Desc Length</th>
                        <th>Canonical</th>
                        <th>OG Tags</th>
                        <th>Twitter</th>
                        <th>Structured Data</th>
                        <th>Breadcrumbs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $pageName => $data): ?>
                    <tr>
                        <td><strong><?php echo htmlspecialchars($pageName); ?></strong></td>
                        <td>
                            <?php if ($data['title']): ?>
                                <span class="badge badge-success">✓</span>
                                <code><?php echo htmlspecialchars(substr($data['title'], 0, 40)) . (strlen($data['title']) > 40 ? '...' : ''); ?></code>
                            <?php else: ?>
                                <span class="badge badge-error">✗</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (isset($data['title_length'])): ?>
                                <?php 
                                $length = $data['title_length'];
                                $class = ($length >= 50 && $length <= 60) ? 'status-ok' : (($length >= 40 && $length <= 70) ? 'status-warning' : 'status-error');
                                ?>
                                <span class="<?php echo $class; ?>"><?php echo $length; ?></span>
                            <?php else: ?>
                                <span class="status-error">-</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($data['meta_description']): ?>
                                <span class="badge badge-success">✓</span>
                            <?php else: ?>
                                <span class="badge badge-error">✗</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (isset($data['meta_description_length'])): ?>
                                <?php 
                                $length = $data['meta_description_length'];
                                $class = ($length >= 150 && $length <= 160) ? 'status-ok' : (($length >= 120 && $length <= 180) ? 'status-warning' : 'status-error');
                                ?>
                                <span class="<?php echo $class; ?>"><?php echo $length; ?></span>
                            <?php else: ?>
                                <span class="status-error">-</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($data['canonical']): ?>
                                <span class="badge badge-success">✓</span>
                            <?php else: ?>
                                <span class="badge badge-error">✗</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php 
                            $ogCount = 0;
                            if ($data['og_title']) $ogCount++;
                            if ($data['og_description']) $ogCount++;
                            if ($data['og_image']) $ogCount++;
                            ?>
                            <span class="badge <?php echo $ogCount >= 3 ? 'badge-success' : 'badge-warning'; ?>">
                                <?php echo $ogCount; ?>/3
                            </span>
                        </td>
                        <td>
                            <?php if ($data['twitter_card']): ?>
                                <span class="badge badge-success">✓</span>
                            <?php else: ?>
                                <span class="badge badge-error">✗</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge <?php echo $data['structured_data_count'] >= 2 ? 'badge-success' : 'badge-warning'; ?>">
                                <?php echo $data['structured_data_count']; ?>
                            </span>
                        </td>
                        <td>
                            <?php if ($data['breadcrumbs']): ?>
                                <span class="badge badge-success">✓</span>
                            <?php else: ?>
                                <span class="badge badge-warning">-</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Sitemap Test -->
        <div class="test-section">
            <h2>Sitemap Test</h2>
            <p><strong>URL:</strong> <a href="<?php echo $sitemapUrl; ?>" target="_blank"><?php echo $sitemapUrl; ?></a></p>
            <p><strong>Status:</strong> <span class="status-<?php echo $sitemapStatus === 'OK' ? 'ok' : 'error'; ?>"><?php echo $sitemapStatus; ?></span></p>
            <p><strong>URLs Found:</strong> <?php echo $sitemapUrlCount; ?></p>
        </div>

        <!-- Robots.txt Test -->
        <div class="test-section">
            <h2>Robots.txt Test</h2>
            <p><strong>URL:</strong> <a href="<?php echo $robotsUrl; ?>" target="_blank"><?php echo $robotsUrl; ?></a></p>
            <p><strong>Status:</strong> <span class="status-<?php echo $robotsStatus === 'OK' ? 'ok' : 'error'; ?>"><?php echo $robotsStatus; ?></span></p>
            <p><strong>Sitemap Directive:</strong> 
                <?php if ($hasSitemapDirective): ?>
                    <span class="badge badge-success">✓ Present</span>
                <?php else: ?>
                    <span class="badge badge-error">✗ Missing</span>
                <?php endif; ?>
            </p>
        </div>

        <!-- External Testing Links -->
        <div class="test-section">
            <h2>External Testing Tools</h2>
            <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://search.google.com/test/rich-results" target="_blank">🔍 Google Rich Results Test</a>
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://validator.schema.org/" target="_blank">📋 Schema.org Validator</a>
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://metatags.io/" target="_blank">🏷️ Meta Tags Checker</a>
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://pagespeed.web.dev/" target="_blank">⚡ Google PageSpeed Insights</a>
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://developers.facebook.com/tools/debug/" target="_blank">📘 Facebook Sharing Debugger</a>
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <a href="https://cards-dev.twitter.com/validator" target="_blank">🐦 Twitter Card Validator</a>
                </li>
            </ul>
        </div>

        <?php if (!empty($errors)): ?>
        <div class="test-section" style="background: #fed7d7; border-left: 4px solid #f56565;">
            <h2 style="color: #742a2a;">Errors</h2>
            <ul>
                <?php foreach ($errors as $page => $error): ?>
                <li><strong><?php echo htmlspecialchars($page); ?>:</strong> <?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

