# WordPress Theme Deployment Checklist

Use this checklist to ensure a smooth deployment of your WordPress theme.

---

## 📦 Pre-Deployment

### Build & Package
- [ ] Next.js project built successfully (`npm run build`)
- [ ] CSS extracted from `.next/static/css/` → `assets/css/compiled-nextjs.css`
- [ ] Images copied from `public/` → `assets/images/`
- [ ] Theme zipped and ready for upload
- [ ] All files included (check with `ls -R`)

### Documentation Review
- [ ] README.md reviewed
- [ ] MIGRATION-GUIDE.md reviewed
- [ ] ACF field template ready
- [ ] Screenshot prepared (1200x900px)

---

## 🚀 Deployment Steps

### 1. WordPress Environment
- [ ] WordPress 6.0+ installed
- [ ] PHP 8.0+ running
- [ ] MySQL/MariaDB configured
- [ ] SSL certificate installed (HTTPS)
- [ ] `.htaccess` configured (pretty permalinks)
- [ ] File permissions correct (755 dirs, 644 files)

### 2. Theme Installation
- [ ] Theme uploaded to `wp-content/themes/`
- [ ] Theme activated in WP Admin
- [ ] No PHP errors in error log
- [ ] No console errors in browser
- [ ] Theme shows in Appearance → Themes

### 3. Plugin Installation
- [ ] Advanced Custom Fields installed & activated
- [ ] Yoast SEO installed & activated (optional)
- [ ] WP Super Cache installed (optional)
- [ ] Wordfence installed (optional)
- [ ] Contact Form 7 installed (if needed)

### 4. ACF Configuration
- [ ] ACF field groups imported from JSON
- [ ] All 8 field groups visible
- [ ] Field groups assigned to "Front Page"
- [ ] Test: Edit home page, see ACF fields

### 5. Page Setup
- [ ] Home page created
- [ ] Blog page created (if using posts)
- [ ] Settings → Reading configured
- [ ] Front page set to "Home"
- [ ] Posts page set (if applicable)

### 6. Navigation
- [ ] Primary menu created
- [ ] Menu items added (Portfolio, Experience, Contact)
- [ ] Menu assigned to "Primary Menu" location
- [ ] Mobile menu tested

### 7. Content Population
- [ ] Hero section filled
- [ ] Portfolio projects added (4+)
- [ ] Timeline events added (4+)
- [ ] Strengths added (6)
- [ ] Services added (6)
- [ ] Testimonials added (4+)
- [ ] Gallery images uploaded (8+)
- [ ] CTA section configured

### 8. Media Library
- [ ] All images uploaded
- [ ] Images optimized (compressed)
- [ ] Alt text added to images
- [ ] Featured images set (if applicable)
- [ ] Image sizes regenerated

---

## 🧪 Testing

### Visual Testing
- [ ] Homepage loads without errors
- [ ] All sections visible in correct order
- [ ] Hero section displays properly
- [ ] Timeline shows with animations
- [ ] Portfolio grid displays correctly
- [ ] Strengths cards render
- [ ] Services grid displays
- [ ] Gallery masonry layout works
- [ ] Testimonials carousel rotates
- [ ] CTA buttons visible and styled

### Functional Testing
- [ ] Sticky navbar appears on scroll
- [ ] Smooth scrolling works on anchor links
- [ ] Portfolio project links open
- [ ] Timeline animations trigger on scroll
- [ ] Testimonial auto-rotation works (5s interval)
- [ ] Gallery images clickable
- [ ] WhatsApp button opens correctly
- [ ] Email button opens mail client
- [ ] Phone button triggers dialer (mobile)

### Responsive Testing
- [ ] Desktop (1920px)
- [ ] Laptop (1366px)
- [ ] Tablet landscape (1024px)
- [ ] Tablet portrait (768px)
- [ ] Mobile large (414px)
- [ ] Mobile medium (375px)
- [ ] Mobile small (320px)

### Browser Testing
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)
- [ ] Mobile Safari (iOS)
- [ ] Chrome Mobile (Android)

### Performance Testing
- [ ] Google PageSpeed Insights run
- [ ] Desktop score > 90
- [ ] Mobile score > 85
- [ ] Core Web Vitals passed
- [ ] LCP < 2.5s
- [ ] FID < 100ms
- [ ] CLS < 0.1
- [ ] GTmetrix tested (Grade A preferred)

### SEO Testing
- [ ] Yoast SEO configured
- [ ] Meta title set
- [ ] Meta description set
- [ ] Open Graph tags present
- [ ] Twitter Card tags present
- [ ] XML sitemap generated
- [ ] Robots.txt exists
- [ ] Google Search Console verified
- [ ] Bing Webmaster Tools verified

### Accessibility Testing
- [ ] Keyboard navigation works
- [ ] Focus indicators visible
- [ ] ARIA labels present (if needed)
- [ ] Color contrast adequate (WCAG AA)
- [ ] Alt text on all images
- [ ] Heading hierarchy correct (H1 → H2 → H3)
- [ ] WAVE tool scan (no major errors)

---

## 🔒 Security

### Security Measures
- [ ] WordPress updated to latest version
- [ ] All plugins updated
- [ ] Strong admin password set
- [ ] "admin" username not used
- [ ] Wordfence scan run
- [ ] Firewall rules configured
- [ ] Login attempts limited
- [ ] XML-RPC disabled (if not needed)
- [ ] File editing disabled in wp-config.php
- [ ] Database prefix changed from wp_
- [ ] SSL certificate valid
- [ ] Security headers added

### File Permissions
```bash
# Verify permissions:
find wp-content/themes -type d -exec ls -ld {} \; | grep -v "755"
find wp-content/themes -type f -exec ls -l {} \; | grep -v "644"

# Should return nothing if correct
```

---

## 📊 Analytics & Tracking

### Analytics Setup
- [ ] Google Analytics 4 property created
- [ ] GA4 tracking code added (via plugin or code)
- [ ] Google Tag Manager installed (optional)
- [ ] Facebook Pixel added (if needed)
- [ ] Event tracking configured
- [ ] Conversion goals set
- [ ] E-commerce tracking (if applicable)

### Search Console
- [ ] Site verified in Google Search Console
- [ ] Sitemap submitted
- [ ] Coverage report reviewed
- [ ] Mobile usability checked
- [ ] Core Web Vitals monitored

---

## 💾 Backup & Recovery

### Backup Setup
- [ ] UpdraftPlus configured
- [ ] Backup schedule set (daily recommended)
- [ ] Remote storage connected (Google Drive, Dropbox, etc.)
- [ ] Database backup tested
- [ ] Files backup tested
- [ ] Restore procedure tested
- [ ] Backup notifications enabled

### Manual Backup Commands
```bash
# Database backup
wp db export backup-$(date +%Y%m%d).sql

# Files backup
tar -czf wordpress-backup-$(date +%Y%m%d).tar.gz /path/to/wordpress

# Theme backup
cd wp-content/themes
tar -czf my-portfolio-backup-$(date +%Y%m%d).tar.gz my-portfolio/
```

---

## 🎨 Final Polish

### Design Review
- [ ] Logo uploaded (if custom logo)
- [ ] Favicon set (32x32, 16x16, apple-touch-icon)
- [ ] Theme screenshot.png created (1200x900)
- [ ] Colors match brand guidelines
- [ ] Typography consistent
- [ ] Spacing consistent
- [ ] No Lorem Ipsum text
- [ ] All placeholder images replaced

### Content Review
- [ ] All text proofread
- [ ] Spelling checked
- [ ] Grammar correct
- [ ] Links all working (no 404s)
- [ ] Phone numbers correct
- [ ] Email addresses correct
- [ ] Social media links correct
- [ ] Copyright year current

### Legal Pages
- [ ] Privacy Policy page created
- [ ] Terms of Service page (if needed)
- [ ] Cookie Policy page (if EU visitors)
- [ ] GDPR compliance reviewed
- [ ] Cookie consent plugin installed (if needed)

---

## 📈 Performance Optimization

### Caching
- [ ] Page caching enabled (WP Super Cache)
- [ ] Browser caching configured (.htaccess)
- [ ] Object caching enabled (if available)
- [ ] CDN configured (Cloudflare, etc.) - optional

### Image Optimization
- [ ] Images compressed (TinyPNG, ShortPixel, etc.)
- [ ] Lazy loading enabled
- [ ] WebP format used (if supported)
- [ ] Responsive images served
- [ ] Image dimensions specified

### Code Optimization
- [ ] CSS minified
- [ ] JavaScript minified
- [ ] Unused CSS removed (PurgeCSS)
- [ ] Critical CSS inlined (optional)
- [ ] Fonts optimized (system fonts or preloaded)

### Database Optimization
- [ ] Database optimized (WP-Optimize plugin)
- [ ] Post revisions limited
- [ ] Spam comments deleted
- [ ] Transients cleaned
- [ ] Auto-drafts removed

---

## 🚦 Go-Live

### DNS & Domain
- [ ] Domain pointed to server
- [ ] DNS propagated (check with DNS checker)
- [ ] www and non-www redirect configured
- [ ] SSL certificate covers all subdomains

### WordPress Settings
- [ ] Site URL correct in Settings → General
- [ ] Discourage search engines UNCHECKED
- [ ] Comments settings configured
- [ ] User registration settings configured
- [ ] Timezone set correctly

### Final Checks
- [ ] Clear all caches (plugin, server, CDN)
- [ ] Test from incognito/private window
- [ ] Test from different device
- [ ] Test from different network
- [ ] Ask colleague to review
- [ ] Client approval received (if applicable)

### Launch Announcement
- [ ] Social media announcement prepared
- [ ] Email list notified
- [ ] Press release sent (if applicable)
- [ ] Portfolio updated
- [ ] LinkedIn post created

---

## 📝 Post-Launch

### Monitoring (First Week)
- [ ] Monitor error logs daily
- [ ] Check analytics daily
- [ ] Review Search Console daily
- [ ] Monitor uptime (UptimeRobot)
- [ ] Check forms working
- [ ] Monitor site speed

### Maintenance Schedule
- [ ] Weekly: Check for updates
- [ ] Weekly: Review analytics
- [ ] Monthly: Full backup verification
- [ ] Monthly: Security scan
- [ ] Quarterly: Performance audit
- [ ] Yearly: Content refresh

---

## ✅ Sign-Off

```
Project: ___________________________
Deployed by: ________________________
Date: _______________________________
Version: 1.0.0
Status: [ ] Staging  [ ] Production

Checklist completed: _____ / _____ items

Notes:
_________________________________________
_________________________________________
_________________________________________

Approved by: ____________________________
Signature: ______________________________
Date: ___________________________________
```

---

## 🆘 Emergency Contacts

| Role | Contact | Phone | Email |
|------|---------|-------|-------|
| Developer | Aryan Lohia | +91 786 495 5155 | aryanlohia2346@gmail.com |
| Hosting Support | _________ | _________ | _________ |
| Domain Registrar | _________ | _________ | _________ |
| SSL Provider | _________ | _________ | _________ |

---

## 📚 Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [ACF Documentation](https://www.advancedcustomfields.com/resources/)
- [Google PageSpeed Insights](https://pagespeed.web.dev/)
- [GTmetrix](https://gtmetrix.com/)
- [WAVE Accessibility Tool](https://wave.webaim.org/)
- [Google Search Console](https://search.google.com/search-console)

---

**Last Updated:** November 2025  
**Version:** 1.0.0  
**Status:** Production Ready ✅

