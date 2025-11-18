<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "<?php echo htmlspecialchars($event['title']); ?>",
  "description": "<?php echo htmlspecialchars($event['description']); ?>",
  "startDate": "<?php echo $event['startDate']; ?>",
  "endDate": "<?php echo $event['endDate']; ?>",
  "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "location": {
    "@type": "VirtualLocation",
    "url": "https://zoom.us"
  },
  "organizer": {
    "@type": "Organization",
    "name": "Devon Global Immigration Services",
    "url": "<?php echo Base_URL; ?>",
    "logo": "<?php echo Base_URL; ?>/images/logo.png"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock",
    "url": "<?php echo Base_URL; ?>/events/<?php echo $event['slug']; ?>"
  }
}
</script>

<!-- Event Detail Page Content -->
<section class="events-hero-section">
    <div class="container">
        <div class="event-detail-breadcrumb">
            <a href="<?php echo Base_URL; ?>/events" class="breadcrumb-link">← Back to Events</a>
        </div>
        <h1 class="events-main-title"><?php echo htmlspecialchars($event['title']); ?></h1>
    </div>
</section>

<!-- Event Details Section -->
<section class="events-content-section">
    <div class="container">
        <div class="events-layout">
            <!-- Left Column: Event Information -->
            <div class="events-info-column">
                <div class="event-card">
                    <h2 class="event-title"><?php echo htmlspecialchars($event['title']); ?></h2>
                    <div class="event-details">
                        <div class="event-detail-item">
                            <svg class="event-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="event-detail-text">
                                <?php 
                                echo htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8');
                                if(!empty($event['time'])) {
                                    echo ', ' . htmlspecialchars($event['time'], ENT_QUOTES, 'UTF-8');
                                }
                                ?>
                            </span>
                        </div>
                        <div class="event-detail-item">
                            <svg class="event-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="event-detail-text"><?php echo htmlspecialchars($event['location']); ?></span>
                        </div>
                    </div>
                    <div class="event-social-share">
                        <span class="share-label">Share:</span>
                        <div class="social-share-icons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(Base_URL . '/events/' . $event['slug']); ?>" target="_blank" rel="noopener noreferrer" class="social-share-icon" aria-label="Share on Facebook">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(Base_URL . '/events/' . $event['slug']); ?>&text=<?php echo urlencode($event['title']); ?>" target="_blank" rel="noopener noreferrer" class="social-share-icon" aria-label="Share on X (Twitter)">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 6L6 18M6 6l12 12"></path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(Base_URL . '/events/' . $event['slug']); ?>" target="_blank" rel="noopener noreferrer" class="social-share-icon" aria-label="Share on LinkedIn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Event Graphic -->
            <div class="events-graphic-column">
                <div class="event-graphic-wrapper">
                    <img src="<?php echo Base_URL; ?>/images/<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" class="event-graphic-image" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="event-graphic-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); min-height: 400px; align-items: center; justify-content: center; flex-direction: column; padding: 2rem;">
                        <div style="font-size: 4rem; margin-bottom: 1rem;">📋</div>
                        <p style="color: var(--navy); font-size: 1.2rem; text-align: center; font-weight: 600;">Event Image</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Full Details Section -->
<section class="event-expanded-details">
    <div class="container">
        <div class="event-full-details">
            <h2 class="event-details-title">Event Details</h2>
            <div class="event-description">
                <h3>About This Event</h3>
                <p>
                    Join us for an informative online seminar on the Express Entry pathway to Canadian Permanent Residency. 
                    This comprehensive session will cover everything you need to know about the Express Entry system, including:
                </p>
                <ul class="event-topics-list">
                    <li>Understanding the Express Entry system and how it works</li>
                    <li>Eligibility requirements for Federal Skilled Worker, Federal Skilled Trades, and Canadian Experience Class programs</li>
                    <li>How to create and optimize your Express Entry profile</li>
                    <li>Comprehensive Ranking System (CRS) score calculation and improvement strategies</li>
                    <li>Document preparation and application process</li>
                    <li>Provincial Nominee Program (PNP) integration with Express Entry</li>
                    <li>Common mistakes to avoid and tips for success</li>
                    <li>Q&A session with our licensed RCIC consultants</li>
                </ul>
                <h3>Who Should Attend?</h3>
                <p>
                    This event is perfect for individuals who are considering immigrating to Canada through the Express Entry system, 
                    including skilled workers, international graduates, and those with Canadian work experience.
                </p>
                <h3>Registration</h3>
                <p>
                    This is a free online event. Registration is required to receive the Zoom meeting link. 
                    Spaces are limited, so please register early to secure your spot.
                </p>
                <div class="event-registration-buttons">
                    <a href="<?php echo Base_URL; ?>/contact" class="btn-event-register">Register Now</a>
                    <a href="tel:3473247220" class="btn-event-call">Call: 347-324-7220</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

