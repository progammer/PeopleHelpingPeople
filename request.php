<?php
// Initialize the session
session_start();

// no safety gate for non logged in users. won't be able to submit queries because mandatory username field not satisfied

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sql = 'INSERT INTO opportunity (name, phone, email, giverecieve, number, streetname, city, state, zip, username) 
    VALUES (' . '"' .
    $_POST["eventname"] . '", "' .
    $_POST["phonenum"] . '", "' .
    $_POST["email"] . '", "'  .
    ($_POST['givereceive'] == "give" ? "give" : "receive")  . '", "' .
    $_POST["address"] . '", "' .
    $_POST["street"] . '", "' .
    $_POST["city"] . '", "' .
    $_POST["state"] . '", "' .
    $_POST["zip"] . '", "' .
    $_SESSION["username"] . '");';
    
    mysqli_query($link, $sql);    
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request</title>
    <?php include "resources/includes/header.php"?>
</head>
<body>
    <?php include "resources/includes/navbar.php"?>
    <div class="wrapper col-5 bp-10" style="padding-top: 75px; padding-bottom: 75px">
        <h2>Rainy Day 🌧️ or Spare Umbrella ☔?</h2>
        <p>Please fill in the details for your problem or opportunity.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group"> Giving or Receiving?
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="givereceive" value="give" autocomplete="off" checked> Giving
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="givereceive" value="receive" autocomplete="off"> Receiving
                </label>

            </div>
            <div class="form-group">
                <label>Name of Issue / Opportunity / Service</label>
                <input type="text" name="eventname" class="form-control">
            </div>    
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phonenum" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Address Number</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label>Street Name</label>
                <input type="text" name="street" class="form-control">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control">
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input type="text" name="zip" class="form-control">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <?php print($sql);?>
    </div>
    <?php include "resources/includes/footer.php"?>
</body>
</html>