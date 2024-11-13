<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Laravel API Boilerplate

![Laravel Version](https://img.shields.io/badge/Laravel-11.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.2-blue)
![License](https://img.shields.io/badge/license-MIT-green)

This repository provides a boilerplate for creating RESTful APIs using Laravel 11, with a focus on clean, maintainable code. It leverages Actions, Data Transfer Objects (DTOs), and best practices to ensure a scalable architecture.

## Features

- **RESTful API**: Preconfigured routes and controllers for building APIs.
- **Actions**: Separate business logic into single-responsibility classes.
- **DTOs**: Manage data flow between layers of the application.
- **Clean Code**: Emphasis on readability, reusability, and performance.
- **Laravel 11**: Leverage the latest features and enhancements in Laravel.

## Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Laravel 11.x
- MySQL or any other supported database

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/holiq/api-boilerplate.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd api-boilerplate
   ```

3. **Install dependencies:**

   ```bash
   composer install --prefer-dist
   ```

4. **Set up environment variables:**

   Copy the `.env.example` file to `.env` and configure your database settings.

   ```bash
   cp .env.example .env
   ```

5. **Generate application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run migrations:**

   ```bash
   php artisan migrate
   ```

### Running the API

Start the development server:

```bash
php artisan serve
```

The API will be accessible at `http://localhost:8000/api`.

## Usage

- **Routes**: Define your API routes in `routes/api.php`.
- **Controllers**: Implement your API logic using controllers located in `app/Http/Controllers`.
- **Actions**: Organize business logic in `app/Actions` and use command `make:action {name}` for generate the action.
- **DTOs**: Use Data Transfer Objects in `app/DataTransferObjects` and use command `make:dto {name}` for generate the DTOs.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any enhancements or bug fixes.
>>>>>>> 1ed05d27a7cf184078f0999c715826d77a53e192
