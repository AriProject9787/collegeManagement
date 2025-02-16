<?php
session_start();

// Database configuration
$host = 'localhost';
$user = 'root';
$password = ''; // Update with your database password
$database = 'coll_man';

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Prepare and execute the query (without password hashing)
    $stmt = $conn->prepare('SELECT id, password_hash, role FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        // Compare plain text passwords directly
        if ($password === $user['password_hash']) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'student') {
                header('Location: student_dashboard.php');
            } else {
                header('Location: staff_dashboard.php');
            }
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}

$conn->close();
