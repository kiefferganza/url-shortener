# Laravel URL Shortener

A simple URL shortener built using Laravel. This application allows users to shorten long URLs and redirect them using the generated short codes.

---

## Features

- Shorten long URLs to unique short links.
- Redirect users to the original URL using the short link.
- Validate URLs before shortening.
- Includes unit tests for core functionalities.

---

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10.x
- A database (MySQL, SQLite, PostgreSQL, etc.)

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/url-shortener.git
   cd url-shortener
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Configure the environment variables:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials and app settings.

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations to set up the database:
   ```bash
   php artisan migrate
   ```

6. Serve the application locally:
   ```bash
   php artisan serve
   ```
   Access the app at `http://localhost:8000`.

---

## Usage

### Shorten a URL
Send a POST request to `/shorten` with the following payload:
```json
{
  "original_url": "https://example.com"
}
```
Response:
```json
{
  "short_url": "http://yourdomain.com/abc123"
}
```

### Redirect Using a Short Link
Access the short URL, e.g., `http://yourdomain.com/abc123`. This will redirect you to the original URL.

---

## Routes

- **POST** `/shorten` - Shorten a long URL.
- **GET** `/{shortCode}` - Redirect to the original URL.

---

## Testing

Run the unit tests to verify functionality:
```bash
php artisan test
```

Sample tests include:
- Shortening a valid URL.
- Redirecting to the original URL.
- Validation for invalid URLs.

---

## Example Screenshots

1. **Shorten URL Request**:
   ![Shorten URL Example](shorten_url_example.png)

2. **Redirection in Action**:
   ![Redirect Example](redirect_example.png)

---

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for review.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

