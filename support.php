<?php
	include('1-header.php');
 ?>
		<title>Data Gazing</title>
</head>

<body>
    <?php
    //Including home menu content
    include("menu.php");
    ?>

    <nav>
		    <div class="nav-wrapper	orange darken-3">
		      <a href="#!" class="brand-logo center">Logo</a>
		      <a href="#mobile" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="navMaster left hide-on-med-and-down">
		        <li><a class="navItem center-align" href="index.php">Home</a></li>
		        <li><a class="navItem center-align" href="dataset.php">Datasets</a></li>
		        <li><a class="navItem navFocus center-align" href="support.php">Support</a></li>
		        <li><a class="navItem center-align" href="about.php">About</a></li>
		      </ul>
					<ul class="navSignIn right">
						<li><div class="g-signin2"  id="sign-in" data-onsuccess="onSignIn"  style="width:130px; height:50px; font-size :1px;" onload="initial_state"></li>
						<li><button href="#" onclick="signOut();" type="button" class="btnSignOut waves-effect waves-light btn #d32f2f red darken-2" id="sign-out">Sign Out</button></li>
					</ul>
		      <ul class="side-nav" id="mobile">
						<li><a href="index.php">Home</a></li>
						<li><a href="dataset.php">Datasets</a></li>
						<li><a href="support.php">Support</a></li>
						<li><a href="about.php">About</a></li>
		      </ul>
		    </div>
	 </nav>



<?php
    //Including Footer content
    include("footer.php");
?>


<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
