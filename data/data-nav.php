<body>

		<!--Google Info Account and Log out dropdown-->
		<ul id="dropdown" class="dropdown-content">
		  <li><a href="../userInfo.php">Profile Info.</a></li>
		  <li><a href="#!" onclick="signOut();">Log out</a></li>
		</ul>

		<nav>
		    <div class="nav-wrapper">
					<img src="../images/logo.png" alt="logo" class="brand-logo left" draggable="false">


		      <a href="#mobile" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="navMaster right hide-on-med-and-down">
		        <li><a class="navItem center-align" href="../index.php">Home</a></li>
		        <li><a class="navItem center-align" href="../dataset.php">Datasets</a></li>
		        <li><a class="navItem center-align" href="../support.php">Support</a></li>
		        <li><a class="navItem center-align" href="../about.php">About</a></li>
						<div class="navSignIn right">
								<li><div class="g-signin2"  id="sign-in" data-onsuccess="onSignIn"  style="width:130px; height:50px; font-size :1px;" onload="initial_state"></div></li>
								<!--<li><button href="#" onclick="signOut();" type="button" class="btnSignOut waves-effect waves-light btn #d32f2f red darken-2" id="sign-out">Sign Out</button></li>-->
								<li><button href="#"  type="button" class="btnSetting waves-effect waves-light btn indigo accent-2"  data-activates="dropdown" id="sign-out">Settings</button></li>
						</div>

		      </ul>


		      <ul class="side-nav blue-grey lighten-5" id="mobile">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../dataset.php">Datasets</a></li>
						<li><a href="../support.php">Support</a></li>
						<li><a href="../about.php">About</a></li>
						<div class="navSignIn-side">
							<li><div class="g-signin2"  id="sign-in-side" data-onsuccess="onSignIn"  style="width:130px; height:50px; font-size :1px;"></li>
							<li><button href="#" id="sign-out-side" onclick="signOut();" type="button" class="btnSignOut waves-effect waves-light btn #d32f2f red darken-2" >Sign Out</button></li>

						</div>
		      </ul>

		    </div>

	</nav>
