<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Newsletters Management'; ?></title>
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
            <a href="<?php echo Base_URL; ?>/dashboard" class="nav-item">
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
            <a href="<?php echo Base_URL; ?>/dashboard/newsletters" class="nav-item active">
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
                    <input type="text" id="searchNewsletters" placeholder="Search newsletters...">
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
                        <h1>Newsletters Management</h1>
                        <p>Manage monthly newsletters and publications</p>
                    </div>
                    <button id="addNewsletterBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add New Newsletter
                    </button>
                </div>
            </div>

            <!-- Add/Edit Newsletter Form Modal -->
            <div id="newsletterModal" class="service-modal" style="display: none;">
                <div class="service-modal-content" style="max-width: 700px;">
                    <div class="service-modal-header">
                        <h2 id="modalTitle">Add New Newsletter</h2>
                        <button class="service-modal-close" id="closeNewsletterModal">&times;</button>
                    </div>
                    <form id="newsletterForm" class="service-form">
                        <input type="hidden" name="action" id="newsletterAction" value="add">
                        <input type="hidden" name="id" id="newsletterId">
                        <?php echo Security::csrfField(); ?>
                        <div class="form-group">
                            <label for="newsletter_title">Newsletter Title *</label>
                            <input type="text" id="newsletter_title" name="title" class="form-control" required placeholder="e.g., February 2024">
                        </div>
                        <div class="form-group">
                            <label for="newsletter_date">Date *</label>
                            <input type="date" id="newsletter_date" name="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="newsletter_file">Newsletter File</label>
                            <div class="newsletter-upload-section">
                                <div class="newsletter-upload-controls">
                                    <input type="file" id="newsletter_file_upload" name="newsletter_upload" accept="application/pdf,image/jpeg,image/png,image/gif,image/webp,image/avif" style="display: none;">
                                    <button type="button" id="uploadNewsletterBtn" class="btn btn-secondary" style="margin-bottom: 0.5rem;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem;">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                        Upload Newsletter File
                                    </button>
                                    <span style="margin: 0 0.5rem; color: #718096;">or</span>
                                    <input type="text" id="newsletter_file" name="file" class="form-control" style="display: inline-block; width: auto; min-width: 250px;" placeholder="Enter existing filename" required>
                                </div>
                                <div id="newsletterPreview" style="margin-top: 1rem; display: none;">
                                    <p id="newsletterPreviewFilename" style="color: #718096; font-size: 0.875rem;"></p>
                                </div>
                                <small style="color: #718096; font-size: 0.85rem; display: block; margin-top: 0.5rem;">Upload a PDF or image file (max 10MB) or enter an existing filename from /public/newsletters/ directory</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="newsletter_visible" name="visible" value="true" checked>
                                <span style="margin-left: 0.5rem;">Visible on website</span>
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" id="cancelNewsletterBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="submitNewsletterBtn">Add Newsletter</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Newsletters List -->
            <div class="newsletters-list-container">
                <?php if(empty($newsletters)): ?>
                    <div class="empty-state">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 1rem; opacity: 0.5;">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            <line x1="8" y1="7" x2="18" y2="7"/>
                            <line x1="8" y1="11" x2="18" y2="11"/>
                        </svg>
                        <h3>No newsletters yet</h3>
                        <p>Get started by adding your first newsletter</p>
                        <button id="addFirstNewsletterBtn" class="btn btn-primary" style="margin-top: 1rem;">Add Newsletter</button>
                    </div>
                <?php else: ?>
                    <div class="newsletters-grid">
                        <?php foreach($newsletters as $newsletter): ?>
                            <div class="newsletter-card-item" data-newsletter-id="<?php echo htmlspecialchars($newsletter['id'], ENT_QUOTES, 'UTF-8'); ?>">
                                <div class="newsletter-card-header">
                                    <h3><?php echo htmlspecialchars($newsletter['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <div class="newsletter-card-actions-wrapper">
                                        <div class="newsletter-card-actions">
                                            <button class="btn-icon toggle-visibility-btn" data-id="<?php echo htmlspecialchars($newsletter['id'], ENT_QUOTES, 'UTF-8'); ?>" data-visible="<?php echo (!isset($newsletter['visible']) || $newsletter['visible'] !== false) ? 'true' : 'false'; ?>" title="<?php echo (!isset($newsletter['visible']) || $newsletter['visible'] !== false) ? 'Hide Newsletter' : 'Show Newsletter'; ?>">
                                                <?php 
                                                $isVisible = !isset($newsletter['visible']) || $newsletter['visible'] !== false;
                                                if($isVisible): ?>
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                <?php else: ?>
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                                        <line x1="1" y1="1" x2="23" y2="23"></line>
                                                    </svg>
                                                <?php endif; ?>
                                            </button>
                                            <button class="btn-icon edit-newsletter-btn" data-id="<?php echo htmlspecialchars($newsletter['id'], ENT_QUOTES, 'UTF-8'); ?>" title="Edit">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn-icon delete-newsletter-btn" data-id="<?php echo htmlspecialchars($newsletter['id'], ENT_QUOTES, 'UTF-8'); ?>" title="Delete">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <?php 
                                        $isVisible = !isset($newsletter['visible']) || $newsletter['visible'] !== false;
                                        $visibilityClass = $isVisible ? 'newsletter-visible' : 'newsletter-hidden';
                                        $visibilityText = $isVisible ? 'Visible' : 'Hidden';
                                        ?>
                                        <span class="newsletter-visibility-badge <?php echo $visibilityClass; ?>" title="Newsletter is <?php echo strtolower($visibilityText); ?> on the website">
                                            <?php echo $visibilityText; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="newsletter-card-body">
                                    <div class="newsletter-meta">
                                        <div class="newsletter-meta-item">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"/>
                                                <polyline points="12 6 12 12 16 14"/>
                                            </svg>
                                            <span><?php echo htmlspecialchars($newsletter['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        </div>
                                        <div class="newsletter-meta-item">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                <line x1="12" y1="3" x2="12" y2="15"></line>
                                            </svg>
                                            <span><?php echo htmlspecialchars($newsletter['file'] ?? 'No file', ENT_QUOTES, 'UTF-8'); ?></span>
                                        </div>
                                    </div>
                                    <div class="newsletter-card-footer">
                                        <a href="<?php echo Base_URL; ?>/newsletters/<?php echo rawurlencode($newsletter['file'] ?? ''); ?>" target="_blank" class="btn btn-sm btn-secondary">View File</a>
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
        // Newsletter Management JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const addNewsletterBtn = document.getElementById('addNewsletterBtn');
            const addFirstNewsletterBtn = document.getElementById('addFirstNewsletterBtn');
            const newsletterModal = document.getElementById('newsletterModal');
            const closeNewsletterModal = document.getElementById('closeNewsletterModal');
            const cancelNewsletterBtn = document.getElementById('cancelNewsletterBtn');
            const newsletterForm = document.getElementById('newsletterForm');
            const modalTitle = document.getElementById('modalTitle');
            const submitNewsletterBtn = document.getElementById('submitNewsletterBtn');
            const newsletterAction = document.getElementById('newsletterAction');
            const newsletterId = document.getElementById('newsletterId');
            const searchNewsletters = document.getElementById('searchNewsletters');
            const uploadNewsletterBtn = document.getElementById('uploadNewsletterBtn');
            const newsletterFileUpload = document.getElementById('newsletter_file_upload');
            const newsletterFile = document.getElementById('newsletter_file');
            const newsletterPreview = document.getElementById('newsletterPreview');
            const newsletterPreviewFilename = document.getElementById('newsletterPreviewFilename');

            // Open modal for adding
            if(addNewsletterBtn) {
                addNewsletterBtn.addEventListener('click', () => openNewsletterModal('add'));
            }
            if(addFirstNewsletterBtn) {
                addFirstNewsletterBtn.addEventListener('click', () => openNewsletterModal('add'));
            }

            // Close modal
            if(closeNewsletterModal) {
                closeNewsletterModal.addEventListener('click', closeNewsletterModalFunc);
            }
            if(cancelNewsletterBtn) {
                cancelNewsletterBtn.addEventListener('click', closeNewsletterModalFunc);
            }

            // Edit newsletter buttons
            document.querySelectorAll('.edit-newsletter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    editNewsletter(id);
                });
            });

            // Delete newsletter buttons
            document.querySelectorAll('.delete-newsletter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    if(confirm('Are you sure you want to delete this newsletter?')) {
                        deleteNewsletter(id);
                    }
                });
            });

            // Toggle visibility buttons
            document.querySelectorAll('.toggle-visibility-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const currentVisible = this.getAttribute('data-visible') === 'true';
                    toggleNewsletterVisibility(id, !currentVisible);
                });
            });

            // Search functionality
            if(searchNewsletters) {
                searchNewsletters.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    document.querySelectorAll('.newsletter-card-item').forEach(card => {
                        const title = card.querySelector('h3').textContent.toLowerCase();
                        if(title.includes(searchTerm)) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }

            // Newsletter file upload functionality
            if(uploadNewsletterBtn && newsletterFileUpload) {
                uploadNewsletterBtn.addEventListener('click', function() {
                    newsletterFileUpload.click();
                });

                newsletterFileUpload.addEventListener('change', function() {
                    if(this.files && this.files[0]) {
                        const file = this.files[0];
                        
                        // Validate file size (10MB max)
                        if(file.size > 10485760) {
                            alert('File size must be less than 10MB');
                            this.value = '';
                            return;
                        }

                        // Validate file type
                        const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif'];
                        if(!allowedTypes.includes(file.type)) {
                            alert('Please upload a valid file (PDF, JPG, PNG, GIF, WebP, or AVIF)');
                            this.value = '';
                            return;
                        }

                        // Upload the file
                        const formData = new FormData();
                        formData.append('newsletter', file);
                        formData.append('csrf_token', document.querySelector('[name="csrf_token"]')?.value || '');

                        // Show loading state
                        uploadNewsletterBtn.disabled = true;
                        uploadNewsletterBtn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem; animation: spin 1s linear infinite;"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle><path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"></path></svg>Uploading...';

                        fetch('<?php echo Base_URL; ?>/dashboard/uploadNewsletter', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            uploadNewsletterBtn.disabled = false;
                            uploadNewsletterBtn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>Upload Newsletter File';

                            if(data.success) {
                                // Set the filename in the input field
                                newsletterFile.value = data.filename;
                                newsletterPreviewFilename.textContent = 'Uploaded: ' + data.filename;
                                newsletterPreview.style.display = 'block';
                                alert('Newsletter file uploaded successfully!');
                            } else {
                                alert('Error: ' + data.message);
                                newsletterPreview.style.display = 'none';
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            uploadNewsletterBtn.disabled = false;
                            uploadNewsletterBtn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>Upload Newsletter File';
                            alert('An error occurred while uploading the file. Please try again.');
                            newsletterPreview.style.display = 'none';
                        });
                    }
                });
            }

            // Show preview when typing existing filename
            if(newsletterFile) {
                newsletterFile.addEventListener('input', function() {
                    const filename = this.value.trim();
                    if(filename) {
                        newsletterPreviewFilename.textContent = 'Filename: ' + filename;
                        newsletterPreview.style.display = 'block';
                    } else {
                        newsletterPreview.style.display = 'none';
                    }
                });
            }

            // Form submission
            if(newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    const action = newsletterAction.value;
                    
                    const url = action === 'add' 
                        ? '<?php echo Base_URL; ?>/dashboard/addNewsletter'
                        : '<?php echo Base_URL; ?>/dashboard/updateNewsletter';

                    // Convert FormData to object for JSON
                    const data = {};
                    formData.forEach((value, key) => {
                        data[key] = value;
                    });

                    // Add visible checkbox value
                    data['visible'] = document.getElementById('newsletter_visible').checked ? 'true' : 'false';

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams(data).toString()
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

            function openNewsletterModal(action, newsletterData = null) {
                newsletterAction.value = action;
                modalTitle.textContent = action === 'add' ? 'Add New Newsletter' : 'Edit Newsletter';
                submitNewsletterBtn.textContent = action === 'add' ? 'Add Newsletter' : 'Update Newsletter';
                
                if(action === 'add') {
                    newsletterForm.reset();
                    newsletterId.value = '';
                    document.getElementById('newsletter_visible').checked = true;
                    newsletterPreview.style.display = 'none';
                } else if(newsletterData) {
                    document.getElementById('newsletter_title').value = newsletterData.title || '';
                    document.getElementById('newsletter_date').value = newsletterData.date || '';
                    const fileValue = newsletterData.file || '';
                    document.getElementById('newsletter_file').value = fileValue;
                    newsletterId.value = newsletterData.id || '';
                    document.getElementById('newsletter_visible').checked = (newsletterData.visible === undefined || newsletterData.visible !== false);
                    
                    if(fileValue) {
                        newsletterPreviewFilename.textContent = 'Current file: ' + fileValue;
                        newsletterPreview.style.display = 'block';
                    } else {
                        newsletterPreview.style.display = 'none';
                    }
                }
                
                newsletterModal.style.display = 'flex';
            }

            function closeNewsletterModalFunc() {
                newsletterModal.style.display = 'none';
            }

            function editNewsletter(id) {
                // Get newsletter data from PHP array
                const newsletters = <?php echo json_encode($newsletters ?? []); ?>;
                const newsletter = newsletters.find(n => n.id === id);
                if(newsletter) {
                    openNewsletterModal('edit', newsletter);
                } else {
                    alert('Newsletter not found');
                }
            }

            function deleteNewsletter(id) {
                const formData = new FormData();
                formData.append('id', id);
                formData.append('csrf_token', document.querySelector('[name="csrf_token"]')?.value || '');

                fetch('<?php echo Base_URL; ?>/dashboard/deleteNewsletter', {
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

            function toggleNewsletterVisibility(id, visible) {
                const formData = new FormData();
                formData.append('id', id);
                formData.append('visible', visible);
                formData.append('csrf_token', document.querySelector('[name="csrf_token"]')?.value || '');

                fetch('<?php echo Base_URL; ?>/dashboard/toggleNewsletterVisibility', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
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
            newsletterModal.addEventListener('click', function(e) {
                if(e.target === newsletterModal) {
                    closeNewsletterModalFunc();
                }
            });
        });
    </script>
    <script src="<?php echo Base_URL; ?>/js/dashboard.js"></script>
</body>
</html>

