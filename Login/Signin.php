<?php
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from registration where username= '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
      if($num == 1){
        while ($row=mysqli_fetch_assoc($result)) {
          if(password_verify($password, $row['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: ../Courses/course.php");
          }
          else{
            $showError = true;
          }
        }
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>

<?php
    if($login){
    echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
    <strong>Success!</strong> You ar logged in.
      <button type="button" class="close" data-dismiss="alert" arial-label="close">
        <span arial-hidden="true">&times;</span>
      </button>
    </div>';
  }
  if($showError){
    echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
      <strong>Error!</strong> Invalid Credentials.
      <button type="button" class="close" data-dismiss="alert" arial-label="close">
        <span arial-hidden="true">&times;</span>
      </button>
    </div>';
  }
?>

<div class="top text-center">SIGNIN WITH US</div>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"><a href="..\Home page\index.php"><img src="\Minor Project\Home page\images\Logo.png" class="logo"></a></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <form action="/Minor Project/Login/Signin.php" method="post">
                    <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label> 
                        <input class="mb-4" type="email" name="username" id="username" placeholder="Enter a valid email address"> 
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" id="password" placeholder="Enter password"> </div>
                    <div class="row px-3 mb-4">
                         <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
                    </form>
                    
                    <div class="row px-3 mb-4">
                <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger" href="Signup.php">Register</a></small> </div>
                </div>  
                <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="also text-center">Also</small>
                        <div class="line"></div>
                    </div>
                <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Connect us with</h6>
                        <div class="facebook text-center mr-3">
                            <a href="https://www.facebook.com/diwakar.giri.792"><div class="fa fa-facebook"></div></a>
                        </div>
                        <div class="instagram text-center mr-3">
                            <a href="https://www.instagram.com/mr._diwakar_011/"><div class="fa fa-instagram"></div></a>
                        </div>
                        <div class="linkedin text-center mr-3">
                           <a href="https://www.linkedin.com/in/diwakar-giri-2a263b192/"><div class="fa fa-linkedin"></div></a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>