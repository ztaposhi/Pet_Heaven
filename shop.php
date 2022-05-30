<?php include 'header.php';?>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-2">
				<div class="title-page">Shop	</div>
			</div>
			<p class="text-center text-white">Your pet's health and well-being are our top priority.</p>
		</div>
	</div>

	<!-- BREADCRUMB -->
	<div class="section bg-breadcrumb">
		<div class="content-wrap py-0 pos-relative">
			<div class="container">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Shop	</li>
				  </ol>
				</nav>					
			</div>
		</div>
	</div>

	<!-- CONTENT -->
	<div id="class" class="">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					
					<div class="col-12 col-sm-3 col-md-3">

						<div class="widget categories">
							<div class="widget-title">
								Categories
							</div>
							<ul class="category-nav">
								<li><a href="#">Pets</a></li>
								<li><a href="#">Foods</a></li>
								<li><a href="#">Toys</a></li>
								<li><a href="#">Furnitures</a></li>
								
							</ul>
						</div>

						<div class="widget widget-text">
							<div class="widget-title">
								Top Seller
							</div>
							<div class="shop-sidebar">
								<!-- Item 1 -->
								<div class="shop-item-sidebar">
									<div class="media">
										<img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid">
									</div>
									<div class="body-text">
										<h4 class="title"><a href="shop-single.php">Leather Belt</a></h4>
										<div class="price">$12</div>
									</div>
								</div>
								<!-- Item 2 -->
								<div class="shop-item-sidebar">
									<div class="media">
										<img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid">
									</div>
									<div class="body-text">
										<h4 class="title"><a href="shop-single.php">Traveller Carrier</a></h4>
										<div class="price">$59</div>
									</div>
								</div>
								<!-- Item 3 -->
								<div class="shop-item-sidebar">
									<div class="media">
										<img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid">
									</div>
									<div class="body-text">
										<h4 class="title"><a href="shop-single.php">Healthy Food</a></h4>
										<div class="price">$79</div>
									</div>
								</div>
							</div>
						</div> 
						
					</div>
					<!-- end sidebar -->

					<div class="col-12 col-sm-9 col-md-9">
						
						<div class="row">
							<!-- Item 1 -->

							<?php 
							$sqlPet = "SELECT * FROM product ";
							$result3 = mysqli_query($con, $sqlPet); 
							while($row3 = mysqli_fetch_array($result3))
							{
								
								$image_path = "images/pet/";
								$images=$image_path.$row3['image_link'];
								$product_id=$row3['product_id'];
								$product_description=$row3['product_description'];
								$additional_information=$row3['additional_information'];
								$price = $row3['price'];
								$product_name = $row3['product_name'];
								echo '<div class="col-sm-4 col-md-4">';
								echo "<div id='allfood' class='wow fadeInUp' data-wow-duration='2s' data-wow-delay=''>";
								echo '<form class="form-item">';
								
								echo '<div class="rs-shop-box mb-5">';
								//echo '<img class = "img-responsive" src="' . $images. '" height="160px"> ';
								echo ' <div class="media">
										<a href="shop-single.php?petId='.$product_id.' "><img src="' . $images. '"  alt="" class="img-fluid"></a>
									</div> ';
									
								
								echo '<div class="body-text">';
								echo ' <h4 class="title"> ' . $product_name. '</h4>';
								echo "<br>";
								echo '<div class="price"> Price: ' . $price. '  Taka';
								echo "</div><br>";
								echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
								echo '</div>';
								//echo "<p></p>";
								//echo '<button  type="Submit" class="btn btn-primary" value="Submit" name="buy" >Add</button> ';
								?>
								
								<!--	<input class="btn btn-primary" type="submit" onclick="addtocart('<?php //echo $foodid; ?>')" value="Buy">
								-->
								
								<?php
								
								// echo "<input name='product_code' type='hidden' value='$product_id'><button class='btn btn-primary' type='submit'>Add to Cart</button>";
								echo "<br>";
								echo "<br>";
								echo "</div>";
								echo "</div>";
								echo "</form>";
								echo "</div>";
							}
							
							?>



						</div>
						<!-- end shop -->

						<div class="row">
							<div class="col-sm-12 col-md-12">
								
								<nav aria-label="Page navigation">
								  <ul class="pagination">
								    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								    <li class="page-item active"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">Next</a></li>
								  </ul>
								</nav>

							</div>
						</div>



					</div>					

				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section cta bgi-cover-center" data-background="images/dummy-img-1920x600.jpg">
		<div class="content-wrap py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text text-white mb-3">
			                	<h3 class="my-1">Get 30% off for the First Time Appointment!</h3>
			                	<p class="uk18 mb-0">Contact us now and make an appointment today</p>
			              	</div>
			              	<div class="body-action">
			                	<a href="#" class="btn btn-secondary">Appointment Now!</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php';?>