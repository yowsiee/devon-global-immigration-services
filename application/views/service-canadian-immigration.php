<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Canadian Immigration Services",
  "description": "Comprehensive Canadian immigration services including work permits, express entry, family sponsorship, business immigration, permanent residence, and visa services. Licensed RCIC consultants in Toronto.",
  "url": "<?php echo Base_URL; ?>/services/canadian-immigration",
  "provider": {
    "@type": "LocalBusiness",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
    "logo": "<?php echo Base_URL; ?>/images/logo.png",
    "telephone": "347-324-7220",
    "email": "canada@ttworktravel.com"
  },
  "serviceType": "Immigration Services",
  "areaServed": {
    "@type": "Country",
    "name": "Canada"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo Base_URL; ?>"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Services",
        "item": "<?php echo Base_URL; ?>/services"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Canadian Immigration",
        "item": "<?php echo Base_URL; ?>/services/canadian-immigration"
      }
    ]
  }
}
</script>

<!-- Hero Section with Banner -->
<section class="ci-hero-banner">
    <div class="ci-hero-banner-image">
        <img src="<?php echo Base_URL; ?>/images/canadianImmigrationServices_banner.png" alt="Canadian Immigration Services" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="ci-hero-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.8) 0%, rgba(213, 16, 43, 0.6) 100%); min-height: 500px; align-items: center; justify-content: center;">
            <div style="text-align: center; color: white;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🇨🇦</div>
                <p style="font-size: 2rem; font-weight: 700;">Canadian Immigration Services</p>
            </div>
        </div>
    </div>
    <div class="ci-hero-content">
        <div class="container">
            <div class="ci-hero-text">
                <span class="ci-hero-badge">CANADIAN IMMIGRATION</span>
                <h1 class="ci-hero-title">Your Pathway to Canada Starts Here</h1>
                <p class="ci-hero-description">
                    Expert guidance from licensed RCIC consultants. From work permits to permanent residence, 
                    we help you navigate every step of your Canadian immigration journey.
                </p>
                <div class="ci-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/contact" class="ci-btn-primary">FREE CONSULTATION</a>
                    <a href="#services" class="ci-btn-secondary">EXPLORE SERVICES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Image & Intro Section -->
<section class="ci-intro-section">
    <div class="container">
        <div class="ci-intro-grid">
            <div class="ci-intro-image-wrapper">
                <div class="ci-intro-image">
                    <img src="<?php echo Base_URL; ?>/images/canadianImmigration.png" alt="Canadian Immigration" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-intro-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); min-height: 400px; align-items: center; justify-content: center; font-size: 4rem; border-radius: 16px;">🇨🇦</div>
                </div>
            </div>
            <div class="ci-intro-content">
                <h2 class="ci-section-title">Why Choose Our Canadian Immigration Services?</h2>
                <p class="ci-intro-text">
                    At Devon Global Immigration Services, we combine years of experience with personalized service 
                    to help you achieve your Canadian immigration goals. Our licensed RCIC consultants are committed 
                    to providing expert guidance throughout your entire journey.
                </p>
                <div class="ci-features-list">
                    <div class="ci-feature-item">
                        <div class="ci-feature-icon">✓</div>
                        <div class="ci-feature-text">
                            <strong>Licensed RCIC Consultants</strong>
                            <p>Regulated professionals with up-to-date knowledge</p>
                        </div>
                    </div>
                    <div class="ci-feature-item">
                        <div class="ci-feature-icon">✓</div>
                        <div class="ci-feature-text">
                            <strong>High Success Rate</strong>
                            <p>Proven track record of successful applications</p>
                        </div>
                    </div>
                    <div class="ci-feature-item">
                        <div class="ci-feature-icon">✓</div>
                        <div class="ci-feature-text">
                            <strong>Personalized Service</strong>
                            <p>Tailored guidance for your unique situation</p>
                        </div>
                    </div>
                    <div class="ci-feature-item">
                        <div class="ci-feature-icon">✓</div>
                        <div class="ci-feature-text">
                            <strong>End-to-End Support</strong>
                            <p>From application to settlement in Canada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="ci-services-section" id="services">
    <div class="container">
        <div class="ci-services-header">
            <h2 class="ci-section-title-large">Our Comprehensive Immigration Services</h2>
            <p class="ci-section-subtitle">Expert guidance for every stage of your Canadian immigration journey</p>
        </div>
        
        <div class="ci-services-grid">
            <!-- Work Permits -->
            <div class="ci-service-card">
                <div class="ci-service-image-container">
                    <img src="<?php echo Base_URL; ?>/images/workPermit.png" alt="Work Permits" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-service-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">💼</div>
                </div>
                <div class="ci-service-body">
                    <div class="ci-service-icon-badge">💼</div>
                    <div class="ci-service-number">01</div>
                    <h3 class="ci-service-title">WORK PERMITS</h3>
                    <p class="ci-service-description">
                        Navigate the work permit application process with confidence. We help skilled workers, 
                        temporary workers, and international graduates secure the right work permit for their situation.
                    </p>
                    <ul class="ci-service-list">
                        <li>Temporary work permits</li>
                        <li>Open work permits</li>
                        <li>Employer-specific permits</li>
                        <li>Work permit extensions</li>
                        <li>Post-graduation work permits</li>
                    </ul>
                </div>
            </div>

            <!-- Express Entry -->
            <div class="ci-service-card">
                <div class="ci-service-image-container">
                    <img src="<?php echo Base_URL; ?>/images/expressEntry.png" alt="Express Entry" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-service-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">⚡</div>
                </div>
                <div class="ci-service-body">
                    <div class="ci-service-icon-badge">⚡</div>
                    <div class="ci-service-number">02</div>
                    <h3 class="ci-service-title">EXPRESS ENTRY</h3>
                    <p class="ci-service-description">
                        Fast-track your permanent residence application through Canada's Express Entry system. 
                        We help optimize your CRS score and guide you through the entire process.
                    </p>
                    <ul class="ci-service-list">
                        <li>Federal Skilled Worker Program</li>
                        <li>Federal Skilled Trades Program</li>
                        <li>Canadian Experience Class</li>
                        <li>CRS score optimization</li>
                        <li>Profile creation & management</li>
                    </ul>
                </div>
            </div>

            <!-- Business Immigration -->
            <div class="ci-service-card">
                <div class="ci-service-image-container">
                    <img src="<?php echo Base_URL; ?>/images/businessImmigration.png" alt="Business Immigration" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-service-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🏢</div>
                </div>
                <div class="ci-service-body">
                    <div class="ci-service-icon-badge">🏢</div>
                    <div class="ci-service-number">03</div>
                    <h3 class="ci-service-title">BUSINESS IMMIGRATION</h3>
                    <p class="ci-service-description">
                        Start or invest in a business in Canada through various immigration programs. 
                        We help entrepreneurs and investors navigate complex requirements and applications.
                    </p>
                    <ul class="ci-service-list">
                        <li>Start-up Visa Program</li>
                        <li>Self-Employed Persons Program</li>
                        <li>Investor Programs</li>
                        <li>Provincial Business Programs</li>
                        <li>Business plan development</li>
                    </ul>
                </div>
            </div>

            <!-- Arrival Services -->
            <div class="ci-service-card">
                <div class="ci-service-image-container">
                    <img src="<?php echo Base_URL; ?>/images/arrivalServices.png" alt="Arrival Services" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-service-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">✈️</div>
                </div>
                <div class="ci-service-body">
                    <div class="ci-service-icon-badge">✈️</div>
                    <div class="ci-service-number">04</div>
                    <h3 class="ci-service-title">PRE & POST ARRIVAL SERVICES</h3>
                    <p class="ci-service-description">
                        Comprehensive support services to help you settle in Canada smoothly. From pre-arrival 
                        preparation to post-arrival settlement, we're with you every step of the way.
                    </p>
                    <ul class="ci-service-list">
                        <li>Pre-arrival orientation</li>
                        <li>Settlement planning</li>
                        <li>Document preparation</li>
                        <li>Post-arrival support</li>
                        <li>Integration assistance</li>
                    </ul>
                </div>
            </div>

            <!-- Other Visa Services -->
            <div class="ci-service-card">
                <div class="ci-service-image-container">
                    <img src="<?php echo Base_URL; ?>/images/otherVisaServices.png" alt="Other Visa Services" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="ci-service-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">📋</div>
                </div>
                <div class="ci-service-body">
                    <div class="ci-service-icon-badge">📋</div>
                    <div class="ci-service-number">05</div>
                    <h3 class="ci-service-title">OTHER VISA SERVICES</h3>
                    <p class="ci-service-description">
                        Additional visa services for all your Canadian immigration needs. Expert guidance 
                        for family sponsorship, study permits, visitor visas, and more.
                    </p>
                    <ul class="ci-service-list">
                        <li>Family Sponsorship</li>
                        <li>Study Permits</li>
                        <li>Visitor Visas</li>
                        <li>PR Card Renewal</li>
                        <li>Citizenship applications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="ci-process-section">
    <div class="container">
        <div class="ci-process-header">
            <h2 class="ci-section-title-large">Our Immigration Process</h2>
            <p class="ci-section-subtitle">A clear, step-by-step approach to your Canadian immigration journey</p>
        </div>
        <div class="ci-process-steps">
            <div class="ci-process-step">
                <div class="ci-process-icon">1</div>
                <h3>Free Consultation</h3>
                <p>Initial assessment of your eligibility and immigration goals</p>
            </div>
            <div class="ci-process-connector"></div>
            <div class="ci-process-step">
                <div class="ci-process-icon">2</div>
                <h3>Documentation</h3>
                <p>We help gather and prepare all required documents</p>
            </div>
            <div class="ci-process-connector"></div>
            <div class="ci-process-step">
                <div class="ci-process-icon">3</div>
                <h3>Application</h3>
                <p>Complete application preparation and submission</p>
            </div>
            <div class="ci-process-connector"></div>
            <div class="ci-process-step">
                <div class="ci-process-icon">4</div>
                <h3>Follow-up</h3>
                <p>Ongoing support and updates throughout the process</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="ci-cta-section">
    <div class="container">
        <div class="ci-cta-content">
            <h2 class="ci-cta-title">Ready to Start Your Canadian Journey?</h2>
            <p class="ci-cta-text">Get expert guidance from licensed RCIC consultants. Book your free consultation today.</p>
            <div class="ci-cta-buttons">
                <a href="<?php echo Base_URL; ?>/contact" class="ci-btn-primary-large">BOOK FREE CONSULTATION</a>
                <a href="<?php echo Base_URL; ?>/services" class="ci-btn-secondary-large">VIEW ALL SERVICES</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
