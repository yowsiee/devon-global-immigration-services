<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Devon Global Immigration Services",
  "description": "Learn about Devon Global Immigration Services, licensed immigration consultants in Toronto. Expert guidance for Canadian and US immigration with years of experience and proven success.",
  "url": "<?php echo Base_URL; ?>/about",
  "mainEntity": {
    "@type": "Organization",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
    "description": "Licensed immigration consultancy firm dedicated to helping individuals and families navigate the complex world of immigration. With years of experience and a deep understanding of immigration laws and procedures, we provide expert guidance for those seeking to live, work, or study in Canada and the United States.",
    "url": "<?php echo Base_URL; ?>",
    "logo": "<?php echo Base_URL; ?>/images/logo.png",
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
    "sameAs": [
      "https://www.linkedin.com/company/devon-global-immigration-services",
      "https://www.facebook.com/devonglobalimmigration"
    ],
    "knowsAbout": [
      "Canadian Immigration",
      "US Immigration",
      "Express Entry",
      "Study Permits",
      "Work Permits",
      "Permanent Residence",
      "Family Sponsorship",
      "Canadian Citizenship",
      "Business Immigration",
      "Citizenship by Investment"
    ],
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
    }
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
        "name": "About Us",
        "item": "<?php echo Base_URL; ?>/about"
      }
    ]
  }
}
</script>

<!-- SECTION 1: OUR BACKGROUND -->
<section class="about-section">
    <div class="container">
        <h2 class="section-heading">Our Background</h2>
        <div class="background-content-grid">
            <div class="background-image-wrapper">
                <div class="background-image-card">
                    <img src="<?php echo Base_URL; ?>/images/kaonde-dwanam.jpg" alt="Kaonde Dwanam - Regulated Canadian Immigration Consultant" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="background-image-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); border-radius: 12px; align-items: center; justify-content: center; flex-direction: column; padding: 2rem; min-height: 400px;">
                        <div style="font-size: 4rem; margin-bottom: 1rem;">👤</div>
                        <p style="color: var(--navy); font-size: 1.2rem; text-align: center; font-weight: 600;">Kaonde Dwanam</p>
                    </div>
                </div>
            </div>
            <div class="background-text-content">
                <p class="about-text">
                    Kaonde Dwanam, an immigrant herself, understands the challenges and opportunities that come with moving to a new country. 
                    Her personal journey to Canada has given her unique insight into the immigration process, making her an empathetic and 
                    effective advocate for her clients.
                </p>
                <p class="about-text">
                    With a background in chemical engineering and a deep commitment to helping others, Kaonde pursued specialized education 
                    in immigration and citizenship law. She is a qualified professional registered with the College of Immigration and 
                    Citizenship Consultants (CICC), the regulatory body that oversees immigration consultants in Canada.
                </p>
                <p class="about-text">
                    As a Regulated Canadian Immigration Consultant (RCIC), Kaonde is authorized to provide immigration services to individuals 
                    and families seeking to come to Canada. Her role involves staying current with constantly evolving immigration policies, 
                    maintaining ethical standards, and continuing professional development to serve clients with the highest level of expertise.
                </p>
                <p class="about-text">
                    At Devon Global Immigration Services, we believe in building trust through transparency, professionalism, and personalized 
                    service. Every client's journey is unique, and we are committed to providing the guidance and support needed to navigate 
                    the complex world of Canadian immigration.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: OUR MISSION -->
<section class="about-section about-section-light">
    <div class="container">
        <h2 class="section-heading">Our Mission</h2>
        <div class="mission-content">
            <p class="mission-text-large">
                At DeVon Global Immigration Services (DGIS immigration), our mission is to provide seamless global mobility and empower 
                individuals to pursue their greatest aspirations. We offer comprehensive solutions for immigration and citizenship, ensuring 
                client satisfaction while fostering a diverse and inclusive world where borders are no longer barriers.
            </p>
        </div>
    </div>
</section>

<!-- SECTION 3: VERIFY CONSULTANT IMAGE -->
<section class="verify-section">
    <div class="verify-image-wrapper">
        <img src="<?php echo Base_URL; ?>/images/verify-consultant.jpg" alt="Verify your Immigration Consultant is Licensed by Canada" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="verify-image-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.3) 0%, rgba(213, 16, 43, 0.3) 100%); min-height: 400px; align-items: center; justify-content: center;">
            <div style="text-align: center; color: white;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">📋</div>
                <p style="font-size: 1.5rem; font-weight: 600;">Verify Your Consultant</p>
            </div>
        </div>
        <div class="verify-overlay">
            <div class="verify-overlay-content">
                <p class="verify-text">Verify that your Immigration Consultant is Licensed by Canada</p>
                <a href="https://college-ic.ca/protecting-the-public/find-an-immigration-consultant/" target="_blank" rel="noopener noreferrer" class="btn-verify">Verify</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHY USE AN RCIC? -->
<section class="rcic-section">
    <div class="container">
        <h2 class="rcic-heading">Why use an RCIC?</h2>
        <div class="rcic-content">
            <p class="rcic-definition">
                An <strong>RCIC (Regulated Canadian Immigration Consultant)</strong> is a licensed professional who is authorized by the 
                Canadian government to provide immigration services to individuals who want to immigrate to Canada.
            </p>
            <ul class="rcic-list">
                <li>
                    <svg class="check-icon-white" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Exploring immigration and citizenship options
                </li>
                <li>
                    <svg class="check-icon-white" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Filling out and submitting your immigration or citizenship application
                </li>
                <li>
                    <svg class="check-icon-white" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Communicating with the Government of Canada on your behalf
                </li>
                <li>
                    <svg class="check-icon-white" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M13.333 4L6 11.333 2.667 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Representing you on an immigration or citizenship application or hearing
                </li>
            </ul>
            <p class="rcic-note">
                An RCIC must have an RCIC-IM client of license to represent you before the Immigration and Refugee Board of Canada.
                </p>
            </div>
    </div>
</section>

<!-- SECTION 5: LET'S WORK TOGETHER -->
<section class="about-section">
    <div class="container">
        <h2 class="section-heading">Let's Work Together</h2>
        <p class="work-together-intro">Fill out our short form or contact a representative to see how immigration services provided.</p>
        <div class="work-together-grid">
            <div class="social-media-sidebar">
                <h3 class="social-heading">Connect With Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/devonglobalimmigration" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Facebook">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/devonglobalimmigration" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Twitter">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/devon-global-immigration-services" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="LinkedIn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/devonglobalimmigration" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <form class="about-contact-form" id="aboutContactForm" method="POST" action="<?php echo Base_URL; ?>/contact">
                    <?php 
                    if(class_exists('Security')) {
                        echo Security::csrfField();
                    }
                    ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="about_first_name">NAME</label>
                            <input type="text" id="about_first_name" name="first_name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="about_last_name">LAST NAME</label>
                            <input type="text" id="about_last_name" name="last_name" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="about_email">EMAIL</label>
                            <input type="email" id="about_email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="about_phone">PHONE</label>
                            <input type="tel" id="about_phone" name="phone" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about_message">MESSAGE</label>
                        <textarea id="about_message" name="message" class="form-input form-textarea form-textarea-red-border" rows="5" required></textarea>
                    </div>
                    <div class="form-submit-wrapper">
                        <button type="submit" class="btn-form-submit">SEND</button>
                </div>
                </form>
                <p class="form-disclaimer">
                    We are a proudly registered and licensed business offering immigration legal services. We are not affiliated with any 
                    Government body but are regulated by the Government of Canada to practice these services.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
