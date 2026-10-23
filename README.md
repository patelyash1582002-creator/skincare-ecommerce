# Lumiére Skincare E-commerce — Phase 1

## Stack
HTML5/CSS3/Vanilla JS + PHP 8+ + MySQL/PDO.

## Setup
1. Copy the `skincare-ecommerce` folder into XAMPP `htdocs` (or your PHP web root).
2. Start Apache and MySQL.
3. Import `database/skincare_ecommerce.sql` in phpMyAdmin.
4. Edit `config/db.php` with your MySQL credentials if needed.
5. Open `/skincare-ecommerce/index.php`.

## Demo user
Email: demo@example.com
Password: password

## Admin
No public admin registration is provided. Create an admin manually:
- Generate a PHP hash with `password_hash('YourPassword', PASSWORD_DEFAULT)`.
- Insert the admin row into the `users` table with role `admin`.

## Phase 1 included
Premium responsive storefront UI, product browsing/details, user registration/login/logout, password-flow UI, user dashboard/profile, admin login/dashboard/user management, demo analytics, PDO, sessions, role checks, password hashing, CSRF tokens, prepared statements and output escaping.

Payment, checkout, orders, inventory, coupons and advanced product backend are intentionally deferred.
