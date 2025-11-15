<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container services-hero-container">
        <div class="services-hero-content">
            <div class="services-hero-text">
                <h1 class="services-hero-title">Let's Build Something Amazing Together</h1>
                <p class="services-hero-description">
                    Have a project in mind? We're here to help. Whether you need a quote, have questions, 
                    or want to discuss your next digital venture, let's start the conversation.
                </p>
                <div class="services-hero-buttons">
                    <a href="<?php echo Base_URL; ?>/portfolio" class="btn btn-hero-outline">View Portfolio</a>
                    <a href="#contact-form" class="btn btn-hero-filled">Get Free Quote</a>
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
                <p>Get instant responses and quick project discussions via WhatsApp.</p>
                <a href="https://wa.me/18687108877" target="_blank" class="btn btn-whatsapp">Start Chat</a>
            </div>
            <div class="contact-option-card">
                <div class="contact-option-icon call-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="#8b5cf6"/>
                    </svg>
                </div>
                <h3>Call Us</h3>
                <p>Speak directly with our team for detailed project discussions.</p>
                <a href="tel:+18687108877" class="btn btn-call">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" style="margin-right: 8px;">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="white"/>
                    </svg>
                    +1 (868) 710-8877
                </a>
            </div>
            <div class="contact-option-card">
                <div class="contact-option-icon email-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="#ec4899"/>
                    </svg>
                </div>
                <h3>Email Us</h3>
                <p>Send us detailed project requirements and get a personalized response.</p>
                <a href="mailto:info@devsdomain.com" class="btn btn-email">Send Email</a>
            </div>
        </div>
    </div>
</section>

<!-- Send Us a Message Form Section -->
<section class="contact-form-section" id="contact-form">
    <div class="container">
        <div class="contact-form-card">
            <h2>Send Us a Message</h2>
            <p class="form-subtitle">Tell us about your project and we'll get back to you within 24 hours.</p>
            
            <div class="form-progress">
                <div class="progress-step active">
                    <div class="step-number">1</div>
                    <div class="step-label">Basic Info</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">2</div>
                    <div class="step-label">Project Details</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <div class="step-label">Review</div>
                </div>
            </div>

            <?php if(isset($success) && $success): ?>
                <div class="alert alert-success">
                    <h3>Thank You, <?php echo htmlspecialchars($submitted_name ?? 'Guest', ENT_QUOTES, 'UTF-8'); ?>!</h3>
                    <p>Your message has been received. We'll get back to you as soon as possible.</p>
                </div>
            <?php elseif(isset($error)): ?>
                <div class="alert alert-error">
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            <?php endif; ?>

            <form action="<?php echo Base_URL; ?>/contact/submit" method="POST" class="contact-form" id="contactForm">
                <?php echo Security::csrfField(); ?>
                
                <div class="form-section-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="margin-right: 8px;">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="#f97316"/>
                    </svg>
                    <h3>Basic Information</h3>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required 
                               value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required
                               value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" required
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                               value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" class="form-control"
                               value="<?php echo isset($_POST['company']) ? htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input type="url" id="website" name="website" class="form-control" placeholder="https://example.com"
                               value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" class="form-control" required
                           value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" class="form-control" rows="6" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-form-submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Visit Our Office Section -->
<section class="visit-office-section">
    <div class="container">
        <div class="office-card">
            <div class="office-content">
                <h2>Visit Our Office</h2>
                <p>Located in the heart of Trinidad & Tobago, our office is easily accessible and ready to welcome you for face-to-face discussions about your projects.</p>
                
                <div class="office-info">
                    <div class="office-info-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="margin-right: 12px;">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#1f2937"/>
                        </svg>
                        <div>
                            <strong>Address:</strong>
                            <p>25 Maracas Avenue, Xavien Plaza Heights, Arima, Trinidad and Tobago</p>
                        </div>
                    </div>
                    <div class="office-info-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="margin-right: 12px;">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" fill="#1f2937"/>
                        </svg>
                        <div>
                            <strong>Business Hours:</strong>
                            <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                            <p>Saturday: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="office-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.5!2d-61.2833!3d10.6333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDM4JzAwLjAiTiA2McKwMTcnMDAuMCJX!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus" 
                    width="100%" 
                    height="100%" 
                    style="border:0; border-radius: 12px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget">
    <div class="chat-notification"></div>
    <div class="chat-icon">💬</div>
    <div class="chat-text">
        <strong>Talk with Us</strong>
        <span>We're here to help!</span>
    </div>
</div>

<!-- Scroll to Top Button -->
<div class="scroll-top" id="scrollTop">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M10 15V5M5 10L10 5L15 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
