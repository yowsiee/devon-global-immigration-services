<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container services-hero-container">
        <div class="services-hero-content">
            <div class="services-hero-text">
                <h1 class="services-hero-title">We Transform Ideas Into Digital Excellence</h1>
                <p class="services-hero-description">
                    At Dev's Domain, we're more than just developers. We're your strategic partners in digital transformation, 
                    helping businesses navigate the complex world of technology with innovative solutions and proven expertise.
                </p>
                <div class="services-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-hero-outline">View Our Work</a>
                    <a href="<?php echo Base_URL; ?>/contact" class="btn btn-hero-filled">Get In Touch</a>
                </div>
            </div>
            <div class="services-hero-graphics">
                <div class="services-glass-card main-services-card">
                    <div class="services-card-icon">🚀</div>
                </div>
                <div class="services-glass-card services-card-1">
                    <div class="services-card-icon">💼</div>
                </div>
                <div class="services-glass-card services-card-2">
                    <div class="services-card-icon">🎯</div>
                </div>
                <div class="services-glass-card services-card-3">
                    <div class="services-card-icon">🌟</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="approach-section">
    <div class="container">
        <h2 class="approach-title">Our Approach</h2>
        <div class="approach-content">
            <p>
                We believe in a collaborative, client-centered approach that puts your business goals at the forefront. 
                Every project begins with understanding your unique challenges, market position, and vision for growth.
            </p>
            <p>
                Our methodology combines strategic thinking with technical excellence, ensuring that every solution we deliver 
                not only meets your immediate needs but also scales with your business for long-term success.
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Dev's Domain Section -->
<section class="why-choose-section">
    <div class="container">
        <h2 class="why-choose-title">Why Choose Dev's Domain</h2>
        <p class="why-choose-tagline">We don't just build technology — we build possibilities.</p>
        <div class="why-choose-grid">
            <div class="why-choose-card">
                <div class="why-choose-icon icon-blue">
                    <span>🧩</span>
                </div>
                <h3>Tailored Solutions</h3>
                <p>Every business is unique. We create custom solutions that fit your specific needs, goals, and budget, ensuring maximum ROI and long-term value.</p>
            </div>
            <div class="why-choose-card">
                <div class="why-choose-icon icon-orange">
                    <span>⭐</span>
                </div>
                <h3>Proven Expertise</h3>
                <p>With years of experience across industries, our team brings deep technical knowledge and best practices to every project we undertake.</p>
            </div>
            <div class="why-choose-card">
                <div class="why-choose-icon icon-blue-link">
                    <span>🔗</span>
                </div>
                <h3>Seamless Technology</h3>
                <p>We integrate cutting-edge technologies seamlessly into your existing infrastructure, minimizing disruption while maximizing efficiency.</p>
            </div>
            <div class="why-choose-card">
                <div class="why-choose-icon icon-gradient">
                    <span>❤️</span>
                </div>
                <h3>Client-Centered Approach</h3>
                <p>Your success is our priority. We work closely with you throughout the entire process, from initial consultation to ongoing support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Ready to Transform Section -->
<section class="transform-section">
    <div class="container">
        <div class="transform-content">
            <h2 class="transform-title">Ready to Transform Your Business?</h2>
            <p class="transform-text">Let's discuss how we can help you achieve your digital goals and drive growth for your business.</p>
            <div class="transform-buttons">
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-transform-outline">Talk to Us</a>
                <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-transform-filled">View Our Work</a>
            </div>
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
