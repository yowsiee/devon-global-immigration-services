    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Dev's Domain</h3>
                    <p>Professional IT solutions tailored to your business needs.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo Base_URL; ?>">Home</a></li>
                        <li><a href="<?php echo Base_URL; ?>/about">About</a></li>
                        <li><a href="<?php echo Base_URL; ?>/services">Services</a></li>
                        <li><a href="<?php echo Base_URL; ?>/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>Email: info@devsdomain.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
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
                <p>&copy; <?php echo date('Y'); ?> Dev's Domain. All rights reserved.</p>
                <p class="footer-seo-links">
                    <a href="<?php echo Base_URL; ?>/sitemap.xml" rel="sitemap">Sitemap</a> | 
                    <a href="<?php echo Base_URL; ?>/robots.txt" rel="nofollow">Robots.txt</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Book Consultation Modal -->
    <div id="consultationModal" class="consultation-modal">
        <div class="consultation-modal-content">
            <div class="consultation-modal-header">
                <h2>Book Your Free Consultation</h2>
                <p class="consultation-subtitle">Let's discuss your project and explore how we can help you succeed.</p>
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
                        <label for="consultation_phone">PHONE NUMBER</label>
                        <input type="tel" id="consultation_phone" name="phone" class="consultation-input">
                    </div>
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_company">COMPANY NAME</label>
                    <input type="text" id="consultation_company" name="company" class="consultation-input">
                </div>
                <div class="consultation-form-row">
                    <div class="consultation-form-group">
                        <label for="consultation_service">SERVICE INTEREST *</label>
                        <select id="consultation_service" name="service" class="consultation-input consultation-select" required>
                            <option value="">Choose your service</option>
                            <?php
                            // Get services for dropdown
                            $servicesFile = __DIR__ . '/../../application/data/services.json';
                            $services = [];
                            if(file_exists($servicesFile)){
                                $services = json_decode(file_get_contents($servicesFile), true) ?? [];
                            }
                            $visibilityFile = __DIR__ . '/../../application/data/services_visibility.json';
                            $visibility = [];
                            if(file_exists($visibilityFile)){
                                $visibility = json_decode(file_get_contents($visibilityFile), true) ?? [];
                            }
                            foreach($services as $key => $service) {
                                $isVisible = isset($visibility[$key]) ? (bool)$visibility[$key] : (isset($service['visible']) ? (bool)$service['visible'] : true);
                                if($isVisible) {
                                    echo '<option value="' . htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8') . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="consultation-form-group">
                        <label for="consultation_budget">PROJECT BUDGET</label>
                        <select id="consultation_budget" name="budget" class="consultation-input consultation-select">
                            <option value="">Select your budget range</option>
                            <option value="Under $5,000">Under $5,000</option>
                            <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                            <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                            <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                            <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                            <option value="Over $100,000">Over $100,000</option>
                        </select>
                    </div>
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_timeline">PROJECT TIMELINE</label>
                    <select id="consultation_timeline" name="timeline" class="consultation-input consultation-select">
                        <option value="">Choose your timeline</option>
                        <option value="ASAP">ASAP</option>
                        <option value="1-2 months">1-2 months</option>
                        <option value="3-6 months">3-6 months</option>
                        <option value="6-12 months">6-12 months</option>
                        <option value="Planning stage">Planning stage</option>
                    </select>
                </div>
                <div class="consultation-form-group">
                    <label for="consultation_details">PROJECT DETAILS *</label>
                    <textarea id="consultation_details" name="details" class="consultation-input consultation-textarea" rows="5" required placeholder="Tell us about your project, goals, and any specific requirements..."></textarea>
                </div>
                <div class="consultation-form-actions">
                    <button type="button" class="btn-consultation-cancel" id="cancelConsultationBtn">Cancel</button>
                    <button type="submit" class="btn-consultation-submit">Book Consultation</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo Base_URL; ?>/js/app.js"></script>
</body>
</html>
