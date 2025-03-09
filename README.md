# Image Display PHP Program

This is a simple PHP-based image display and management application that allows users to add image URLs and display them in a gallery format.

## Features
- Users can add images by providing a name and a URL.
- Images are stored in a MySQL database.
- The gallery displays all added images.
- Responsive grid layout for image display.

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- PDO for database interaction

## Installation
1. Clone or download the repository to your local server directory.
2. Set up a MySQL database and create a new database named `photos_db`.
3. Configure the `config.php` file with your database credentials:
   ```php
   $host = 'localhost';
   $dbname = 'photos_db';
   $username = 'root'; // Default for XAMPP
   $password = ''; // Default for XAMPP
   ```
4. Start your Apache and MySQL server (e.g., using XAMPP or LAMP stack).
5. Navigate to the project folder in your browser (e.g., `http://localhost/image-display`).

## Usage
- Visit `index.php` to view the image gallery.
- Use `add.php` to insert new images by providing a name and an image URL.
