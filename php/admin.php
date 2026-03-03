<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!='admin'){
    die("Access denied!");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Grime3vort</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Admin Panel</h1>
<a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
