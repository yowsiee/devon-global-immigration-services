<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8') : (isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' - Devon Global Immigration Services' : 'Devon Global Immigration Services | Licensed Canadian Immigration Consultants Toronto'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"></noscript>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="icon" type="image/png" href="<?php echo Base_URL; ?>/images/logo.png">
    <link rel="apple-touch-icon" href="<?php echo Base_URL; ?>/images/logo.png">
    <?php if(isset($seo)): ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($seo['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    <?php if(isset($seo['url'])): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($seo['url'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    
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
    <!-- Top Contact Bar -->
    <section class="top-contact-bar" itemscope itemtype="https://schema.org/LocalBusiness">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="top-contact-left">
                <!-- Logo removed from top section -->
            </div>
            <div class="top-contact-right" style="display: flex; align-items: center; gap: 24px;">
                <a href="mailto:canada@ttworktravel.com" class="top-contact-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--navy);">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    canada@ttworktravel.com
                </a>
                <a href="tel:3473247220" class="top-contact-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--navy);">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    347-324-7220
                </a>
                <a href="<?php echo Base_URL; ?>/contact" class="btn-top-assessment" style="background: var(--red); color: var(--white); padding: 8px 20px; border-radius: 6px; text-decoration: none; font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">FREE ASSESSMENT</a>
            </div>
        </div>
    </section>

    <!-- Main Navigation -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="nav-brand">
                <a href="<?php echo Base_URL; ?>" aria-label="Devon Global Immigration Services Home" style="text-decoration: none; display: flex; align-items: center;">
                    <img src="<?php echo Base_URL; ?>/images/logo.png" alt="Devon Global Immigration Services Logo" style="height: 45px; width: auto; display: block;" onerror="this.style.display='none';">
                </a>
            </div>
            
            <ul class="nav-menu" id="navMenu">
                <li>
                    <a href="<?php echo Base_URL; ?>" class="nav-link" aria-label="Home">HOME</a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/about" class="nav-link" aria-label="About Us">ABOUT US</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link" aria-label="Services" aria-haspopup="true" aria-expanded="false" role="button" tabindex="0" id="servicesDropdown">
                        SERVICES
                        <span class="dropdown-arrow" aria-hidden="true">▼</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo Base_URL; ?>/services/canadian-immigration" class="nav-link" aria-label="Canadian Immigration">Canadian Immigration</a>
                        </li>
                        <li>
                            <a href="<?php echo Base_URL; ?>/services/global-temporary-resident" class="nav-link" aria-label="Global Temporary Resident Services">Global Temporary Resident Services</a>
                        </li>
                        <li>
                            <a href="<?php echo Base_URL; ?>/services/citizenship-by-investment" class="nav-link" aria-label="Citizenship by Investment">Citizenship by Investment</a>
                        </li>
                        <li>
                            <a href="<?php echo Base_URL; ?>/services/job-opportunities" class="nav-link" aria-label="Job Opportunities">Job Opportunities</a>
                        </li>
                        <li>
                            <a href="http://www.ttworktravel.com/" target="_blank" rel="noopener noreferrer" class="nav-link" aria-label="Global Recruitment">Global Recruitment</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/events" class="nav-link" aria-label="Events">EVENTS</a>
                </li>
                <li>
                    <a href="<?php echo Base_URL; ?>/newsletters" class="nav-link" aria-label="Newsletters">NEWSLETTERS</a>
                </li>
            </ul>
            
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" aria-expanded="false" type="button" style="display: none;">
                <span class="sr-only">Menu</span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
    <main>
