# Agency Portfolio Template

A modern, single-page portfolio and agency website template built with Bootstrap 5. It features a clean design, smooth scrolling, and a fully functional PHP contact form that saves submissions to a MySQL database.

## Features

*   **Modern Design**: A professional layout suitable for agencies, freelancers, and creative portfolios.
*   **Responsive**: Built with Bootstrap 5, ensuring it looks great on all devices, from desktops to mobile phones.
*   **Single-Page Layout**: User-friendly navigation with smooth scrolling to different sections of the page.
*   **PHP Contact Form**: A secure, backend-ready contact form that validates input and saves messages to a MySQL database.
*   **CSS Animations**: Subtle animations on scroll to enhance user experience.
*   **Easy to Customize**: Well-structured code and clear class names make it simple to modify content and styles.

## Prerequisites

To run this project locally with the fully functional contact form, you will need a local server environment that supports PHP and MySQL. We recommend one of the following:

*   [XAMPP](https://www.apachefriends.org/index.html) (for Windows, macOS, and Linux)
*   [WAMP](https://www.wampserver.com/en/) (for Windows)
*   [MAMP](https://www.mamp.info/en/mamp/) (for macOS)

## Setup and Installation

Follow these steps to get the project up and running on your local machine.

### 1. Project Files

1.  Download or clone this repository.
2.  Place the entire project folder (e.g., `port`) inside your local web server's root directory. For XAMPP, this is typically the `htdocs` folder.

### 2. Database Setup

The contact form requires a MySQL database to store messages. The setup is straightforward with the provided SQL script.

1.  **Start your local server's** Apache and MySQL services.
2.  Open your web browser and navigate to your database management tool (e.g., `http://localhost/phpmyadmin`).
3.  Go to the **Import** tab.
4.  Click **"Choose File"** and select the `contact.sql` file from the project directory.
5.  Ensure the "Character set of the file" is `utf-8`.
6.  Click the **Go** button at the bottom of the page.

This will automatically create the `contact` database and the `contact_messages` table with the correct structure.

### 3. Database Connection

The PHP script needs to know how to connect to your database.

1.  Open the `contact.php` file in your code editor.
2.  Verify that the database credentials match your local setup. For a default XAMPP installation, the settings below are usually correct.

    ```php
    <?php
    define('DB_HOST','localhost');
    define('DB_USER','root');      // Default XAMPP username
    define('DB_PASS','');          // Default XAMPP password is empty
    define('DB_NAME','contact');    // The database created in the previous step
    ?>
    ```
    If your MySQL username, password, or database name are different, update them in this file.

### 4. Running the Project

Once the files are in place and the database is configured, you can view the website by navigating to its URL in your browser. For example: `http://localhost/port/` (assuming your project folder is named `port`).

## File Structure

```
.
├── assets/
│   ├── css/
│   │   └── style.css       # Custom styles for the template
│   └── images/             # Project images
├── contact.php             # Database connection configuration
├── contact.sql             # Database setup script
├── handle_contact.php      # PHP script to process form data
├── index.html              # Main HTML file containing all sections
└── README.md               # This file
```

## Customization

*   **Content**: All text and images can be edited directly in `index.html`.
*   **Styling**: Custom styles can be added or modified in `assets/css/style.css`.
*   **Contact Form**: The form fields are in `index.html`, and the server-side processing logic is in `handle_contact.php`.
