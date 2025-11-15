# Dev's Domain - Lightweight PHP Framework Website

A professional IT solutions website built with a custom lightweight PHP framework.

## Features

- **Modern Dashboard**: Full-featured admin dashboard for managing content
- **Portfolio Management**: Manage featured projects, categories, and GitHub portfolio
- **Services Management**: Dynamic service listings with visibility controls
- **Settings Page**: Control section visibility on portfolio page
- **Responsive Design**: Mobile-first responsive design
- **SEO Optimized**: Built-in SEO features and meta tags
- **Security**: CSRF protection, XSS prevention, secure file uploads

## Requirements

- PHP 7.4 or higher
- Apache with mod_rewrite enabled
- MySQL (optional, currently using JSON files for data storage)

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd lightweight
```

2. Configure the application:
   - Edit `application/config/config.php` and set your `base_url`
   - Update database credentials if using MySQL

3. Set up Apache:
   - Point your document root to the `public` directory
   - Ensure `.htaccess` is enabled

4. Access the site:
   - Visit `http://localhost/lightweight/public/`
   - Admin login: `admin@devsdomain.com` / `admin123`

## Project Structure

```
lightweight/
├── application/
│   ├── config/          # Configuration files
│   ├── controllers/     # MVC Controllers
│   ├── data/            # JSON data files
│   ├── models/          # MVC Models
│   └── views/           # View templates
├── public/              # Public web root
│   ├── css/             # Stylesheets
│   ├── js/              # JavaScript files
│   ├── images/          # Images
│   └── index.php        # Entry point
└── system/              # Framework core
    ├── core/            # Core system files
    ├── helpers/         # Helper functions
    └── libraries/       # Framework libraries
```

## Dashboard Features

- **Projects Management**: Add, edit, delete, and toggle visibility of projects
- **Portfolio Management**: Manage portfolio items (categories, featured projects, GitHub repos)
- **Services Management**: Control service listings
- **Settings**: Configure section visibility on portfolio page

## Default Credentials

- Email: `admin@devsdomain.com`
- Password: `admin123`

**⚠️ Change these credentials in production!**

## Development

The framework uses a custom routing system. Controllers are located in `application/controllers/` and views in `application/views/`.

## License

MIT License

## Author

Dev's Domain

