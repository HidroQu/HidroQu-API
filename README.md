# HidroQu API

![Laravel Version](https://img.shields.io/badge/Laravel-11.x-red)
![PHP Version](https://img.shields.io/badge/PHP-8.2-blue)
![License](https://img.shields.io/badge/license-MIT-green)

## Getting Started

### Prerequisites

- Docker and Docker Compose installed
- PHP 8.2 or higher (if not using Docker)
- Composer (if not using Docker)
- Laravel 11.x
- MySQL or any other supported database

### Installation

#### Option 1: Without Docker (Standard Installation)

1. **Clone the repository:**

   ```bash
   git clone https://github.com/HidroQu/HidroQu-API.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd HidroQu-API
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

7. **Start the development server:**

   ```bash
   php artisan serve
   ```

Access the API at: http://localhost:8000/api.

Access the API docs at: http://localhost:8000/request-docs.

#### Option 2: Using Docker (Recommended for Containerized Environment)

Docker Compose is the recommended approach to set up the environment quickly, as it takes care of all the dependencies
and services required for the application. This method abstracts away the need to install PHP, Composer, or a web server
manually.

1. **Clone the repository:**

   ```bash
   git clone https://github.com/HidroQu/HidroQu-API.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd HidroQu-API
   ```

3. **Set up environment variables:**

   Copy the `.env.example` file to `.env` and configure your database settings.

   ```bash
   cp .env.example .env
   ```

4. **Build and start the Docker containers:**

   ```bash
   docker-compose up --build
   ```

5. **Generate application key:**

   ```bash
   docker exec -it hidroqu-app php artisan key:generate
   ```
6. **Run migrations inside the container:**

   ```bash
   docker exec -it hidroqu-app php artisan migrate
   ```

Access the API at: http://localhost:3000/api.

Access the API docs at: http://localhost:3000/request-docs.
