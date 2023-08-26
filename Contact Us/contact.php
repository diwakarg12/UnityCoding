
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="..\Home page\index.php"><img src="Logo.png" alt="Unity Coding"></a>
            <h2>Unity Coding</h2>
        </div>
        <div class="nav">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="..\Home page\index.php" target="_blank">Home</a></li>
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="..\About US\about.html" target="_blank">About Us</a></li>
                <li><i class="fa fa-book" aria-hidden="true"></i><a href="..\Courses\course.php" target="_blank">Courses</a>
                </li>
                <li><i class="fa fa-clone" aria-hidden="true"></i><a href="#">Services</a>
                    <div class="sub-menu-2">
                        <ul>
                            <li><a href=""></a>eLearning</li>
                            <li><a href=""></a>Gaming</li>
                        </ul>
                    </div>
                </li>
                <li class="active"><i class="fa fa-phone" aria-hidden="true"></i><a href="..\Contact Us\contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <hr>
            <p>We are here to help you, So please don't hegitate to contact to Us . We are eager to solve your Problems
                and also don't forgot to give us feedback about our teaching style , our team and also about our
                website.
                This is the only way to improve in every section.
            <p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>
                            B-15 Nishant park housing complex,<br>kakrola gao, dwarka,<br>New Delhi-110074.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91-7488081301</p>
                        <p>+91-9650629919</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>diwakargiri23@gmail.com</p>
                        <p>iamalkapandit@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactform">
                <form action="/Minor Project/Contact Us/contact.php" method="post">
                    <h2>Give Us FeedBack</h2>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" required="required"><span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" required="required"><span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="feedback" id="feedback" required="required"></textarea><span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

  //connecting to the database.
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "project";
  
  //Create a connection.
  $conn = mysqli_connect($servername, $username, $password, $database);
  
  //Die if connection was not successful.
  if(!$conn){
      die("sorry we failed to connect" . mysqli_connect_error());
  }
  else{
      // Submit these to a database 
      //sql query to be executed.
      $sql = "INSERT INTO `getintouch`(`name`, `email`, `feedback`, `date`) VALUES ('$name', '$email', '$feedback', current_timestamp())";
      $result = mysqli_query($conn, $sql);

      //Add a new table to the phptrip in the database.
      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
  }
}

          
?>