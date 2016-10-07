<?php
	include('1-header.php');
 ?>
		<title>Data Gazing</title>
</head>

<body>
		<nav>
				<div class="nav-wrapper	orange darken-3">
					<a href="#!" class="brand-logo left	">Logo</a>
					<a href="#mobile" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="navMaster right hide-on-med-and-down">
						<li><a class="navItem center-align" href="index.php">Home</a></li>
						<li><a class="navItem navFocus center-align" href="dataset.php">Datasets</a></li>
						<li><a class="navItem center-align" href="support.php">Support</a></li>
						<li><a class="navItem center-align" href="about.php">About</a></li>
						<div class="navSignIn right">
						<li><div class="g-signin2"  id="sign-in" data-onsuccess="onSignIn"  style="width:130px; height:50px; font-size :1px;" onload="initial_state"></li>
						<li><button href="#" onclick="signOut();" type="button" class="btnSignOut waves-effect waves-light btn #d32f2f red darken-2" id="sign-out">Sign Out</button></li>
						</div>
					</ul>

					<ul class="side-nav blue-grey lighten-5" id="mobile">
						<li><a href="index.php">Home</a></li>
						<li><a href="dataset.php">Datasets</a></li>
						<li><a href="support.php">Support</a></li>
						<li><a href="about.php">About</a></li>
						<div class="navSignIn-side">
							<li><div class="g-signin2"  id="sign-in-side" data-onsuccess="onSignIn"  style="width:130px; height:50px; font-size :1px;"></li>
							<li><button href="#" id="sign-out-side" onclick="signOut();" type="button" class="btnSignOut waves-effect waves-light btn #d32f2f red darken-2" >Sign Out</button></li>
						</div>
					</ul>
				</div>
		</nav>

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
					<a href="createDataset.php" class="tooltipped waves-effect waves-light btn datasetPg-btn"
					   data-position="top" data-delay="50" data-tooltip="Submit your own dataset page." id="create-dataset-button"><div>Create</div></a><br>
					<a href="viewDataset.php" class=" tooltipped waves-effect waves-light btn datasetPg-btn"
						 data-position="top" data-delay="50" data-tooltip="Browse for data." id="view-dataset-button"><div>View</div></a>

	    </div>

<?php
	include('2-footer.php');
 ?>

<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>
