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

			$query = "SELECT * FROM dataset";
			$retrieve = mysqli_query($conn, $query);
			/*
			while($row = mysqli_fetch_assoc($retrieve)){
				$d_title = $row['d_title'];
				$d_description = $row['d_description'];

			}
			*/
	?>



		<div class="container view-dataset-master">
			<h3>Community Dataset</h3>
			<div class="blue lighten-5 view-dataset">
	      <table>
	        <thead>
	          <tr class="blue darken-1">
	              <th data-field="id">Dataset Title</th>
	              <th data-field="name">Description</th>
	          </tr>
	        </thead>

	        <tbody>

						<?php
						//Loop to display all the data
						while($row = mysqli_fetch_assoc($retrieve)){
							echo '<tr>';
											echo '<td>' . $row['d_title'] . '</td>';
											echo '<td>' . $row['d_description'] . '</td>';
							echo '</tr>';
							$d_title = $row['d_title'];


						}?>


	        </tbody>
	      </table>
			</div>
	</div>
<?php
	include('data-footer.php');
 ?>
