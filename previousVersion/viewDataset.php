<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="548107118361-5i5qb53t0jk30avq5cpaga38ajof4ku1.apps.googleusercontent.com">
	<title>Research Management System</title>
</head>

<body>
    <?php
    //Including home menu content
    include("menu.php");

    include 'database.php';

    $conn = mysqli_connect("localhost", "root", "resdata47", "form");

    mysqli_select_db("form");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $query = "SELECT * FROM dataset";

    $res = mysqli_query($conn, $query);


    echo '<div class="display-datasets">';
      echo "<h2>Datasets</h2>";
          echo "<table>";
              echo "<thead><tr><th>Dataset<th><th>Description</th></tr></thead>";

              echo "<tbody><tr>";
                while($row = mysqli_fetch_array($res)){
                  echo $row['d_title'] . "<br>" . $row['d_description'];
                }

              echo "</tr></tbody>";

          echo "</table>";
    echo '</div>';

    //Freeing
    mysqli_free_result($res);

    // close connection
    mysqli_close($conn);

    ?>


<?php
    //Including Footer content
    include("footer.php");
?>


<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
