<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple hardcoded check (replace with database in production)
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.html'); // Redirect to home page
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>