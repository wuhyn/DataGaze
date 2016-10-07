<?php
	include('1-header.php');
 ?>
		<title>DataGaze Home</title>
</head>

<body>
		<nav>
		    <div class="nav-wrapper	orange darken-3">
		      <a href="#!" class="brand-logo left	">Logo</a>
		      <a href="#mobile" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="navMaster right hide-on-med-and-down">
		        <li><a class="navItem navFocus center-align" href="index.php">Home</a></li>
		        <li><a class="navItem center-align" href="dataset.php">Datasets</a></li>
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

	<div class="slider first-section">
     <ul class="slides">
       <li>
         <img src="images/frontOne.jpg" alt="library image"> <!-- random image -->
         <div class="caption left-align">
           <h3>Share Research Data!</h3>
           <h5 class="light grey-text text-lighten-3">Join our new community,<br> make new discoveries,<br>
 						share data easily, <br>learn the importance of research.</h5>
         </div>
       </li>
       <li>
         <img src="images/frontTwo.jpeg" alt="computer image"> <!-- random image -->
         <div class="caption right-align">
           <h3>Having trouble?</h3>
           <h5 class="light grey-text text-lighten-3">We're here to help.</h5>
					 <a href="support.php" class=" tooltipped waves-effect waves-light btn datasetPg-btn"
							data-position="bottom" data-delay="50" data-tooltip="Need help?" id="view-dataset-button"><div>Support</div></a>

         </div>
       </li>
     </ul>
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
