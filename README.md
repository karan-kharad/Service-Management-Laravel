# Service App

A Laravel-based application for managing repair jobs, users, and permissions. This project leverages Laravel's robust features, including authentication, authorization, and RESTful APIs, to provide a scalable backend service.

## Features

- User authentication and authorization (Laravel Passport & Spatie Permission)
- Role and permission management
- Repair job management
- RESTful API endpoints
- Modern Laravel 11+ application structure
- Database migrations, seeders, and factories
- Frontend assets managed with Vite

## Project Structure

- `app/` - Application core (Models, Controllers, Providers)
- `bootstrap/` - Application bootstrap files
- `config/` - Configuration files
- `database/` - Migrations, seeders, and factories
- `public/` - Publicly accessible files (entry point, assets)
- `resources/` - Views, JS, and CSS assets
- `routes/` - Route definitions (web, api, console)
- `storage/` - Compiled files, logs, cache
- `tests/` - Unit and feature tests
- `vendor/` - Composer dependencies

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm (for frontend assets)
- MySQL/PostgreSQL/SQLite (or other supported DB)

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
	# Edit .env as needed
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

## Usage

- Access the app at `http://localhost:8000`
- API endpoints are available under `/api`
- Manage users, roles, permissions, and repair jobs via the API or web interface

## Testing

Run tests with:
```sh
php artisan test
```

## Packages Used

- [laravel/framework](https://laravel.com/)
- [spatie/laravel-permission](https://spatie.be/docs/laravel-permission)
- [laravel/passport](https://laravel.com/docs/11.x/passport)
- [vite](https://vitejs.dev/)

## License

This project is open-source and available under the [MIT license](LICENSE).
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
