<!--Head-->
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
                      //modal


                      header("location: ../index.php");
    				    } else{
    				        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    				    }
    				}

    		    // close connection
    		    mysqli_close($conn);
    ?>

        <!--Form Creation -->
    <div class="container">
        <div class="row">
            <form id="submission" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" >

               <div class="form-style col s9 m12">

    						 <h3 class="form-title">Create your dataset</h3>
                    <br>
    								<div class="input-field">
    								 <label for="title">Title:</label>
    								 <input type="text" name="title" id="title" placeholder="Title of the Dataset." maxlength="40" required/>
    								</div>

										<div>
    								 <label for="creator">Name:</label>
    								 <input type="text" name="creator" id="creator" placeholder="Your Name." maxlength="40" required />
									  </div>

										<div class="input-field">
    								 <label for="email">Email:</label>
    								 <input type="email" name="email" id="email" placeholder="Your email." required/>
    								</div>

    								<div>
    								 <label for="dates">Creation Date:</label>
    								 <input type="date" name="dates" id="dates" class="datepicker" placeholder="When the dataset was finalized." />
    								</div>

    								<div class="input-field">
    								 <label for="description">Description:</label>
    								 <textarea name="description" id="description" class="materialize-textarea" placeholder="Description of dataset." maxlength="500"></textarea>
    								</div>

    								<div class="input-field">
    								 <label for="content">Content:</label>
    								 <textarea name="content" id="content" class="materialize-textarea" placeholder="Content of dataset. " maxlength="500"></textarea>
    								</div>

    								<div class="input-field">
    								 <label for="amount">Prize money (Competition data):</label>
    								 <input type="number" name="amount" id="amount" value="0" min="0" max="10000" placeholder="Prize money (if any).">
    								</div>

										<!--Include image url and file url-->
										<div class="input-field">
    								 <label for="image">Image URL:</label>
    								 <input type="text" name="image" id="image" placeholder="Image link to display in page." required/>
    								</div>

										<div class="input-field">
										 <label for="email">Download Link:</label>
										 <input type="text" name="download" id="download" placeholder="Download link to display in page." required/>
										</div>

										<!--Submit button-->
                    <button id="submit-btn" class="btn waves-effect waves-light createPg-btn" type="submit" name="submit">
    									Submit<i class="material-icons right">send</i>
    								</button>

                </div>
            </form>
        </div>
    </div><!--Container-->

    <!--Modal-->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Notification</h4>
        <h3>You are being redirected</h3>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>



<?php
	include('data-footer.php');
 ?>
