CREATE DATABASE IF NOT EXISTS skincare_ecommerce CHARACTER
SET
  utf8mb4 COLLATE utf8mb4_unicode_ci;

USE skincare_ecommerce;

CREATE TABLE
  IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(80) NOT NULL,
    last_name VARCHAR(80) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    phone VARCHAR(30) DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM ('user', 'admin') NOT NULL DEFAULT 'user',
    status ENUM ('active', 'blocked') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

-- Create an admin securely by running:
-- INSERT INTO users (first_name,last_name,email,password,role)
-- VALUES ('Admin','User','admin@example.com','REPLACE_WITH_PASSWORD_HASH','admin');
-- Generate the hash in PHP with password_hash('YourPassword', PASSWORD_DEFAULT).
INSERT INTO
  users (first_name, last_name, email, password, role)
SELECT
  'Demo',
  'User',
  'demo@example.com',
  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC6pM6K2q3Qv3Y7G7r6W',
  'user'
WHERE
  NOT EXISTS (
    SELECT
      1
    FROM
      users
    WHERE
      email = 'demo@example.com'
  );