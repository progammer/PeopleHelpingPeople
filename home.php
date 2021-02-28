<?php
// Initialize the session
session_start();
 ?>
<!doctype html>
<html lang="en-US" dir="ltr">
<head>
	<?php require_once "config.php"; include 'resources/includes/header.php'?>
</head>

<body class=noselect>
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
			<?php
			if (isset($_SESSION['username'])){
				echo '<h3 class="text-center pt-5 pb-3">Hello, ', $_SESSION['username'], '!😃</h3>';
			} else {
				echo '<h3 class="text-center pt-5 pb-3">ready to get started? register now</h3>';
			}
            	
			?>
		</div>
	</div>

	
	<!--From stackoverflow:
	fetch_array() returns one array with both numeric keys, and associative strings (column names), so here you can either use $row['column_name'] or $row[0]
	fetch_assoc() will return string indexed key array and no numeric array so you won't have an option here of using numeric keys like $row[0].
	-->

	<?php include 'resources/includes/footer.php'?>

</body>

</html>

