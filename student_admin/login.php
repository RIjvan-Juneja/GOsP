<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is already logged in, redirect to the home page or dashboard
    header('Location: student_admin\index.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection settings
     $dbuser="root";
     $dbpass="";
     $host="localhost";
     $db="gosp";

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $dbuser, $dbpass);

    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare('SELECT * FROM student_admin WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validate the submitted credentials
    if ($user && password_verify($password, $user['password'])) {
        // Set the session variables
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;

        // Redirect to the home page or dashboard
        header('Location: student_admin\html\index.php');
        exit();
    } else {
        // Invalid credentials, show an error message
        $error_message = "Invalid username or password";
    }
}
?>