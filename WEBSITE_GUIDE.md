# Personal IT Services Website - User Guide

## Overview
This is a professional personal website for offering IT services, built on the Lightweight PHP framework.

## Website Structure

### Pages Available:
1. **Home** (`/` or `/home`) - Landing page with hero section and features
2. **About** (`/about`) - Your professional background, skills, and experience
3. **Services** (`/services`) - List of IT services you offer
4. **Contact** (`/contact`) - Contact form (Your "Agent" for inquiries)

## The Contact Form "Agent"

The Contact page (`/contact`) serves as your **communication agent** - it allows potential clients to:
- Submit inquiries about your services
- Request quotes for projects
- Ask questions about your IT solutions
- Get in touch for consultations

### How It Works:
1. Users fill out the contact form with:
   - Name (required)
   - Email (required)
   - Subject (required)
   - Message (required)

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
2. **Services**: Modify `application/controllers/Services.php` - update the `$services` array
3. **About Page**: Edit `application/controllers/About.php` - update skills and experience
4. **Home Page**: Modify `application/views/home.php` for hero content

### Styling:
- Main stylesheet: `public/css/style.css`
- Colors can be changed in CSS variables at the top of the file
- Fully responsive design included

### Configuration:
- Base URL: `application/config/config.php`
- Default controller set to `home`

## Features Included:
✅ Modern, responsive design
✅ Mobile-friendly navigation
✅ Contact form with CSRF protection
✅ Professional service showcase
✅ Skills and experience display
✅ Smooth animations
✅ SEO-friendly structure

## Next Steps:
1. Update all placeholder text with your actual information
2. Configure email sending in Contact controller
3. Optionally add database storage for inquiries
4. Customize colors and branding
5. Add your portfolio/projects section
6. Set up proper email templates for inquiries

## Testing:
Visit `http://localhost/lightweight` to see your homepage
Navigate through all pages to test functionality
Submit the contact form to test the "agent" functionality





