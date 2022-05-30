<!DOCTYPE html>
<?php
	include('header.php');
?>

<html>
	
	<body>
		
		<section class="main">
			<div class="container adminPanel">
					<div class="col-md-20">
						<div class="adminText">
							<h2><P align="center" >ADMIN PANEL</p></h2>
						</div>
					</div>
			<!-- admin form start -->
				
					<div class="">
						<p align="center">
							<a class="btn btn-primary"  href="addPet.php" >Pet</a>
							<br><br><a class="btn btn-primary" href="#">Food</a>
							<br><br><a class="btn btn-primary" href="#">Toy</a>
							<br><br><a class="btn btn-primary" href="#">Furniture</a>
							<br><br><a class="btn btn-primary" href="#">All User</a>
							<br><br><a class="btn btn-primary" href="#">Pending Request</a>
							<br><br><a class="btn btn-primary" href="#">Confirmed Request</a>
						</p>
					</div> 
				
				<!-- admin form end -->
			</div>
			
		</section>
		
		<section class="footer">
			<div class="container">
				<div class="col-md-12">
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