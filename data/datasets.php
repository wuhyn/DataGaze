<?php
		require_once('data-header.php');
 ?>
		<title>Data Gazing</title>
</head>

<?php
		require_once('data-nav.php');
?>

	<?php
			include 'database.php';

			$query = "SELECT * FROM dataset WHERE id= " . $_GET["id"];
			$retrieve = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($retrieve)){

				//Defining variables
				$title = $row['d_title'];
				$name = $row['d_name'];
				$email = $row['d_email'];
				$date = $row['d_creationDate'];
				$desc = $row['d_description'];
				$content = $row['d_content'];
				$d_amount = $row['d_amount'];
				$image = $row['d_image'];
				$download = $row['d_download'];

				//Show title
			//	echo '<h3>' . $title . '</h3>';
				//Show description
			//	echo '<p>' . $row['d_description'] . '</p>';
				//Show picture
			}
	?>

	<!--Main content for displaying datasets-->
	<div class="container view-dataset-master">
		<div class="card-panel dataset-body indigo darken-1 center-align">
					<h3><?php echo $title; ?></h3>
		</div>

		 <div class="row">
			<div class="col s12 m12">
				<div class="card large">
					<div class="card-image">
						<img class="dataset-pic" src="<?php echo $image; ?>">


					</div>
					<!--Description-->
					<div class="card-content">
							<span class="card-title"><?php echo ' by ' . $name; ?></span>
							<p><?php echo $date; ?></p>
					</div>
					<div class="card-action">
							<a href="#desc">Description</a>
							<a href="#cont">Content</a>
							<a href="#download">Download</a>
					</div>
					</div>



					<div class="card-panel dataset-body blue-grey lighten-4">
							<h5 id="desc">Description</h5>
							<p><?php echo $desc;?></p>
							<br>
							<h5 id="cont">Content</h5>
							<p><?php echo $content;?></p>

					</div>

					<div class="card-panel dataset-body blue-grey lighten-4">
							<h5>Download</h5>
							<p><?php echo $download;?></p>
					</div>




			</div>
		</div>

	</div>



<?php
	include('data-footer.php');
 ?>
