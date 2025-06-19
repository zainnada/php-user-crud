<?php

    require_once 'db_connect.php';

    // get an user data
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $result->fetch_assoc();

    // edit data when post
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET 
                name='$name', 
                email='$email', 
                mobile='$mobile', 
                password='$password' 
                WHERE id=$id";

        $conn->query($sql);
        header("Location: index.php"); // back to home page
        exit();
    }
    ?>

    <!DOCTYPE html>
<html>
    <head>
        <title>Update User</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h2 style="text-align:center;">Update User Data</h2>
        <form method="POST">
            <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
            <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required>
            <input type="text" name="mobile" value="<?= htmlspecialchars($row['mobile']) ?>" required>
            <input type="password" name="password" value="<?= htmlspecialchars($row['password']) ?>" required>
            <input type="submit" name="update" value="Update">
        </form>

    </body>
</html>
