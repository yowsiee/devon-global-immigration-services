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
            <div class="sidebar-logo">
                <img src="<?php echo Base_URL; ?>/images/logo.png" alt="DGIS Logo">
            </div>
            <h2>DGIS</h2>
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
            <a href="<?php echo Base_URL; ?>/dashboard/events" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Events</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/newsletters" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="2"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="7" x2="18" y2="7" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="11" x2="18" y2="11" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Newsletters</span>
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
            <div class="header-right">
                <a href="<?php echo Base_URL; ?>" class="header-view-site" target="_blank" title="View Website">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                    <span>View Site</span>
                </a>
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
            <div class="dashboard-welcome-section">
                <div class="welcome-content">
                    <h1 class="welcome-message">Welcome back, <?php echo htmlspecialchars($user_name ?? 'admin', ENT_QUOTES, 'UTF-8'); ?>!</h1>
                    <p class="welcome-subtitle">Manage your immigration services, events, and content from one place.</p>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon-wrapper stat-icon-navy">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['total_events'] ?? 0; ?></div>
                        <div class="stat-label">Total Events</div>
                        <div class="stat-change"><?php echo $stats['upcoming_events'] ?? 0; ?> upcoming</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon-wrapper stat-icon-red">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                            <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['upcoming_events'] ?? 0; ?></div>
                        <div class="stat-label">Upcoming Events</div>
                        <div class="stat-change">Scheduled events</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon-wrapper stat-icon-navy">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="2"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="7" x2="18" y2="7" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="11" x2="18" y2="11" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['total_newsletters'] ?? 0; ?></div>
                        <div class="stat-label">Total Newsletters</div>
                        <div class="stat-change">Published newsletters</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon-wrapper stat-icon-red">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="2"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="7" x2="18" y2="7" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="11" x2="18" y2="11" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number"><?php echo $stats['visible_newsletters'] ?? 0; ?></div>
                        <div class="stat-label">Visible Newsletters</div>
                        <div class="stat-change">Currently visible</div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions and Recent Activity -->
            <div class="dashboard-grid">
                <div class="quick-actions-section">
                    <h2 class="section-title">Quick Actions</h2>
                    <div class="quick-actions-grid">
                        <a href="<?php echo Base_URL; ?>/dashboard/events" class="quick-action-btn">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>Manage Events</h3>
                                <p>Add or edit upcoming events</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/dashboard/newsletters" class="quick-action-btn">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="2"/>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="7" x2="18" y2="7" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="11" x2="18" y2="11" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>Manage Newsletters</h3>
                                <p>Add or edit newsletters</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/events" target="_blank" class="quick-action-btn">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                    <polyline points="15 3 21 3 21 9"/>
                                    <line x1="10" y1="14" x2="21" y2="3"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>View Events Page</h3>
                                <p>See events on the website</p>
                            </div>
                        </a>
                        
                        <a href="<?php echo Base_URL; ?>/newsletters" target="_blank" class="quick-action-btn">
                            <div class="action-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                    <polyline points="15 3 21 3 21 9"/>
                                    <line x1="10" y1="14" x2="21" y2="3"/>
                                </svg>
                            </div>
                            <div class="action-content">
                                <h3>View Newsletters Page</h3>
                                <p>See newsletters on the website</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="recent-activity-section">
                    <h2 class="section-title">Recent Activity</h2>
                    <div class="activity-list">
                        <?php if(empty($recent_activity)): ?>
                            <div class="activity-empty">
                                <p>No recent activity</p>
                            </div>
                        <?php else: ?>
                            <?php foreach($recent_activity as $activity): ?>
                            <div class="activity-item">
                                <div class="activity-icon-badge activity-<?php echo htmlspecialchars($activity['type'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <?php if($activity['type'] === 'event'): ?>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6"/>
                                            <line x1="8" y1="2" x2="8" y2="6"/>
                                            <line x1="3" y1="10" x2="21" y2="10"/>
                                        </svg>
                                    <?php elseif($activity['type'] === 'newsletter'): ?>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="2"/>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="7" x2="18" y2="7" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="11" x2="18" y2="11" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    <?php else: ?>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12 6 12 12 16 14"/>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                                <div class="activity-content">
                                    <p class="activity-message"><?php echo htmlspecialchars($activity['message'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <span class="activity-time"><?php echo htmlspecialchars($activity['time'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo Base_URL; ?>/js/dashboard.js"></script>
</body>
</html>

