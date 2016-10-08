<?php
	require_once('1-header.php');
 ?>
		<title>DataGaze - Home</title>
</head>

<?php
	require_once('nav.php');
?>
    <div class="container userPage">
        <div class="card medium">
            <!-- Card Content -->
            <div class="card-image">
              <img src="images/userPic.jpg" >
              <span class="card-title" id ="gemail">Card Title</span>
            </div>
            <div class="card-content">
              <div id=gname></div>
              <p>There are links for help and troubleshooting below.</p>
            </div>
            <div class="card-action">
              <a href="#">Datasets</a>
              <a href="#">Help</a>
              <a href="#">Log Out</a>
            </div>

        </div>
    </div>

<?php
	require_once('2-footer.php');
 ?>
