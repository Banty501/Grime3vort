<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Grime3vort</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<?php if($_SESSION['role']=='admin'){ ?>
    <a href="admin.php">Go to Admin Page</a>
<?php } ?>
<br>
<a href="logout.php">Logout</a>
</body>
</html>
