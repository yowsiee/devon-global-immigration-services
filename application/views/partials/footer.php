    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <a href="<?php echo Base_URL; ?>" style="display: inline-block; margin-bottom: 16px;">
                        <img src="<?php echo Base_URL; ?>/images/logo.png" alt="Devon Global Immigration Services Logo" style="height: 50px; width: auto; max-width: 100%; display: block; object-fit: contain;" onerror="this.style.display='none';">
                    </a>
                    <h3>Devon Global Immigration Services</h3>
                    <p>Licensed immigration consultants helping you achieve your Canadian immigration goals.</p>
                </div>
                <div class="footer-section">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="<?php echo Base_URL; ?>/services">Study Permits</a></li>
                        <li><a href="<?php echo Base_URL; ?>/services">Work Permits</a></li>
                        <li><a href="<?php echo Base_URL; ?>/services">Express Entry</a></li>
                        <li><a href="<?php echo Base_URL; ?>/services">Family Sponsorship</a></li>
                        <li><a href="<?php echo Base_URL; ?>/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><strong>Address:</strong><br>5-112 Elizabeth St.<br>Toronto, ON, Canada M5G1P9</p>
                    <p><strong>Phone:</strong> <a href="tel:3473247220" style="color: rgba(255,255,255,0.8);">347-324-7220</a></p>
                    <p><strong>Email:</strong> <a href="mailto:canada@ttworktravel.com" style="color: rgba(255,255,255,0.8);">canada@ttworktravel.com</a></p>
                    <p><strong>Hours:</strong><br>Mon - Fri 9:00 am - 5:00 pm<br>Saturday 9:00 am - 1:00 pm<br>Sunday CLOSED</p>
                </div>
                <div class="footer-section">
                    <h4>Admin Access</h4>
                    <div class="footer-login">
                        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']): ?>
                            <a href="<?php echo Base_URL; ?>/dashboard" class="btn-footer-link">Go to Dashboard</a>
                            <a href="<?php echo Base_URL; ?>/login/logout" class="btn-footer-link btn-footer-logout">Logout</a>
                        <?php else: ?>
                            <a href="<?php echo Base_URL; ?>/login" class="btn-footer-link">Admin Login</a>
                            <p class="footer-login-note">Access admin dashboard</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="footer-logos">
                        <div class="footer-logo-item">
                            <div class="footer-logo-text">CAPIC</div>
                        </div>
                        <div class="footer-logo-item">
                            <div class="footer-logo-text">RCIC-IRB</div>
                        </div>
                        <p class="footer-license-text">A proudly licensed Canadian immigration service.</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/devonglobalimmigration" target="_blank" rel="noopener noreferrer" class="footer-social-icon" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/devon-global-immigration-services" target="_blank" rel="noopener noreferrer" class="footer-social-icon" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/devonglobalimmigration" target="_blank" rel="noopener noreferrer" class="footer-social-icon" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </div>
                </div>
                <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Devon Global Immigration Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Book Consultation Modal -->
    <div id="consultationModal" class="consultation-modal">
        <div class="consultation-modal-content">
            <div class="consultation-modal-header">
                <h2>Free Immigration Assessment</h2>
                <p class="consultation-subtitle">Let's discuss your immigration goals and explore how we can help you succeed.</p>
                <button class="consultation-modal-close" id="closeConsultationModal" aria-label="Close modal">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <form id="consultationForm" class="consultation-form">
                <?php echo Security::csrfField(); ?>
                <div class="consultation-form-row">
                    <div class="consultation-form-group">
                        <label for="consultation_first_name">FIRST NAME *</label>
                        <input type="text" id="consultation_first_name" name="first_name" class="consultation-input" required>
                    </div>
                    <div class="consultation-form-group">
                        <label for="consultation_last_name">LAST NAME *</label>
                        <input type="text" id="consultation_last_name" name="last_name" class="consultation-input" required>
                    </div>
                </div>
                <div class="consultation-form-row">
                    <div class="consultation-form-group">
                        <label for="consultation_email">EMAIL ADDRESS *</label>
                        <input type="email" id="consultation_email" name="email" class="consultation-input" required>
                    </div>
                    <div class="consultation-form-group">
                        <label for="consultation_phone">PHONE NUMBER *</label>
                        <input type="tel" id="consultation_phone" name="phone" class="consultation-input" required>
                    </div>
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_service">SERVICE INTEREST *</label>
                    <select id="consultation_service" name="service" class="consultation-input consultation-select" required>
                        <option value="">Choose your service</option>
                        <option value="Study Permits">Study Permits</option>
                        <option value="Work Permits">Work Permits</option>
                        <option value="Express Entry">Express Entry</option>
                        <option value="Provincial Nomination Program">Provincial Nomination Program</option>
                        <option value="Business Immigration">Business Immigration</option>
                        <option value="Family Sponsorship">Family Sponsorship</option>
                        <option value="Permanent Residence">Permanent Residence</option>
                        <option value="Canadian Citizenship">Canadian Citizenship</option>
                        <option value="Citizenship by Investment">Citizenship by Investment</option>
                        <option value="Temporary Visa Services">Temporary Visa Services</option>
                        <option value="PR Card Renewal">PR Card Renewal</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_country">CURRENT COUNTRY</label>
                    <input type="text" id="consultation_country" name="country" class="consultation-input" placeholder="Your current country of residence">
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_details">TELL US ABOUT YOUR IMMIGRATION GOALS *</label>
                    <textarea id="consultation_details" name="details" class="consultation-input consultation-textarea" rows="5" required placeholder="Tell us about your immigration goals, timeline, current status, and any specific questions..."></textarea>
                </div>
                <div class="consultation-form-actions">
                    <button type="button" class="btn-consultation-cancel" id="cancelConsultationBtn">Cancel</button>
                    <button type="submit" class="btn-consultation-submit">Book Free Consultation</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo Base_URL; ?>/js/app.js" defer></script>
</body>
</html>
