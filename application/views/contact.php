<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Us - Devon Global Immigration Services",
  "description": "Contact Devon Global Immigration Services for expert immigration assistance. Get a free consultation for Canadian and US immigration services.",
  "url": "<?php echo Base_URL; ?>/contact",
  "mainEntity": {
    "@type": "Organization",
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
    "logo": "<?php echo Base_URL; ?>/images/logo.png"
  }
}
</script>

<!-- Contact Page Content -->
<section class="contact-page-wrapper">
    <div class="container">
        <!-- Contact Form Card -->
        <div class="contact-form-card">
            <h1 class="contact-page-title">CONTACT US</h1>
            
            <?php if(isset($success) && $success): ?>
                <div class="contact-success-message">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <p>Thank you, <?php echo htmlspecialchars($submitted_name ?? 'there', ENT_QUOTES, 'UTF-8'); ?>! Your message has been submitted successfully. We'll get back to you soon.</p>
                </div>
            <?php endif; ?>
            
            <?php if(isset($error) && $error): ?>
                <div class="contact-error-message">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            <?php endif; ?>
            
            <form id="contactForm" class="contact-form-simple" method="POST" action="<?php echo Base_URL; ?>/contact/submit">
                <?php echo Security::csrfField(); ?>
                
                <div class="contact-form-row">
                    <div class="contact-form-group">
                        <label for="contact_first_name">First name</label>
                        <input type="text" id="contact_first_name" name="first_name" class="contact-input-underline">
                    </div>
                    <div class="contact-form-group">
                        <label for="contact_last_name">Last name</label>
                        <input type="text" id="contact_last_name" name="last_name" class="contact-input-underline">
                    </div>
                </div>
                
                <div class="contact-form-row">
                    <div class="contact-form-group contact-form-group-full">
                        <label for="contact_email">Email *</label>
                        <input type="email" id="contact_email" name="email" class="contact-input-underline" required>
                    </div>
                </div>
                
                <div class="contact-form-row">
                    <div class="contact-form-group">
                        <label for="contact_phone">Phone</label>
                        <input type="tel" id="contact_phone" name="phone" class="contact-input-underline">
                    </div>
                    <div class="contact-form-group">
                        <label for="contact_nationality">Nationality</label>
                        <input type="text" id="contact_nationality" name="nationality" class="contact-input-underline">
                    </div>
                </div>
                
                <div class="contact-form-row">
                    <div class="contact-form-group contact-form-group-full">
                        <label for="contact_message">Please let us know what you need our assistance with. We would be happy to help. *</label>
                        <textarea id="contact_message" name="message" class="contact-input-underline contact-textarea" rows="5" required></textarea>
                    </div>
                </div>
                
                <div class="contact-form-actions">
                    <button type="submit" class="btn-contact-submit">Submit</button>
                </div>
            </form>
        </div>
        
        <!-- Footer Legal Section -->
        <div class="contact-footer-legal">
            <p class="contact-legal-text">
                Please see a copy of our Draft Service Agreement, which includes, our Terms & Conditions, Privacy Policy and our Refunds and Cancelation Policy,
            </p>
            <a href="<?php echo Base_URL; ?>/draft-service-agreement" class="btn-draft-agreement">Draft Service Agreement</a>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
