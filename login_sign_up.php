<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rizzo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration process
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user details into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    if ($conn->query($sql) === true) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Login process
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user details from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            echo "Login successful. Welcome, " . $username . "!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
}

// Change password process
if (isset($_POST['change_password'])) {
    $username = $_SESSION['username'];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    // Retrieve user details from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify current password
        if (password_verify($currentPassword, $hashedPassword)) {
            // Hash the new password
            $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update password in the database
            $updateSql = "UPDATE users SET password='$newHashedPassword' WHERE username='$username'";
            if ($conn->query($updateSql) === true) {
                echo "Password changed successfully.";
            } else {
                echo "Error: " . $updateSql . "<br>" . $conn->error;
            }
        } else {
            echo "Invalid current password.";
        }
    } else {
        echo "User not found.";
    }
}

// Logout process
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// HTML form for registration, login, change password, and logout
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login System Example</title>
</head>
<body>
    <h1>Registration</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>

    <h1>Login</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <h1>Change Password</h1>
    <form method="POST" action="">
        <input type="password" name="current_password" placeholder="Current Password" required>
        <input type="password" name="new_password" placeholder="New Password" required>
        <button type="submit" name="change_password">Change Password</button>
    </form>

    <h1>Logout</h1>
    <a href="login.php?logout=true">Logout</a>
</body>
</html>
