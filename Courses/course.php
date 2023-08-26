
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: ../Login/Signin.php");
  exit;
}
else{

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="course.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="..\Home page\index.php"><img src="images/Logo.png" alt="Unity Coding"></a>
            <h2>Unity Coding</h2>
        </div>
        <div class="nav">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="..\Home page\index.php" target="_blank">Home</a></li>
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="..\About US\about.html" target="_blank">About Us</a></li>
                <li class="active"><i class="fa fa-book" aria-hidden="true"></i><a href="..\Course\course.php">Courses</a>
                </li>
                <li><i class="fa fa-clone" aria-hidden="true"></i><a href="#">Services</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li class="hover-me"><a href="">eLearning</a></li>
                            <li class="hover-me"><a href="">Gaming</a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="..\Contact Us\contact.php" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
    <section class="welcome" style="background-color:lightgreen; ">
        &nbsp<h4 class="alert-heading">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome - <?php echo $_SESSION['username']?></h4>
        <p class="mb-0">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Whenever you need,be sure to <a href="..\Login\Signin.php">Logout</a></p>&nbsp
    </section>

    <section class="container1">
        <h1>Give Your Coding Career the right start<h1>
        <p>Most popular and loved online conding Courses by the Collage or school community.</p>
        <button>Browse Courses</button>
    </section>

    <section class="container2">
        <h1>Explore front-end Developent Course</h1>
        <div class="course">
            <div>
                <img src="images/html.png" alt="">
                <h2>Basic to advance HTML</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, facilis </p>
                <a href="..\Courses\Html tutorial\Introduction.html"><button>Start</button></a>
            </div>
            <div>
                <img src="images/css.png" alt="">
                <h2>Complete 2021 CSS</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, eum. </p>
                <a href="..\Courses\Css tutorial\Introduction to css.html"><button>Start</button></a>
            </div>
            <div>
                <img src="images/js.png" alt="">
                <h2>JavaScript Course 2021</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, reiciendis.</p>
                <button>Start</button>
            </div>
        </div>
    </section>

    <section class="container2">
        <h1>Explore Back-end Developent Course</h1>
        <div class="course">
            <div>
                <img src="images/php.png" alt="">
                <h2>Complete PHP tutorial</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button>Start</button>
            </div>
            <div>
                <img src="images/python.png" alt="">
                <h2>Complete Python tutorial</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button>Start</button>
            </div>
            <div>
                <img src="images/c++.png" alt="">
                <h2>Complete C/C++ tutorial</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button>Start</button>
            </div>
        </div>
    </section>

    <section class="container3">
        <h1>Courses Coming soon</h1>
        <div class="coming-soon">
            <div>
                <img src="images/Node.png" alt="">
                <h2>Complete Node js tutorial</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button disabled>Coning Soon</button>
            </div>
            <div>
                <img src="images/React.png" alt="">
                <h2>React JavaScript Course</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button disabled>Coning Soon</button>
            </div>
            <div>
                <img src="images/python.png" alt="">
                <h2>Python Data Structure </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, hic!</p>
                <button disabled>Coning Soon</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer1">
            <div class="link1">
                <h3>ABOUT UNITY CODING</h3>
                <p>This is E-learning cum gaming website developed for the persons who want to learn
                    the development of games and other applications and also want to play online games
                    but they have don’t have enough space in their phone to download so we develop website
                    games so that they can play games by simply login to our website.</p>
            </div>
            <div class="link2">
                <h3>LEARNING</h3>
                <a href="">ABOUT</a>
                <a href="">GAMING</a>
                <a href="">COURSES</a>
            </div>
            <div class="link3">
                <h3>ENGAGE US</h3>
                <a href="">BLOG</a>
                <a href="">CONTACT</a>
                <a href="">MARKETTING</a>
            </div>
            <div class="link4">
                <h3>LEGAL</h3>
                <a href="">TEAM</a>
                <a href="">MENTORS</a>
                <a href="">DESIGNER</a>
            </div>
        </div>
        <hr>
        <div class="footer2">
            <div class="copyright">
                <p>&copy 2021 Unity Coding Inc.</p>
                <p>All Right Reserved</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/diwakar.giri.792" target="_blank" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/mr._diwakar_011/" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCuUJmEFZu4z46ddopk7A8JQ" target="_blank" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/diwakar-giri-2a263b192/" target="_blank" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>