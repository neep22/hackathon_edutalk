<!DOCTYPE html>
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
<?php

include('database.php');
include('registration/ExpertiseSendEmail.php');
?>
                            <?php				
					        $db=new database();
					        if(isset($_POST['submit'])) {
							$full_name = $_POST['full_name'];
                            $username=$_POST['username'];
							$email = $_POST['email'];
      						$password = $_POST['password'];
							$con_password= $_POST['con_password'];
                            $mobile = $_POST['mobile']; 							
							$code = rand();
                            if(strlen ($password)<8){
                                echo "<script>alert('password should be at least 8 digit')</script>";
                            }elseif($password != $con_password){
								echo "<script>alert('password not match!')</script>";		
							}elseif(!preg_match("/^([a-zA-Z' ]+)$/",$full_name)){
								
							echo "<script>alert('Error! Only Alphabets and Whitespace are allowed')</script>";
							}elseif(!preg_match("/^\\S+@\\S+\\.\\S+$/", $email)){
								
							echo "<script>alert('This is Not Valid Email')</script>";
							}else

							 if ($full_name =='' 
                              || $username==''
                              || $mobile=='' 
                              || $email =='' 
                              || $password ==''
                              || $con_password ==''){
							echo "<script>alert('Filed Must Not Be Empty')</script>";
						   }else{
							$emailquery= "select* from  expertise  where email= '$email' limit 1";
			                $mailcheck= $db->select($emailquery);
							 if($mailcheck != false){
							echo "<script>alert('email already exist')</script>";

						 }
							
							else{
								
							$sql = "INSERT INTO expertise(full_name,email,password,username,mobile,code) VALUES('$full_name','$email','$password','$username','$mobile','$code')";

							$result = $db->insert($sql);

								  if ($result) {

								   echo "<script>alert('Please Waiting For Verify,We Will Send You a Email')</script>";

								$sendMl->send($code,$email);
                
								
								}
								 else{
							  echo "<script>alert('something wrong')</script>";
				    }
				}
			}
		 }


?>

    <!-- Registration Area Start -->
    <section class="registration-area pt-80 pb-80">
        <div class="container">
            <div class="registration">
                <div class="registration-img">
                    <h2>Expert Sign Up</h2>
                    <img src="assets/img/sign-message (1).png" alt="">
                    <img src="assets/img/sign-message (2).png" alt="pic"/>
                </div>
                <div class="registration-form">
                    <form action="" method="post">
                        <input type="text" name="full_name" placeholder="Full Name"/>
                        <input type="text" name="username" placeholder="Username"/>
                        <input type="email" name="email" placeholder="Email"/>
                        <input type="phone" name="mobile" placeholder="Phone Number"/>
                        <input type="password" name="password" placeholder="Your password"/>
                        <input type="password" name="con_password" placeholder="Confirm password"/>
                        <input type="checkbox" name="confirm"/>Accept the terms and <a href="">Privacy Policy</a> 
                        <button type="submit"  name="submit">Register now</button>
                    </form> 
                    <div class="single-signup">
                        <h5>Already have an account? <a href="expertlog.php">Log in</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration Area End -->

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