# Genia Information System💡
Website dari genia untuk semua 😀

## ✨ Features

Based on the directory structure, the application includes:

*   **Landing Pages:** Public-facing pages including an index, about us, and awarded sections.
*   **Blog Module:** Functionality to display blog posts, view details, and potentially submit posts.
*   **News Module:** Functionality to display news articles and view details.
*   **Competition Module:** Functionality to display competitions, view details, and manage participants.
*   **Admin Panel:** A dedicated area for administrators to manage content (Blog, News, Competitions) and potentially other system settings. Includes login functionality.
*   **Layouts:** Separate layouts for the main application and the admin panel.

## 👥 Anggota

* Ridho Aditya Rosman Eka Putra (220211060113)
* Ahmad Triadi Julianto M (220211060054)
* Regina Maria Samantha George (220211060112)

## 🚀 Technology Stack

*   **Backend:** PHP 8.2+, Laravel 11+
*   **Frontend:**
    *   Tailwind CSS (v3.4+) for styling.
    *   Vite for frontend asset bundling.
    *   Blade templating engine.
*   **Database:** Relational database (configurable via `.env`, migrations provided). Likely MySQL, PostgreSQL, or SQLite.
*   **Development Tools:**
    *   Composer for PHP dependency management.
    *   NPM for Node.js dependency management.
    *   Laravel Sail (optional, for Docker-based local development).
    *   Laravel Tinker for REPL interaction.
*   **Testing:** PHPUnit for automated testing.
*   **Code Style:** Laravel Pint for code formatting (available in dev dependencies).

## 🔧 Installation & Setup

Follow these steps to set up the project locally:

1.  **Prerequisites:**
    *   PHP >= 8.2
    *   Composer (latest version recommended)
    *   Node.js & NPM (latest LTS recommended)
    *   A database server (e.g., MySQL, PostgreSQL, SQLite)
    *   *(Optional)* Docker Desktop if using Laravel Sail

2.  **Clone the repository:**
    ```bash
    git clone https://github.com/Idoo0/genia-information-system/edit/main/README.md
    cd genia-information-system
    ```

3.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```

4.  **Install Node.js Dependencies:**
    ```bash
    npm install
    ```

5.  **Environment Setup:**
    *   Copy the example environment file:
        ```bash
        cp .env.example .env
        ```
    *   **Crucially, configure your database connection details** (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) and other necessary environment variables (like `APP_URL`, `MAIL_...`) in the `.env` file.

6.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

7.  **Run Database Migrations:**
    This will create the necessary database tables (users, cache, jobs, etc.).
    ```bash
    php artisan migrate
    ```
    *   *(Optional)* If database seeders are available and needed:
        ```bash
        php artisan db:seed
        ```

8.  **Build Frontend Assets:**
    *   For development (with hot-reloading):
        ```bash
        npm run dev
        ```
    *   For production:
        ```bash
        npm run build
        ```

9.  **Serve the Application:**
    *   **Using `php artisan serve`:**
        ```bash
        php artisan serve
        ```
        Access the application at `http://localhost:8000` (or the specified host/port).
    *   **Using Laravel Sail (Optional):**
        *   If you haven't already, install Sail's Docker files: `php artisan sail:install`
        *   Start the Sail containers: `./vendor/bin/sail up -d`
        *   Access the application at `http://localhost` (or the `APP_PORT` specified in `.env`).
        *   Run Artisan commands via Sail: `./vendor/bin/sail artisan <command>`
        *   Stop Sail: `./vendor/bin/sail down`

## ▶️ Usage

*   Access the public-facing application via the URL configured (`APP_URL` or the address provided by `php artisan serve` / Sail).
*   The admin panel is likely accessible via a specific route (e.g., `/admin`) and requires login credentials. Check `routes/web.php` for specific routes.

## ✅ Testing

Run the PHPUnit test suite:

*   **Standard:**
    ```bash
    php artisan test
    ```
*   **Using Sail:**
    ```bash
    ./vendor/bin/sail test
    ```

## 🎨 Code Formatting

This project uses Laravel Pint for code style. To format your code:

*   **Standard:**
    ```bash
    ./vendor/bin/pint
    ```
*   **Using Sail:**
    ```bash
    ./vendor/bin/sail pint
    ```

## 🤝 Contributing

Contributions are welcome! Please follow standard procedures:

1.  Fork the repository.
2.  Create a new branch for your feature or bug fix.
3.  Make your changes.
4.  Ensure tests pass (`php artisan test`).
5.  Format your code (`./vendor/bin/pint`).
6.  Submit a pull request.

## 📄 License

The idoo0-genia-information-system is open-sourced software licensed under the **MIT license**. (Based on the standard Laravel `composer.json` license field).
