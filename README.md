# Devon Global Immigration Services (DGIS)

A professional website for Devon Global Immigration Services, providing comprehensive immigration and recruitment services to Canada and the United States.

## 🚀 Features

- **Modern, Responsive Design**: Clean and professional UI with mobile-first approach
- **Comprehensive Service Pages**:
  - Canadian Immigration Services
  - Global Temporary Resident Services
  - Citizenship by Investment
  - Job Opportunities (US J1 Visa Program)
  - Global Recruitment
- **SEO Optimized**: Structured data, meta tags, and semantic HTML
- **Contact & Consultation**: Free consultation booking system
- **About Page**: Company information and credentials
- **Admin Dashboard**: Content management system

## 📋 Project Structure

```
DGIS/
├── application/
│   ├── controllers/     # MVC Controllers
│   ├── views/           # View templates
│   ├── models/          # Data models
│   └── config/          # Configuration files
├── public/
│   ├── css/             # Stylesheets
│   ├── js/              # JavaScript files
│   ├── images/          # Image assets
│   └── index.php        # Entry point
├── system/
│   ├── libraries/       # Core libraries
│   ├── helpers/        # Helper functions
│   └── core/           # Core system files
└── README.md
```

## 🛠️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/dgis.git
   cd dgis
   ```

2. **Place in web server directory**
   - For XAMPP: `C:\xampp\htdocs\DGIS`
   - For Apache: `/var/www/html/dgis`
   - For other servers: Configure your document root

3. **Configure Base URL**
   Update `application/config/config.php`:
   ```php
   'base_url' => 'http://localhost/DGIS/public'
   ```

4. **Set up .htaccess**
   Ensure `public/.htaccess` has the correct `RewriteBase`:
   ```apache
   RewriteBase /DGIS/public
   ```

5. **Requirements**
   - PHP 7.4 or higher
   - Apache with mod_rewrite enabled
   - MySQL (if using database features)

## 🎨 Services Offered

### Canadian Immigration
- Work Permits
- Express Entry
- Business Immigration
- Pre & Post Arrival Services
- Family Sponsorship
- Study Permits
- Visitor Visas
- PR Card Renewal

### Global Temporary Resident Services
- Tourist Visas
- Business Visas
- Electronic Travel Authorization (ETA)
- Temporary Resident Visas

### Citizenship by Investment
- Antigua and Barbuda
- Dominica
- Grenada
- St. Kitts and Nevis
- St. Lucia

### Job Opportunities
- US J1 Visa Program
- Culinary Arts Openings
- Food and Beverage Openings
- Rooms Division Openings
- Teaching Positions

### Global Recruitment
- International talent sourcing
- Work permit support
- Employer recruitment services

## 📞 Contact Information

- **Address**: 5-112 Elizabeth St., Toronto, ON, Canada M5G1P9
- **Phone**: 347-324-7220
- **Email**: canada@ttworktravel.com
- **Hours**: Mon-Fri 9:00 AM - 5:00 PM, Saturday 9:00 AM - 1:00 PM

## 🔐 Admin Access

Admin dashboard available at `/login` for managing site content and services.

## 🏗️ Technology Stack

- **Backend**: PHP (Lightweight MVC Framework)
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Custom CSS with CSS Variables
- **Fonts**: Google Fonts (Poppins, Inter)
- **Icons**: SVG Icons

## 📝 License

Copyright © 2024 Devon Global Immigration Services. All rights reserved.

## 👥 Credentials

- **RCIC Licensed**: Licensed Canadian Immigration Consultants
- **CAPIC Member**: Canadian Association of Professional Immigration Consultants
- **RCIC-IRB**: Registered with Immigration and Refugee Board
