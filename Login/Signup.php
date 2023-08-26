<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '_dbconnect.php';
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists = false;

    //Check wheather this username Exists .
    $existSql = "SELECT * FROM `registration` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
      // $exists = true;
      $showError = "Username Alrady Exists";
    }
    else{
        // $exists = false;
        if(($password == $cpassword)){
          $hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO `registration` (`name`, `username`, `password`, `dt`) VALUES ('$name', '$username', '$hash', current_timestamp())";
           $result = mysqli_query($conn, $sql);
           if($result){
             $showAlert = true;
           }
        }
        else{
          $showError = "Password do not match";
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
    <title>Signup</title>
</head>
<body>

<?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
    <strong>Success!</strong> Your account is now created, you can login.
      <button type="button" class="close" data-dismiss="alert" arial-label="close">
        <span arial-hidden="true">&times;</span>
      </button>
    </div>';
  }
  if($showError){
    echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
      <strong>Error!</strong> '. $showError.'
      <button type="button" class="close" data-dismiss="alert" arial-label="close">
        <span arial-hidden="true">&times;</span>
      </button>
    </div>';
  }
    ?>

<div class="top text-center">SIGNUP WITH US</div>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"><a href="..\Home page\index.html"><img src="\Minor Project\Home page\images\Logo.png" class="logo"></a></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <form action="/Minor Project/Login/Signup.php" method="post">
                    <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Enter Name</h6></label> 
                        <input class="mb-4" type="text" name="name" id="name" placeholder="Enter Your full name"> 
                    </div>
                    <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Enter Email</h6></label> 
                        <input class="mb-4" type="email" name="username" id="username" placeholder="Enter a valid email address"> 
                    </div>
                    <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Choose Password</h6></label> 
                        <input type="password" name="password" id="password" placeholder="Choose password"> 
                    </div>
                    <div class="row px-3"> 
                        <label class="mb-1"><h6 class="mb-0 text-sm">Confirm password</h6></label> 
                        <input class="mb-4" type="password" name="cpassword" id="cpassword" placeholder="Confirm password"> 
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Signup</button> </div>
                    </form>
                    <div class="row px-3 mb-4">
                <div class="row mb-auto px-3"> <small class="font-weight-bold">Have an account ? <a class="text-success" href="Signin.php">Login</a></small> </div>
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