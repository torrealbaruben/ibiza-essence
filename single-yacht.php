<?php include("header.php"); ?>
<section class="hero">
	<div id="carouselHero" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/single-yacht.jpg" class="d-block w-100" alt="Villa">
			</div>
		</div>
	</div>
</section>
<section class="single-villa">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title">SACS ABT STRIDER 11</h2>
					<h3 class="subtitle">Luxuty Yacht Rental in Ibiza</h3>
					<p class="description">12 Guests •  € 2300 PER HOUR</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12">					
				<div id="gallery" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/sliders-02.jpg" class="d-block w-100" alt="Sliders 01">
						</div>
						<div class="carousel-item">
							<img src="assets/img/category-yacht-hero.jpg" class="d-block w-100" alt="Sliders 01">
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
			<div class="col-5">
				<h3 class="text">Only 50% deposit required to secure your trip!</h3>
			</div>
			<div class="col-5">
				<div class="content">
					<ul>
						<li>Guide the Yacht as you please around the various sights of Dubai (e.g. The Palm Jumeirah, Burj Al Arab, Dubai Marina)</li>
						<li>Price includes: Captain & Crew, Unlimited Soft Drinks, Ice & Water</li>
						<li>State of the art sound system</li>
						<li>Boarding Location: Dubai Harbour</li>
						<li>Minimum rental: 2 hours (Weekdays) / 4 Hours (Weekend)</li>
					</ul>			
				</div>
			</div>
			<div class="col-10">
				<p class="table-title">Yacht details</p>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Amenities</th>
							<th scope="col">Dining</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<ul>
									<li>Own Water</li>
									<li>Solar Electricity</li>
									<li>Air Conditioning</li>
									<li>Wifi</li>
									<li>Fireplace</li>
									<li>Private Parking</li>
									<li>Terraces</li>
									<li>Underfloor Heating</li>
								</ul>								
							</td>
							<td>
								<ul>
									<li>Al Fresco Dining</li>
									<li>BBQ</li>
									<li>Fully fitted kitchen</li>
									<li>Professional Kitchen</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-10 text-center">
				<a class="button" data-bs-toggle="modal" data-bs-target="#form">Enquire now</a>
				<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">SACS ABT STRIDER 11</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="form">
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Last name</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Phone</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Email address</label>
												<input type="email" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Check In</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col">
											<div class="mb-3">
												<label class="form-label">Check Out</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Messange textarea</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
									<div class="col-12">
										<button type="button" class="button">Send</button>									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("sections/yachts.php"); ?>
<?php include("footer.php"); ?>