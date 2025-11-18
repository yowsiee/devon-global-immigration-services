<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Job Opportunities",
  "description": "Explore J1 visa opportunities in the United States including Culinary Arts, Food and Beverage, Rooms Division, and Teaching positions. Apply for exciting work opportunities in America.",
  "url": "<?php echo Base_URL; ?>/services/job-opportunities",
  "provider": {
    "@type": "LocalBusiness",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
    "logo": "<?php echo Base_URL; ?>/images/logo.png",
    "telephone": "347-324-7220",
    "email": "canada@ttworktravel.com"
  },
  "serviceType": "J1 Visa Program",
  "areaServed": {
    "@type": "Country",
    "name": "United States"
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
        "name": "Job Opportunities",
        "item": "<?php echo Base_URL; ?>/services/job-opportunities"
      }
    ]
  }
}
</script>

<!-- Hero Section -->
<section class="j1-hero-section">
    <div class="container">
        <h1 class="j1-main-title">US J1 Opportunities</h1>
    </div>
</section>

<!-- Job Categories Section -->
<section class="j1-categories-section">
    <div class="container">
        <div class="j1-categories-grid">
            <!-- Culinary Arts Openings -->
            <div class="j1-category-card">
                <div class="j1-category-image">
                    <img src="<?php echo Base_URL; ?>/images/j1-culinary-arts.jpg" alt="Culinary Arts Openings" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="j1-image-placeholder" style="display: none; width: 100%; height: 200px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">👨‍🍳</div>
                </div>
                <div class="j1-category-content">
                    <h3 class="j1-category-title">Culinary Arts Openings</h3>
                    <a href="#apply" class="j1-view-button">View</a>
                </div>
            </div>

            <!-- Food and Beverage Openings -->
            <div class="j1-category-card">
                <div class="j1-category-image">
                    <img src="<?php echo Base_URL; ?>/images/j1-food-beverage.jpg" alt="Food and Beverage Openings" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="j1-image-placeholder" style="display: none; width: 100%; height: 200px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🍽️</div>
                </div>
                <div class="j1-category-content">
                    <h3 class="j1-category-title">Food and Beverage Openings</h3>
                    <a href="#apply" class="j1-view-button">View</a>
                </div>
            </div>

            <!-- Rooms Division Openings -->
            <div class="j1-category-card">
                <div class="j1-category-image">
                    <img src="<?php echo Base_URL; ?>/images/j1-rooms-division.jpg" alt="Rooms Division Openings" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="j1-image-placeholder" style="display: none; width: 100%; height: 200px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">🏨</div>
                </div>
                <div class="j1-category-content">
                    <h3 class="j1-category-title">Rooms Division Openings</h3>
                    <a href="#apply" class="j1-view-button">View</a>
                </div>
            </div>

            <!-- Teachers Openings -->
            <div class="j1-category-card">
                <div class="j1-category-image">
                    <img src="<?php echo Base_URL; ?>/images/j1-teachers.jpg" alt="Teachers Openings" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="j1-image-placeholder" style="display: none; width: 100%; height: 200px; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); align-items: center; justify-content: center; font-size: 3rem;">👨‍🏫</div>
                </div>
                <div class="j1-category-content">
                    <h3 class="j1-category-title">Teachers Openings</h3>
                    <a href="#apply" class="j1-view-button">View</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Section -->
<section class="j1-apply-section" id="apply">
    <div class="container">
        <div class="j1-apply-content">
            <h2 class="j1-apply-title">Are you interested in Applying?</h2>
            <p class="j1-apply-text">
                Before you apply for any of the above positions, please view the eligibility requirements for our US J1 positions.
            </p>
            <div class="j1-apply-button-wrapper">
                <a href="<?php echo Base_URL; ?>/contact" class="j1-apply-button">
                    APPLY NOW
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 8px;">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
            <div class="j1-eligibility-links">
                <a href="#eligibility-hospitality" class="j1-eligibility-link">View Eligibility Requirements (Hospitality)</a>
                <a href="#eligibility-teachers" class="j1-eligibility-link">View Eligibility Requirements (Teachers)</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

