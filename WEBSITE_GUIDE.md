# Devon Global Immigration Services - Website Guide

## Overview
This is a professional website for Devon Global Immigration Services (DGIS), a licensed immigration consultancy offering services to Canada and the United States. Built on the Lightweight PHP framework.

## Website Structure

### Pages Available:
1. **Home** (`/` or `/home`) - Landing page with hero section, trust badges, services overview, and contact information
2. **About** (`/about`) - Company background, mission, RCIC verification, and team information
3. **Services** (`/services`) - Overview of all immigration and recruitment services
4. **Service Detail Pages**:
   - `/services/canadian-immigration` - Canadian immigration services
   - `/services/global-temporary-resident` - Global temporary visa services
   - `/services/citizenship-by-investment` - Citizenship by investment programs
   - `/services/job-opportunities` - US J1 visa opportunities
   - `/services/global-recruitment` - External link to recruitment portal
5. **Events** (`/events`) - Upcoming immigration seminars and workshops
6. **Event Detail** (`/events/{slug}`) - Individual event details
7. **Contact** (`/contact`) - Free consultation booking form

## Admin Dashboard

### Access:
- Login URL: `/login`
- Default credentials:
  - Email: `admin@dgis.com`
  - Password: `admin123`

### Dashboard Features:
1. **Dashboard Home** (`/dashboard`) - Overview with stats and quick actions
2. **Events Management** (`/dashboard/events`) - Add, edit, and delete events
3. **Services Management** (`/dashboard/services`) - Manage service listings

### Events Management:
- Add new events with title, description, date, time, location, and image
- Edit existing events
- Delete events
- Events are stored in `application/data/events.json`
- Events automatically appear on the public `/events` page

## The Contact Form

The Contact page (`/contact`) allows potential clients to:
- Book free consultations
- Submit inquiries about immigration services
- Request eligibility assessments
- Get in touch for personalized guidance

### How It Works:
1. Users fill out the consultation form with:
   - First Name (required)
   - Last Name (required)
   - Email (required)
   - Phone (required)
   - Service Interest (required)
   - Current Country
   - Immigration Goals (required)

2. The form includes CSRF protection for security

3. Upon submission, the form:
   - Validates all fields
   - Checks email format
   - Shows success/error messages
   - Currently displays a success message (you can integrate email sending or database storage)

### Customizing the Contact Form:
To actually send emails or save to database, modify `application/controllers/Contact.php` in the `submit()` method:

```php
// Example: Send email
mail($to, $subject, $message, $headers);

// Example: Save to database
// Use the database library to store inquiries
```

## Customization Guide

### Update Your Information:
1. **Contact Details**: Edit `application/views/partials/footer.php` and `application/views/contact.php`
2. **Services**: Modify `application/controllers/Services.php` - update service details
3. **About Page**: Edit `application/controllers/About.php` - update company information
4. **Home Page**: Modify `application/views/home.php` for hero content
5. **Events**: Manage events through the dashboard at `/dashboard/events`

### Styling:
- Main stylesheet: `public/css/style.css`
- Dashboard stylesheet: `public/css/dashboard.css`
- Brand colors (CSS variables):
  - Navy: `#1B3358`
  - Red: `#D5102B`
  - White: `#FFFFFF`
  - Light Gray: `#FAFAFA`
- Fully responsive design included

### Configuration:
- Base URL: `application/config/config.php`
- Default controller set to `home`

## Features Included:
✅ Modern, responsive design
✅ Mobile-friendly navigation
✅ Contact/consultation form with CSRF protection
✅ Professional service showcase
✅ Events management system
✅ Admin dashboard
✅ SEO-optimized (meta tags, structured data, sitemap)
✅ Social media integration
✅ Trust badges and certifications display

## Services Offered:
1. **Canadian Immigration** - Work permits, Express Entry, family sponsorship, PR, citizenship
2. **Global Temporary Resident Services** - Tourist visas, business visas, ETA documents
3. **Citizenship by Investment** - Programs in Antigua, Dominica, Grenada, St. Kitts, St. Lucia
4. **Job Opportunities** - US J1 visa programs (Culinary Arts, Food & Beverage, Rooms Division, Teaching)
5. **Global Recruitment** - External recruitment services

## Contact Information:
- **Email**: canada@ttworktravel.com
- **Phone**: 347-324-7220
- **Address**: 5-112 Elizabeth St., Toronto, ON, Canada M5G1P9
- **Hours**: Mon-Fri 9:00 am - 5:00 pm, Saturday 9:00 am - 1:00 pm, Sunday CLOSED

## Next Steps:
1. Configure email sending in Contact controller for consultation requests
2. Optionally add database storage for inquiries and consultations
3. Update event images and content through the dashboard
4. Set up proper email templates for consultation confirmations
5. Add Google Analytics tracking
6. Configure production email settings

## Testing:
Visit `http://localhost/DGIS/public` to see your homepage
Navigate through all pages to test functionality
Submit the contact form to test consultation booking
Access the dashboard at `/login` to manage events





