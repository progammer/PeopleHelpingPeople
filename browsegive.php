<?php
// Initialize the session
session_start();
?>
<!doctype html>
<html lang="en-US" dir="ltr">
<head>
	<?php require_once "config.php"; include 'resources/includes/header.php'?>
</head>

<body>
    <?php $page='home'; include 'resources/includes/navbar.php'; ?>

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal">View Listing</button>

	<!--Modal that shall persist and be dynamically updated when a card is clicked, rather than creating
	associated modals for every single card... HOPE THIS WORKS-->
    <div class="modal fade" id="modal" role="dialog">
        <div class="modal-dialog">
            <div style = "background-color: #222" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Close&times;</button>
                    <h4 class="modal-title">Card Info</h4>
                </div>
                <div class="modal-body">
                    <p>Testing</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
	<!--From stackoverflow:
	fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]
	fetch_assoc() will return string indexed key array and no numeric array so you won't have an option here of using numeric keys like $row[0].
	-->

    <!-- Container for all listings [should be placed in browse]-->
		Refresh button to show new listings
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

		

		//$givereceive = $_SESSION['givereceive'];
		$username = $_SESSION['username'];

		$result = mysqli_query($link, "SELECT * FROM opportunity WHERE NOT (username = '$username') AND (giverecieve='give')");

		while($row = mysqli_fetch_assoc($result)) {
			// til print has return value 1, whereas echo has none. can use echo in expressions
			// print (print 'hi');
			includeWithVariables('resources/includes/rain-listing.php', array(
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
				'user' => $row['username'],
			));
		}
	?>


	<?php include 'resources/includes/footer.php'?>

</body>

</html>

