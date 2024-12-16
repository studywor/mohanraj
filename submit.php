<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password from POST request
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    $validUsername = 'root';
    $validPassword = 'password123';

    // Validate input
    if (empty($username) || empty($password)) {
        echo '<p style="color:red;">Both fields are required.</p>';
    } else if ($username === $validUsername && $password === $validPassword) {
        echo '<p style="color:green;">Login successful! Welcome, ' . htmlspecialchars($username) . '.</p>';
    } else {
        echo '<p style="color:red;">Invalid username or password.</p>';
    }
} else {
    echo '<p style="color:red;">Invalid request method.</p>';
}
?>