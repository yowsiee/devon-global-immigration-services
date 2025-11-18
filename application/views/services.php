<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Canadian Immigration Services",
  "description": "Comprehensive Canadian immigration services including work permits, express entry, family sponsorship, business immigration, permanent residence, and visa services. Licensed RCIC consultants.",
  "url": "<?php echo Base_URL; ?>/services",
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
  }
}
</script>

<!-- Hero Section -->
<section class="services-hero-section">
    <div class="services-hero-image-wrapper">
        <img src="<?php echo Base_URL; ?>/images/services-hero.jpg" alt="Canadian Immigration Services" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="services-hero-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.3) 0%, rgba(213, 16, 43, 0.3) 100%); min-height: 400px; align-items: center; justify-content: center;">
            <div style="text-align: center; color: white;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🇨🇦</div>
                <p style="font-size: 1.5rem; font-weight: 600;">Canadian Immigration Services</p>
            </div>
        </div>
        <div class="services-hero-overlay">
            <div class="container">
                <h1 class="services-hero-title">Canadian Immigration Services</h1>
            </div>
        </div>
    </div>
</section>

<!-- Services Section (Light Gray Background) -->
<section class="services-section">
    <div class="container">
        <div class="services-section-header">
            <h2 class="services-section-title">Our Services</h2>
            <p class="services-section-subtitle">Comprehensive immigration, recruitment, and job placement services to help you achieve your global mobility goals</p>
        </div>
        <div class="services-grid">
            <!-- Service Card 1: CANADIAN IMMIGRATION -->
            <a href="<?php echo Base_URL; ?>/services/canadian-immigration" class="service-card-link">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo Base_URL; ?>/images/canadianImmigration.png" alt="Canadian Immigration" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="service-image-placeholder" style="display: none; width: 100%; height: 150px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🇨🇦</div>
                    </div>
                    <div class="service-card-header">
                        <div class="service-icon-badge">🇨🇦</div>
                        <h3 class="service-card-title">CANADIAN IMMIGRATION</h3>
                    </div>
                    <div class="service-card-content">
                        <p class="service-card-description">
                            Comprehensive immigration services to help you achieve your Canadian dreams. We provide expert guidance for all types of immigration applications, from temporary visas to permanent residence and citizenship. Our licensed RCIC consultants ensure your application is prepared accurately and submitted on time.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Service Card 2: GLOBAL TEMPORARY RESIDENT SERVICES -->
            <a href="<?php echo Base_URL; ?>/services/global-temporary-resident" class="service-card-link">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo Base_URL; ?>/images/global-temporary-resident.jpg" alt="Global Temporary Resident Services" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="service-image-placeholder" style="display: none; width: 100%; height: 150px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🌐</div>
                    </div>
                    <div class="service-card-header">
                        <div class="service-icon-badge">🌐</div>
                        <h3 class="service-card-title">GLOBAL TEMPORARY RESIDENT SERVICES</h3>
                    </div>
                    <div class="service-card-content">
                        <p class="service-card-description">
                            Expert assistance with temporary resident visas, tourist visas, business visas, and Electronic Travel Authorization documents for countries around the world. We help you navigate the complex requirements and documentation needed for temporary travel applications.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Service Card 3: CITIZENSHIP BY INVESTMENT -->
            <a href="<?php echo Base_URL; ?>/services/citizenship-by-investment" class="service-card-link">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo Base_URL; ?>/images/citizenship-by-investment.jpg" alt="Citizenship by Investment" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="service-image-placeholder" style="display: none; width: 100%; height: 150px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🌍</div>
                    </div>
                    <div class="service-card-header">
                        <div class="service-icon-badge">🌍</div>
                        <h3 class="service-card-title">CITIZENSHIP BY INVESTMENT</h3>
                    </div>
                    <div class="service-card-content">
                        <p class="service-card-description">
                            Explore citizenship-by-investment programs in Antigua and Barbuda, Dominica, Grenada, St. Kitts and Nevis, and St. Lucia. These programs offer a pathway to citizenship through investment, providing visa-free travel to 144-157 countries, enhanced mobility, and international business opportunities.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Service Card 4: JOB OPPORTUNITIES -->
            <a href="<?php echo Base_URL; ?>/services/job-opportunities" class="service-card-link">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo Base_URL; ?>/images/job-opportunities.jpg" alt="Job Opportunities" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="service-image-placeholder" style="display: none; width: 100%; height: 150px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">💼</div>
                    </div>
                    <div class="service-card-header">
                        <div class="service-icon-badge">💼</div>
                        <h3 class="service-card-title">JOB OPPORTUNITIES</h3>
                    </div>
                    <div class="service-card-content">
                        <p class="service-card-description">
                            Explore J1 visa opportunities in the United States including Culinary Arts, Food and Beverage, Rooms Division, and Teaching positions. Apply for exciting work opportunities in America through the J1 exchange visitor program.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Service Card 5: GLOBAL RECRUITMENT -->
            <a href="http://www.ttworktravel.com/" target="_blank" rel="noopener noreferrer" class="service-card-link">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo Base_URL; ?>/images/global-recruitment.jpg" alt="Global Recruitment" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="service-image-placeholder" style="display: none; width: 100%; height: 150px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">👥</div>
                    </div>
                    <div class="service-card-header">
                        <div class="service-icon-badge">👥</div>
                        <h3 class="service-card-title">GLOBAL RECRUITMENT</h3>
                    </div>
                    <div class="service-card-content">
                        <p class="service-card-description">
                            We help employers find and recruit qualified international talent. Our recruitment services include candidate sourcing, screening, immigration support, and assistance with work permit applications for foreign workers.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-content">
            <h2 class="services-cta-title">Ready to Start Your Immigration Journey?</h2>
            <p class="services-cta-text">Get expert guidance from licensed RCIC consultants. Book your free consultation today.</p>
            <div class="services-cta-buttons">
                <a href="<?php echo Base_URL; ?>/contact" class="btn-hero-primary">FREE CONSULTATION</a>
                <a href="tel:3473247220" class="btn-hero-secondary">CALL NOW: 347-324-7220</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>




