CREATE DATABASE user_form_db;

use user_form_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    mobile VARCHAR(20),
    password VARCHAR(100)
);
