<!DOCTYPE html>
<?php 
include 'Session.php';
Session_start();


?>
<?php 

include('database.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main Title -->
    <title>EduTalk</title>
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Mobile Menu CSS -->
    <link  rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- Owl Carousol -->
    <link rel="stylesheet" href="assets/css/owl-carosoul.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header-Top Area Start -->
    <section class="header-top-area">
        <div class="container">
            <div class="header-left">
                <ul>
                    <li><a href="student-profile.php"><i class="fa-solid fa-user"></i>my account</a></li>
                    <li><a href="wishlist.php"><i class="fa-solid fa-heart"></i>wishlist</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>log in</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Header-Top Area End -->
    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Edu<span>Talk</span></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">about</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="team.html">meet the team</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="offer.html">what we offer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">contact</a>
                      </li>
                      </ul>
                      <div class="search">
                        <form action="">
                            <input type="text" placeholder="search">
                        </form>
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                    </div>
                    
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Start Here--> 


 <section class="owl-carousel owl-theme">
    <div class="slide" style="background-image: url('assets/img/banner.jpeg')">
       <div class="bannar">
        <h2>the education experts</h2>
          <h1>Edu<span class="banner-design">Talk</span></h1>
          <p>Investing in your knowledge and your future</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/img/banner.jpeg');">
        <div class="bannar">
            <h2>the education experts</h2>
            <h1>Edu<span class="banner-design">Talk</span></h1>
            <p>Investing in your knowledge and your future</p>
        </div>
    </div>
    <div class="slide" style="background-image: url('assets/img/banner.jpeg');">
        <div class="bannar">
            <h2>the education experts</h2>
            <h1>Edu<span class="banner-design">Talk</span></h1>
            <p>Investing in your knowledge and your future</p>
        </div>
    </div>
    
</section>
  
 <!-- Banner Area End -->


 <!-- Student Profile Area Start -->
 <section class="profile-area pt-80 pb-80">
    <div class="container">
           <div class="std-info">
            <h3>student profile</h3>
        </div>
        <div class="std-profile">
            <div class="pro-menu">
                <ul>
                    <li><a href="student-profile.php">profile</a></li>
                    <li><a href="#">file</a>
                        <ul>
                            <li><a href="routine.php">routine</a></li>
                            <li><a href="notice.php">notice</a></li>
                            <li><a href="ielts.php">ielts</a></li>
                            <li><a href="basic-computer.php">basic computer</a></li>
                            <li><a href="spoken.php">spoken english</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="single-pro">
            <?php
                       
                       $db= new database(); 
                       $subquery="select * from users";
                       $students_read=$db->select($subquery);
                       if($students_read){
                       $i=0;
                       
                       while($result=$students_read->fetch_assoc()){
                           $i++;
              
      
                      }
					}
  


      ?>
                <h4>course-name: <span>ielts</span></h4>
                <form>
                    <input type="text" name="full_name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="mobile" placeholder="Mobile">
                </form>
                <a href="#">update</a>
            </div>
        </div>
    </div>
</section>
<!-- Student Profile Area End -->



 <!-- Footer Area Start -->
<footer class="footer-area">
    <div class="container">
        <div class="footer"> 
            <div class="foot-outer">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.xing.com/"><i class="fa-brands fa-xing"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-main">
            <div class="main">
                <p>2023 &copy; aims all rights reserved </p>
            </div>
            <div class="policy">
                <ul>
                    <li><a href="#">privacy</a></li>
                    <li><a href="#">terms</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>    
    </div>
</footer>
<!-- Footer Area End -->

<!-- Jquery JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Owl Carosoul -->
<script src="assets/js/owl-carousl.min.js"></script>
<!-- Bootstrap.js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="assets/js/slicknav.min.js"></script>
<!-- Slider JS -->
<script src="assets/js/slider.js"></script>
<!-- Main js -->
<script src="assets/js/main.js"></script>
    
</body>
</html>