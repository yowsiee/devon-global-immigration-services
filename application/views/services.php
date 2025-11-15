<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container services-hero-container">
        <div class="services-hero-content">
            <div class="services-hero-text">
                <h1 class="services-hero-title">Transform Your Business with Digital Excellence</h1>
                <p class="services-hero-description">
                    We don't just build solutions - we craft digital experiences that drive real business results. 
                    From concept to execution, we're your strategic technology partner.
                </p>
                <div class="services-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-hero-outline">View Our Work</a>
                    <a href="<?php echo Base_URL; ?>/contact" class="btn btn-hero-filled">Get Free Quote</a>
                </div>
            </div>
            <div class="services-hero-graphics">
                <div class="services-glass-card main-services-card">
                    <div class="services-card-icon">⚙️</div>
                </div>
                <div class="services-glass-card services-card-1">
                    <div class="services-card-icon">💳</div>
                </div>
                <div class="services-glass-card services-card-2">
                    <div class="services-card-icon">🔧</div>
                </div>
                <div class="services-glass-card services-card-3">
                    <div class="services-card-icon">💰</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Solutions Section -->
<section class="digital-solutions-section">
    <div class="container">
        <div class="expertise-badge">Our Expertise</div>
        <h2 class="solutions-section-title">Digital Solutions That Drive Results</h2>
        <p class="solutions-section-subtitle">Each service is crafted to solve specific business challenges and deliver measurable outcomes.</p>
        <div class="solutions-grid">
            <?php foreach($services as $service): ?>
            <div class="solution-card">
                <div class="solution-card-header <?php echo htmlspecialchars($service['gradient'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="solution-icon-wrapper <?php echo htmlspecialchars($service['iconColor'], ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="solution-icon"><?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                    </div>
                </div>
                <div class="solution-card-body">
                    <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="solution-tags">
                        <?php foreach($service['tags'] as $tag): ?>
                        <span class="solution-tag"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php endforeach; ?>
                    </div>
                           <?php 
                           // Generate service URL based on service key
                           $serviceKey = isset($service['key']) ? $service['key'] : strtolower(str_replace([' ', '&'], ['-', ''], $service['title']));
                           $serviceUrl = Base_URL . '/services/' . str_replace('_', '-', $serviceKey);
                           ?>
                           <a href="<?php echo $serviceUrl; ?>" class="btn <?php echo htmlspecialchars($service['buttonColor'], ENT_QUOTES, 'UTF-8'); ?>">Explore Service</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="why-choose-section">
    <div class="container">
        <h2 class="why-choose-title">Why Choose Dev's Domain?</h2>
        <p class="why-choose-subtitle">We combine technical expertise with business acumen to deliver solutions that drive real results.</p>
        <div class="benefits-grid">
            <?php foreach($benefits as $benefit): ?>
            <div class="benefit-card">
                <div class="benefit-icon-wrapper <?php echo htmlspecialchars($benefit['iconColor'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="benefit-icon"><?php echo htmlspecialchars($benefit['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
                <h3><?php echo htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($benefit['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Ready to Transform CTA Section -->
<section class="transform-cta-section">
    <div class="container">
        <h2 class="transform-cta-title">Ready to Transform Your Business?</h2>
        <p class="transform-cta-subtitle">Let's discuss how our services can help you achieve your goals. Book a free consultation today.</p>
        <a href="#" class="btn btn-transform-cta" data-open-consultation>Book Consultation</a>
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
