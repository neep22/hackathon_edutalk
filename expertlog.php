<!DOCTYPE html>
<html lang="en">
<?php include 'Session.php';
Session:: init();
 ?>
<?php include 'database.php';?>
<?php $db = new database;?>
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
<?php   
            if($_SERVER['REQUEST_METHOD'] =='POST'){
			 
             $email= mysqli_real_escape_string($db->link,$_POST['email']);
             $password= $_POST['password'];
             $query= "SELECT * FROM  expertise WHERE email='$email' AND password= '$password' ";
             $result= $db->select($query);
             if($result != false){
                 $value=$result->fetch_array();
                   Session::set("login",true);
				   Session::set("email",$value['email']);
				   Session::set("password",$value['password']);
				   Session::set("id",$value['id']);
				   
				   header("Location:index.php");
				   }else{
				echo   "<script>alert('email or password not match')</script>";
			  }
		 }   
    ?>
    
    <!-- Login Area Start -->
    <section class="login-area pt-80 pb-80">
        <div class="container">
            <div class="login">
                <div class="login-img">
                    <h2>Sign In</h2>
                    <img src="assets/img/sign-message (2).png" alt="pic"/>
                </div>
                <div class="login-form">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email"/>
                        <input type="password" name="password" placeholder="Your password"/>
                        <a class="forget" href="ExpertiseForgotpass.php">forget password</a> 
                        <button type="submit">login now</button>
                    </form> 
                    <div class="single-signin">
                        <h5>do you have any account? <a href="registration.html">sign up</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End -->



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