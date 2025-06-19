<?php
  
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'user_form_db';

    $conn = new mysqli($host, $user, $pass, $db, 3306, '/var/run/mysqld/mysqld.sock');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>