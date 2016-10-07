<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!-- Compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="548107118361-5i5qb53t0jk30avq5cpaga38ajof4ku1.apps.googleusercontent.com">
	<title>Research Management System</title>
</head>

<body>
    <?php
    //Including home menu content
    include("menu.php");
    ?>

		<?php

		    include 'database.php';

		    $conn = mysqli_connect("localhost", "root", "resdata47", "form");

		    // Check connection
		    if($conn === false){
		        die("ERROR: Could not connect. " . mysqli_connect_error());
		    }

				//Stay and post in the same page.
				if(isset($_POST['submit'])){


				    // Escape user inputs for security
				    $d_title = mysqli_real_escape_string($conn, $_POST['title']);
				    $d_creator = mysqli_real_escape_string($conn, $_POST['creator']);
				    $d_creationDate = mysqli_real_escape_string($conn, $_POST['dates']);
				    $d_description = mysqli_real_escape_string($conn, $_POST['description']);
				    $d_context = mysqli_real_escape_string($conn, $_POST['context']);
				    $d_content = mysqli_real_escape_string($conn, $_POST['content']);
				    $d_amount = mysqli_real_escape_string($conn, $_POST['amount']);

				    // attempt insert query execution
				    $query = "INSERT INTO dataset (d_title, d_creator, d_creationDate, d_description, d_context, d_content, d_amount)
				    VALUES ('$d_title', '$d_creator', '$d_creationDate', '$d_description', '$d_context', '$d_content', '$d_amount')";

				    if(mysqli_query($conn, $query)){
				        echo "<br>Records added successfully.";
				    } else{
				        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
				    }
				}
		    // close connection
		    mysqli_close($conn);
		 ?>

    <!--Form Creation -->
    <div class="row">
        <form id="submission" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" >
           <div class="form-style row">
						 <h3 class="form-title">Create your dataset</h3>

								<div class="input-field">
								 <label for="title">Title:</label>
								 <input type="text" name="title" id="title" placeholder="Title of the Dataset." required/>
								</div>

								<div class="input-field">
								 <label for="creator">Creator</label>
								 <input type="text" name="creator" id="creator" placeholder="Your name." required/>
								</div>

								<div>
								 <label for="dates">Creation Date</label>
								 <input type="date" name="dates" id="dates" class="datepicker" placeholder="When the dataset was finalized."/>
								</div>

								<div class="input-field">
								 <label for="description">Description:</label>
								 <textarea name="description" id="description" class="materialize-textarea" placeholder="Description of dataset."></textarea>
								</div>

								<div class="input-field">
								 <label for="context">Context:</label>
								 <textarea name="context" id="context" class="materialize-textarea" placeholder="Context of dataset."></textarea>
								</div>

								<div class="input-field">
								 <label for="content">Content</label>
								 <textarea name="content" id="content" class="materialize-textarea" placeholder="Content of dataset."></textarea>
								</div>

								<div class="input-field">
								 <label for="amount">Prize money (Competition data)</label>
								 <input type="number" name="amount" id="amount" min="0" max="10000" placeholder="Prize money (if any).">
								</div>

                <div class="file-field input-field">

                    <div class="btn light-blue">
                        <span>Image Upload</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    <input type="file" id="files" name="file_of_data"/>
                </div>

                <button id="submit-btn" class="btn waves-effect waves-light" type="submit" name="submit">
									Submit<i class="material-icons right">send</i>
								</button>
            </div>
        </form>
    </div>

<!-- Small modal -->
   <div class="card-panel green accent-3" id="displayMessage">
       <h4>Your Dataset is in the process of being created.</h4>
    </div>




    <?php
    //Including Footer content
    include("footer.php");
    ?>

    <!--Creation of dataset google forms should be loaded here with javascript.-->






<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>


</body>
</html>
