<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
[
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "<?php echo Base_URL; ?>/#organization",
  "name": "Devon Global Immigration Services",
  "alternateName": "DGIS",
  "description": "Licensed immigration consultants in Toronto offering study permits, work permits, Express Entry, PR applications, family sponsorship, and Canadian citizenship. Free consultation available.",
  "url": "<?php echo Base_URL; ?>",
  "logo": "<?php echo Base_URL; ?>/images/logo.png",
  "image": "<?php echo Base_URL; ?>/images/og-image.jpg",
  "telephone": "347-324-7220",
  "email": "canada@ttworktravel.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "5-112 Elizabeth St.",
    "addressLocality": "Toronto",
    "addressRegion": "ON",
    "postalCode": "M5G1P9",
    "addressCountry": "CA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "43.6532",
    "longitude": "-79.3832"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "17:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "09:00",
      "closes": "13:00"
    }
  ],
  "priceRange": "Free Consultation Available",
  "areaServed": {
    "@type": "Country",
    "name": "Canada"
  },
  "hasCredential": {
    "@type": "EducationalOccupationalCredential",
    "credentialCategory": "ICCRC Registered",
    "recognizedBy": {
      "@type": "Organization",
      "name": "Immigration Consultants of Canada Regulatory Council"
    }
  },
  "sameAs": [
    "https://www.linkedin.com/company/devon-global-immigration-services",
    "https://www.facebook.com/devonglobalimmigration"
  ]
},
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Devon Global Immigration Services",
  "description": "Licensed immigration consultants in Toronto offering study permits, work permits, Express Entry, PR applications, family sponsorship, and Canadian citizenship.",
  "url": "<?php echo Base_URL; ?>",
  "provider": {
    "@id": "<?php echo Base_URL; ?>/#organization"
  },
  "serviceType": [
    "Study Permits",
    "Work Permits",
    "Express Entry",
    "Permanent Residence",
    "Family Sponsorship",
    "Canadian Citizenship",
    "Business Immigration",
    "Citizenship by Investment",
    "Temporary Visa Services"
  ],
  "areaServed": {
    "@type": "Country",
    "name": "Canada"
  },
  "priceRange": "Free Consultation Available"
},
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Devon Global Immigration Services",
  "url": "<?php echo Base_URL; ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": {
      "@type": "EntryPoint",
      "urlTemplate": "<?php echo Base_URL; ?>/search?q={search_term_string}"
    },
    "query-input": "required name=search_term_string"
  }
}
]
</script>

<!-- SECTION 1: HERO SECTION (2-COLUMN) -->
<section class="home-hero">
    <div class="container">
        <div class="hero-grid">
            <!-- Left Column -->
        <div class="hero-content">
                <p class="hero-subheadline">Licensed · Experienced · Trusted</p>
                <ul class="hero-services-list">
                    <li>
                        <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.667 5L7.5 14.167 3.333 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Study Permits
                    </li>
                    <li>
                        <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.667 5L7.5 14.167 3.333 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Work Permits
                    </li>
                    <li>
                        <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.667 5L7.5 14.167 3.333 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Family Sponsorship
                    </li>
                    <li>
                        <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.667 5L7.5 14.167 3.333 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Permanent Residence
                    </li>
                    <li>
                        <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.667 5L7.5 14.167 3.333 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Canadian Citizenship
                    </li>
                </ul>
            <div class="hero-buttons">
                    <a href="<?php echo Base_URL; ?>/contact" class="btn-hero-primary">FREE PHONE CONSULTATION</a>
                    <a href="<?php echo Base_URL; ?>/contact" class="btn-hero-secondary">CHECK ELIGIBILITY</a>
                </div>
            </div>
            <!-- Right Column -->
            <div class="hero-image-wrapper">
                <div class="hero-image-card">
                    <img src="<?php echo Base_URL; ?>/images/consultant.png" alt="Professional immigration consultant" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="hero-image-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); border-radius: 12px; align-items: center; justify-content: center; flex-direction: column; padding: 2rem;">
                        <div style="font-size: 4rem; margin-bottom: 1rem;">👤</div>
                        <p style="color: var(--navy); font-size: 1.2rem; text-align: center; font-weight: 600;">Professional Consultant</p>
                    </div>
                    <h1 class="hero-title-overlay">YOUR CANADIAN IMMIGRATION FUTURE STARTS HERE.</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: TRUST BADGES ROW -->
<section class="trust-badges">
    <div class="container">
        <div class="badges-grid">
            <!-- Badge 1: RCIC-IRB -->
            <div class="badge-item badge-simple">
                <span class="badge-text">RCIC-IRB</span>
            </div>
            
            <!-- Badge 2: OCC Licensed Consultant -->
            <div class="badge-item badge-with-icon">
                <svg class="badge-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <span class="badge-text">
                    <strong>OCC Licensed</strong> Consultant
                </span>
            </div>
            
            <!-- Badge 3: 10+ Years Experience -->
            <div class="badge-item badge-number">
                <span class="badge-number-large">10+</span>
                <span class="badge-text-small">Years Experience</span>
            </div>
            
            <!-- Badge 4: Assisted 500+ Clients -->
            <div class="badge-item badge-with-icon">
                <svg class="badge-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="badge-text">
                    Assisted <strong>500+</strong> Clients
                </span>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: SERVICES SECTION (3-COLUMN CARDS) -->
<section class="services-section">
    <div class="container">
        <h2 class="services-heading">WHAT WE CAN HELP YOU WITH</h2>
        <div class="services-grid">
            <!-- Column 1: Citizenship by Investment -->
            <article class="service-card">
                <h3 class="service-card-title">Citizenship by Investment</h3>
                <ul class="service-list">
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Antigua and Barbuda
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Dominica
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Grenada
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        St. Kitts and Nevis
                    </li>
                </ul>
            </article>
            
            <!-- Column 2: Canadian Immigration -->
            <article class="service-card">
                <h3 class="service-card-title">Canadian Immigration</h3>
                <ul class="service-list">
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Express Entry
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Family Sponsorship
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Provincial Nominees Program
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Other Pathways
                    </li>
                </ul>
            </article>
            
            <!-- Column 3: Temporary Visa Services -->
            <article class="service-card">
                <h3 class="service-card-title">Temporary Visa Services</h3>
                <ul class="service-list">
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Australia
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        United States
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        United Kingdom
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Ireland
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        New Zealand
                    </li>
                    <li>
                        <svg class="check-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Other Countries
                    </li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 4: CONTACT SECTION -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-column">
                <div class="contact-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
        </div>
                <h3 class="contact-title">Address</h3>
                <p class="contact-text">5-112 Elizabeth St.<br>Toronto, ON, Canada M5G1P9</p>
            </div>
            <div class="contact-column">
                <div class="contact-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h3 class="contact-title">Phone & Email</h3>
                <p class="contact-text">
                    <a href="tel:3473247220" style="color: inherit; text-decoration: none;">347-324-7220</a><br>
                    <a href="mailto:canada@ttworktravel.com" style="color: inherit; text-decoration: none;">canada@ttworktravel.com</a>
                </p>
            </div>
            <div class="contact-column">
                <div class="contact-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3 class="contact-title">Opening Hours</h3>
                <p class="contact-text">Mon - Fri 9am - 5pm<br>Sat 9am - 1pm<br>Sunday Closed</p>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
