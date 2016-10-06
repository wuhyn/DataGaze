<?php
  /****************************************************************************
  Setting up the database and the tables
  *****************************************************************************/
  $servername = "localhost";
  $user = "root";
  $pw = "resdata47";

  //Make the connection
  $conn = new mysqli($servername, $user, $pw);

  //Checking the connection
  if($conn->connect_error){
    die("Connection has failed: " . $conn->connect_error);
  }

  echo "<br>Connection has worked.";

  //Creating and checking database
  $createDatabase = "CREATE DATABASE form";
  echo "<br>";
  if($conn->query($createDatabase) === TRUE){
    echo "Database for forms created successfully.";
  }
  else{
    echo "<br>Error: " . $conn->error ."<br>";
  }


  //Creating the table
  $createTable = "CREATE TABLE form.dataset (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      d_title VARCHAR(30),
      d_creator VARCHAR(15),
      d_creationDate VARCHAR(15),
      d_description VARCHAR(250),
      d_context VARCHAR(250),
      d_content VARCHAR(250),
      d_amount int(6)

  )";

    if($conn->query($createTable) === TRUE){
      echo "<br>Table datasetInput created successfully.";
    }
    else{
      echo "<br>Error createTable: " . $conn->error;
    }

    //$conn->select_db('forms');

    //$query = "INSERT INTO `datasetInput`('id', `title`, `creator`) VALUES ('1','booooooo', 'afsadasdsad')";
    /*$query = "INSERT INTO `datasetInput`(`title`, `creator`, `creationDate`, `description`, `context`, `content`) VALUES ('booooooo','booooooo','booooooo','booooooo','booooooo','booooooo')";


    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    }
    else {
       echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }*/


    $conn->close();
 ?>
