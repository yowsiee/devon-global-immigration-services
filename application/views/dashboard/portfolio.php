<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Portfolio Management'; ?></title>
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
            <a href="<?php echo Base_URL; ?>/dashboard/services" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Services</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/portfolio" class="nav-item active">
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
                    <input type="text" placeholder="Search portfolio...">
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
                        <h1>Portfolio Management</h1>
                        <p>Control which portfolio items are visible on the public portfolio page</p>
                    </div>
                    <button id="addPortfolioBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Portfolio Item
                    </button>
                </div>
            </div>

            <!-- Add Portfolio Form Modal -->
            <div id="addPortfolioModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Add New Portfolio Item</h2>
                        <button class="service-modal-close" id="closePortfolioModal">&times;</button>
                    </div>
                    <form id="addPortfolioForm" class="service-form">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="portfolio_type">Item Type *</label>
                            <select id="portfolio_type" name="type" class="form-control" required>
                                <option value="">Select type...</option>
                                <option value="category">Category</option>
                                <option value="featured_project">Featured Project</option>
                                <option value="github_repo">GitHub Repository</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="portfolio_title">Title *</label>
                            <input type="text" id="portfolio_title" name="title" class="form-control" required placeholder="e.g., Website Design & Development">
                        </div>
                        <div class="form-group" id="portfolio_description_group">
                            <label for="portfolio_description">Description</label>
                            <textarea id="portfolio_description" name="description" class="form-control" rows="4" placeholder="Describe the portfolio item..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="portfolio_icon">Icon (Emoji) *</label>
                            <input type="text" id="portfolio_icon" name="icon" class="form-control" required placeholder="e.g., 🖥️" maxlength="2">
                            <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                        </div>
                        <div class="form-row" id="portfolio_iconBg_group">
                            <div class="form-group">
                                <label for="portfolio_iconBg">Icon Background</label>
                                <select id="portfolio_iconBg" name="iconBg" class="form-control">
                                    <option value="icon-purple">Purple</option>
                                    <option value="icon-pink">Pink</option>
                                    <option value="icon-blue">Blue</option>
                                    <option value="icon-green">Green</option>
                                    <option value="icon-orange">Orange</option>
                                    <option value="icon-teal">Teal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="portfolio_gradient">Gradient Style</label>
                                <select id="portfolio_gradient" name="gradient" class="form-control">
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
                        <div class="form-row" id="portfolio_headerBg_group" style="display: none;">
                            <div class="form-group">
                                <label for="portfolio_headerBg">Header Background</label>
                                <select id="portfolio_headerBg" name="headerBg" class="form-control">
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
                        <div class="form-group" id="portfolio_projects_group">
                            <label for="portfolio_projects">Projects (comma-separated)</label>
                            <input type="text" id="portfolio_projects" name="projects" class="form-control" placeholder="e.g., Project 1, Project 2, Project 3">
                            <small style="color: #718096; font-size: 0.85rem;">Separate projects with commas</small>
                        </div>
                        <div class="form-group" id="portfolio_technologies_group">
                            <label for="portfolio_technologies">Technologies (comma-separated)</label>
                            <input type="text" id="portfolio_technologies" name="technologies" class="form-control" placeholder="e.g., HTML/CSS, JavaScript, PHP">
                            <small style="color: #718096; font-size: 0.85rem;">Separate technologies with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="portfolio_visible" name="visible" value="1" checked>
                                <span>Make portfolio item visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelPortfolioBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Portfolio Item</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Portfolio Form Modal -->
            <div id="editPortfolioModal" class="service-modal" style="display: none;">
                <div class="service-modal-content">
                    <div class="service-modal-header">
                        <h2>Edit Portfolio Item</h2>
                        <button class="service-modal-close" id="closeEditPortfolioModal">&times;</button>
                    </div>
                    <form id="editPortfolioForm" class="service-form">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="portfolio_key" id="edit_portfolio_key">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="edit_portfolio_type">Item Type *</label>
                            <select id="edit_portfolio_type" name="type" class="form-control" required>
                                <option value="">Select type...</option>
                                <option value="category">Category</option>
                                <option value="featured_project">Featured Project</option>
                                <option value="github_repo">GitHub Repository</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_portfolio_title">Title *</label>
                            <input type="text" id="edit_portfolio_title" name="title" class="form-control" required placeholder="e.g., Website Design & Development">
                        </div>
                        <div class="form-group" id="edit_portfolio_description_group">
                            <label for="edit_portfolio_description">Description</label>
                            <textarea id="edit_portfolio_description" name="description" class="form-control" rows="4" placeholder="Describe the portfolio item..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_portfolio_icon">Icon (Emoji) *</label>
                            <input type="text" id="edit_portfolio_icon" name="icon" class="form-control" required placeholder="e.g., 🖥️" maxlength="2">
                            <small style="color: #718096; font-size: 0.85rem;">Enter an emoji or symbol</small>
                        </div>
                        <div class="form-row" id="edit_portfolio_iconBg_group">
                            <div class="form-group">
                                <label for="edit_portfolio_iconBg">Icon Background</label>
                                <select id="edit_portfolio_iconBg" name="iconBg" class="form-control">
                                    <option value="icon-purple">Purple</option>
                                    <option value="icon-pink">Pink</option>
                                    <option value="icon-blue">Blue</option>
                                    <option value="icon-green">Green</option>
                                    <option value="icon-orange">Orange</option>
                                    <option value="icon-teal">Teal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_portfolio_gradient">Gradient Style</label>
                                <select id="edit_portfolio_gradient" name="gradient" class="form-control">
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
                        <div class="form-row" id="edit_portfolio_headerBg_group" style="display: none;">
                            <div class="form-group">
                                <label for="edit_portfolio_headerBg">Header Background</label>
                                <select id="edit_portfolio_headerBg" name="headerBg" class="form-control">
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
                        <div class="form-group" id="edit_portfolio_projects_group">
                            <label for="edit_portfolio_projects">Projects (comma-separated)</label>
                            <input type="text" id="edit_portfolio_projects" name="projects" class="form-control" placeholder="e.g., Project 1, Project 2, Project 3">
                            <small style="color: #718096; font-size: 0.85rem;">Separate projects with commas</small>
                        </div>
                        <div class="form-group" id="edit_portfolio_technologies_group">
                            <label for="edit_portfolio_technologies">Technologies (comma-separated)</label>
                            <input type="text" id="edit_portfolio_technologies" name="technologies" class="form-control" placeholder="e.g., HTML/CSS, JavaScript, PHP">
                            <small style="color: #718096; font-size: 0.85rem;">Separate technologies with commas</small>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="edit_portfolio_visible" name="visible" value="1">
                                <span>Make portfolio item visible on public page</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelEditPortfolioBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Portfolio Item</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="services-management-grid">
                <?php foreach($portfolio as $key => $item): ?>
                <div class="service-management-card <?php echo $item['visible'] ? 'service-visible' : 'service-hidden'; ?>" data-portfolio-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="service-card-header <?php echo htmlspecialchars($item['gradient'] ?? $item['headerBg'] ?? 'gradient-purple', ENT_QUOTES, 'UTF-8'); ?>">
                        <?php if(isset($item['iconBg'])): ?>
                            <div class="service-icon-wrapper <?php echo htmlspecialchars($item['iconBg'], ENT_QUOTES, 'UTF-8'); ?>">
                                <div class="service-icon"><?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                            </div>
                        <?php else: ?>
                            <div class="service-icon-wrapper">
                                <div class="service-icon"><?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="service-card-body">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                            <div style="flex: 1;">
                                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <span style="background: #4A5568; color: white; padding: 0.25rem 0.5rem; border-radius: 4px; font-size: 0.75rem; text-transform: uppercase; display: inline-block; margin-top: 0.25rem;">
                                    <?php echo htmlspecialchars($item['type'] ?? 'unknown', ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            </div>
                            <div style="display: flex; gap: 0.5rem;">
                                <button class="btn-edit-portfolio" data-portfolio-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Edit Portfolio Item" style="background: #4299e1; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    ✏️ Edit
                                </button>
                                <button class="btn-delete-portfolio" data-portfolio-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>" title="Delete Portfolio Item" style="background: #e53e3e; color: white; border: none; padding: 0.25rem 0.5rem; border-radius: 4px; cursor: pointer; font-size: 0.75rem;">
                                    🗑️ Delete
                                </button>
                            </div>
                        </div>
                        <?php if(isset($item['description']) && !empty($item['description'])): ?>
                            <p><?php echo htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                        <?php if(isset($item['projects']) && is_array($item['projects']) && !empty($item['projects'])): ?>
                            <div class="service-tags" style="margin-top: 0.5rem;">
                                <strong style="font-size: 0.85rem; color: #718096;">Projects:</strong>
                                <?php foreach($item['projects'] as $project): ?>
                                    <span class="service-tag"><?php echo htmlspecialchars($project, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($item['technologies']) && is_array($item['technologies']) && !empty($item['technologies'])): ?>
                            <div class="service-tags" style="margin-top: 0.5rem;">
                                <strong style="font-size: 0.85rem; color: #718096;">Technologies:</strong>
                                <?php foreach($item['technologies'] as $tech): ?>
                                    <span class="service-tag"><?php echo htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="service-visibility-control" style="margin-top: 1rem;">
                            <label class="toggle-switch">
                                <input type="checkbox" 
                                       class="portfolio-toggle" 
                                       data-portfolio-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"
                                       <?php echo $item['visible'] ? 'checked' : ''; ?>>
                                <span class="toggle-slider"></span>
                            </label>
                            <span class="visibility-status">
                                <span class="status-indicator <?php echo $item['visible'] ? 'status-visible' : 'status-hidden'; ?>"></span>
                                <?php echo $item['visible'] ? 'Visible' : 'Hidden'; ?>
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
            const modal = document.getElementById('addPortfolioModal');
            const addBtn = document.getElementById('addPortfolioBtn');
            const closeBtn = document.getElementById('closePortfolioModal');
            const cancelBtn = document.getElementById('cancelPortfolioBtn');
            const form = document.getElementById('addPortfolioForm');
            const typeSelect = document.getElementById('portfolio_type');
            
            // Show/hide fields based on type
            function updateFormFields() {
                const type = typeSelect.value;
                const iconBgGroup = document.getElementById('portfolio_iconBg_group');
                const headerBgGroup = document.getElementById('portfolio_headerBg_group');
                const projectsGroup = document.getElementById('portfolio_projects_group');
                const technologiesGroup = document.getElementById('portfolio_technologies_group');
                const descriptionGroup = document.getElementById('portfolio_description_group');
                
                if(type === 'category') {
                    iconBgGroup.style.display = 'flex';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'block';
                    technologiesGroup.style.display = 'block';
                    descriptionGroup.style.display = 'block';
                } else if(type === 'featured_project') {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'flex';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'block';
                    descriptionGroup.style.display = 'block';
                } else if(type === 'github_repo') {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'none';
                    descriptionGroup.style.display = 'none';
                } else {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'none';
                    descriptionGroup.style.display = 'none';
                }
            }
            
            typeSelect.addEventListener('change', updateFormFields);
            
            // Open modal
            if(addBtn) {
                addBtn.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                    updateFormFields();
                });
            }
            
            // Close modal
            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = '';
                form.reset();
                updateFormFields();
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
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/addPortfolio', {
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
                            
                            // Reload page to show new portfolio item
                            window.location.reload();
                        } else {
                            alert('Error: ' + (result.message || 'Failed to add portfolio item'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error adding portfolio item. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }
            
            // Portfolio visibility toggle
            const toggles = document.querySelectorAll('.portfolio-toggle');
            
            toggles.forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const portfolioKey = this.getAttribute('data-portfolio-key');
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
                    fetch('<?php echo Base_URL; ?>/dashboard/togglePortfolio', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'portfolio_key=' + encodeURIComponent(portfolioKey) + 
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
                            alert('Error: ' + (data.message || 'Failed to update portfolio visibility'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // Revert on error
                        this.checked = !isVisible;
                        alert('Error updating portfolio visibility. Please try again.');
                    });
                });
            });

            // Edit Portfolio functionality
            const editModal = document.getElementById('editPortfolioModal');
            const editForm = document.getElementById('editPortfolioForm');
            const editBtns = document.querySelectorAll('.btn-edit-portfolio');
            const closeEditBtn = document.getElementById('closeEditPortfolioModal');
            const cancelEditBtn = document.getElementById('cancelEditPortfolioBtn');
            const editTypeSelect = document.getElementById('edit_portfolio_type');
            const portfolioData = <?php echo json_encode($portfolio); ?>;

            function updateEditFormFields() {
                const type = editTypeSelect.value;
                const iconBgGroup = document.getElementById('edit_portfolio_iconBg_group');
                const headerBgGroup = document.getElementById('edit_portfolio_headerBg_group');
                const projectsGroup = document.getElementById('edit_portfolio_projects_group');
                const technologiesGroup = document.getElementById('edit_portfolio_technologies_group');
                const descriptionGroup = document.getElementById('edit_portfolio_description_group');
                
                if(type === 'category') {
                    iconBgGroup.style.display = 'flex';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'block';
                    technologiesGroup.style.display = 'block';
                    descriptionGroup.style.display = 'block';
                } else if(type === 'featured_project') {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'flex';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'block';
                    descriptionGroup.style.display = 'block';
                } else if(type === 'github_repo') {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'none';
                    descriptionGroup.style.display = 'none';
                } else {
                    iconBgGroup.style.display = 'none';
                    headerBgGroup.style.display = 'none';
                    projectsGroup.style.display = 'none';
                    technologiesGroup.style.display = 'none';
                    descriptionGroup.style.display = 'none';
                }
            }

            function openEditModal(portfolioKey) {
                const item = portfolioData[portfolioKey];
                if(!item) return;

                // Populate form
                document.getElementById('edit_portfolio_key').value = portfolioKey;
                document.getElementById('edit_portfolio_type').value = item.type || '';
                document.getElementById('edit_portfolio_title').value = item.title || '';
                document.getElementById('edit_portfolio_description').value = item.description || '';
                document.getElementById('edit_portfolio_icon').value = item.icon || '';
                document.getElementById('edit_portfolio_iconBg').value = item.iconBg || 'icon-purple';
                document.getElementById('edit_portfolio_headerBg').value = item.headerBg || 'gradient-purple';
                document.getElementById('edit_portfolio_gradient').value = item.gradient || 'gradient-purple';
                document.getElementById('edit_portfolio_projects').value = (item.projects && Array.isArray(item.projects)) ? item.projects.join(', ') : '';
                document.getElementById('edit_portfolio_technologies').value = (item.technologies && Array.isArray(item.technologies)) ? item.technologies.join(', ') : '';
                document.getElementById('edit_portfolio_visible').checked = item.visible || false;

                updateEditFormFields();
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
                    const portfolioKey = this.getAttribute('data-portfolio-key');
                    openEditModal(portfolioKey);
                });
            });

            if(closeEditBtn) closeEditBtn.addEventListener('click', closeEditModal);
            if(cancelEditBtn) cancelEditBtn.addEventListener('click', closeEditModal);
            if(editTypeSelect) editTypeSelect.addEventListener('change', updateEditFormFields);

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
                    
                    fetch('<?php echo Base_URL; ?>/dashboard/editPortfolio', {
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
                            alert('Error: ' + (result.message || 'Failed to update portfolio item'));
                            submitBtn.disabled = false;
                            submitBtn.textContent = originalText;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating portfolio item. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    });
                });
            }

            // Delete Portfolio functionality
            const deleteBtns = document.querySelectorAll('.btn-delete-portfolio');
            
            deleteBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const portfolioKey = this.getAttribute('data-portfolio-key');
                    const item = portfolioData[portfolioKey];
                    
                    if(confirm('Are you sure you want to delete "' + (item.title || portfolioKey) + '"? This action cannot be undone.')) {
                        const params = new URLSearchParams();
                        params.append('portfolio_key', portfolioKey);
                        params.append('csrf_token', '<?php echo Security::generateCsrfToken(); ?>');
                        
                        fetch('<?php echo Base_URL; ?>/dashboard/deletePortfolio', {
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
                                alert('Error: ' + (result.message || 'Failed to delete portfolio item'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error deleting portfolio item. Please try again.');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>

