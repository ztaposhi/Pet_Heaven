<?php include 'header.php';?>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-2">
				<div class="title-page">Contact</div>
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
				    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
					<div class="col-12 col-sm-12 col-md-12">

						<!-- MAPS -->
						<div class="maps-wraper">
							<div id="cd-zoom-in"></div>
							<div id="cd-zoom-out"></div>
							<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
							</div>
						</div>
						<div class="spacer-90"></div>

					</div>
				</div>

				<div class="row mt-4">
					
					<!-- Item 1 -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="rs-icon-info-4 mb-5">
							<div class="icon">
								<i class="fa fa-smile-o"></i>
							</div>
							<div class="body">
								<h3 class="title">Address</h3>
								<p class="mb-1">121 King Street, Melbourne</p>
								<p>Victoria 3000, Australia</p>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="rs-icon-info-4 mb-5">
							<div class="icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="body">
								<h3 class="title">Email</h3>
								<p class="mb-1">info@yourdomain.com</p>
								<p>hello@yourdomain.com</p>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="rs-icon-info-4 mb-5">
							<div class="icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="body">
								<h3 class="title">Address</h3>
								<p class="mb-1">+61 3 8376 6284</p>
								<p>+62 3 8376 6284</p>
							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-sm-12 col-md-12 mb-5">
						<h2 class="section-heading text-center text-primary no-after mb-5">
							Send Us A Message
						</h2>
						<p class="subheading text-center">Your pet's health and well-being are our top priority.</p>
					</div>



					<div class="col-12 col-sm-12 col-md-12">
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
								</div>
							</div>
						</form>

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