<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8') : (isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' - Dev\'s Domain' : 'Dev\'s Domain - Professional IT Solutions'); ?></title>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <?php if(isset($seo)): ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($seo['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($seo['url'] ?? Base_URL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seo['image'] ?? Base_URL . '/images/og-image.jpg', ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($seo['url'] ?? Base_URL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($seo['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($seo['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($seo['image'] ?? Base_URL . '/images/og-image.jpg', ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="container">
            <div class="nav-brand">
                <a href="<?php echo Base_URL; ?>" aria-label="Dev's Domain Home">
                    <div class="logo-icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="50" height="50" rx="12" fill="url(#gradient)"/>
                            <defs>
                                <linearGradient id="gradient" x1="0" y1="0" x2="50" y2="50">
                                    <stop offset="0%" stop-color="#4c51bf"/>
                                    <stop offset="100%" stop-color="#5a67d8"/>
                                </linearGradient>
                            </defs>
                            <text x="25" y="32" font-size="24" font-weight="bold" fill="white" text-anchor="middle">DD</text>
                        </svg>
                    </div>
                    <span class="brand-dev">Dev's</span>
                    <span class="brand-domain">Domain</span>
                </a>
            </div>
            
            <ul class="nav-menu" id="navMenu">
                <li>
                    <a href="<?php echo Base_URL; ?>" class="nav-link" aria-label="Home">
                        <span class="nav-icon">🏠</span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/about" class="nav-link" aria-label="About Us">
                        <span class="nav-icon">ℹ️</span>
                        <span class="nav-text">About</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/services" class="nav-link" aria-label="Services">
                        <span class="nav-icon">⚙️</span>
                        <span class="nav-text">Services</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/portfolio" class="nav-link" aria-label="Portfolio">
                        <span class="nav-icon">💼</span>
                        <span class="nav-text">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/contact" class="nav-link" aria-label="Contact">
                        <span class="nav-icon">✉️</span>
                        <span class="nav-text">Contact</span>
                    </a>
                </li>
            </ul>
            
            <a href="<?php echo Base_URL; ?>/contact" class="btn-book" aria-label="Book a consultation">
                <span>Book Consultation</span>
            </a>
            
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
    <main>
