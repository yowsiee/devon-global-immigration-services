<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Upcoming Events - Devon Global Immigration Services",
  "description": "Join our upcoming immigration events and workshops. Learn about Canadian Permanent Residency, Express Entry pathway, and other immigration programs.",
  "url": "<?php echo Base_URL; ?>/events",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "Event",
        "name": "Canadian Permanent Residency: Express Entry Pathway",
        "description": "Learn about the Express Entry pathway to Canadian Permanent Residency. Join our free online seminar to understand the application process, requirements, and how to improve your CRS score.",
        "startDate": "2025-03-27T19:30:00-04:00",
        "endDate": "2025-03-27T21:00:00-04:00",
        "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "location": {
          "@type": "VirtualLocation",
          "url": "https://zoom.us"
        },
        "url": "<?php echo Base_URL; ?>/events/express-entry-pathway"
      }
    ]
  }
}
</script>

<!-- Events Listing Page Content -->
<section class="events-hero-section">
    <div class="container">
        <h1 class="events-main-title">Upcoming Events</h1>
        <p class="events-subtitle">Join our informative seminars and workshops to learn about Canadian immigration pathways</p>
    </div>
</section>

<!-- Events Grid Section -->
<section class="events-content-section">
    <div class="container">
        <?php if(empty($events)): ?>
            <div class="events-empty-state">
                <p>No upcoming events at this time. Please check back later.</p>
            </div>
        <?php else: ?>
            <div class="events-grid">
                <?php foreach($events as $event): ?>
                    <div class="event-listing-card">
                        <div class="event-listing-image">
                            <img src="<?php echo Base_URL; ?>/images/<?php echo htmlspecialchars($event['image'] ?? 'event-application-form.png', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?>" class="event-listing-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="event-listing-placeholder" style="display: none; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(27, 51, 88, 0.1) 0%, rgba(213, 16, 43, 0.1) 100%); min-height: 250px; align-items: center; justify-content: center; flex-direction: column; padding: 2rem;">
                                <div style="font-size: 4rem; margin-bottom: 1rem;">📅</div>
                                <p style="color: var(--navy); font-size: 1.2rem; text-align: center; font-weight: 600;">Event</p>
                            </div>
                        </div>
                        <div class="event-listing-content">
                            <h2 class="event-listing-title"><?php echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                            <div class="event-listing-details">
                                <div class="event-listing-detail-item">
                                    <svg class="event-listing-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                    <span class="event-listing-detail-text">
                                        <?php 
                                        echo htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8');
                                        if(!empty($event['time'])) {
                                            echo ' at ' . htmlspecialchars($event['time'], ENT_QUOTES, 'UTF-8');
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="event-listing-detail-item">
                                    <svg class="event-listing-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <span class="event-listing-detail-text"><?php echo htmlspecialchars($event['location'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <p class="event-listing-excerpt">
                                <?php echo htmlspecialchars(substr($event['description'], 0, 150), ENT_QUOTES, 'UTF-8'); ?><?php echo strlen($event['description']) > 150 ? '...' : ''; ?>
                            </p>
                            <a href="<?php echo Base_URL; ?>/events/<?php echo htmlspecialchars($event['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="event-listing-button">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>
