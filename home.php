<?php
session_start();

// check user logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div class="login-container">
    <h1><u>Home</u></h1>
    <h2>Welcome, <?= $_SESSION["username"]?>!</h2>
    <a href="logout.php" class="logout-button">Logout</a>
</div>
</body>

</html>
