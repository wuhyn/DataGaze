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
        d_title VARCHAR(40),
        d_name VARCHAR(40),
        d_email VARCHAR(40),
        d_creationDate VARCHAR(15),
        d_description VARCHAR(500),
        d_content VARCHAR(500),
        d_amount int(6),
        d_image VARCHAR(150),
        d_download VARCHAR(150)
    )";

    //Check for create table conditions
    if($conn->query($createTable) === TRUE){
      echo "<br>Table datasetInput created successfully.";
    }
    else{
      echo "<br>Error createTable: " . $conn->error;
    }

    $conn->close();
 ?>
