<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Global Temporary Resident Services",
  "description": "Expert assistance with temporary resident visas, tourist visas, business visas, and Electronic Travel Authorization documents for countries around the world. Professional guidance for all your temporary travel needs.",
  "url": "<?php echo Base_URL; ?>/services/global-temporary-resident",
  "provider": {
    "@type": "LocalBusiness",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
    "logo": "<?php echo Base_URL; ?>/images/logo.png",
    "telephone": "347-324-7220",
    "email": "canada@ttworktravel.com"
  },
  "serviceType": "Temporary Visa Services",
  "areaServed": {
    "@type": "Place",
    "name": "Global"
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
        "name": "Global Temporary Resident Services",
        "item": "<?php echo Base_URL; ?>/services/global-temporary-resident"
      }
    ]
  }
}
</script>

<!-- Hero Section with Banner -->
<section class="gtr-hero-section">
    <div class="gtr-hero-background">
        <img src="<?php echo Base_URL; ?>/images/globalTemporaryVisaServices_banner.png" alt="Global Temporary Visa Services" class="gtr-map-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="gtr-map-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, #E8F4F8 0%, #B8D4E3 100%); min-height: 500px; align-items: center; justify-content: center;">
            <div style="text-align: center; color: #1B3358;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🌐</div>
                <p style="font-size: 1.5rem; font-weight: 600;">Global Temporary Visa Services</p>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="gtr-content-section">
    <div class="container">
        <div class="gtr-content-wrapper">
            <div class="gtr-content-text">
                <p class="gtr-paragraph">
                    At DGIS Immigration, we also offer Temporary Visa application services. These include Tourist visas, Business visa, and Electronic Travel Authorization documents.
                </p>
                <p class="gtr-paragraph">
                    If you are not sure what type of temporary document you need to enter a country please contact us and we would provide you with guidance.
                </p>
                <p class="gtr-paragraph gtr-disclaimer">
                    We do not offer services to any sanctioned countries.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="gtr-cta-section">
    <div class="container">
        <div class="gtr-cta-content">
            <h2 class="gtr-cta-title">Need Help with Temporary Visa Applications?</h2>
            <p class="gtr-cta-text">Contact our experts for guidance on tourist visas, business visas, and Electronic Travel Authorization documents.</p>
            <div class="gtr-cta-buttons">
                <a href="<?php echo Base_URL; ?>/contact" class="btn-hero-primary">FREE CONSULTATION</a>
                <a href="tel:3473247220" class="btn-hero-secondary">CALL NOW: 347-324-7220</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

