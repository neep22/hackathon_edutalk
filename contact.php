<!DOCTYPE html>
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
                        <a class="nav-link" aria-current="page" href="index.php">home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">about</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="team.php">meet the team</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="offer.php">what we offer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact</a>
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

    <!-- Contact Area -->
    <section class="contact-area">
        <div class="container">
            <div class="section-title">
                <h4>Have a question?<br>We would love to help!</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="contacts">
                <div class="single-contact">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="contact-info">
                        <h4>Email Us</h4>
                        <p>example@your.domain<br>contact@your.domain</p>
                    </div>
                </div>
                <div class="single-contact">
                    <i class="fa-solid fa-phone"></i>
                    <div class="contact-info">
                        <h4>Call Us</h4>
                        <p>+1 (323)-456-9123<br>+1 (987)-654-3211</p>
                    </div>
                </div>
                <div class="single-contact">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="contact-info">
                        <h4>Address​</h4>
                        <p>Manhattan Beach,<br>Los Angeles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Area -->
    <section class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.8378383024!2d91.80234161063338!3d24.869387477831243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751015addbec3b7%3A0x9e87b7be58b5f67e!2z4Kay4Ka_4Kah4Ka_4KaCIOCmh-CmieCmqOCmv-CmreCmvuCmsOCnjeCmuOCmv-Cmn-Cmvw!5e0!3m2!1sbn!2sbd!4v1697265988015!5m2!1sbn!2sbd"></iframe>
    </section>

    <!-- Contact Form Area Start -->
    <section class="contact-form-area bg overlay" style="background-image: url('assets/img/contact-bg.jpeg');">
        <div class="container">
            <div class="section-title">
                <h4>Send a message</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed<br>do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <?php				
					        $db=new database();
					        if(isset($_POST['submit'])) {
							$name = $_POST['name'];
							$email = $_POST['email'];				
                            $mobile = $_POST['mobile']; 	
                            $subject=$_POST['subject'];										
                            
                            if ($name =='' 
                              || $mobile=='' 
                              || $email ==''
                              ||$subject=='' ){
							echo "<script>alert('Field Must Not Be Empty')</script>";
						   }else if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){		
							echo "<script>alert('Error! Only Alphabets and Whitespace are allowed')</script>";
							}elseif(!preg_match("/^\\S+@\\S+\\.\\S+$/", $email)){					
							echo "<script>alert('This is Not Valid Email')</script>";
                            }else{
							$emailquery= "select* from  contact  where email= '$email' limit 1";
			                $mailcheck= $db->select($emailquery);
							 if($mailcheck != false){
							echo "<script>alert('email already exist')</script>";
						 }						
						else{
								
							$sql = "INSERT INTO contact(name,email,mobile,subject) VALUES('$name','$email','$mobile','$subject')";

							$result = $db->insert($sql);

								  if ($result) {

								   echo "<script>alert('Your Message is Sent')</script>";
								
								}
								 else{
							  echo "<script>alert('something wrong')</script>";
				    }
				}
			}
		 }


?>
            <div class="contact-form">
                <form action="" method="post"> 
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="text" name="mobile" placeholder="Phone Number">
                    <textarea name="subject" placeholder="Message"></textarea>
                    <input type="Submit" name="submit" value="Submit"/>
                </form>
            </div>
        </div>
    </section>
<!-- Contact Form Area End -->

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
                    <li><a href="contact.php">contact</a></li>
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