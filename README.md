
# Service App

Service App is a Laravel 12-based backend for managing repair jobs, customers, users, and roles. It features robust authentication (Passport), role/permission management (Spatie), and a modern asset pipeline (Vite + TailwindCSS).

## Features

- User registration and login (API, Passport)
- Role-based access control (owner, employee, admin)
- Repair job creation, assignment, and status updates
- Customer management (auto-create on job submission)
- RESTful API endpoints for all core resources
- Database migrations, seeders, and factories
- Frontend assets with Vite and TailwindCSS
- Modern Laravel 12+ structure

## Project Structure

- `app/` - Models, Controllers, Providers
- `routes/` - API and web route definitions
- `database/` - Migrations, seeders, factories
- `resources/` - Blade views, JS, CSS
- `public/` - Entry point and built assets
- `config/` - Application configuration
- `tests/` - Unit and feature tests

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- SQLite/MySQL/PostgreSQL

### Installation

1. **Clone the repository:**
	```sh
	git clone <repo-url>
	cd service-app
	```
2. **Install PHP dependencies:**
	```sh
	composer install
	```
3. **Install Node dependencies:**
	```sh
	npm install
	```
4. **Copy and configure environment:**
	```sh
	cp .env.example .env
	# Edit .env for your DB and mail settings
	```
5. **Generate application key:**
	```sh
	php artisan key:generate
	```
6. **Run migrations and seeders:**
	```sh
	php artisan migrate --seed
	```
7. **Build frontend assets:**
	```sh
	npm run build
	```
8. **Start the development server:**
	```sh
	php artisan serve
	```

## API Overview

All endpoints are under `/api` and use Passport authentication.

### Auth
- `POST /api/register` — Register user (name, email, password, role)
- `POST /api/login` — Login (email, password)

### Repair Jobs
- `POST /api/repair-jobs` — Create job (employee only)
- `GET /api/repair-jobs` — List jobs (owner only)
- `GET /api/repair-jobs/assigend` — List assigned jobs (employee only)
- `PUT /api/repair-jobs/{id}/status` — Update job status (employee only)

### Roles/Permissions
- Roles: admin, owner, employee (see `RoleSeeder`)
- Permissions managed via Spatie package

### Customers
- Created automatically when a repair job is submitted with a new phone number

## Testing

Run all tests:
```sh
php artisan test
```

## Packages Used

- [laravel/framework](https://laravel.com/)
- [spatie/laravel-permission](https://spatie.be/docs/laravel-permission)
- [laravel/passport](https://laravel.com/docs/12.x/passport)
- [vite](https://vitejs.dev/)
- [tailwindcss](https://tailwindcss.com/)

## License

This project is open-source and available under the [MIT license](LICENSE).
