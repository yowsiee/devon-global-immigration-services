<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Study Permits for Canada",
  "description": "Expert assistance with Canadian study permits, university applications, letters of acceptance, study plans, GIC, Post Graduate Work Permits, and dependent permits. ICCRC registered consultants.",
  "url": "<?php echo Base_URL; ?>/services/study-permits",
  "provider": {
    "@type": "LocalBusiness",
    "@id": "<?php echo Base_URL; ?>/#organization",
    "name": "Devon Global Immigration Services",
    "alternateName": "DGIS",
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
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "ICCRC Registered",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Immigration Consultants of Canada Regulatory Council"
      }
    }
  },
  "serviceType": "Study Permit Application",
  "areaServed": {
    "@type": "Country",
    "name": "Canada"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "CAD",
    "description": "Free Consultation Available"
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
        "name": "Study Permits",
        "item": "<?php echo Base_URL; ?>/services/study-permits"
      }
    ]
  }
}
</script>

<!-- Breadcrumb Navigation -->
<nav aria-label="Breadcrumb" style="background: #f8fafc; padding: 1rem 0; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList" style="display: flex; list-style: none; margin: 0; padding: 0; gap: 0.5rem; align-items: center; flex-wrap: wrap;">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="display: flex; align-items: center;">
                <a href="<?php echo Base_URL; ?>" itemprop="item" style="color: #64748b; text-decoration: none; font-size: 0.9rem;">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
                <span style="margin: 0 0.5rem; color: #cbd5e1;">/</span>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="display: flex; align-items: center;">
                <a href="<?php echo Base_URL; ?>/services" itemprop="item" style="color: #64748b; text-decoration: none; font-size: 0.9rem;">
                    <span itemprop="name">Services</span>
                </a>
                <meta itemprop="position" content="2">
                <span style="margin: 0 0.5rem; color: #cbd5e1;">/</span>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" style="display: flex; align-items: center;">
                <span itemprop="name" style="color: #1a1a1a; font-weight: 600; font-size: 0.9rem;">Study Permits</span>
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="service-hero" style="padding: 6rem 0 4rem; background: linear-gradient(135deg, #C8102E 0%, #A02020 100%); color: white; position: relative; overflow: hidden;">
    <div class="container">
        <div style="text-align: center; max-width: 900px; margin: 0 auto; position: relative; z-index: 1;">
            <p style="color: rgba(255,255,255,0.9); font-size: 0.875rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 1rem;">STUDY PERMITS</p>
            <h1 style="color: white; margin: 1rem 0; font-size: 3.5rem; font-weight: 800; line-height: 1.2;">
                Study Permits for Canada
            </h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.2rem; line-height: 1.8; max-width: 800px; margin: 2rem auto;">
                Expert assistance with university and college applications, study permits, and post-graduation work permits. 
                We guide you through every step of your educational journey in Canada.
            </p>
            <div style="margin-top: 2.5rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-primary" style="background: white; color: #C8102E; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 700; font-size: 1rem; display: inline-flex; align-items: center; gap: 0.5rem;" data-open-consultation>
                    <span>📞</span> Free Consultation
                </a>
                <a href="<?php echo Base_URL; ?>/services" class="btn btn-secondary" style="background: transparent; color: white; border: 2px solid white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 700; font-size: 1rem;">
                    All Services
                </a>
            </div>
        </div>
    </div>
    <!-- Simple background elements -->
    <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; z-index: 0;"></div>
    <div style="position: absolute; bottom: -100px; left: -100px; width: 400px; height: 400px; background: rgba(255,255,255,0.03); border-radius: 50%; z-index: 0;"></div>
</section>

<!-- What We Offer Section -->
<section class="service-detail-section" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="service-detail-header" style="text-align: center; margin-bottom: 3rem;">
            <div class="service-detail-icon" style="font-size: 3rem; margin-bottom: 1rem;">🎓</div>
            <h2 class="service-detail-title" style="font-size: 2.5rem; color: #1a1a1a; font-weight: 800;">What We Offer</h2>
            <p style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 1rem auto;">
                Comprehensive study permit services to help you achieve your educational goals in Canada
            </p>
        </div>
        <div class="service-features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📚</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">University & College Applications</h3>
                <p style="color: #64748b; line-height: 1.7;">Expert guidance through the entire application process for Canadian universities and colleges, ensuring you meet all requirements and deadlines.</p>
            </div>
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">✉️</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Letter of Acceptance</h3>
                <p style="color: #64748b; line-height: 1.7;">Assistance in obtaining and verifying your Letter of Acceptance (LOA) from designated learning institutions in Canada.</p>
            </div>
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📝</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Study Plan Preparation</h3>
                <p style="color: #64748b; line-height: 1.7;">Professional study plan writing that clearly explains your educational goals, career objectives, and reasons for choosing Canada.</p>
            </div>
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">💳</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">GIC (Guaranteed Investment Certificate)</h3>
                <p style="color: #64748b; line-height: 1.7;">Guidance on opening a GIC account, which is required for many study permit applications, especially for students from certain countries.</p>
            </div>
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">💼</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Post Graduate Work Permits</h3>
                <p style="color: #64748b; line-height: 1.7;">Assistance with Post-Graduation Work Permit (PGWP) applications, allowing you to gain valuable Canadian work experience after your studies.</p>
            </div>
            <div class="service-feature-card" style="background: #f8fafc; padding: 2rem; border-radius: 12px; border: 1px solid #e2e8f0; transition: transform 0.3s, box-shadow 0.3s;">
                <div class="service-feature-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">👨‍👩‍👧‍👦</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Dependent Permits</h3>
                <p style="color: #64748b; line-height: 1.7;">Help with study or work permit applications for your spouse and dependent children, ensuring your family can join you in Canada.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="service-approach-section" style="padding: 5rem 0; background: #f8fafc;">
    <div class="container">
        <div class="service-detail-header" style="text-align: center; margin-bottom: 3rem;">
            <div class="service-detail-icon" style="font-size: 3rem; margin-bottom: 1rem;">⚙️</div>
            <h2 class="service-detail-title" style="font-size: 2.5rem; color: #1a1a1a; font-weight: 800;">Our Process</h2>
            <p style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 1rem auto;">
                A step-by-step approach to ensure your study permit application is successful
            </p>
        </div>
        <div class="service-process-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div class="service-process-item" style="background: white; padding: 2rem; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div class="process-number" style="width: 60px; height: 60px; background: #C8102E; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.5rem;">1</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Initial Assessment</h3>
                <p style="color: #64748b; line-height: 1.7;">We evaluate your eligibility, educational background, and goals to determine the best path forward.</p>
            </div>
            <div class="service-process-item" style="background: white; padding: 2rem; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div class="process-number" style="width: 60px; height: 60px; background: #C8102E; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.5rem;">2</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">School Selection</h3>
                <p style="color: #64748b; line-height: 1.7;">We help you choose the right institution and program that aligns with your career objectives.</p>
            </div>
            <div class="service-process-item" style="background: white; padding: 2rem; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div class="process-number" style="width: 60px; height: 60px; background: #C8102E; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.5rem;">3</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Document Preparation</h3>
                <p style="color: #64748b; line-height: 1.7;">We assist with gathering and preparing all required documents, including study plans and financial proof.</p>
            </div>
            <div class="service-process-item" style="background: white; padding: 2rem; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div class="process-number" style="width: 60px; height: 60px; background: #C8102E; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.5rem;">4</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Application Submission</h3>
                <p style="color: #64748b; line-height: 1.7;">We submit your complete application to Immigration, Refugees and Citizenship Canada (IRCC) on your behalf.</p>
            </div>
            <div class="service-process-item" style="background: white; padding: 2rem; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                <div class="process-number" style="width: 60px; height: 60px; background: #C8102E; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1.5rem;">5</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Follow-up & Support</h3>
                <p style="color: #64748b; line-height: 1.7;">We monitor your application status and provide ongoing support until you receive your study permit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="service-benefits-section" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="service-detail-header" style="text-align: center; margin-bottom: 3rem;">
            <div class="service-detail-icon" style="font-size: 3rem; margin-bottom: 1rem;">🚀</div>
            <h2 class="service-detail-title" style="font-size: 2.5rem; color: #1a1a1a; font-weight: 800;">Why Choose Us</h2>
        </div>
        <div class="service-benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div class="service-benefit-item" style="text-align: center; padding: 2rem;">
                <div class="benefit-icon" style="font-size: 3rem; margin-bottom: 1rem;">✅</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">ICCRC Registered</h3>
                <p style="color: #64748b; line-height: 1.7;">Licensed and regulated by the Immigration Consultants of Canada Regulatory Council.</p>
            </div>
            <div class="service-benefit-item" style="text-align: center; padding: 2rem;">
                <div class="benefit-icon" style="font-size: 3rem; margin-bottom: 1rem;">📊</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">High Success Rate</h3>
                <p style="color: #64748b; line-height: 1.7;">Proven track record with thousands of successful study permit applications.</p>
            </div>
            <div class="service-benefit-item" style="text-align: center; padding: 2rem;">
                <div class="benefit-icon" style="font-size: 3rem; margin-bottom: 1rem;">🤝</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Personalized Service</h3>
                <p style="color: #64748b; line-height: 1.7;">One-on-one guidance tailored to your unique situation and goals.</p>
            </div>
            <div class="service-benefit-item" style="text-align: center; padding: 2rem;">
                <div class="benefit-icon" style="font-size: 3rem; margin-bottom: 1rem;">⏱️</div>
                <h3 style="font-size: 1.25rem; color: #1a1a1a; margin-bottom: 1rem; font-weight: 700;">Timely Processing</h3>
                <p style="color: #64748b; line-height: 1.7;">Efficient handling of your application to meet important deadlines.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta-section" style="padding: 5rem 0; background: linear-gradient(135deg, #C8102E 0%, #A02020 100%); color: white;">
    <div class="container">
        <div class="service-cta-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h2 class="service-cta-title" style="font-size: 2.5rem; margin-bottom: 1.5rem; font-weight: 800;">Ready to Start Your Canadian Education Journey?</h2>
            <p class="service-cta-text" style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 2.5rem; opacity: 0.95;">
                Let our experienced immigration consultants guide you through the study permit process. 
                Book a free consultation today and take the first step toward your educational goals in Canada.
            </p>
            <div class="service-cta-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo Base_URL; ?>/services" class="btn btn-cta-outline" style="background: transparent; color: white; border: 2px solid white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 700; font-size: 1rem;">Explore All Services</a>
                <a href="<?php echo Base_URL; ?>/contact" class="btn btn-cta-filled" style="background: white; color: #C8102E; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 700; font-size: 1rem;" data-open-consultation>Book Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

