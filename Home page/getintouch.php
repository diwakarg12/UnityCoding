<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['feedback'];

  //connecting to the database.
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "minor_project";
  
  //Create a connection.
  $conn = mysqli_connect($servername, $username, $password, $database);
  echo "connection done";
  
  //Die if connection was not successful.
  if(!$conn){
      die("sorry we failed to connect" . mysqli_connect_error());
  }
  else{
      // Submit these to a database
      //sql query to be executed.
      $sql = "INSERT INTO `contact us` (`name`, `email`, `feedback`, `date`) VALUES ('$name', '$email', '$feedback', current_timestamp())";
      $result = mysqli_query($conn, $sql);

      //Add a new table to the phptrip in the database.
      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
        // echo "The record has not been inserted successfully because of this error ----> ". mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Opps!</strong>We are facing some technical issue and thus your entry was not submitted successfully!
        We regret the inconvenience caused! 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
  }
}



?>