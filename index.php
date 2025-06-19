<?php
    // database connect
    require_once 'db_connect.php';

    // insert data
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, email, mobile, password)
                VALUES ('$name', '$email', '$mobile', '$password')";
        $conn->query($sql);
    }

    // delete data
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $conn->query("DELETE FROM users WHERE id=$id");
    }

    // get data
    $result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users Managment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Simple CRUD Project</h1>

<h2>Add New User</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="text" name="mobile" placeholder="Enter your mobile" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" name="submit" value="Submit">
</form>

<h2>Users list</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operations</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['mobile']) ?></td>
        <td><?= htmlspecialchars($row['password']) ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>" class="btn-update">Update</a>
            <a href="?delete=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
