# Urblog API

Urblog API is the backend API for the **Urblog** blogging application. Built with **Laravel 11**, it provides features for managing users, articles, and comments, secured with CORS, and supports **AWS S3** storage with CDN for fast content delivery.

## Features

-   **User Management**: Registration, login, and profile management.
-   **Content Management**: CRUD operations for articles and categories.
-   **Comments System**: Add, edit, and manage comments on articles.
-   **Secure API**: CORS implementation to control API access.
-   **Media Storage**: Efficient media handling with **AWS S3** and CDN integration.
-   **Jetstream Dashboard**: Backend dashboard support for admin functionalities.

## Tech Stack

-   **Framework**: Laravel 11
-   **Authentication**: Laravel Sanctum
-   **Database**: MySQL/PostgreSQL
-   **Storage**: AWS S3
-   **API Architecture**: RESTful

## Installation

Follow these steps to set up the project locally:

1. Clone this repository:

    ```bash
    git clone https://github.com/zoelabbb/urblog-api.git
    cd urblog-api
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Set up the `.env` file:

    - Copy the example file:
        ```bash
        cp .env.example .env
        ```
    - Configure database, AWS S3, and other environment variables in `.env`.

4. Run migrations:

    ```bash
    php artisan migrate
    ```

5. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

Once the server is running, you can access the API at `http://localhost:8000`. Refer to the API documentation (if available) for detailed endpoints and request examples.

## Contributing

We welcome contributions! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature/your-feature-name
    ```
3. Commit your changes and push the branch:
    ```bash
    git push origin feature/your-feature-name
    ```
4. Open a Pull Request describing your changes.

## License

This project is licensed under the [MIT License](LICENSE).
