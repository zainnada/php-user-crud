# User Management Project – PHP CRUD

This is a simple web application built with PHP and MySQL to manage user records.  
It allows you to **Create**, **Read**, **Update**, and **Delete** users through a simple user interface.

## Features:
- Display all users in a table.
- Add new users.
- Update existing users.
- Delete users.

## How to Run the Project:

1. Copy the project files into your local server directory (e.g., `htdocs` for XAMPP).
2. Create a new MySQL database, `user_form_db`.
3. Import the SQL file (`userDB.sql`) into the database using phpMyAdmin or the MySQL command line.
4. Update the database connection in `db_connect.php` if needed:
   ```php
   $conn = mysqli_connect("localhost", "root", "", "user_form_db");
   
## Open the project in your browser:
- http://localhost/php-user-crud/
- http://localhost/your-folder-name/

## Notes:
- Make sure Apache and MySQL are running before accessing the project.
