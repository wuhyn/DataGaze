<?php
		require_once('data-header.php');
 ?>
		<title>Data Gazing</title>
</head>

<?php
		require_once('data-nav.php');
?>

	<!--Main content for displaying datasets-->
	<?php
			include 'database.php';

			$conn = mysqli_connect("localhost", "root", "resdata47", "form");

			// Check connection
			if($conn === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	?>

	


<?php
	include('data-footer.php');
 ?>
