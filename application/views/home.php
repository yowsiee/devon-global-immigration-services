<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="hero" aria-label="Hero Section">
    <div class="container hero-container">
        <div class="hero-content">
            <p class="hero-subtitle" role="text">TRUSTED IT SOLUTIONS PARTNER</p>
            <h1 class="hero-title">
                Professional Web Development & IT Solutions<br>
                That Drive Business Growth
            </h1>
            <p class="hero-description">
                Transform your business with cutting-edge web development, mobile applications, API integrations, and business process automation. We deliver scalable, secure, and performance-optimized solutions tailored to your needs.
            </p>
            <div class="hero-buttons">
                <a href="<?php echo Base_URL; ?>/services" class="btn btn-primary" aria-label="View our services">Explore Services</a>
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-secondary" aria-label="Contact us for a consultation">Get Free Consultation</a>
            </div>
        </div>
        <div class="hero-graphics">
            <div class="glass-card main-card">
                <div class="card-icon" aria-hidden="true">💻</div>
                <h3 class="card-title">Digital Excellence</h3>
                <p class="card-text">Modern solutions built with cutting-edge technology</p>
            </div>
            <div class="code-snippet snippet-1" aria-hidden="true">
                <code>&lt;innovation /&gt;</code>
            </div>
            <div class="code-snippet snippet-2" aria-hidden="true">
                <code>const success = true;</code>
            </div>
            <div class="code-snippet snippet-3" aria-hidden="true">
                <code>return excellence;</code>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" aria-labelledby="services-heading">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <p class="section-label">OUR SERVICES</p>
            <h2 id="services-heading" class="section-title">Comprehensive IT Solutions for Modern Businesses</h2>
            <p class="section-subtitle">From web development to business automation, we provide end-to-end digital solutions that help your business thrive in the digital age.</p>
        </div>
        <div class="services-grid">
            <?php if(!empty($services)): ?>
                <?php foreach(array_slice($services, 0, 6) as $service): ?>
                <article class="service-card">
                    <div class="service-card-header <?php echo htmlspecialchars($service['gradient'] ?? 'gradient-purple', ENT_QUOTES, 'UTF-8'); ?>"></div>
                    <div class="service-card-body">
                        <div class="service-icon-wrapper <?php echo htmlspecialchars($service['iconColor'] ?? 'icon-purple', ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="service-icon" aria-hidden="true"><?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                        </div>
                        <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php if(isset($service['tags']) && is_array($service['tags']) && !empty($service['tags'])): ?>
                            <div class="service-tags" style="margin-top: 1rem;">
                                <?php foreach(array_slice($service['tags'], 0, 3) as $tag): ?>
                                    <span class="service-tag"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo Base_URL; ?>/services" class="btn btn-service" style="margin-top: 1.5rem; display: inline-block;">Learn More</a>
                    </div>
                </article>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback services if JSON not available -->
                <article class="service-card">
                    <div class="service-card-header gradient-purple"></div>
                    <div class="service-card-body">
                        <div class="service-icon-wrapper icon-purple">
                            <div class="service-icon" aria-hidden="true">&lt;/&gt;</div>
                        </div>
                        <h3>Web Development</h3>
                        <p>Custom websites and web applications built with modern technologies. We create responsive, SEO-optimized solutions that drive business growth.</p>
                        <a href="<?php echo Base_URL; ?>/services" class="btn btn-service" style="margin-top: 1.5rem; display: inline-block;">Learn More</a>
                    </div>
                </article>
            <?php endif; ?>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?php echo Base_URL; ?>/services" class="btn btn-primary">View All Services</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-section" aria-labelledby="why-heading">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <p class="section-label">WHY CHOOSE US</p>
            <h2 id="why-heading" class="section-title">Your Trusted Technology Partner</h2>
            <p class="section-subtitle">We combine technical expertise with business acumen to deliver solutions that drive real results.</p>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-purple">
                    <div class="feature-icon" aria-hidden="true">💡</div>
                </div>
                <h3>Strategic Approach</h3>
                <p>Every project begins with understanding your business goals, target audience, and market position. We don't just build—we strategize for success.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-pink">
                    <div class="feature-icon" aria-hidden="true">🎨</div>
                </div>
                <h3>User-Centered Design</h3>
                <p>Beautiful design that converts. We create intuitive user experiences that guide visitors toward your goals, whether that's making a purchase or engaging with content.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-blue">
                    <div class="feature-icon" aria-hidden="true">🚀</div>
                </div>
                <h3>Performance Optimized</h3>
                <p>Fast, scalable, and secure applications built with clean, maintainable code. We optimize for speed, SEO, and user experience to maximize your ROI.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-green">
                    <div class="feature-icon" aria-hidden="true">🔒</div>
                </div>
                <h3>Enterprise Security</h3>
                <p>Security-first development with industry best practices. We protect your data and your customers' information with robust security measures.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-orange">
                    <div class="feature-icon" aria-hidden="true">📱</div>
                </div>
                <h3>Mobile-First Design</h3>
                <p>Responsive designs that work flawlessly across all devices. We ensure your website looks and performs perfectly on smartphones, tablets, and desktops.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper icon-teal">
                    <div class="feature-icon" aria-hidden="true">🛟</div>
                </div>
                <h3>Ongoing Support</h3>
                <p>Our relationship doesn't end at launch. We provide 24/7 support, maintenance, and updates to keep your digital presence running smoothly.</p>
            </article>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section" aria-labelledby="process-heading" style="padding: 5rem 0; background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <p class="section-label">OUR PROCESS</p>
            <h2 id="process-heading" class="section-title">How We Deliver Excellence</h2>
            <p class="section-subtitle">A proven methodology that ensures your project is delivered on time, on budget, and exceeds expectations.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <article style="text-align: center; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4c51bf 0%, #5a67d8 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; font-weight: bold; color: white;">1</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #2d3748;">Discovery & Planning</h3>
                <p style="color: #718096; line-height: 1.6;">We start by understanding your business, goals, and requirements to create a comprehensive project plan.</p>
            </article>
            <article style="text-align: center; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #b83280 0%, #c53030 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; font-weight: bold; color: white;">2</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #2d3748;">Design & Development</h3>
                <p style="color: #718096; line-height: 1.6;">Our team creates beautiful designs and builds robust solutions using the latest technologies and best practices.</p>
            </article>
            <article style="text-align: center; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #3182ce 0%, #2c5282 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; font-weight: bold; color: white;">3</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #2d3748;">Testing & Quality Assurance</h3>
                <p style="color: #718096; line-height: 1.6;">Rigorous testing ensures your solution is bug-free, secure, and performs optimally across all platforms.</p>
            </article>
            <article style="text-align: center; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #38a169 0%, #2f855a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; font-weight: bold; color: white;">4</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #2d3748;">Launch & Support</h3>
                <p style="color: #718096; line-height: 1.6;">We handle deployment and provide ongoing support to ensure your solution continues to deliver value.</p>
            </article>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="technologies-section" aria-labelledby="tech-heading" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <p class="section-label">TECHNOLOGIES WE USE</p>
            <h2 id="tech-heading" class="section-title">Built with Modern, Proven Technologies</h2>
            <p class="section-subtitle">We leverage industry-leading tools and frameworks to build scalable, maintainable solutions.</p>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; align-items: center;">
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">HTML5 & CSS3</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">JavaScript & React</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">PHP & Laravel</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">PowerApps & Power Automate</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">SQL Server</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">RESTful APIs</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">Azure & Cloud Services</div>
            <div style="padding: 1.5rem 2rem; background: #f7fafc; border-radius: 8px; font-weight: 600; color: #2d3748;">Power BI</div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section" aria-label="Call to Action">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Transform Your Business?</h2>
            <p class="cta-text">Let's discuss how our IT solutions can help you achieve your business goals. Get a free consultation and discover what's possible for your business.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-cta" aria-label="Contact us for a free consultation">Get Free Consultation</a>
                <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-secondary" aria-label="View our portfolio of work">View Our Work</a>
            </div>
        </div>
    </div>
</section>

<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget" role="button" aria-label="Open chat widget" tabindex="0">
    <div class="chat-notification" aria-hidden="true"></div>
    <div class="chat-icon" aria-hidden="true">💬</div>
    <div class="chat-text">
        <strong>Talk with Us</strong>
        <span>We're here to help!</span>
    </div>
</div>

<!-- Scroll to Top Button -->
<div class="scroll-top" id="scrollTop" role="button" aria-label="Scroll to top" tabindex="0">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
        <path d="M10 15V5M5 10L10 5L15 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
