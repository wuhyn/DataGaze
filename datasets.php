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
    ?>

    <!--Instructions for dataset page.-->
    <div class="container">

        <br>
        <div class="row dataset-instruction-style">
            <h1 class="text-center">Working with datasets</h1>

            <div class="col-xs-6 col-sm-4">
                <h4>Create a dataset</h4>
                <ol>
                    <li>Insert general information.</li>
                    <li>Include the dataset file.</li>
                    <li>Include necessary attachments.</li>
                    <li>Confirm your submission</li>
                </ol>

            </div>

            <div class="col-xs-6 col-sm-4">
                <h4>Explore a dataset</h4>
                <ol>
                    <li>Download the dataset</li>
                    <li>Follow the submitter's instructions</li>
                    <li>Explore it on your own.</li>
                </ol>
             </div>

            <!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs-block"></div>

            <div class="col-xs-6 col-sm-4">
                <h4>Discuss</h4>
                <ol>
                    <li>Study it.</li>
                    <li>Express your opinion on it.</li>
                    <li>Suggest different ways of using the data for research.</li>
                </ol>
            </div>

        </div><!--Row-->
    </div><!--Container-->

    <div id="buttons">
        <a href="createDataset.php" class="btn dataset-button" id="create-dataset-button">Create</a><br>
        <a href="viewDataset.php" class="btn dataset-button view-dataset-button">View</a>
    </div>



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
