<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Citizenship by Investment Programs",
  "description": "Expert guidance on citizenship-by-investment programs in Antigua and Barbuda, Dominica, Grenada, St. Kitts and Nevis, and St. Lucia. Investment pathways starting from $100,000 USD with visa-free access to 144-157 countries.",
  "url": "<?php echo Base_URL; ?>/services/citizenship-by-investment",
  "provider": {
    "@type": "LocalBusiness",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
    "logo": "<?php echo Base_URL; ?>/images/logo.png",
    "telephone": "347-324-7220",
    "email": "canada@ttworktravel.com"
  },
  "serviceType": "Citizenship by Investment",
  "areaServed": [
    {
      "@type": "Country",
      "name": "Antigua and Barbuda"
    },
    {
      "@type": "Country",
      "name": "Dominica"
    },
    {
      "@type": "Country",
      "name": "Grenada"
    },
    {
      "@type": "Country",
      "name": "St. Kitts and Nevis"
    },
    {
      "@type": "Country",
      "name": "St. Lucia"
    }
  ],
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
        "name": "Citizenship by Investment",
        "item": "<?php echo Base_URL; ?>/services/citizenship-by-investment"
      }
    ]
  }
}
</script>

<!-- Hero Image Section -->
<section class="cbi-hero-image">
    <div class="cbi-hero-image-wrapper">
        <img src="<?php echo Base_URL; ?>/images/citizenship-by-investment-hero.jpg" alt="Citizenship by Investment - United Nations Flags" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="cbi-hero-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.3) 0%, rgba(213, 16, 43, 0.3) 100%); min-height: 400px; align-items: center; justify-content: center;">
            <div style="text-align: center; color: white;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🌍</div>
                <p style="font-size: 1.5rem; font-weight: 600;">Citizenship by Investment</p>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="cbi-intro-section">
    <div class="container">
        <div class="cbi-intro-content">
            <p class="cbi-intro-text">
                Investment by citizenship programs, also known as citizenship-by-investment or economic citizenship programs, 
                are initiatives offered by certain countries that allow individuals to acquire citizenship or residency rights 
                in exchange for making a significant financial contribution to the country's economy. These programs have gained 
                popularity among high-net-worth individuals seeking greater mobility, international business opportunities, and 
                increased personal security.
            </p>
        </div>
    </div>
</section>

<!-- Countries Section -->
<section class="cbi-countries-section">
    <div class="container">
        <div class="cbi-countries-grid">
            <!-- Antigua and Barbuda -->
            <div class="cbi-country-card">
                <div class="cbi-country-flag">
                    <img src="<?php echo Base_URL; ?>/images/flags/antigua-barbuda.png" alt="Antigua and Barbuda Flag" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="cbi-flag-placeholder" style="display: none; width: 80px; height: 60px; background: #E31E24; border-radius: 4px; position: relative;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 1.5rem;">🇦🇬</div>
                    </div>
                </div>
                <h3 class="cbi-country-name">ANTIGUA AND BARBUDA</h3>
                <div class="cbi-country-details">
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Starting from:</span>
                        <span class="cbi-detail-value">$100,000 USD</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Processing time:</span>
                        <span class="cbi-detail-value">3-4 months</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Investment Pathway:</span>
                        <span class="cbi-detail-value">Donation to the National Fund, Eligible Business, Approved Real Estate Project</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Visa Free Countries:</span>
                        <span class="cbi-detail-value">150</span>
                    </div>
                </div>
            </div>

            <!-- Dominica -->
            <div class="cbi-country-card">
                <div class="cbi-country-flag">
                    <img src="<?php echo Base_URL; ?>/images/flags/dominica.png" alt="Dominica Flag" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="cbi-flag-placeholder" style="display: none; width: 80px; height: 60px; background: #006B3F; border-radius: 4px; position: relative;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 1.5rem;">🇩🇲</div>
                    </div>
                </div>
                <h3 class="cbi-country-name">DOMINICA</h3>
                <div class="cbi-country-details">
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Starting from:</span>
                        <span class="cbi-detail-value">$100,000 USD</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Processing time:</span>
                        <span class="cbi-detail-value">3 months</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Investment Pathway:</span>
                        <span class="cbi-detail-value">Donation to the National Fund, Approved Real Estate Project</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Visa Free Countries:</span>
                        <span class="cbi-detail-value">144</span>
                    </div>
                </div>
            </div>

            <!-- Grenada -->
            <div class="cbi-country-card">
                <div class="cbi-country-flag">
                    <img src="<?php echo Base_URL; ?>/images/flags/grenada.png" alt="Grenada Flag" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="cbi-flag-placeholder" style="display: none; width: 80px; height: 60px; background: #CE1126; border-radius: 4px; position: relative;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 1.5rem;">🇬🇩</div>
                    </div>
                </div>
                <h3 class="cbi-country-name">GRENADA</h3>
                <div class="cbi-country-details">
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Starting from:</span>
                        <span class="cbi-detail-value">$150,000 USD</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Processing time:</span>
                        <span class="cbi-detail-value">3-4 months</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Investment Pathway:</span>
                        <span class="cbi-detail-value">Donation to the National Fund, Approved Real Estate Project</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Visa Free Countries:</span>
                        <span class="cbi-detail-value">148</span>
                    </div>
                </div>
            </div>

            <!-- St. Kitts and Nevis -->
            <div class="cbi-country-card">
                <div class="cbi-country-flag">
                    <img src="<?php echo Base_URL; ?>/images/flags/st-kitts-nevis.png" alt="St. Kitts and Nevis Flag" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="cbi-flag-placeholder" style="display: none; width: 80px; height: 60px; background: #009639; border-radius: 4px; position: relative;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 1.5rem;">🇰🇳</div>
                    </div>
                </div>
                <h3 class="cbi-country-name">ST. KITTS AND NEVIS</h3>
                <div class="cbi-country-details">
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Starting from:</span>
                        <span class="cbi-detail-value">$150,000 USD</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Processing time:</span>
                        <span class="cbi-detail-value">3-8 months</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Investment Pathway:</span>
                        <span class="cbi-detail-value">Donation to the National Fund, Approved Real Estate Project</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Visa Free Countries:</span>
                        <span class="cbi-detail-value">157</span>
                    </div>
                </div>
            </div>

            <!-- St. Lucia -->
            <div class="cbi-country-card">
                <div class="cbi-country-flag">
                    <img src="<?php echo Base_URL; ?>/images/flags/st-lucia.png" alt="St. Lucia Flag" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="cbi-flag-placeholder" style="display: none; width: 80px; height: 60px; background: #6BCDE8; border-radius: 4px; position: relative;">
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 1.5rem;">🇱🇨</div>
                    </div>
                </div>
                <h3 class="cbi-country-name">ST. LUCIA</h3>
                <div class="cbi-country-details">
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Starting from:</span>
                        <span class="cbi-detail-value">$100,000 USD</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Processing time:</span>
                        <span class="cbi-detail-value">3-4 months</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Investment Pathway:</span>
                        <span class="cbi-detail-value">Donation to the National Fund, Eligible Business, Approved Real Estate Project, Government Bonds</span>
                    </div>
                    <div class="cbi-detail-item">
                        <span class="cbi-detail-label">Visa Free Countries:</span>
                        <span class="cbi-detail-value">148</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cbi-cta-section">
    <div class="container">
        <div class="cbi-cta-content">
            <h2 class="cbi-cta-title">Ready to Explore Citizenship by Investment?</h2>
            <p class="cbi-cta-text">Contact our experts to learn which program best suits your needs and start your journey to global citizenship.</p>
            <div class="cbi-cta-buttons">
                <a href="<?php echo Base_URL; ?>/contact" class="btn-hero-primary">FREE CONSULTATION</a>
                <a href="tel:3473247220" class="btn-hero-secondary">CALL NOW: 347-324-7220</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

