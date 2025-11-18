<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Events Management'; ?></title>
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Base_URL; ?>/css/dashboard.css">
</head>
<body class="dashboard-page">
    <!-- Sidebar -->
    <aside class="dashboard-sidebar">
        <div class="sidebar-header">
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
            <a href="<?php echo Base_URL; ?>/dashboard/services" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Services</span>
            </a>
            <a href="<?php echo Base_URL; ?>/dashboard/events" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Events</span>
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
                    <input type="text" id="searchEvents" placeholder="Search events...">
                </div>
            </div>
            <div class="header-right">
                <div class="header-user">
                    <div class="user-avatar">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                            <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span><?php echo htmlspecialchars($user_name ?? 'admin', ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="dashboard-content">
            <div class="dashboard-page-header">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <h1>Events Management</h1>
                        <p>Manage upcoming events and seminars</p>
                    </div>
                    <button id="addEventBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Event
                    </button>
                </div>
            </div>

            <!-- Add/Edit Event Form Modal -->
            <div id="eventModal" class="service-modal" style="display: none;">
                <div class="service-modal-content" style="max-width: 700px;">
                    <div class="service-modal-header">
                        <h2 id="modalTitle">Add New Event</h2>
                        <button class="service-modal-close" id="closeEventModal">&times;</button>
                    </div>
                    <form id="eventForm" class="service-form">
                        <input type="hidden" name="action" id="eventAction" value="add">
                        <input type="hidden" name="slug" id="eventSlug">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="event_title">Event Title *</label>
                            <input type="text" id="event_title" name="title" class="form-control" required placeholder="e.g., Canadian Permanent Residency: Express Entry Pathway">
                        </div>
                        <div class="form-group">
                            <label for="event_description">Description *</label>
                            <textarea id="event_description" name="description" class="form-control" rows="4" required placeholder="Describe the event..."></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="event_date">Date *</label>
                                <input type="date" id="event_date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="event_time">Time</label>
                                <input type="time" id="event_time" name="time" class="form-control" placeholder="e.g., 19:30">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="event_location">Location *</label>
                            <input type="text" id="event_location" name="location" class="form-control" required placeholder="e.g., Zoom Online">
                        </div>
                        <div class="form-group">
                            <label for="event_image">Image Filename</label>
                            <input type="text" id="event_image" name="image" class="form-control" placeholder="e.g., event-application-form.png">
                            <small style="color: #718096; font-size: 0.85rem;">Image should be in /public/images/ directory</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="event_startDate">Start Date & Time (ISO Format)</label>
                                <input type="datetime-local" id="event_startDate" name="startDate" class="form-control">
                                <small style="color: #718096; font-size: 0.85rem;">Optional: For structured data</small>
                            </div>
                            <div class="form-group">
                                <label for="event_endDate">End Date & Time (ISO Format)</label>
                                <input type="datetime-local" id="event_endDate" name="endDate" class="form-control">
                                <small style="color: #718096; font-size: 0.85rem;">Optional: For structured data</small>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelEventBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="submitEventBtn">Add Event</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Events List -->
            <div class="events-list-container">
                <?php if(empty($events)): ?>
                    <div class="empty-state">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 1rem; opacity: 0.5;">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <h3>No events yet</h3>
                        <p>Get started by adding your first event</p>
                        <button id="addFirstEventBtn" class="btn btn-primary" style="margin-top: 1rem;">Add Event</button>
                    </div>
                <?php else: ?>
                    <div class="events-grid">
                        <?php foreach($events as $event): ?>
                            <div class="event-card-item" data-event-slug="<?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?>">
                                <div class="event-card-header">
                                    <h3><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <div class="event-card-actions">
                                        <button class="btn-icon edit-event-btn" data-slug="<?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?>" title="Edit">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn-icon delete-event-btn" data-slug="<?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?>" title="Delete">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="event-card-body">
                                    <p class="event-description"><?php echo htmlspecialchars(substr($event['description'], 0, 150), ENT_QUOTES, 'UTF-8'); ?><?php echo strlen($event['description']) > 150 ? '...' : ''; ?></p>
                                    <div class="event-meta">
                                        <div class="event-meta-item">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"/>
                                                <polyline points="12 6 12 12 16 14"/>
                                            </svg>
                                            <span><?php echo htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8'); ?><?php echo !empty($event['time']) ? ' at ' . htmlspecialchars($event['time'], ENT_QUOTES, 'UTF-8') : ''; ?></span>
                                        </div>
                                        <div class="event-meta-item">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                                <circle cx="12" cy="10" r="3"/>
                                            </svg>
                                            <span><?php echo htmlspecialchars($event['location'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        </div>
                                    </div>
                                    <div class="event-card-footer">
                                        <a href="<?php echo Base_URL; ?>/events/<?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" class="btn btn-sm btn-secondary">View Page</a>
                                        <span class="event-slug">Slug: <?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </main>
    </div>

    <script>
        // Event Management JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const addEventBtn = document.getElementById('addEventBtn');
            const addFirstEventBtn = document.getElementById('addFirstEventBtn');
            const eventModal = document.getElementById('eventModal');
            const closeEventModal = document.getElementById('closeEventModal');
            const cancelEventBtn = document.getElementById('cancelEventBtn');
            const eventForm = document.getElementById('eventForm');
            const modalTitle = document.getElementById('modalTitle');
            const submitEventBtn = document.getElementById('submitEventBtn');
            const eventAction = document.getElementById('eventAction');
            const eventSlug = document.getElementById('eventSlug');
            const searchEvents = document.getElementById('searchEvents');

            // Open modal for adding
            if(addEventBtn) {
                addEventBtn.addEventListener('click', () => openEventModal('add'));
            }
            if(addFirstEventBtn) {
                addFirstEventBtn.addEventListener('click', () => openEventModal('add'));
            }

            // Close modal
            if(closeEventModal) {
                closeEventModal.addEventListener('click', closeEventModalFunc);
            }
            if(cancelEventBtn) {
                cancelEventBtn.addEventListener('click', closeEventModalFunc);
            }

            // Edit event buttons
            document.querySelectorAll('.edit-event-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const slug = this.getAttribute('data-slug');
                    editEvent(slug);
                });
            });

            // Delete event buttons
            document.querySelectorAll('.delete-event-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const slug = this.getAttribute('data-slug');
                    if(confirm('Are you sure you want to delete this event?')) {
                        deleteEvent(slug);
                    }
                });
            });

            // Search functionality
            if(searchEvents) {
                searchEvents.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    document.querySelectorAll('.event-card-item').forEach(card => {
                        const title = card.querySelector('h3').textContent.toLowerCase();
                        const description = card.querySelector('.event-description').textContent.toLowerCase();
                        if(title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }

            // Form submission
            if(eventForm) {
                eventForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    const action = eventAction.value;
                    
                    const url = action === 'add' 
                        ? '<?php echo Base_URL; ?>/dashboard/addEvent'
                        : '<?php echo Base_URL; ?>/dashboard/updateEvent';

                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            alert(data.message);
                            location.reload();
                        } else {
                            alert('Error: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
                });
            }

            function openEventModal(action, eventData = null) {
                eventAction.value = action;
                modalTitle.textContent = action === 'add' ? 'Add New Event' : 'Edit Event';
                submitEventBtn.textContent = action === 'add' ? 'Add Event' : 'Update Event';
                
                if(action === 'add') {
                    eventForm.reset();
                    eventSlug.value = '';
                } else if(eventData) {
                    document.getElementById('event_title').value = eventData.title || '';
                    document.getElementById('event_description').value = eventData.description || '';
                    document.getElementById('event_date').value = eventData.date || '';
                    document.getElementById('event_time').value = eventData.time || '';
                    document.getElementById('event_location').value = eventData.location || '';
                    document.getElementById('event_image').value = eventData.image || '';
                    eventSlug.value = eventData.slug || '';
                    
                    if(eventData.startDate) {
                        const startDate = new Date(eventData.startDate);
                        document.getElementById('event_startDate').value = startDate.toISOString().slice(0, 16);
                    }
                    if(eventData.endDate) {
                        const endDate = new Date(eventData.endDate);
                        document.getElementById('event_endDate').value = endDate.toISOString().slice(0, 16);
                    }
                }
                
                eventModal.style.display = 'flex';
            }

            function closeEventModalFunc() {
                eventModal.style.display = 'none';
            }

            function editEvent(slug) {
                // Get event data from PHP array
                const events = <?php echo json_encode($events ?? []); ?>;
                const event = events.find(e => e.slug === slug);
                if(event) {
                    openEventModal('edit', event);
                } else {
                    alert('Event not found');
                }
            }

            function deleteEvent(slug) {
                const formData = new FormData();
                formData.append('slug', slug);
                formData.append('csrf_token', document.querySelector('[name="csrf_token"]')?.value || '');

                fetch('<?php echo Base_URL; ?>/dashboard/deleteEvent', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
            }

            // Close modal when clicking outside
            eventModal.addEventListener('click', function(e) {
                if(e.target === eventModal) {
                    closeEventModalFunc();
                }
            });
        });
    </script>
    <script src="<?php echo Base_URL; ?>/js/dashboard.js"></script>
</body>
</html>

