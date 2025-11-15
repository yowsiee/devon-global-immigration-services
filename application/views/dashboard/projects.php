<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Projects Management'; ?></title>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/dashboard.css">
</head>
<body class="dashboard-page">
    <!-- Sidebar -->
    <aside class="dashboard-sidebar">
        <div class="sidebar-header">
            <h2>Dev's Domain</h2>
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
            <a href="<?php echo Base_URL; ?>/dashboard/projects" class="nav-item active">
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
            <a href="<?php echo Base_URL; ?>/dashboard/services" class="nav-item">
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
                    <input type="text" placeholder="Search projects...">
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
                        <h1>Projects Management</h1>
                        <p>Manage your portfolio projects and showcase your work</p>
                    </div>
                    <button id="addProjectBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Project
                    </button>
                </div>
            </div>

            <!-- Add Project Form Modal -->
            <div id="addProjectModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Add New Project</h2>
                        <button class="service-modal-close" id="closeProjectModal">&times;</button>
                    </div>
                    <form id="addProjectForm" class="service-form">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="project_title">Project Title *</label>
                            <input type="text" id="project_title" name="title" class="form-control" required placeholder="e.g., Modern Business Website">
                        </div>
                        <div class="form-group">
                            <label for="project_description">Description *</label>
                            <textarea id="project_description" name="description" class="form-control" rows="4" required placeholder="Describe the project..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="project_icon">Icon (Emoji) *</label>
                                <input type="text" id="project_icon" name="icon" class="form-control" required placeholder="e.g., 🖥️" maxlength="2">
                                <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                            </div>
                            <div class="form-group">
                                <label for="project_headerBg">Header Background</label>
                                <select id="project_headerBg" name="headerBg" class="form-control">
                                    <option value="gradient-purple">Purple</option>
                                    <option value="gradient-pink">Pink</option>
                                    <option value="gradient-blue">Blue</option>
                                    <option value="gradient-green">Green</option>
                                    <option value="gradient-orange-pink">Orange-Pink</option>
                                    <option value="gradient-pink-red">Pink-Red</option>
                                    <option value="gradient-teal-pink">Teal-Pink</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="project_status">Status</label>
                                <select id="project_status" name="status" class="form-control">
                                    <option value="completed">Completed</option>
                                    <option value="in-progress">In Progress</option>
                                    <option value="on-hold">On Hold</option>
                                    <option value="planned">Planned</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="project_category">Category</label>
                                <input type="text" id="project_category" name="category" class="form-control" placeholder="e.g., Web Development">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="project_client">Client</label>
                                <input type="text" id="project_client" name="client" class="form-control" placeholder="e.g., Company Name">
                            </div>
                            <div class="form-group">
                                <label for="project_date">Project Date</label>
                                <input type="date" id="project_date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project_url">Project URL</label>
                            <input type="url" id="project_url" name="url" class="form-control" placeholder="https://example.com">
                        </div>
                        <div class="form-group">
                            <label for="project_technologies">Technologies (comma-separated)</label>
                            <input type="text" id="project_technologies" name="technologies" class="form-control" placeholder="e.g., HTML/CSS, JavaScript, PHP">
                            <small style="color: #718096; font-size: 0.85rem;">Separate technologies with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="project_visible" name="visible" value="1" checked>
                                <span>Make project visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelProjectBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Project</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Project Form Modal -->
            <div id="editProjectModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Edit Project</h2>
                        <button class="service-modal-close" id="closeEditProjectModal">&times;</button>
                    </div>
                    <form id="editProjectForm" class="service-form">
                        <input type="hidden" name="project_key" id="edit_project_key">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="edit_project_title">Project Title *</label>
                            <input type="text" id="edit_project_title" name="title" class="form-control" required placeholder="e.g., Modern Business Website">
                        </div>
                        <div class="form-group">
                            <label for="edit_project_description">Description *</label>
                            <textarea id="edit_project_description" name="description" class="form-control" rows="4" required placeholder="Describe the project..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_project_icon">Icon (Emoji) *</label>
                                <input type="text" id="edit_project_icon" name="icon" class="form-control" required placeholder="e.g., 🖥️" maxlength="2">
                                <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                            </div>
                            <div class="form-group">
                                <label for="edit_project_headerBg">Header Background</label>
                                <select id="edit_project_headerBg" name="headerBg" class="form-control">
                                    <option value="gradient-purple">Purple</option>
                                    <option value="gradient-pink">Pink</option>
                                    <option value="gradient-blue">Blue</option>
                                    <option value="gradient-green">Green</option>
                                    <option value="gradient-orange-pink">Orange-Pink</option>
                                    <option value="gradient-pink-red">Pink-Red</option>
                                    <option value="gradient-teal-pink">Teal-Pink</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_project_status">Status</label>
                                <select id="edit_project_status" name="status" class="form-control">
                                    <option value="completed">Completed</option>
                                    <option value="in-progress">In Progress</option>
                                    <option value="on-hold">On Hold</option>
                                    <option value="planned">Planned</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_project_category">Category</label>
                                <input type="text" id="edit_project_category" name="category" class="form-control" placeholder="e.g., Web Development">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_project_client">Client</label>
                                <input type="text" id="edit_project_client" name="client" class="form-control" placeholder="e.g., Company Name">
                            </div>
                            <div class="form-group">
                                <label for="edit_project_date">Project Date</label>
                                <input type="date" id="edit_project_date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_project_url">Project URL</label>
                            <input type="url" id="edit_project_url" name="url" class="form-control" placeholder="https://example.com">
                        </div>
                        <div class="form-group">
                            <label for="edit_project_technologies">Technologies (comma-separated)</label>
                            <input type="text" id="edit_project_technologies" name="technologies" class="form-control" placeholder="e.g., HTML/CSS, JavaScript, PHP">
                            <small style="color: #718096; font-size: 0.85rem;">Separate technologies with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="edit_project_visible" name="visible" value="1">
                                <span>Make project visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelEditProjectBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Project</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="services-management-grid">
                <?php foreach($projects as $key => $project): ?>
                <div class="service-management-card <?php echo $project['visible'] ? 'service-visible' : 'service-hidden'; ?>" data-project-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="service-card-header <?php echo htmlspecialchars($project['headerBg'] ?? 'gradient-purple', ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="service-icon-wrapper">
                            <div class="service-icon"><?php echo htmlspecialchars($project['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                        </div>
                    </div>
                    <div class="service-card-body">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                            <div style="flex: 1;">
                                <h3><?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 0.25rem;">
                                    <?php if(!empty($project['status'])): ?>
                                        <span style="background: #4A5568; color: white; padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem; text-transform: capitalize;">
                                            <?php echo htmlspecialchars($project['status'], ENT_QUOTES, 'UTF-8'); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if(!empty($project['category'])): ?>
                                        <span style="background: #2D3748; color: white; padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem;">
                                            <?php echo htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div style="display: flex; gap: 0.5rem;">
                                <button class="btn-edit-project" data-project-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Edit Project" style="background: #4299e1; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    ✏️ Edit
                                </button>
                                <button class="btn-delete-project" data-project-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Delete Project" style="background: #e53e3e; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    🗑️ Delete
                                </button>
                            </div>
                        </div>
                        <p><?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php if(isset($project['technologies']) && is_array($project['technologies']) && !empty($project['technologies'])): ?>
                            <div class="service-tags" style="margin-top: 0.5rem;">
                                <?php foreach($project['technologies'] as $tech): ?>
                                    <span class="service-tag"><?php echo htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div style="margin-top: 0.75rem; font-size: 0.85rem; color: #718096;">
                            <?php if(!empty($project['client'])): ?>
                                <div><strong>Client:</strong> <?php echo htmlspecialchars($project['client'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <?php endif; ?>
                            <?php if(!empty($project['date'])): ?>
                                <div><strong>Date:</strong> <?php echo htmlspecialchars($project['date'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <?php endif; ?>
                            <?php if(!empty($project['url'])): ?>
                                <div><strong>URL:</strong> <a href="<?php echo htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" style="color: #4299e1;"><?php echo htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8'); ?></a></div>
                            <?php endif; ?>
                        </div>
                        <div class="service-visibility-control" style="margin-top: 1rem;">
                            <label class="toggle-switch">
                                <input type="checkbox" 
                                       class="project-toggle" 
                                       data-project-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"
                                       <?php echo $project['visible'] ? 'checked' : ''; ?>>
                                <span class="toggle-slider"></span>
                            </label>
                            <span class="visibility-status">
                                <span class="status-indicator <?php echo $project['visible'] ? 'status-visible' : 'status-hidden'; ?>"></span>
                                <?php echo $project['visible'] ? 'Visible' : 'Hidden'; ?>
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
            const modal = document.getElementById('addProjectModal');
            const addBtn = document.getElementById('addProjectBtn');
            const closeBtn = document.getElementById('closeProjectModal');
            const cancelBtn = document.getElementById('cancelProjectBtn');
            const form = document.getElementById('addProjectForm');
            
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
                    
                    const csrfToken = form.querySelector('input[name="csrf_token"]').value;
                    data.csrf_token = csrfToken;
                    
                    const params = new URLSearchParams();
                    Object.keys(data).forEach(key => {
                        params.append(key, data[key]);
                    });
                    
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Adding...';
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/addProject', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: params.toString()
                    })
                    .then(response => response.json())
                    .then(result => {
                        if(result.success) {
                            closeModal();
                            window.location.reload();
                        } else {
                            alert('Error: ' + (result.message || 'Failed to add project'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error adding project. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }
            
            // Project visibility toggle
            const toggles = document.querySelectorAll('.project-toggle');
            
            toggles.forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const projectKey = this.getAttribute('data-project-key');
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
                    fetch('<?php echo Base_URL; ?>/dashboard/toggleProject', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'project_key=' + encodeURIComponent(projectKey) + 
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
                            alert('Error: ' + (data.message || 'Failed to update project visibility'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.checked = !isVisible;
                        alert('Error updating project visibility. Please try again.');
                    });
                });
            });

            // Edit Project functionality
            const editModal = document.getElementById('editProjectModal');
            const editForm = document.getElementById('editProjectForm');
            const editBtns = document.querySelectorAll('.btn-edit-project');
            const closeEditBtn = document.getElementById('closeEditProjectModal');
            const cancelEditBtn = document.getElementById('cancelEditProjectBtn');
            const projectsData = <?php echo json_encode($projects); ?>;

            function openEditModal(projectKey) {
                const project = projectsData[projectKey];
                if(!project) return;

                // Populate form
                document.getElementById('edit_project_key').value = projectKey;
                document.getElementById('edit_project_title').value = project.title || '';
                document.getElementById('edit_project_description').value = project.description || '';
                document.getElementById('edit_project_icon').value = project.icon || '';
                document.getElementById('edit_project_headerBg').value = project.headerBg || 'gradient-purple';
                document.getElementById('edit_project_status').value = project.status || 'completed';
                document.getElementById('edit_project_category').value = project.category || '';
                document.getElementById('edit_project_client').value = project.client || '';
                document.getElementById('edit_project_date').value = project.date || '';
                document.getElementById('edit_project_url').value = project.url || '';
                document.getElementById('edit_project_technologies').value = (project.technologies && Array.isArray(project.technologies)) ? project.technologies.join(', ') : '';
                document.getElementById('edit_project_visible').checked = project.visible || false;

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
                    const projectKey = this.getAttribute('data-project-key');
                    openEditModal(projectKey);
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
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/editProject', {
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
                            alert('Error: ' + (result.message || 'Failed to update project'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating project. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // Delete Project functionality
            const deleteBtns = document.querySelectorAll('.btn-delete-project');
            
            deleteBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const projectKey = this.getAttribute('data-project-key');
                    const project = projectsData[projectKey];
                    
                    if(confirm('Are you sure you want to delete "' + (project.title || projectKey) + '"? This action cannot be undone.')) {
                        const params = new URLSearchParams();
                        params.append('project_key', projectKey);
                        params.append('csrf_token', '<?php echo Security::generateCsrfToken(); ?>');
                        
                        fetch('<?php echo Base_URL; ?>/dashboard/deleteProject', {
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
                                alert('Error: ' + (result.message || 'Failed to delete project'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error deleting project. Please try again.');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>


