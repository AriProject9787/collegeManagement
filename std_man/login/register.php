<?php
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
    $role = trim($_POST['role']);

    // Validate input
    if (empty($email) || empty($password) || empty($role)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Insert data without hashing
    $stmt = $conn->prepare('INSERT INTO users (email, password_hash, role) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $email, $password, $role);

    if ($stmt->execute()) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
