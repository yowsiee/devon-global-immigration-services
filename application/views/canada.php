<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="padding: 8rem 0 4rem; background: linear-gradient(135deg, #1e293b 0%, #1e40af 100%);">
    <div class="container">
        <div style="text-align: center; max-width: 900px; margin: 0 auto; color: white;">
            <p class="hero-subtitle" style="color: rgba(255,255,255,0.9);">CANADA IMMIGRATION</p>
            <h1 class="hero-title" style="color: white; margin: 1rem 0;">
                Live, Work, Study in Canada
            </h1>
            <p class="hero-description" style="color: rgba(255,255,255,0.9); font-size: 1.2rem;">
                Your comprehensive guide to making Canada your new home. From study permits to permanent residency, 
                we help you navigate every step of your Canadian immigration journey.
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-section" style="padding: 5rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <h2 class="section-title">Canada Immigration Services</h2>
            <p class="section-subtitle">We offer comprehensive immigration services to help you achieve your Canadian dreams.</p>
        </div>
        
        <div class="services-grid">
            <article class="service-card">
                <div class="service-card-header gradient-blue"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-blue">
                        <div class="service-icon">📚</div>
                    </div>
                    <h3>Study Permits</h3>
                    <p>Pursue your education in Canada with a study permit. We help you choose the right institution, prepare your application, and guide you through the process.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Student visa application</li>
                        <li>School selection guidance</li>
                        <li>Financial documentation</li>
                        <li>Post-graduation work permit</li>
                    </ul>
                </div>
            </article>
            
            <article class="service-card">
                <div class="service-card-header gradient-purple"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-purple">
                        <div class="service-icon">💼</div>
                    </div>
                    <h3>Work Permits</h3>
                    <p>Work legally in Canada with the right work permit. Whether you're a skilled worker, temporary worker, or international graduate, we can help.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Temporary work permits</li>
                        <li>Open work permits</li>
                        <li>Employer-specific permits</li>
                        <li>Work permit extensions</li>
                    </ul>
                </div>
            </article>
            
            <article class="service-card">
                <div class="service-card-header gradient-green"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-green">
                        <div class="service-icon">🏠</div>
                    </div>
                    <h3>Permanent Residency</h3>
                    <p>Make Canada your permanent home through various immigration programs including Express Entry, Provincial Nominee Programs, and family sponsorship.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Express Entry system</li>
                        <li>Provincial Nominee Programs</li>
                        <li>Family sponsorship</li>
                        <li>Business immigration</li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="why-section" style="padding: 5rem 0; background: #f8fafc;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <h2 class="section-title">Our Process</h2>
            <p class="section-subtitle">We guide you through every step of your immigration journey.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-weight: bold; font-size: 1.5rem;">1</div>
                <h3 style="margin-bottom: 0.5rem;">Consultation</h3>
                <p style="color: #64748b;">Free initial consultation to assess your eligibility and discuss your goals.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-weight: bold; font-size: 1.5rem;">2</div>
                <h3 style="margin-bottom: 0.5rem;">Documentation</h3>
                <p style="color: #64748b;">We help you gather and prepare all required documents.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-weight: bold; font-size: 1.5rem;">3</div>
                <h3 style="margin-bottom: 0.5rem;">Application</h3>
                <p style="color: #64748b;">Complete application preparation and submission on your behalf.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: #3b82f6; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-weight: bold; font-size: 1.5rem;">4</div>
                <h3 style="margin-bottom: 0.5rem;">Follow-up</h3>
                <p style="color: #64748b;">Ongoing support and updates throughout the process.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 5rem 0; background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Ready to Start Your Canadian Journey?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Contact us today for a free consultation.</p>
        <a href="<?php echo Base_URL; ?>/contact" class="btn btn-primary" style="background: white; color: #1e40af; padding: 1rem 2.5rem; font-size: 1.1rem;">Get Started</a>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

