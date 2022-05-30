<!DOCTYPE html>
<?php
	error_reporting(0);
	require 'db.php';
	include('header.php');

?>

<?php		
if (isset($_POST['AddPET']))
				
				{
					$petName=$_POST['petName'];
					$petDescription=$_POST['petDescription'];
					$petPrice=$_POST['petPrice'];
					
					$additionalInformation=$_POST['additionalInformation'];
					
					
					$name = $_FILES['pic']['name'];
					$target_dir = "images/pet/";
					$target_file = $target_dir . basename($_FILES["pic"]["name"]);

					 // Select file type
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					 // Valid file extensions
					$extensions_arr = array("jpg","jpeg","png","gif");

					if(in_array($imageFileType,$extensions_arr ))
					{
					$sqlAddPet= "INSERT INTO `product`(`product_name`, `product_description`, `additional_information`, `price`,`image_link`) VALUES ('".$petName."','".$petDescription."','".$additionalInformation."','".$petPrice."','".$name."')";
							if (mysqli_query($con, $sqlAddPet)) 
							{
								move_uploaded_file($_FILES['pic']['tmp_name'],$target_dir.$name);
								echo '<script language="javascript">';
								echo 'alert("Submitted")';
								echo '</script>';
							}
							else {
								echo '<script language="javascript">';
								echo 'alert("TRY AGAIN ")';
								echo '</script>';
							}
						}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Please Select Restaurant Name")';
						echo '</script>';
					}
					mysqli_close($con);

				 }	
				
			

	
	

	
?>

<html>
	<body>
		<section class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="logo">
						<!-- Logo/Title -->
							<a href="index.php"><img src="images/logo.png"> </img></a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="sign-up">
						<!-- Sign up button -->
							
							<a class="btn btn-primary btn-sm" href="Logout.php">Log Out</a>
							<a class="btn btn-primary btn-sm" href="home.php">Home</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="main">
			<div class="container adminPanel">
					<div class="col-md-20">
						<div class="adminText">
							<h2><P align="center" >ADMIN PANEL</p></h2>
						</div>
					</div>
			<!-- add restaurant -->
				<form method="post" target="#" enctype="multipart/form-data">
				
					<div class="row">
					
					<div class="col-lg-4"></div>
					
					<div class="col-md-4 center-block ">
						
							<P>Product Name: <input class="form-control" type="text" value="" placeholder="Pet Name" name="petName"> </P>
						
							<P>Product Description: <input class="form-control" type="text" value="" placeholder="Pet Description" name="petDescription"> </P>
						
							<P>Product Picture: <input type="file" name="pic" > </P>
						
							<P>Product Price: <input class="form-control" type="text" value="" placeholder="Price (Bdt)" name="petPrice"> </P>
						

							<P>Additional Information(optional): <textarea rows="4" cols="30" class="form-control" type="text" value="" placeholder="Additional Information" name="additionalInformation"></textarea> </P>
							
						
							<p align="center"><button  type="Submit" class="btn btn-primary" value="Submit" name="AddPET" >Add</button>
							<p align="center"><button class="btn btn-primary" name="Back">Back</button>
						
						
					</div>
					
					
				</form>
				<!-- Search form end -->
			</div>
			
		</section>
		
		<section class="footer">
			<div class="container">
				<div class="col-md-12">
					<!--<p>&copy 2018 All rights reserved</p> -->
				</div>
			</div>
		</section>
		
		<script type="text/javascript"  src="js/bootstrap.min.js"></script>
		<script type="text/javascript"  src="js/wow.min.js"></script>
		<script type="text/javascript"  src="js/script.js"></script>
		
		<script type="text/javascript">
			new WOW().init();
		</script>
	</body>
</html>