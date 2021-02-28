<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <?php include "resources/includes/header.php"?>
</head>
<body>
    <?php include "resources/includes/navbar.php"?>
    <?php include "resources/includes/footer.php"?>
    <div class="wrapper col-5" style="padding-top: 75px; text-align:middle">
            <h1>Welcome to the family, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!😃 Here's to
            a better world of people helping people.</h1>
        <p>
            <a href="home.php" class="btn">Back Home</a>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>
</body>
</html>