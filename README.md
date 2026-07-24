# EventOS

EventOS is an open-source platform for managing charity events, bingo, raffles, auctions, donations and community fundraising.

The first official module will be **Bingo75**, built on top of a modular PHP foundation prepared for multi-organization use, auditability, API integrations and future real-time interfaces.

## Project Goals

- Provide a professional event management platform for associations, community groups and nonprofit organizations.
- Keep the core small, secure and easy to host.
- Support modular features such as Bingo75, raffles, auctions, tickets and donations.
- Build from the start with documentation, tests, continuous integration and security practices.

## Technical Foundation

- PHP 8.3+
- Composer
- PSR-4 autoloading
- MVC-inspired HTTP foundation
- Modular domain structure
- MariaDB or MySQL
- PHPUnit
- PHPStan
- PHP-CS-Fixer
- GitHub Actions

## Directory Overview

```text
app/            Core application code
bootstrap/      Application bootstrapping
config/         Configuration files
database/       Migrations and seeds
docs/           Project documentation
modules/        Optional and domain modules
public/         Web server document root
resources/      Front-end source assets
routes/         Route definitions
storage/        Runtime files, logs, cache and uploads
tests/          Automated tests
```

## Local Setup

Requirements:

- PHP 8.3 or newer
- Composer
- MariaDB 11 or MySQL 8 for database-backed features

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Run the development server:

```bash
php -S localhost:8080 -t public
```

Open:

```text
http://localhost:8080
```

## Quality Commands

```bash
composer test
composer analyse
composer format:check
composer audit
```

## Roadmap

- v0.1 Foundation
- v0.2 Authentication
- v0.3 Dashboard
- v0.4 Organizations
- v0.5 Users and permissions
- v0.6 Event management
- v0.7 Bingo75
- v0.8 Finance
- v0.9 Reports and public panel
- v1.0 First stable release

## License

The final license is not yet selected. The current recommendation is GPL-3.0-or-later.
