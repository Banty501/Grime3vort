<?php
include 'backend.php';

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(username, email, password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if($stmt->execute()){
        echo "Signup successful! <a href='../login.html'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
