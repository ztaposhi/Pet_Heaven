<?php include 'header.php';

?>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-2">
				<div class="title-page">Product Foods</div>
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
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Product Foods</li>
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
					<?php 
					$product_id=$_GET['petId'];
					$sqlPet = "SELECT * FROM product where product_id =".$product_id." ";
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

								?>
					<div class="col-12 col-sm-6 col-md-6">
						
						<div class="media-detail">
							<?php 
							
							echo '<img src="' . $images. '"  alt="" class="img-fluid">';
							
							?>
						</div>
						
						
					</div>
					

					<div class="col-12 col-sm-6 col-md-6">
						<div class="single-shop">
							
							<p class="title-heading text-secondary mb-1">
								<?php echo $product_name;?>
							</p>
							<div class="price"><?php echo $price;  ?>Taka</div>
							<div class="rating">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
								
							<p class="mt-4"><?php echo $product_description;  ?></p>

							<a href="#" class="btn btn-primary mt-4 mb-4">Buy Now</a>

							<p>SKU : N/A <br>Categories : Dog <br>Product ID : <?php echo $product_id;?></p>
							<div class="spacer-50"></div>


						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-12">

						<div class="spacer-70"></div>
						
						<div class="rs-tabs">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">Additional Information</a>
							  </li>
							  
							</ul>
							<div class="tab-content" id="myTabContent">
								<!-- Tabs 1 -->
								<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
									<p class="uk18 text-black mb-1">
										<strong>Product Description :</strong>
									</p>
									<p><?php echo $product_description;  ?></p>
									
								</div>
								<!-- Tabs 2 -->
								<div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
									
									<p><?php echo $additional_information; } ?></p
									
									
								</div>
								
								
							  </div>
							</div>
						</div>
						<!-- end tabs -->

						<div class="leave-comment-box">
							<h4 class="title-heading">Add Your Review</h4>
							<div class="row">
								<div class="col-sm-9 col-md-9">
									<form action="#" class="form-comment">
										<div class="row">
											<div class="col-xs-12 col-md-12">
												<div class="form-group">
													<textarea id="message" name="message" class="inputtext form-control" rows="6" placeholder="Your Review*..."></textarea>
												</div>
											</div>
											<div class="col-xs-12 col-md-6">
												<div class="form-group">
													<input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-xs-12 col-md-6">
												<div class="form-group">
													<input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-xs-12 col-md-12">
												<div class="form-group">
													<button id="send" type="submit" class="btn btn-primary">Send Review</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-3 col-md-3">
									<p>Choose Rating :</p>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
									  <label class="form-check-label" for="exampleRadios1">
									    <div class="rating">
											<span></span>
										</div>
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
									  <label class="form-check-label" for="exampleRadios2">
									    <div class="rating">
											<span></span>
											<span></span>
										</div>
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
									  <label class="form-check-label" for="exampleRadios3">
									    <div class="rating">
											<span></span>
											<span></span>
											<span></span>
										</div>
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
									  <label class="form-check-label" for="exampleRadios4">
									    <div class="rating">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
										</div>
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option2">
									  <label class="form-check-label" for="exampleRadios5">
									    <div class="rating">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											<span></span>
										</div>
									  </label>
									</div>
								</div>
							</div>
							
					
						</div>
						<!-- end leave comment -->

						<div class="similar-box">
							<h4 class="title-heading">Similiar Product</h4>
							<div class="row">
								
								<!-- Item 1 -->
								<div class="col-sm-3 col-md-3">
									<div class="rs-shop-box mb-5">
										<div class="media">
											<a href="shop-single.html"><img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid"></a>
										</div>
										<div class="body-text">
											<h4 class="title"><a href="shop-single.html">Cat & Small Dog Carrier</a></h4>
											<div class="meta">
												<div class="price">$29</div>
												<div class="rating">
													<span></span>
													<span></span>
													<span></span>
													<span></span>
													<span></span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Item 2 -->
								<div class="col-sm-3 col-md-3">
									<div class="rs-shop-box mb-5">
										<div class="media">
											<a href="shop-single.html"><img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid"></a>
										</div>
										<div class="body-text">
											<h4 class="title"><a href="shop-single.html">Traveller Pet Carrier</a></h4>
											<div class="meta">
												<div class="price">$29</div>
												<div class="rating">
													<span></span>
													<span></span>
													<span></span>
													<span></span>
													<span></span>
												</div>
											</div>
										</div>
									</div>

								</div>

								<!-- Item 3 -->
								<div class="col-sm-3 col-md-3">
									<div class="rs-shop-box mb-5">
										<div class="media">
											<a href="shop-single.html"><img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid"></a>
										</div>
										<div class="body-text">
											<h4 class="title"><a href="shop-single.html">Leather Belt Pink</a></h4>
											<div class="meta">
												<div class="price">$29</div>
												<div class="rating">
													<span></span>
													<span></span>
													<span></span>
													<span></span>
													<span></span>
												</div>
											</div>
										</div>
									</div>

								</div>

								<!-- Item 4 -->
								<div class="col-sm-3 col-md-3">
									<div class="rs-shop-box mb-5">
										<div class="media">
											<a href="shop-single.html"><img src="images/dummy-img-600x600.jpg" alt="" class="img-fluid"></a>
										</div>
										<div class="body-text">
											<h4 class="title"><a href="shop-single.html">Healthy Food</a></h4>
											<div class="meta">
												<div class="price">$29</div>
												<div class="rating">
													<span></span>
													<span></span>
													<span></span>
													<span></span>
													<span></span>
												</div>
											</div>
										</div>
									</div>

								</div>
								
							</div>
							
					
						</div>
						<!-- end leave comment -->

						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section cta bgi-cover-center" data-background="images/dummy-img-1920x900-2.jpg">
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