# Ayar Shipping Services — Laravel Crew Recruitment

This is a Laravel 12 starter conversion of the supplied Ayar Shipping Services crew-recruiting HTML concept. It uses **Laravel + Blade + Tailwind CSS + JavaScript + MySQL**.

## Included
- Responsive home page inspired by the provided HTML's navy/red maritime styling.
- About, services, crew recruitment and latest vacancy sections.
- MySQL-backed job vacancies, contact enquiries and crew applications.
- Server-side validation and CSRF protection.
- CV upload (PDF, max 5 MB) and up to five supporting files (PDF/JPG/PNG, max 5 MB each).
- Uploaded application files are stored on Laravel's private `local` disk.
- Starter vacancy seed data marked as **sample/demo**. Verify or replace before production.

> This ZIP contains the application source, not Laravel's `vendor/` dependencies or compiled `node_modules/`. Install those locally with Composer and npm using the steps below.

## Requirements
- PHP 8.2+ with common Laravel extensions (OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, Fileinfo, BCMath)
- Composer 2
- Node.js 20+ and npm
- MySQL 8+ (or a compatible MariaDB release)
- XAMPP users: start Apache/MySQL from the XAMPP Control Panel. Laravel's own dev server is used for this project.

## Windows local setup (XAMPP example)

### 1. Install tools
Install PHP/Composer, Node.js LTS, and XAMPP if they are not already installed. Verify in PowerShell or CMD:

```powershell
php -v
composer -V
node -v
npm -v
```

If `php` is not recognized, add your PHP folder (for XAMPP, often `C:\xampp\php`) to the Windows PATH and reopen the terminal.

### 2. Extract the ZIP
Extract `ayar-shipping-laravel.zip`, then open PowerShell inside the extracted `ayar-shipping-laravel` directory. The folder should contain `artisan`, `composer.json`, `package.json`, `routes`, `app`, and `resources`.

### 3. Create the MySQL database
In phpMyAdmin, create a database named `ayar_shipping` with `utf8mb4` collation. Or use MySQL CLI:

```sql
CREATE DATABASE ayar_shipping CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 4. Install PHP dependencies
```powershell
composer install
```

### 5. Configure environment
```powershell
Copy-Item .env.example .env
php artisan key:generate
```
Open `.env` and confirm these values match your local MySQL setup:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ayar_shipping
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL root user has a password, put it in `DB_PASSWORD`.

### 6. Run database migrations and seed demo vacancies
```powershell
php artisan migrate --seed
```

### 7. Install Tailwind/Vite dependencies
```powershell
npm install
npm run build
```

### 8. Start the local site
In terminal 1:
```powershell
php artisan serve
```
In terminal 2 (optional while developing styles/scripts):
```powershell
npm run dev
```
Open **http://127.0.0.1:8000** in your browser. Stop the server with `Ctrl+C`.

### 9. Test these routes
- `/` — home
- `/vacancies` — active vacancies from MySQL
- `/vacancies/1` — vacancy details (IDs depend on your database)
- `/apply` — crew application with private file upload
- `/contact` — enquiry form stored in MySQL

### Handy commands
```powershell
php artisan route:list
php artisan migrate:status
php artisan migrate:fresh --seed
npm run dev
npm run build
```
**Warning:** `php artisan migrate:fresh --seed` drops existing tables/data. Use only on a disposable development database.

## Project structure
```text
app/
  Http/Controllers/  Home, vacancies, contact, applications
  Models/            Vacancy, Enquiry, CrewApplication
bootstrap/
database/
  migrations/        MySQL table definitions
  seeders/           sample vacancy rows
resources/
  css/app.css        Tailwind CSS + custom styling
  js/app.js          mobile menu and reveal effects
  views/             Blade layouts and pages
routes/web.php
```

## Before production
1. Replace demo vacancy content with approved job listings.
2. Verify Ayar's real address, telephone, email, licensing and service descriptions. Placeholder copy is intentionally identified in the views.
3. Configure SMTP in `.env` if email notifications are required (currently contact and application forms store records but do not send email).
4. Add authentication/authorization and an admin panel before exposing applicant data to staff. No admin panel is included in this starter.
5. Add privacy notice, retention rules, consent wording and anti-spam protections suitable for the business.
6. Configure HTTPS, backups, logs, server upload limits and production storage permissions.

## Notes
- The source HTML's large embedded demo video was not copied into the Laravel bundle; the hero is rebuilt as a lightweight SVG ship illustration.
- The supplied HTML itself described the enquiry as prototype-only and not stored/sent. In this Laravel version, the contact and crew application forms are wired to MySQL; email delivery is not configured.
