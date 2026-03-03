<?php
include 'backend.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 0){
        die("Invalid username!");
    }

    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit();
    } else {
        die("Invalid password!");
    }
}
?>
