<?php
include 'backend.php'; // Connect to database

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if($stmt->execute()){
        echo "Registration successful! <a href='../login.html'>Login here</a>";
    } else {
        echo "Username already taken!";
    }
}
?>
