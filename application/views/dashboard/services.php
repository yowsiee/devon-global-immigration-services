<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Services Management'; ?></title>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/dashboard.css">
</head>
<body class="dashboard-page">
    <!-- Sidebar -->
    <aside class="dashboard-sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="<?php echo Base_URL; ?>/images/logo.png" alt="DGIS Logo" onerror="this.style.display='none';">
            </div>
            <h2>DGIS</h2>
            <p>Admin Dashboard</p>
        </div>
        <nav class="sidebar-nav">
            <a href="<?php echo Base_URL; ?>/dashboard" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="2"/>
                    <polyline points="9 22 9 12 15 12 15 22" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/profile" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Profile</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/projects" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Projects</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/announcements" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="2"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Announcements</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/services" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Services</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/portfolio" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" stroke="currentColor" stroke-width="2"/>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96" stroke="currentColor" stroke-width="2"/>
                    <line x1="12" y1="22.08" x2="12" y2="12" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Portfolio</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/advertisements" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                    <path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Advertisements</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/settings" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6m9-9h-6m-6 0H3" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Settings</span>
            </a>
            <div class="nav-divider"></div>
            <a href="<?php echo Base_URL; ?>/login/logout" class="nav-item nav-item-logout">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke="currentColor" stroke-width="2"/>
                    <polyline points="16 17 21 12 16 7" stroke="currentColor" stroke-width="2"/>
                    <line x1="21" y1="12" x2="9" y2="12" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="dashboard-main">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="header-left">
                <div class="search-bar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                        <path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <input type="text" placeholder="Search services...">
                </div>
            </div>
            <div class="header-center">
                <nav class="dashboard-top-menu">
                    <a href="<?php echo Base_URL; ?>" class="top-menu-link" title="Home">
                        <span class="nav-icon">🏠</span>
                        <span class="nav-text">Home</span>
                    </a>
                    <a href="<?php echo Base_URL; ?>/about" class="top-menu-link" title="About Us">
                        <span class="nav-icon">ℹ️</span>
                        <span class="nav-text">About</span>
                    </a>
                    <a href="<?php echo Base_URL; ?>/services" class="top-menu-link" title="Services">
                        <span class="nav-icon">⚙️</span>
                        <span class="nav-text">Services</span>
                    </a>
                    <a href="<?php echo Base_URL; ?>/portfolio" class="top-menu-link" title="Portfolio">
                        <span class="nav-icon">💼</span>
                        <span class="nav-text">Portfolio</span>
                    </a>
                    <a href="<?php echo Base_URL; ?>/contact" class="top-menu-link" title="Contact">
                        <span class="nav-icon">✉️</span>
                        <span class="nav-text">Contact</span>
                    </a>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-time">
                    <span id="current-time"></span>
                    <span id="current-date"></span>
                </div>
                <button class="header-icon-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="2"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </button>
                <div class="header-user">
                    <div class="user-avatar">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                            <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span><?php echo htmlspecialchars($user_name ?? 'admin', ENT_QUOTES, 'UTF-8'); ?></span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <polyline points="6 9 12 15 18 9" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="dashboard-content">
            <div class="dashboard-page-header">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <h1>Services Management</h1>
                        <p>Control which services are visible on the public services page</p>
                    </div>
                    <button id="addServiceBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Service
                    </button>
                </div>
            </div>

            <!-- Add Service Form Modal -->
            <div id="addServiceModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Add New Service</h2>
                        <button class="service-modal-close" id="closeServiceModal">&times;</button>
                    </div>
                    <form id="addServiceForm" class="service-form">
                        <input type="hidden" name="action" value="add">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="service_title">Service Title *</label>
                            <input type="text" id="service_title" name="title" class="form-control" required placeholder="e.g., Cloud Services">
                        </div>
                        <div class="form-group">
                            <label for="service_description">Description *</label>
                            <textarea id="service_description" name="description" class="form-control" rows="4" required placeholder="Describe the service..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="service_icon">Icon (Emoji) *</label>
                                <input type="text" id="service_icon" name="icon" class="form-control" required placeholder="e.g., ☁️" maxlength="2">
                                <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                            </div>
                            <div class="form-group">
                                <label for="service_iconColor">Icon Color</label>
                                <select id="service_iconColor" name="iconColor" class="form-control">
                                    <option value="icon-purple">Purple</option>
                                    <option value="icon-pink">Pink</option>
                                    <option value="icon-blue">Blue</option>
                                    <option value="icon-green">Green</option>
                                    <option value="icon-orange">Orange</option>
                                    <option value="icon-teal">Teal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="service_gradient">Gradient Style</label>
                                <select id="service_gradient" name="gradient" class="form-control">
                                    <option value="gradient-purple">Purple</option>
                                    <option value="gradient-pink">Pink</option>
                                    <option value="gradient-blue">Blue</option>
                                    <option value="gradient-green">Green</option>
                                    <option value="gradient-orange-pink">Orange-Pink</option>
                                    <option value="gradient-pink-red">Pink-Red</option>
                                    <option value="gradient-teal-pink">Teal-Pink</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="service_buttonColor">Button Color</label>
                                <select id="service_buttonColor" name="buttonColor" class="form-control">
                                    <option value="btn-purple">Purple</option>
                                    <option value="btn-pink">Pink</option>
                                    <option value="btn-blue">Blue</option>
                                    <option value="btn-red">Red</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service_tags">Tags (comma-separated)</label>
                            <input type="text" id="service_tags" name="tags" class="form-control" placeholder="e.g., Tag1, Tag2, Tag3">
                            <small style="color: #718096; font-size: 0.85rem;">Separate tags with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="service_visible" name="visible" value="1" checked>
                                <span>Make service visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelServiceBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Service</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Service Form Modal -->
            <div id="editServiceModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Edit Service</h2>
                        <button class="service-modal-close" id="closeEditServiceModal">&times;</button>
                    </div>
                    <form id="editServiceForm" class="service-form">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="service_key" id="edit_service_key">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="edit_service_title">Service Title *</label>
                            <input type="text" id="edit_service_title" name="title" class="form-control" required placeholder="e.g., Cloud Services">
                        </div>
                        <div class="form-group">
                            <label for="edit_service_description">Description *</label>
                            <textarea id="edit_service_description" name="description" class="form-control" rows="4" required placeholder="Describe the service..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_service_icon">Icon (Emoji) *</label>
                                <input type="text" id="edit_service_icon" name="icon" class="form-control" required placeholder="e.g., ☁️" maxlength="2">
                                <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                            </div>
                            <div class="form-group">
                                <label for="edit_service_iconColor">Icon Color</label>
                                <select id="edit_service_iconColor" name="iconColor" class="form-control">
                                    <option value="icon-purple">Purple</option>
                                    <option value="icon-pink">Pink</option>
                                    <option value="icon-blue">Blue</option>
                                    <option value="icon-green">Green</option>
                                    <option value="icon-orange">Orange</option>
                                    <option value="icon-teal">Teal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_service_gradient">Gradient Style</label>
                                <select id="edit_service_gradient" name="gradient" class="form-control">
                                    <option value="gradient-purple">Purple</option>
                                    <option value="gradient-pink">Pink</option>
                                    <option value="gradient-blue">Blue</option>
                                    <option value="gradient-green">Green</option>
                                    <option value="gradient-orange-pink">Orange-Pink</option>
                                    <option value="gradient-pink-red">Pink-Red</option>
                                    <option value="gradient-teal-pink">Teal-Pink</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_service_buttonColor">Button Color</label>
                                <select id="edit_service_buttonColor" name="buttonColor" class="form-control">
                                    <option value="btn-purple">Purple</option>
                                    <option value="btn-pink">Pink</option>
                                    <option value="btn-blue">Blue</option>
                                    <option value="btn-red">Red</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_service_tags">Tags (comma-separated)</label>
                            <input type="text" id="edit_service_tags" name="tags" class="form-control" placeholder="e.g., Tag1, Tag2, Tag3">
                            <small style="color: #718096; font-size: 0.85rem;">Separate tags with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="edit_service_visible" name="visible" value="1">
                                <span>Make service visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelEditServiceBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="services-management-grid">
                <?php foreach($services as $key => $service): ?>
                <div class="service-management-card <?php echo $service['visible'] ? 'service-visible' : 'service-hidden'; ?>" data-service-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="service-card-header <?php echo htmlspecialchars($service['gradient'], ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="service-icon-wrapper <?php echo htmlspecialchars($service['iconColor'], ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="service-icon"><?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                        </div>
                    </div>
                    <div class="service-card-body">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                            <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <div style="display: flex; gap: 0.5rem;">
                                <button class="btn-edit-service" data-service-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Edit Service" style="background: #4299e1; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    ✏️ Edit
                                </button>
                                <button class="btn-delete-service" data-service-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Delete Service" style="background: #e53e3e; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    🗑️ Delete
                                </button>
                            </div>
                        </div>
                        <p><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <div class="service-tags">
                            <?php if(isset($service['tags']) && is_array($service['tags'])): ?>
                                <?php foreach($service['tags'] as $tag): ?>
                                    <span class="service-tag"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="service-visibility-control">
                            <label class="toggle-switch">
                                <input type="checkbox" 
                                       class="service-toggle" 
                                       data-service-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"
                                       <?php echo $service['visible'] ? 'checked' : ''; ?>>
                                <span class="toggle-slider"></span>
                            </label>
                            <span class="visibility-status">
                                <span class="status-indicator <?php echo $service['visible'] ? 'status-visible' : 'status-hidden'; ?>"></span>
                                <?php echo $service['visible'] ? 'Visible' : 'Hidden'; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <script src="<?php echo Base_URL; ?>/js/dashboard.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('addServiceModal');
            const addBtn = document.getElementById('addServiceBtn');
            const closeBtn = document.getElementById('closeServiceModal');
            const cancelBtn = document.getElementById('cancelServiceBtn');
            const form = document.getElementById('addServiceForm');
            const servicesGrid = document.querySelector('.services-management-grid');
            
            // Open modal
            if(addBtn) {
                addBtn.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            }
            
            // Close modal
            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = '';
                form.reset();
            }
            
            if(closeBtn) closeBtn.addEventListener('click', closeModal);
            if(cancelBtn) cancelBtn.addEventListener('click', closeModal);
            
            // Close on outside click
            modal.addEventListener('click', function(e) {
                if(e.target === modal) {
                    closeModal();
                }
            });
            
            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if(e.key === 'Escape' && modal.style.display === 'flex') {
                    closeModal();
                }
            });
            
            // Form submission
            if(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(form);
                    const data = {};
                    formData.forEach((value, key) => {
                        data[key] = value;
                    });
                    
                    // Get CSRF token
                    const csrfToken = form.querySelector('input[name="csrf_token"]').value;
                    data.csrf_token = csrfToken;
                    
                    // Build query string
                    const params = new URLSearchParams();
                    Object.keys(data).forEach(key => {
                        params.append(key, data[key]);
                    });
                    
                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Adding...';
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/addService', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: params.toString()
                    })
                    .then(response => response.json())
                    .then(result => {
                        if(result.success) {
                            // Close modal
                            closeModal();
                            
                            // Reload page to show new service
                            window.location.reload();
                        } else {
                            alert('Error: ' + (result.message || 'Failed to add service'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error adding service. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }
            
            // Service visibility toggle
            const toggles = document.querySelectorAll('.service-toggle');
            
            toggles.forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const serviceKey = this.getAttribute('data-service-key');
                    const isVisible = this.checked;
                    const card = this.closest('.service-management-card');
                    const statusIndicator = card.querySelector('.status-indicator');
                    const statusText = card.querySelector('.visibility-status span:last-child');
                    
                    // Optimistic UI update
                    if(isVisible) {
                        card.classList.remove('service-hidden');
                        card.classList.add('service-visible');
                        statusIndicator.classList.remove('status-hidden');
                        statusIndicator.classList.add('status-visible');
                        statusText.textContent = 'Visible';
                    } else {
                        card.classList.remove('service-visible');
                        card.classList.add('service-hidden');
                        statusIndicator.classList.remove('status-visible');
                        statusIndicator.classList.add('status-hidden');
                        statusText.textContent = 'Hidden';
                    }
                    
                    // Send AJAX request
                    fetch('<?php echo Base_URL; ?>/dashboard/toggleService', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'service_key=' + encodeURIComponent(serviceKey) + 
                              '&visible=' + (isVisible ? '1' : '0') +
                              '&csrf_token=<?php echo Security::generateCsrfToken(); ?>'
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(!data.success) {
                            // Revert on error
                            this.checked = !isVisible;
                            if(isVisible) {
                                card.classList.remove('service-visible');
                                card.classList.add('service-hidden');
                                statusIndicator.classList.remove('status-visible');
                                statusIndicator.classList.add('status-hidden');
                                statusText.textContent = 'Hidden';
                            } else {
                                card.classList.remove('service-hidden');
                                card.classList.add('service-visible');
                                statusIndicator.classList.remove('status-hidden');
                                statusIndicator.classList.add('status-visible');
                                statusText.textContent = 'Visible';
                            }
                            alert('Error: ' + (data.message || 'Failed to update service visibility'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // Revert on error
                        this.checked = !isVisible;
                        alert('Error updating service visibility. Please try again.');
                    });
                });
            });

            // Edit Service functionality
            const editModal = document.getElementById('editServiceModal');
            const editForm = document.getElementById('editServiceForm');
            const editBtns = document.querySelectorAll('.btn-edit-service');
            const closeEditBtn = document.getElementById('closeEditServiceModal');
            const cancelEditBtn = document.getElementById('cancelEditServiceBtn');
            const servicesData = <?php echo json_encode($services); ?>;

            function openEditModal(serviceKey) {
                const service = servicesData[serviceKey];
                if(!service) return;

                // Populate form
                document.getElementById('edit_service_key').value = serviceKey;
                document.getElementById('edit_service_title').value = service.title || '';
                document.getElementById('edit_service_description').value = service.description || '';
                document.getElementById('edit_service_icon').value = service.icon || '';
                document.getElementById('edit_service_iconColor').value = service.iconColor || 'icon-purple';
                document.getElementById('edit_service_gradient').value = service.gradient || 'gradient-purple';
                document.getElementById('edit_service_buttonColor').value = service.buttonColor || 'btn-purple';
                document.getElementById('edit_service_tags').value = (service.tags && Array.isArray(service.tags)) ? service.tags.join(', ') : '';
                document.getElementById('edit_service_visible').checked = service.visible || false;

                editModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeEditModal() {
                editModal.style.display = 'none';
                document.body.style.overflow = '';
                editForm.reset();
            }

            editBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const serviceKey = this.getAttribute('data-service-key');
                    openEditModal(serviceKey);
                });
            });

            if(closeEditBtn) closeEditBtn.addEventListener('click', closeEditModal);
            if(cancelEditBtn) cancelEditBtn.addEventListener('click', closeEditModal);

            editModal.addEventListener('click', function(e) {
                if(e.target === editModal) {
                    closeEditModal();
                }
            });

            // Edit form submission
            if(editForm) {
                editForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(editForm);
                    const data = {};
                    formData.forEach((value, key) => {
                        data[key] = value;
                    });
                    
                    const csrfToken = editForm.querySelector('input[name="csrf_token"]').value;
                    data.csrf_token = csrfToken;
                    
                    const params = new URLSearchParams();
                    Object.keys(data).forEach(key => {
                        params.append(key, data[key]);
                    });
                    
                    const submitBtn = editForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Updating...';
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/editService', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: params.toString()
                    })
                    .then(response => response.json())
                    .then(result => {
                        if(result.success) {
                            closeEditModal();
                            window.location.reload();
                        } else {
                            alert('Error: ' + (result.message || 'Failed to update service'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating service. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // Delete Service functionality
            const deleteBtns = document.querySelectorAll('.btn-delete-service');
            
            deleteBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const serviceKey = this.getAttribute('data-service-key');
                    const service = servicesData[serviceKey];
                    
                    if(confirm('Are you sure you want to delete "' + (service.title || serviceKey) + '"? This action cannot be undone.')) {
                        const params = new URLSearchParams();
                        params.append('service_key', serviceKey);
                        params.append('csrf_token', '<?php echo Security::generateCsrfToken(); ?>');
                        
                        fetch('<?php echo Base_URL; ?>/dashboard/deleteService', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: params.toString()
                        })
                        .then(response => response.json())
                        .then(result => {
                            if(result.success) {
                                window.location.reload();
                            } else {
                                alert('Error: ' + (result.message || 'Failed to delete service'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error deleting service. Please try again.');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>

