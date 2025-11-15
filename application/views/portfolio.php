<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container services-hero-container">
        <div class="services-hero-content">
            <div class="services-hero-text">
                <h1 class="services-hero-title">Projects That Speak For Themselves</h1>
                <p class="services-hero-description">
                    Explore our portfolio of successful digital solutions. Each project represents our commitment 
                    to excellence and innovation in delivering results that matter.
                </p>
                <div class="services-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/services" class="btn btn-hero-outline">Our Services</a>
                    <a href="<?php echo Base_URL; ?>/contact" class="btn btn-hero-filled">Start a Project</a>
                </div>
            </div>
            <div class="services-hero-graphics">
                <div class="services-glass-card main-services-card">
                    <div class="services-card-icon">💼</div>
                </div>
                <div class="services-glass-card services-card-1">
                    <div class="services-card-icon">🎨</div>
                </div>
                <div class="services-glass-card services-card-2">
                    <div class="services-card-icon">📱</div>
                </div>
                <div class="services-glass-card services-card-3">
                    <div class="services-card-icon">🌐</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($section_settings['show_featured_categories'] ?? true): ?>
<!-- Featured Project Categories Section -->
<section class="portfolio-categories-section">
    <div class="container">
        <h2 class="portfolio-section-title">Featured Project Categories</h2>
        <p class="portfolio-section-subtitle">Discover our expertise across four key areas of digital transformation.</p>
        <?php if(!empty($categories)): ?>
        <div class="categories-grid">
            <?php foreach($categories as $category): ?>
            <div class="category-card">
                <div class="category-card-header <?php echo htmlspecialchars($category['gradient'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="category-icon-wrapper <?php echo htmlspecialchars($category['iconBg'], ENT_QUOTES, 'UTF-8'); ?>">
                        <span class="category-icon"><?php echo htmlspecialchars($category['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
                <div class="category-card-body">
                    <h3><?php echo htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($category['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="category-projects">
                        <strong>Featured Projects:</strong>
                        <ul>
                            <?php foreach($category['projects'] as $project): ?>
                            <li><?php echo htmlspecialchars($project, ENT_QUOTES, 'UTF-8'); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="category-technologies">
                        <?php foreach($category['technologies'] as $tech): ?>
                        <span class="tech-tag"><?php echo htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-category">View Projects</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p style="text-align: center; color: var(--text-light); padding: 2rem 0;">No categories available at this time.</p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if($section_settings['show_featured_projects'] ?? true): ?>
<!-- Featured Projects Section -->
<section class="featured-projects-section">
    <div class="container">
        <h2 class="portfolio-section-title">Featured Projects</h2>
        <p class="portfolio-section-subtitle">Showcasing our best work across different technologies and industries.</p>
        <?php if(!empty($featured_projects)): ?>
        <div class="featured-projects-grid">
            <?php foreach($featured_projects as $project): ?>
            <div class="featured-project-card">
                <div class="project-card-header <?php echo htmlspecialchars($project['headerBg'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="project-icon"><?php echo htmlspecialchars($project['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
                <div class="project-card-body">
                    <h3><?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="project-technologies">
                        <?php foreach($project['technologies'] as $tech): ?>
                        <span class="tech-tag"><?php echo htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-project">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p style="text-align: center; color: var(--text-light); padding: 2rem 0;">No featured projects available at this time.</p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if($section_settings['show_github_portfolio'] ?? true): ?>
<!-- GitHub Portfolio Section -->
<section class="github-portfolio-section">
    <div class="container">
        <h2 class="github-section-title">GitHub Portfolio</h2>
        <p class="github-section-subtitle">Explore our organized GitHub repositories showcasing our expertise across different technologies.</p>
        <?php if(!empty($github_repos)): ?>
        <div class="github-grid">
            <?php foreach($github_repos as $repo): ?>
            <div class="github-card">
                <div class="github-icon"><?php echo htmlspecialchars($repo['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                <h3><?php echo htmlspecialchars($repo['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p style="text-align: center; color: rgba(255, 255, 255, 0.8); padding: 2rem 0;">No GitHub repositories available at this time.</p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- Ready to Start Section -->
<section class="portfolio-cta-section">
    <div class="container">
        <h2 class="portfolio-cta-title">Ready to Start Your Project?</h2>
        <p class="portfolio-cta-subtitle">Let's discuss how we can help bring your vision to life.</p>
        <div class="portfolio-cta-buttons">
            <a href="<?php echo Base_URL; ?>/contact" class="btn btn-cta-outline">Contact Us</a>
            <a href="<?php echo Base_URL; ?>/services" class="btn btn-cta-filled">View Services</a>
        </div>
    </div>
</section>

<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget">
    <div class="chat-notification"></div>
    <div class="chat-icon">💬</div>
    <div class="chat-text">
        <strong>Talk with Us</strong>
        <span>We're here to help!</span>
    </div>
</div>

<!-- Scroll to Top Button -->
<div class="scroll-top" id="scrollTop">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M10 15V5M5 10L10 5L15 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
