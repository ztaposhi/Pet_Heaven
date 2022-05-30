<?php
require 'db.php';

	if (isset($_POST['login']))
	{
						
		$email= $_POST['email'];
		$password= $_POST['password'];
		
		$sql="select email from admin where email = '".$email."' && password = '".$password."'";
		$resultlogin=mysqli_query($con,$sql);
		$username_db='';
		while($arr=mysqli_fetch_array($resultlogin))
		{
			
			$username_db=$arr[0];	
			
			
			
		}
		if($username_db==$email)
		{
			$field = 'email';
			$sql2="select $field from admin WHERE email = '".$email."' && password = '".$password."'";
			$email_id = mysqli_query($con,$sql2);
			$_SESSION["emailid"] = mysqli_fetch_object($email_id)->$field;
			

			//$_SESSION["u_id"];
			
			$_SESSION['login'] = $email;
			
			echo '<script language="javascript">';
			echo 'alert("Login Success")';
			echo '</script>';
			echo "<script>location.href='admin_index.php';</script>";
			
			
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Username and Password Does not match!")';
			echo '</script>';
			
		} 
			
	
	}

	if (isset($_POST['logout']))
	{	
		session_destroy();
		echo '<script language="javascript">';
		echo 'alert("Log Out Successfully")';
		echo '</script>';
		echo "<script>location.href='index.php';</script>";
		
	}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Heaven</title>
    <meta name="description" content="Pet Heaven is a platform where you will get everything your pets need">
    <meta name="keywords" content="animals, cats, dogs, ecommerce, modern, pet care, pet services, pet shop, pets, store, veterinary">
    <meta name="author" content="Protik & Taposhi"> 
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="favicon_io/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- CSS VENDOR -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="sass/style.css" />
	
	<!-- Modernizr JS -->
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

		<!-- TOP BAR -->
    	<div class="topbar d-none d-md-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-6 col-md-6">
						<p class="mb-0">Welcome to Pet Heaven at Bangladesh</p>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="sosmed-icon d-inline-flex pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
							<a href="#"><i class="fa fa-pinterest"></i></a> 
						</div>
					</div>

					
				</div>
			</div>
		</div>

		<!-- MIDDLE BAR -->
		<div class="middlebar d-none d-sm-block">
			<div class="container">
				
				
				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-clock-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Open Hours :</div>
							Mon - Fri : 09:00 - 20:00
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Today :</div>
							+62 7100 1234
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div style="background-color: rgb(241, 241, 241);" class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			            	<li class="nav-item">
			                    <a class="nav-link" href="index.php">HOME</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="about-us.php">ABOUT US</a>
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="services.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          SERVICES
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="grooming.php">Grooming</a>
	          						<a class="dropdown-item" href="boarding.php">Boarding</a>
									  <a class="dropdown-item" href="vaccination.php">Vaccination</a>
									  <a class="dropdown-item" href="pet-care.php">Pet Care</a>
							    </div>
			                </li>
			                
			                <li class="nav-item">
			                    <a class="nav-link" href="gallery.php">GALLERY</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="blog.php">BLOG</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="shop.php">SHOP</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.php">CONTACT</a>
			                </li>
							<!-- Button trigger modal -->
							<li class="nav-item">
								<?php if(empty($_SESSION['login']) ) {?>
									
									<button style=" font-weight: 550 ;border: none !important; background: none;" type="button" class="nav-link" data-toggle="modal" data-target="#staticBackdrop">LOGIN</button>
			                </li>
							

							<!-- Modal -->
							<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									
									<h5 class="modal-title" id="staticBackdropLabel"></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="p-5 modal-body">
																
                                                <div class="fBloodForm">
                                                   <form action="header.php" method="post">
                                                      <h4 style="font-weight: 600; color:black;" class="pb-3">log in</h4>
                                                      <div class="row mb-4">
                                                         <div class="col">
                                                            <div class="form-outline">
                                                               <input type="email" id="login_email" name="email"  class="form-control" placeholder="Enter email"/>
                                                               
                                                            </div>
                                                            <span class="field_error" id="login_email_error"></span>
                                                         </div>
                                                      </div>
                                                      <div class="row mb-4">
                                                         <div class="col">
                                                            <div class="form-outline">
                                                               <input type="password" id="login_password" name="password" class="form-control" placeholder="Password"/>
                                                               
                                                            </div>
                                                            <span class="field_error" id="login_password_error"></span>
                                                         </div>
                                                      </div>
                                                      <button type="submit" name="login" class="btn btn-danger" value="submit" >Login</button>
                                                      <div class="form-output login_msg">
                                                         <p class="form-messege field_error"></p>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
								<div class="modal-footer">                             Haven't any account?            Please, 
															<a style="color:red;" class="ml-1 mr-1" href="signup.php">sign up</a> here
															</div>


								</div>

							</div>
							<?php 
															}
															else if($_SESSION['login'] = true){
																?>
																<form method="post">
																<button type="submit" class="nav-link" name="logout" value="submit" >Logout</button>
																</form>
																<li class="nav-item">
			                    
																<a href="admin_index.php" class="btn btn-secondary btn-nav">admin</a>
																</li>
																<?php
															}
															?>
														
							</div>

			            </ul>
			            <a href="page-appointment-form.php" class="btn btn-secondary btn-nav btn-rect ml-auto">GET AN APPOINTMENT</a>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>