<?php
	require_once('1-header.php');
 ?>
		<title>Data Gazing</title>
</head>

<?php
	require_once('nav.php');
?>

	    <!--Instructions for dataset page.-->
	    <div class="container">

	        <br>
	        <div class="row dataset-instruction-style">
	            <h2 class="text-center">Working with datasets</h2>

	            <div class="col m4">
	                <h4>Create a dataset</h4>
	                <ol>
	                    <li>Insert general information.</li>
	                    <li>Include the dataset file.</li>
	                    <li>Include necessary attachments.</li>
	                    <li>Confirm your submission</li>
	                </ol>

	            </div>

	            <div class="col m5">
	                <h4>Explore a dataset</h4>
	                <ol>
	                    <li>Download the dataset</li>
	                    <li>Follow the submitter's instructions</li>
	                    <li>Explore it on your own.</li>
	                </ol>
	             </div>

	            <div class="col m3">
	                <h4>Discuss</h4>
	                <ol>
	                    <li>Study it.</li>
	                    <li>Express your opinion on it.</li>
	                    <li>Suggest different ways of using the data for research.</li>
	                </ol>
	            </div>

	        </div><!--Row-->
	    </div><!--Container-->
			<div class="container">
					<div class="row dataset-instruction-style">
						<h2>Do your thing.</h2>
						<div id="inform-signin">
							<i class="material-icons">info_outline</i>
							<p class="inform-signin">If you want to submit a dataset, sign in.</p>
						</div>
					</div>
			</div>

	    <div class="datasetPageBtn center-align" id="buttons">
					<a href="data/create.php" class="tooltipped waves-effect waves-light btn datasetPg-btn"
					   data-position="top" data-delay="50" data-tooltip="Submit your own dataset page." id="create-dataset-button"><div>Create</div></a><br>
					<a href="data/view.php" class=" tooltipped waves-effect waves-light btn datasetPg-btn"
						 data-position="top" data-delay="50" data-tooltip="Browse for data." id="view-dataset-button"><div>View</div></a>
	    </div>

<?php
	require_once('2-footer.php');
 ?>
