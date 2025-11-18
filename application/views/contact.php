<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container services-hero-container">
        <div class="services-hero-content">
            <div class="services-hero-text">
                <h1 class="services-hero-title">Get Your Free Immigration Consultation</h1>
                <p class="services-hero-description">
                    Have questions about immigrating to Canada or the USA? We're here to help. 
                    Whether you need information about visas, work permits, or study permits, let's start the conversation.
                </p>
                <div class="services-hero-buttons">
                    <a href="<?php echo Base_URL; ?>" class="btn btn-hero-outline">View Services</a>
                    <a href="#contact-form" class="btn btn-hero-filled">Get Free Consultation</a>
                </div>
            </div>
            <div class="services-hero-graphics">
                <div class="services-glass-card main-services-card">
                    <div class="services-card-icon">✉️</div>
                </div>
                <div class="services-glass-card services-card-1">
                    <div class="services-card-icon">💬</div>
                </div>
                <div class="services-glass-card services-card-2">
                    <div class="services-card-icon">📞</div>
                </div>
                <div class="services-glass-card services-card-3">
                    <div class="services-card-icon">🤝</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Options Section -->
<section class="contact-options-section">
    <div class="container">
        <div class="contact-options-grid">
            <div class="contact-option-card">
                <div class="contact-option-icon whatsapp-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="#25D366"/>
                    </svg>
                </div>
                <h3>WhatsApp Chat</h3>
                <p>Get instant responses and quick answers to your immigration questions via WhatsApp.</p>
                <a href="https://wa.me/18687108877" target="_blank" class="btn btn-whatsapp">Start Chat</a>
            </div>
            <div class="contact-option-card">
                <div class="contact-option-icon call-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="#8b5cf6"/>
                    </svg>
                </div>
                <h3>Call Us</h3>
                <p>Speak directly with our immigration consultants for detailed discussions.</p>
                <a href="tel:+18687108877" class="btn btn-call">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" style="margin-right: 8px;">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="white"/>
                    </svg>
                    +1 (555) 123-4567
                </a>
            </div>
            <div class="contact-option-card">
                <div class="contact-option-icon email-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="#ec4899"/>
                    </svg>
                </div>
                <h3>Email Us</h3>
                <p>Send us your immigration questions and get a personalized response.</p>
                <a href="mailto:info@devonglobalimmigration.com" class="btn btn-email">Send Email</a>
            </div>
        </div>
    </div>
</section>

<!-- Send Us a Message Form Section -->
<section class="contact-form-section" id="contact-form">
    <div class="container">
        <div class="contact-form-card">
            <h2>Send Us a Message</h2>
            <p class="form-subtitle">Tell us about your immigration goals and we'll get back to you within 24 hours.</p>
            
            <form id="contactForm" class="contact-form" method="POST" action="<?php echo Base_URL; ?>/contact/submit">
                <?php echo Security::csrfField(); ?>
                
                <div class="form-step" data-step="1">
                    <h3>Basic Information</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Current Country</label>
                        <input type="text" id="country" name="country" placeholder="Your current country of residence">
                    </div>
                    <button type="button" class="btn btn-primary btn-next">Next: Service Selection</button>
                </div>
                
                <div class="form-step" data-step="2" style="display: none;">
                    <h3>Service & Details</h3>
                    <div class="form-group">
                        <label for="service">Service Interest *</label>
                        <select id="service" name="service" required>
                            <option value="">Choose your service</option>
                            <option value="Live, Work, Study in Canada">Live, Work, Study in Canada</option>
                            <option value="Temporary Visitor Visa">Temporary Visitor Visa</option>
                            <option value="Work in USA">Work in USA</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Tell Us About Your Immigration Goals *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Tell us about your immigration goals, timeline, and any specific questions..."></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary btn-prev">Previous</button>
                        <button type="button" class="btn btn-primary btn-next">Next: Review</button>
                    </div>
                </div>
                
                <div class="form-step" data-step="3" style="display: none;">
                    <h3>Review & Submit</h3>
                    <div class="review-summary">
                        <p><strong>Name:</strong> <span id="review-name"></span></p>
                        <p><strong>Email:</strong> <span id="review-email"></span></p>
                        <p><strong>Phone:</strong> <span id="review-phone"></span></p>
                        <p><strong>Country:</strong> <span id="review-country"></span></p>
                        <p><strong>Service:</strong> <span id="review-service"></span></p>
                        <p><strong>Message:</strong> <span id="review-message"></span></p>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary btn-prev">Previous</button>
                        <button type="submit" class="btn btn-primary">Submit Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
