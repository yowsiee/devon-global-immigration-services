# SEO Testing Guide

## Quick Testing Checklist

### ✅ 1. Meta Tags Verification

#### Manual Browser Testing
1. **View Page Source** (Right-click → View Page Source)
   - Check for `<title>` tag
   - Verify meta description, keywords, author
   - Check Open Graph tags (og:title, og:description, og:image)
   - Verify Twitter Card tags
   - Check canonical URL

2. **Browser Developer Tools**
   - Open DevTools (F12)
   - Go to Elements tab
   - Check `<head>` section for all meta tags

#### Online Tools
- **Meta Tags Checker**: https://metatags.io/
- **Open Graph Preview**: https://www.opengraph.xyz/
- **Twitter Card Validator**: https://cards-dev.twitter.com/validator

### ✅ 2. Structured Data (JSON-LD) Testing

#### Google's Rich Results Test
1. Visit: https://search.google.com/test/rich-results
2. Enter your page URL
3. Click "Test URL"
4. Verify:
   - Organization schema detected
   - WebSite schema detected
   - BreadcrumbList schema detected

#### Schema.org Validator
1. Visit: https://validator.schema.org/
2. Enter your page URL or paste HTML
3. Check for errors/warnings

#### Manual Verification
```javascript
// Run in browser console on any page
const scripts = document.querySelectorAll('script[type="application/ld+json"]');
scripts.forEach(s => {
    try {
        const data = JSON.parse(s.textContent);
        console.log('Structured Data:', data);
    } catch(e) {
        console.error('Invalid JSON:', e);
    }
});
```

### ✅ 3. Sitemap Testing

#### Manual Check
1. Visit: `http://localhost/lightweight/sitemap.xml`
2. Verify:
   - XML is well-formed
   - All pages are listed
   - Priorities and change frequencies are set
   - Lastmod dates are present

#### Online Validators
- **XML Sitemap Validator**: https://www.xml-sitemaps.com/validate-xml-sitemap.html
- **Google Search Console**: Submit sitemap for validation

#### Command Line (if available)
```bash
# Validate XML syntax
xmllint --noout http://localhost/lightweight/sitemap.xml
```

### ✅ 4. Robots.txt Testing

#### Manual Check
1. Visit: `http://localhost/lightweight/robots.txt`
2. Verify:
   - Correct directives
   - Sitemap URL is correct
   - Admin areas are disallowed

#### Google Search Console
1. Go to: https://search.google.com/search-console
2. Use "robots.txt Tester" tool
3. Test different user agents

### ✅ 5. Page Speed & Performance

#### Google PageSpeed Insights
1. Visit: https://pagespeed.web.dev/
2. Enter your URL
3. Check:
   - Performance score
   - SEO score
   - Best practices
   - Accessibility

#### GTmetrix
1. Visit: https://gtmetrix.com/
2. Test your pages
3. Check compression, caching, etc.

### ✅ 6. Mobile-Friendly Test

#### Google Mobile-Friendly Test
1. Visit: https://search.google.com/test/mobile-friendly
2. Enter your URL
3. Verify mobile compatibility

### ✅ 7. Social Media Preview Testing

#### Facebook Sharing Debugger
1. Visit: https://developers.facebook.com/tools/debug/
2. Enter your URL
3. Click "Scrape Again" to refresh cache
4. Verify Open Graph tags are correct

#### LinkedIn Post Inspector
1. Visit: https://www.linkedin.com/post-inspector/
2. Enter your URL
3. Check preview

#### Twitter Card Validator
1. Visit: https://cards-dev.twitter.com/validator
2. Enter your URL
3. Verify card preview

### ✅ 8. SEO Score Testing

#### SEO Analyzers
- **SEO Site Checkup**: https://seositecheckup.com/
- **WooRank**: https://www.woorank.com/
- **SEMrush Site Audit**: https://www.semrush.com/

### ✅ 9. Accessibility Testing

#### WAVE Web Accessibility Evaluator
1. Visit: https://wave.webaim.org/
2. Enter your URL
3. Check for accessibility issues

### ✅ 10. Canonical URL Testing

#### Manual Check
1. View page source
2. Look for: `<link rel="canonical" href="...">`
3. Verify URL is correct and doesn't have query parameters

---

## Automated Testing Script

Create a simple PHP script to test all pages:

```php
<?php
// test-seo.php - Place in public directory
$pages = [
    '' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'portfolio' => 'Portfolio',
    'contact' => 'Contact'
];

$baseUrl = 'http://localhost/lightweight';
$results = [];

foreach ($pages as $path => $name) {
    $url = $baseUrl . ($path ? '/' . $path : '');
    $html = @file_get_contents($url);
    
    if ($html) {
        $results[$name] = [
            'title' => preg_match('/<title>(.*?)<\/title>/i', $html, $matches) ? $matches[1] : 'Not found',
            'meta_description' => preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/i', $html, $matches) ? $matches[1] : 'Not found',
            'canonical' => preg_match('/<link\s+rel=["\']canonical["\']\s+href=["\'](.*?)["\']/i', $html, $matches) ? $matches[1] : 'Not found',
            'og_title' => preg_match('/<meta\s+property=["\']og:title["\']\s+content=["\'](.*?)["\']/i', $html, $matches) ? $matches[1] : 'Not found',
            'structured_data' => substr_count($html, 'application/ld+json') . ' found'
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($results, JSON_PRETTY_PRINT);
?>
```

---

## Testing Checklist Summary

- [ ] All pages have unique title tags (50-60 characters)
- [ ] All pages have meta descriptions (150-160 characters)
- [ ] Canonical URLs are present and correct
- [ ] Open Graph tags are present on all pages
- [ ] Twitter Card tags are present on all pages
- [ ] Structured data (JSON-LD) is valid
- [ ] Sitemap.xml is accessible and valid
- [ ] Robots.txt is accessible and correct
- [ ] Images have alt attributes (if applicable)
- [ ] Page speed score is acceptable (>70)
- [ ] Mobile-friendly test passes
- [ ] Social media previews work correctly
- [ ] No duplicate content issues
- [ ] HTTPS ready (if applicable)
- [ ] All internal links work
- [ ] Breadcrumb structured data is present

---

## Quick Test URLs

### Local Testing
- Home: http://localhost/lightweight/
- About: http://localhost/lightweight/about
- Services: http://localhost/lightweight/services
- Portfolio: http://localhost/lightweight/portfolio
- Contact: http://localhost/lightweight/contact
- Sitemap: http://localhost/lightweight/sitemap.xml
- Robots: http://localhost/lightweight/robots.txt

### Test Tools
- Meta Tags: https://metatags.io/
- Rich Results: https://search.google.com/test/rich-results
- PageSpeed: https://pagespeed.web.dev/
- Mobile-Friendly: https://search.google.com/test/mobile-friendly
- Facebook Debugger: https://developers.facebook.com/tools/debug/
- Twitter Validator: https://cards-dev.twitter.com/validator

---

## Expected Results

### Meta Tags (per page)
- ✅ Title tag present
- ✅ Meta description present
- ✅ Meta keywords present
- ✅ Canonical URL present
- ✅ 7+ Open Graph tags
- ✅ 4+ Twitter Card tags
- ✅ Robots meta tag

### Structured Data
- ✅ Organization schema
- ✅ WebSite schema
- ✅ BreadcrumbList schema (on sub-pages)

### Technical SEO
- ✅ Sitemap accessible
- ✅ Robots.txt accessible
- ✅ No broken links
- ✅ Fast page load times
- ✅ Mobile responsive
- ✅ Valid HTML

