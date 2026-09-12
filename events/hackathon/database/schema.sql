-- Nexyra 24-Hour Hackathon Database Schema
-- Manual QR payment version

CREATE TABLE IF NOT EXISTS `registrations` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `team_name` VARCHAR(255) NOT NULL,
    `leader_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(50) NOT NULL,
    `college` VARCHAR(255) NOT NULL,
    `theme` VARCHAR(255) NOT NULL,
    `team_size` TINYINT NOT NULL,
    `member2` VARCHAR(255) NOT NULL,
    `member3` VARCHAR(255) DEFAULT NULL,
    `member4` VARCHAR(255) DEFAULT NULL,
    `amount` INT NOT NULL,
    `payment_status` ENUM('pending','paid','failed') NOT NULL DEFAULT 'pending',
    `payment_screenshot` VARCHAR(500) DEFAULT NULL,
    `created_at` DATETIME NOT NULL,
    `paid_at` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);