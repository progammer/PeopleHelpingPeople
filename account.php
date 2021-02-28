<?php
// Initialize the session
session_start();
require_once "config.php";
 
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
            <h1>Welcome to your profile, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
            You can manage your listings here.
        <p>
            <a href="home.php" class="btn">Back Home</a>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>


    <?php
		function includeWithVariables($filePath, $variables = array(), $print = true)
		{
			$output = NULL;
			if(file_exists($filePath)){
				// Extract the variables to a local namespace
				extract($variables);
		
				// Start output buffering
				ob_start();
		
				// Include the template file
				include $filePath;
		
				// End buffering and return its contents
				$output = ob_get_clean();
			}
			if ($print) { 
				// CLEANED OBJECT STORED IN OUTPUT NOW HOLDS WHAT HAVE WOULD HAVE BEEN 
				// NORMALLY INCLUDED USING <?php include 'file'?\>
				print $output;
			}
			return $output;
		
		}

		$username = $_SESSION['username'];

		$result = mysqli_query($link, "SELECT * FROM opportunity WHERE (username LIKE '$username')");
        
		while($row = mysqli_fetch_assoc($result)) {
			// til print has return value 1, whereas echo has none. can use echo in expressions
			// print (print 'hi');
			includeWithVariables('resources/includes/own_list.php', array(
				'name' => $row['name'],
				'phone' => $row['phone'],
				'email' => $row['email'],
				'date' => $row['date'],
				'givereceive' => $row['giverecieve'],
				'number' => $row['number'],
				'street' => $row['streetname'],
				'state' => $row['state'],
				'zip' => $row['zip'],
				'city' => $row['city'],
			));
		}
	?>

</body>
</html>