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
                        <label for="file_of_data">Include an image to represent the data.</label><br><br>
                        <div class="btn waves-effect waves-light createPg-btn">
                            <span>Choose File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                        <input type="file" id="files" name="file_of_data"/>
                    </div>
                    <br>

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
