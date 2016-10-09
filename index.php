<?php
	require_once('1-header.php');
 ?>
		<title>DataGaze - Home</title>
</head>

<?php
	require_once('nav.php');
?>

	<div class="slider first-section">
     <ul class="slides">
       <li>
         <img src="images/frontOne.jpeg" alt="library image"> <!-- random image -->
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
	require_once('2-footer.php');
 ?>
