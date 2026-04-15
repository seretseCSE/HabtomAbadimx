<p align="center">
  <strong>Habtom Abadi Import Export</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-red" alt="Laravel Version">
  <img src="https://img.shields.io/badge/Filament-3.x-orange" alt="Filament Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-blue" alt="PHP Version">
  <img src="https://img.shields.io/badge/MySQL-8.0+-green" alt="Database">
</p>

## About Habtom Abadi Import Export

A comprehensive Laravel-based web application for managing import-export business operations with a modern Filament admin panel. This platform showcases products, services, certifications, partners, and client testimonials with a professional, responsive design.

### Features

#### **Frontend**
- **Modern Responsive Design**: Clean, professional UI with Tailwind CSS
- **Product Catalog**: Browse and filter import-export products
- **Service Management**: Display company services
- **Certifications & Partners**: Show business credentials and partnerships
- **Client Testimonials**: Customer reviews and ratings
- **Contact & RFQ Forms**: Lead generation and quote requests
- **Blog System**: Content management and SEO optimization

#### **Admin Panel (Filament)**
- **Resource Management**: Products, Services, Partners, Certifications, Testimonials
- **File Upload**: Image and document management with public storage
- **User Management**: Admin authentication and role-based access
- **Settings Management**: Dynamic site configuration
- **Analytics Dashboard**: Business metrics and statistics
- **Content Management**: Blog posts and page content

### Technical Stack

- **Backend**: Laravel 11.x
- **Admin Panel**: Filament 3.x
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL 8.0+
- **File Storage**: Laravel Public Storage
- **Authentication**: Laravel Sanctum + Filament Auth

### Key Implementations

#### **File Upload System**
- **Public Storage**: All uploads stored in `storage/app/public/`
- **MIME Type Validation**: Proper file type checking
- **Image Processing**: Built-in image editor and optimization
- **Directory Organization**: Structured file storage by resource type

#### **Database Architecture**
- **Eloquent Models**: Proper relationships and scopes
- **Migrations**: Version-controlled schema management
- **Seeders**: Initial data population
- **Indexes**: Performance optimization for common queries

#### **Security Features**
- **Form Protection**: CSRF and spam prevention
- **Input Validation**: Comprehensive validation rules
- **File Security**: Proper MIME type and size validation
- **Authentication**: Secure admin panel access

## Installation

### Prerequisites
- PHP 8.2+
- MySQL 8.0+ or MariaDB 10.3+
- Composer
- Node.js & NPM (for frontend assets)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/YOUR_USERNAME/HabtomAbadimx.git
   cd HabtomAbadimx
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   ```bash
   # Edit .env file with your database credentials
   DB_DATABASE=habtomabadi_main
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Create storage link**
   ```bash
   php artisan storage:link
   ```

7. **Compile frontend assets**
   ```bash
   npm run build
   ```

8. **Clear caches**
   ```bash
   php artisan optimize:clear
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

### Admin Access

- **URL**: `/admin`
- **Default Credentials**: Check your database or create an admin user via seeder

## Project Structure

```
app/
  Http/Controllers/          # Web controllers
  Models/                    # Eloquent models
  Filament/
    Resources/               # Filament admin resources
    Pages/                   # Filament custom pages
    Widgets/                 # Filament dashboard widgets

resources/
  views/                     # Blade templates
  css/                       # Stylesheets
  js/                        # JavaScript files

database/
  migrations/                # Database migrations
  seeders/                   # Database seeders

storage/app/public/          # Public file uploads
  partners/logos/            # Partner logos
  certifications/            # Certification documents
  testimonials/photos/       # Testimonial photos
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
