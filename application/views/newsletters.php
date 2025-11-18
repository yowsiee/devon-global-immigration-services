<?php 
include __DIR__ . '/partials/header.php';
?>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Monthly Immigration Newsletter - Devon Global Immigration Services",
  "description": "Stay updated with our monthly immigration newsletter. Get the latest immigration news, policy changes, visa updates, legal advice, and success stories.",
  "url": "<?php echo Base_URL; ?>/newsletters",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      <?php if($latestNewsletter): ?>
      {
        "@type": "NewsArticle",
        "headline": "<?php echo htmlspecialchars($latestNewsletter['title'] ?? 'Monthly Newsletter', ENT_QUOTES, 'UTF-8'); ?>",
        "datePublished": "<?php echo htmlspecialchars($latestNewsletter['date'] ?? date('Y-m-d'), ENT_QUOTES, 'UTF-8'); ?>",
        "url": "<?php echo Base_URL; ?>/newsletters"
      }
      <?php endif; ?>
    ]
  }
}
</script>

<!-- Newsletters Page Content -->
<section class="newsletters-hero-section">
    <div class="container">
        <h1 class="newsletters-main-title">Our Newsletters</h1>
    </div>
</section>

<!-- Newsletters Two-Column Layout -->
<section class="newsletters-content-section">
    <div class="container">
        <div class="newsletters-layout">
            <!-- Left Column: Introduction -->
            <div class="newsletters-left-column">
                <h2 class="newsletters-intro-title">Our Newsletters</h2>
                <div class="newsletters-intro-text">
                    <p>
                        Welcome to the <strong>Monthly Immigration Newsletter</strong> – your trusted source for the latest information, insights, and resources on immigration. Whether you're a newcomer, a visa holder, or an immigration professional, our newsletter is designed to keep you informed and empowered.
                    </p>
                    <p>
                        Each month, we bring you:
                    </p>
                    <ul class="newsletters-features-list">
                        <li>📋 <strong>Policy Updates:</strong> Stay ahead with the latest changes in immigration laws and regulations</li>
                        <li>✈️ <strong>Visa Information:</strong> Comprehensive updates on visa requirements, processing times, and application procedures</li>
                        <li>⚖️ <strong>Legal Insights:</strong> Expert advice and tips from our licensed RCIC consultants</li>
                        <li>📖 <strong>Success Stories:</strong> Inspiring stories from immigrants who have successfully navigated their journey</li>
                        <li>💼 <strong>Job Opportunities:</strong> Latest job openings and internship programs</li>
                        <li>📅 <strong>Event Announcements:</strong> Upcoming seminars, workshops, and webinars</li>
                    </ul>
                    <p>
                        Don't miss out on valuable information that could impact your immigration journey. Sign up today and join thousands of subscribers who trust us for their immigration news.
                    </p>
                </div>
                <a href="<?php echo Base_URL; ?>/contact" class="btn-newsletter-signup">
                    Sign up for our Monthly Newsletter
                </a>
            </div>

            <!-- Right Column: Newsletter Display -->
            <div class="newsletters-right-column">
                <?php if($latestNewsletter): ?>
                    <div class="newsletter-current">
                        <h3 class="newsletter-month-title"><?php echo htmlspecialchars($latestNewsletter['title'] ?? date('F Y'), ENT_QUOTES, 'UTF-8'); ?></h3>
                        
                        <div class="newsletter-preview">
                            <?php if(!empty($latestNewsletter['file'])): ?>
                                <!-- PDF/Image Preview -->
                                <div class="newsletter-preview-container">
                                    <?php 
                                    $fileExtension = strtolower(pathinfo($latestNewsletter['file'], PATHINFO_EXTENSION));
                                    if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'])): 
                                    ?>
                                        <img src="<?php echo Base_URL; ?>/newsletters/<?php echo rawurlencode($latestNewsletter['file']); ?>" 
                                             alt="<?php echo htmlspecialchars($latestNewsletter['title'] ?? 'Newsletter', ENT_QUOTES, 'UTF-8'); ?>" 
                                             class="newsletter-preview-image">
                                    <?php else: ?>
                                        <!-- PDF Preview using iframe or embed -->
                                        <iframe src="<?php echo Base_URL; ?>/newsletters/<?php echo rawurlencode($latestNewsletter['file']); ?>#view=FitH" 
                                                class="newsletter-preview-pdf" 
                                                title="<?php echo htmlspecialchars($latestNewsletter['title'] ?? 'Newsletter', ENT_QUOTES, 'UTF-8'); ?>">
                                            <p>Your browser does not support PDFs. <a href="<?php echo Base_URL; ?>/newsletters/<?php echo rawurlencode($latestNewsletter['file']); ?>" target="_blank">Download the PDF</a> instead.</p>
                                        </iframe>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <div class="newsletter-placeholder">
                                    <div style="font-size: 4rem; margin-bottom: 1rem;">📰</div>
                                    <p style="color: var(--navy); font-size: 1.2rem; text-align: center; font-weight: 600;">Newsletter Preview</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="newsletter-empty">
                        <div style="font-size: 4rem; margin-bottom: 1rem;">📰</div>
                        <h3>No Newsletter Available</h3>
                        <p>Check back soon for our latest newsletter!</p>
                    </div>
                <?php endif; ?>

                <!-- Previous Newsletters -->
                <?php if(!empty($previousNewsletters)): ?>
                    <div class="newsletters-archive">
                        <h4 class="newsletters-archive-title">PREVIOUS NEWSLETTERS</h4>
                        <ul class="newsletters-archive-list">
                            <?php foreach($previousNewsletters as $newsletter): ?>
                                    <li class="newsletter-archive-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="newsletter-bookmark-icon">
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <a href="<?php echo Base_URL; ?>/newsletters/<?php echo rawurlencode($newsletter['file'] ?? ''); ?>" 
                                       target="_blank" 
                                       class="newsletter-archive-link">
                                        <?php echo htmlspecialchars($newsletter['title'] ?? date('F Y', strtotime($newsletter['date'] ?? 'now')), ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/partials/footer.php';
?>

