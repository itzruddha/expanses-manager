# Expenses Manager

A web application built with Laravel 11 that helps users manage and track expenses efficiently.

## Features

- Add, view, edit, and delete expenses
- Categorize expenses
- Monthly reports for better financial insights

## Installation

### Prerequisites

Make sure you have the following installed:

- [PHP 8.2+](https://www.php.net/releases/)
- [Composer](https://getcomposer.org/)
- [Node.js & npm](https://nodejs.org/en/) (for frontend asset management)
- [MySQL](https://www.mysql.com/) or other database supported by Laravel

### Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/itzruddha/expanses-manager.git
   cd expanses-manager
   ```

2. **Install Dependencies**

   ```bash
   composer install
   npm install && npm run build
   ```

3. **Environment Configuration**

   Copy the example environment file and modify it with your own settings:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update `.env` with your database credentials and other necessary configuration.

4. **Database Migration and Seeding**

   Run the following to set up your database:

   ```bash
   php artisan migrate --seed
   ```

5. **Run the Application**

   Start the Laravel development server:

   ```bash
   php artisan serve
   ```

   The app should now be accessible at `http://localhost:8000`.

## Contributing

Contributions are welcome! Here’s how to get started:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit (`git commit -m 'Add some feature'`).
4. Push to your branch (`git push origin feature-branch`).
5. Create a pull request describing your changes.

### Code of Conduct

We expect all contributors to follow our [Code of Conduct](CODE_OF_CONDUCT.md) to ensure a welcoming and inclusive community.

## License

This project is open-source and available under the [MIT License](LICENSE).

---

This template covers basic setup, installation, and contributing guidelines. Let me know if you'd like additional sections or customization!