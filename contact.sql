-- -------------------------------------------------------------
-- This script sets up the database for the contact form.
-- It creates the 'contact' database and the 'contact_messages' table.
-- -------------------------------------------------------------

-- 1. Create the database
-- The name 'contact' matches the DB_NAME defined in your contact.php file.
-- `IF NOT EXISTS` prevents an error if the database already exists.
CREATE DATABASE IF NOT EXISTS `contact` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- 2. Select the newly created database to work with
USE `contact`;

-- 3. Create the table to store the form submissions
-- The columns match the fields in your HTML form and handle_contact.php script.
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `mobile` VARCHAR(20) DEFAULT NULL,
  `meeting_time` DATETIME DEFAULT NULL,
  `message` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
