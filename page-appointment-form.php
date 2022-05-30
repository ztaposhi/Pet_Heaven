<?php include 'header.php';?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-2">
				<div class="title-page">Appointment Form</div>
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
				    <li class="breadcrumb-item"><a href="index.html">Pages</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Appointment Form</li>
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
					<div class="col-sm-12 col-md-12">
						<p class="title-heading text-primary mb-5">
							Request an Appointment
						</p>
						<p class="subheading">Please enter your name, your email address and phone number to get started. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 col-md-8">
					
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
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">Request Appointment</button>
							</div>
						</form>
						<div class="margin-bottom-50"></div>
						<p><em>We will call you back to confirm your appointment, after you've request an appointment.</em></p>

					</div>
					<div class="col-sm-4 col-md-4">
						<img src="images/dummy-img-600x700-3.jpg" alt="" class="img-fluid">
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