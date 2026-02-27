
# Service App

Service App is a professional, high-performance Laravel 12-based backend system designed for managing repair services. It provides a robust architecture for handling repair jobs, customer interactions, and role-based access control, integrated with modern tools for a seamless developer experience.

## 🚀 Key Features

- **Comprehensive Auth**: Production-ready authentication system using **Laravel Passport** for API security.
- **RBAC (Role-Based Access Control)**: Granular permission management with **Spatie Laravel Permission** (Roles: Admin, Owner, Employee).
- **Service Management**: Full lifecycle management for repair jobs, including assignment and status tracking.
- **Automated Customer CRM**: Intelligent customer management that automatically creates profiles based on unique identifiers during job submission.
- **Modern Asset Pipeline**: Lightning-fast frontend development and building with **Vite 6** and **Tailwind CSS 4**.
- **Developer-Centric**: Clean Laravel 12+ structure, full test coverage, and easy setup.

## 📁 Project Structure

- `app/` — Core business logic, Models, and API Controllers.
- `routes/api.php` — Secure API endpoint definitions.
- `database/` — Organized migrations, seeders, and factories for quick prototyping.
- `resources/` — Modern frontend assets (Vite + CSS).
- `tests/` — Robust Unit and Feature test suites.

## 🛠️ Getting Started

### Prerequisites
- **PHP**: 8.2 or higher
- **Composer**: Latest version
- **Node.js & npm**: LTS versions
- **Database**: SQLite (default), MySQL, or PostgreSQL

### Installation

1. **Clone the repository:**
   ```bash
   git clone <repo-url>
   cd service-app
   ```

2. **Setup the application:**
   The project includes a convenient setup script:
   ```bash
   composer run setup
   ```
   *This command installs dependencies, sets up the environment, generates keys, and runs migrations.*

3. **Start Development:**
   ```bash
   composer run dev
   ```
   *This starts the Laravel server, Vite, and the queue listener simultaneously.*

## 🛰️ API Reference

| Endpoint | Method | Description | Access |
| :--- | :--- | :--- | :--- |
| `/api/register` | `POST` | User registration | public |
| `/api/login` | `POST` | User authentication | public |
| `/api/repair-jobs` | `POST` | Create a new repair job | Employee |
| `/api/repair-jobs` | `GET` | List all repair jobs | Owner |
| `/api/repair-jobs/assigend`| `GET` | List jobs assigned to user | Employee |
| `/api/repair-jobs/{id}/status`| `PUT` | Update job status | Employee |

## 🧪 Testing

Ensuring system stability is a priority. Run the test suite with:
```bash
php artisan test
```

## 🛠️ Tech Stack

- **Framework**: Laravel 12
- **Auth**: Passport & Sanctum
- **Permissions**: Spatie Laravel Permission
- **Styling**: Tailwind CSS 4
- **Build Tool**: Vite 6

## 👥 Authors

- **Karan Kharad**

## 📄 License

This project is open-source and available under the [MIT license](LICENSE).

