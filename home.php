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
    <div style="background-color:transparent " class="jumbotron shadow-none">
		<div style="background-color:transparent " class="container">
			<h2 class="text-center pt-5 pb-3">building a better world, one person at a time</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
                        <img src="resources/img/rain.png" width=64 height=64>
						<h3>request</h3>
						<p>seek assistance in the face of overwhelming obstacles</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
                    <img src="resources/img/umbrella.png" width=64 height=64>
						<h3>give</h3>
						<p>better your community through service and awareness</p>
					</div>
				</div>

			</div>
            <h3 class="text-center pt-5 pb-3">ready to get started? register now</h2>
		</div>
	</div>

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
		$result = mysqli_query($link, "SELECT provID, username FROM users");
		$i = 69;
		
		while ($row = $result->fetch_assoc()) {
			$i++;
			// til print has return value 1, whereas echo has none. can use echo in expressions
			// print (print 'hi');
			// Stack Overflow is sexy https://stackoverflow.com/questions/11905140/php-pass-variable-to-include
			includeWithVariables('resources/includes/rain-listing.php', array(
				'name' => $row['username'],
				'id' => $row['id'],
				'num' => $i
			));
		}
	?>








	<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>
	test<br>

	<?php include 'resources/includes/footer.php'?>

</body>

</html>

