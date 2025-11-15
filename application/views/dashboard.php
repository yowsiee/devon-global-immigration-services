<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Dashboard'; ?></title>
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
            <a href="<?php echo Base_URL; ?>/dashboard" class="nav-item active">
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
                    <input type="text" placeholder="Search dashboard...">
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
            <h1 class="welcome-message">Welcome back, <?php echo htmlspecialchars($user_name ?? 'admin', ENT_QUOTES, 'UTF-8'); ?>! 👋</h1>
            
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon stat-icon-orange">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                            <polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['total_projects'] ?? 7; ?></div>
                        <div class="stat-label">Total Projects</div>
                        <div class="stat-change positive">+0% from last month</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon stat-icon-green">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['active_announcements'] ?? 3; ?></div>
                        <div class="stat-label">Active Announcements</div>
                        <div class="stat-change positive">+0% from last week</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon stat-icon-purple">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['active_services'] ?? 3; ?></div>
                        <div class="stat-label">Active Services</div>
                        <div class="stat-change positive">+2 new this month</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon stat-icon-red">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['active_ads'] ?? 4; ?></div>
                        <div class="stat-label">Active Ads</div>
                        <div class="stat-change positive">+5% engagement</div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions and Recent Activity -->
            <div class="dashboard-grid">
                <div class="quick-actions-section">
                    <h2 class="section-title">Quick Actions</h2>
                    <div class="quick-actions-grid">
                        <a href="<?php echo Base_URL; ?>/dashboard/projects/new" class="quick-action-btn quick-action-orange">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <line x1="12" y1="8" x2="12" y2="16" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="12" x2="16" y2="12" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>New Project</h3>
                                <p>Create a new project</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/dashboard/announcements/new" class="quick-action-btn quick-action-green">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="2"/>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>New Announcement</h3>
                                <p>Post an announcement</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/dashboard/services/new" class="quick-action-btn quick-action-purple">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>Add Service</h3>
                                <p>Create a new service</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/dashboard/advertisements/new" class="quick-action-btn quick-action-red">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>Create Ad</h3>
                                <p>Launch a new campaign</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="recent-activity-section">
                    <h2 class="section-title">Recent Activity</h2>
                    <div class="activity-list">
                        <?php foreach($recent_activity ?? [] as $activity): ?>
                        <div class="activity-item">
                            <div class="activity-icon activity-<?php echo htmlspecialchars($activity['type'], ENT_QUOTES, 'UTF-8'); ?>"></div>
                            <div class="activity-content">
                                <p class="activity-message"><?php echo htmlspecialchars($activity['message'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <span class="activity-time"><?php echo htmlspecialchars($activity['time'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo Base_URL; ?>/js/dashboard.js"></script>
</body>
</html>

