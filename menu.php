<nav class="navbar navbar-default navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
										data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle Navogation</span>
				  			<!--The lines on the menu when page is shrunk -->
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<!--Website name and logo-->
						<a class="navbar-brand">DataGaze</a>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
								<li><a href="index.php">Home</a></li>
								<li><a href="datasets.php" class="nav-item">Datasets</a></li>
								<li><a href="support.php" class="nav-item">Support</a></li>
								<li><a href="about.php" class="nav-item">About</a></li>
					 </ul>
					 <ul class="nav navbar-nav navbar-right">
                         <div class="g-signin2" id="sign-in" data-onsuccess="onSignIn" onload="initial_state"></div>

                         <button href="#" onclick="signOut();" type="button" class="btn #d32f2f red darken-2 g-signout2" id="sign-out">Sign Out</button>

					 </ul>
					</div>
				</div>
</nav>
