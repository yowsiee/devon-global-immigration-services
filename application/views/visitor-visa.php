<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="padding: 8rem 0 4rem; background: linear-gradient(135deg, #1e293b 0%, #7c3aed 100%);">
    <div class="container">
        <div style="text-align: center; max-width: 900px; margin: 0 auto; color: white;">
            <p class="hero-subtitle" style="color: rgba(255,255,255,0.9);">TEMPORARY VISITOR VISA</p>
            <h1 class="hero-title" style="color: white; margin: 1rem 0;">
                Temporary Visitor Visa Services
            </h1>
            <p class="hero-description" style="color: rgba(255,255,255,0.9); font-size: 1.2rem;">
                Apply for temporary visitor visas to travel, visit family, or explore new opportunities. 
                Our expert team ensures your application is complete and submitted correctly.
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-section" style="padding: 5rem 0;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <h2 class="section-title">Visitor Visa Types</h2>
            <p class="section-subtitle">We assist with various types of temporary visitor visas based on your travel purpose.</p>
        </div>
        
        <div class="services-grid">
            <article class="service-card">
                <div class="service-card-header gradient-blue"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-blue">
                        <div class="service-icon">🏖️</div>
                    </div>
                    <h3>Tourist Visa</h3>
                    <p>Travel for leisure, sightseeing, or vacation purposes. Single or multiple entry visas available based on your needs.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Single entry visa</li>
                        <li>Multiple entry visa</li>
                        <li>Visa extensions</li>
                        <li>Travel documentation</li>
                    </ul>
                </div>
            </article>
            
            <article class="service-card">
                <div class="service-card-header gradient-purple"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-purple">
                        <div class="service-icon">👨‍👩‍👧‍👦</div>
                    </div>
                    <h3>Family Visit Visa</h3>
                    <p>Visit family members or friends in your destination country. We help you prepare a strong application with proper documentation.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Family sponsorship letters</li>
                        <li>Invitation letters</li>
                        <li>Relationship documentation</li>
                        <li>Financial support proof</li>
                    </ul>
                </div>
            </article>
            
            <article class="service-card">
                <div class="service-card-header gradient-green"></div>
                <div class="service-card-body">
                    <div class="service-icon-wrapper icon-green">
                        <div class="service-icon">💼</div>
                    </div>
                    <h3>Business Travel Visa</h3>
                    <p>Attend meetings, conferences, or conduct business activities. We ensure your business travel documentation is complete.</p>
                    <ul style="text-align: left; margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Business invitation letters</li>
                        <li>Conference registration</li>
                        <li>Company documentation</li>
                        <li>Business purpose letters</li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Requirements Section -->
<section class="why-section" style="padding: 5rem 0; background: #f8fafc;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 4rem;">
            <h2 class="section-title">General Requirements</h2>
            <p class="section-subtitle">Common requirements for visitor visa applications.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <h3 style="margin-bottom: 1rem; color: #1e293b;">Required Documents</h3>
                    <ul style="text-align: left; padding-left: 1.5rem; color: #64748b;">
                        <li>Valid passport</li>
                        <li>Completed application form</li>
                        <li>Passport-sized photographs</li>
                        <li>Travel itinerary</li>
                        <li>Proof of financial means</li>
                        <li>Travel insurance</li>
                    </ul>
                </div>
                <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <h3 style="margin-bottom: 1rem; color: #1e293b;">Processing Time</h3>
                    <ul style="text-align: left; padding-left: 1.5rem; color: #64748b;">
                        <li>Standard processing: 2-4 weeks</li>
                        <li>Express processing: 1-2 weeks</li>
                        <li>Rush processing: 3-5 business days</li>
                        <li>Varies by country</li>
                        <li>Peak season delays possible</li>
                        <li>We keep you updated</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 5rem 0; background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Ready to Apply for Your Visitor Visa?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Contact us today for a free consultation.</p>
        <a href="<?php echo Base_URL; ?>/contact" class="btn btn-primary" style="background: white; color: #7c3aed; padding: 1rem 2.5rem; font-size: 1.1rem;">Get Started</a>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

