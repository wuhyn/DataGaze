<?php
		require_once('data-header.php');
		session_start();
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
			<div class="grey lighten-4 view-dataset">
	      <table>
	        <thead>
	          <tr class="view-dataset-tr">
	              <th class="center-align">Dataset Title</th>
	              <th class="center-align">Description</th>
								<th class="center-align view-dataset-category-th">Category</th>
	          </tr>
	        </thead>

	        <tbody>

						<?php
						//Loop to display all the data
						while($row = mysqli_fetch_assoc($retrieve)){
							echo '<tr>';

											//Show title
											echo '<td class="view-dataset-title center-align">' . '<a href="datasets.php?id= ' . $row['id'] . ' ">' . $row['d_title'] . '</a>' . '</td>';
										 //Show description
											echo '<td>' . $row['d_description'] . '</td>';

											if($row['d_amount'] == 0){
												echo '<td class="view-dataset-title center-align">' . "Non-profit" . '</td>';
											}

											else{
												echo '<td class="view-dataset-title center-align">' . "Prize money <br>$" . $row['d_amount'] . '</td>';
											}

							echo '</tr>';
							//$d_title = $row['d_title'];

						}

						//Close connection to database
		    		$conn->close();

						?>


	        </tbody>
	      </table>
			</div>
	</div>
<?php
	include('data-footer.php');
 ?>
