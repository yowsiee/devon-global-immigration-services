<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="webdev-hero">
    <div class="container webdev-hero-container">
        <div class="webdev-hero-content">
            <div class="webdev-hero-text">
                <div class="webdev-hero-label">APPLICATION SUPPORT & MAINTENANCE</div>
                <h1 class="webdev-hero-title">Keep Your Applications<br>Running Smoothly</h1>
                <p class="webdev-hero-description">
                    Comprehensive support and maintenance services to ensure your applications stay secure, updated, and performing at their best. From website care plans to system administration, we've got you covered.
                </p>
                <div class="webdev-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/contact" class="btn btn-webdev-outline" data-open-consultation>Get Started</a>
                    <a href="<?php echo Base_URL; ?>/services" class="btn btn-webdev-filled">View All Services</a>
                </div>
            </div>
            <div class="webdev-hero-graphics">
                <div class="webdev-browser-card">
                    <div class="browser-window">
                        <div class="browser-header">
                            <div class="browser-controls">
                                <span class="control-dot control-red"></span>
                                <span class="control-dot control-yellow"></span>
                                <span class="control-dot control-green"></span>
                            </div>
                        </div>
                        <div class="browser-content">
                            <div class="browser-content-line"></div>
                            <div class="browser-content-line short"></div>
                            <div class="browser-content-line"></div>
                            <div class="browser-content-block"></div>
                            <div class="browser-content-line"></div>
                            <div class="browser-content-line short"></div>
                        </div>
                    </div>
                    <div class="webdev-browser-label">
                        <div class="browser-label-title">Managed & Maintained</div>
                        <div class="browser-label-tech">24/7 Monitoring • Updates • Security</div>
                    </div>
                </div>
                <div class="webdev-icon webdev-icon-search">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </div>
                <div class="webdev-icon webdev-icon-mobile">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Code Snippets -->
    <div class="webdev-code-snippets">
        <div class="code-snippet code-snippet-1">
            <code>monitor() {<br>&nbsp;&nbsp;checkHealth();<br>&nbsp;&nbsp;updateSystem();<br>}</code>
        </div>
        <div class="code-snippet code-snippet-2">
            <code>security: enabled<br>backup: daily</code>
        </div>
        <div class="code-snippet code-snippet-3">
            <code>function maintain() {<br>&nbsp;&nbsp;return optimal;<br>}</code>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="service-detail-section">
    <div class="container">
        <div class="service-detail-header">
            <div class="service-detail-icon">🛠️</div>
            <h2 class="service-detail-title">What We Offer</h2>
        </div>
        <div class="service-features-grid">
            <div class="service-feature-card">
                <div class="service-feature-icon">🌐</div>
                <h3>Website Care Plans</h3>
                <p>Comprehensive monthly maintenance packages including updates, backups, security monitoring, and performance optimization.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">🔒</div>
                <h3>Security Monitoring</h3>
                <p>24/7 security monitoring, malware scanning, vulnerability assessments, and rapid incident response.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">💾</div>
                <h3>Backup & Recovery</h3>
                <p>Automated daily backups with secure off-site storage and quick recovery options to minimize downtime.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">⚡</div>
                <h3>Performance Optimization</h3>
                <p>Regular performance audits, speed optimization, database tuning, and caching strategies to keep your site fast.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">🔄</div>
                <h3>Updates & Patches</h3>
                <p>Timely updates for CMS, plugins, frameworks, and dependencies to ensure compatibility and security.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">📊</div>
                <h3>System Administration</h3>
                <p>Server management, configuration, monitoring, and optimization for optimal application performance.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">🎧</div>
                <h3>Technical Support</h3>
                <p>Responsive support for bug fixes, troubleshooting, and technical assistance when you need it most.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">📈</div>
                <h3>Uptime Monitoring</h3>
                <p>Continuous uptime monitoring with instant alerts and rapid response to ensure maximum availability.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="service-approach-section">
    <div class="container">
        <div class="service-detail-header">
            <div class="service-detail-icon">⚙️</div>
            <h2 class="service-detail-title">Our Maintenance Process</h2>
        </div>
        <p class="service-approach-intro">
            We believe proactive maintenance is key to long-term success.<br>
            Our structured approach ensures your applications remain secure, performant, and up-to-date:
        </p>
        <div class="service-process-grid">
            <div class="service-process-item">
                <div class="process-number">1</div>
                <h3>Initial Assessment</h3>
                <p>Comprehensive audit of your current setup, identifying areas for improvement and potential risks.</p>
            </div>
            <div class="service-process-item">
                <div class="process-number">2</div>
                <h3>Custom Care Plan</h3>
                <p>Tailored maintenance plan based on your specific needs, budget, and application requirements.</p>
            </div>
            <div class="service-process-item">
                <div class="process-number">3</div>
                <h3>Proactive Monitoring</h3>
                <p>24/7 monitoring of performance, security, and uptime with automated alerts and reporting.</p>
            </div>
            <div class="service-process-item">
                <div class="process-number">4</div>
                <h3>Regular Maintenance</h3>
                <p>Scheduled updates, backups, optimizations, and security patches applied systematically.</p>
            </div>
            <div class="service-process-item">
                <div class="process-number">5</div>
                <h3>Ongoing Support</h3>
                <p>Quick response to issues, regular reporting, and continuous optimization to keep everything running smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="service-benefits-section">
    <div class="container">
        <div class="service-detail-header">
            <div class="service-detail-icon">🚀</div>
            <h2 class="service-detail-title">Why Choose Our Support Services</h2>
        </div>
        <div class="service-benefits-grid">
            <div class="service-benefit-item">
                <div class="benefit-icon">⏱️</div>
                <h3>Rapid Response</h3>
                <p>Quick turnaround times for support requests and emergency issues.</p>
            </div>
            <div class="service-benefit-item">
                <div class="benefit-icon">🔐</div>
                <h3>Security First</h3>
                <p>Proactive security measures to protect your applications and data.</p>
            </div>
            <div class="service-benefit-item">
                <div class="benefit-icon">📊</div>
                <h3>Transparent Reporting</h3>
                <p>Regular reports on performance, uptime, and maintenance activities.</p>
            </div>
            <div class="service-benefit-item">
                <div class="benefit-icon">💰</div>
                <h3>Cost-Effective</h3>
                <p>Prevent costly downtime and security breaches with proactive maintenance.</p>
            </div>
            <div class="service-benefit-item">
                <div class="benefit-icon">🎯</div>
                <h3>Expert Team</h3>
                <p>Experienced professionals who understand your technology stack.</p>
            </div>
            <div class="service-benefit-item">
                <div class="benefit-icon">🔄</div>
                <h3>Scalable Solutions</h3>
                <p>Maintenance plans that grow with your business needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Plans Section -->
<section class="service-tech-section">
    <div class="container">
        <div class="service-detail-header">
            <div class="service-detail-icon">📋</div>
            <h2 class="service-detail-title">Maintenance Service Plans</h2>
        </div>
        <div class="service-features-grid" style="max-width: 1200px; margin: 0 auto;">
            <div class="service-feature-card">
                <div class="service-feature-icon">⭐</div>
                <h3>Basic Care Plan</h3>
                <p>Essential maintenance including monthly updates, backups, and basic security monitoring. Perfect for small websites.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">⭐⭐</div>
                <h3>Professional Care Plan</h3>
                <p>Comprehensive maintenance with weekly updates, daily backups, security monitoring, and performance optimization. Ideal for business websites.</p>
            </div>
            <div class="service-feature-card">
                <div class="service-feature-icon">⭐⭐⭐</div>
                <h3>Enterprise Care Plan</h3>
                <p>Full-service maintenance with 24/7 monitoring, priority support, advanced security, and custom optimizations. For mission-critical applications.</p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 2rem; color: #666; font-size: 1.1rem;">
            All plans are customizable to meet your specific needs. <a href="<?php echo Base_URL; ?>/contact" style="color: #007bff; text-decoration: underline;">Contact us</a> to discuss the best plan for your application.
        </p>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta-section">
    <div class="container">
        <div class="service-cta-content">
            <h2 class="service-cta-title">Keep Your Applications Running Smoothly</h2>
            <p class="service-cta-text">
                Don't wait for problems to arise. Proactive maintenance ensures your applications stay secure, performant, and reliable.<br>
                Let us handle the technical details so you can focus on growing your business.
            </p>
            <div class="service-cta-buttons">
                <a href="<?php echo Base_URL; ?>/services" class="btn btn-cta-outline">Explore All Services</a>
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-cta-filled" data-open-consultation>Get a Care Plan Quote</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>



