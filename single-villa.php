<?php include("header.php"); ?>
<section class="hero">
	<div id="carouselHero" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/single-hero.jpg" class="d-block w-100" alt="Villa">
			</div>
		</div>
	</div>
</section>
<section class="single-villa">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title">Palm Jumeriah</h2>
					<h3 class="subtitle">Luxury 4 bedrroom Villa on Palm Jumeriah</h3>
					<p class="description">From 7.800 - 11850 € / Week</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12">					
				<div id="gallery" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/sliders-01.jpg" class="d-block w-100" alt="Sliders 01">
						</div>
						<div class="carousel-item">
							<img src="assets/img/category-villa-hero.jpg" class="d-block w-100" alt="Sliders 01">
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
				<h3 class="text">Superbly designed and located with superb sea and sunset views</h3>
			</div>
			<div class="col-5">
				<div class="content">
					<p>Situated on the 77th floor, enjoy a panoramic view of Dubai Marina and the Golf Course. Enjoy the experience of the exclusive beaches, modern amenities, and the harmony with the luxury lifestyle. Just a short five-minute walking distance from the Barasti Beach, you can work on your tan, swim in the clear waters and enjoy fine dining on the beach with good music!</p>					
				</div>
			</div>
			<div class="col-10">
				<ul class="list">
					<li><img class="icon" src="assets/img/icon-family.png" alt="Bed"> 4</li>
					<li><img class="icon" src="assets/img/icon-bed.png" alt="Bed"> 2</li>
					<li><img class="icon" src="assets/img/icon-shower.png" alt="Bed"> 1</li>
					<li><img class="icon" src="assets/img/icon-place.png" alt="Bed"> Santa Eulalia del Rio</li>
				</ul>
				
			</div>
			<div class="col-10">
				<p class="table-title">Villa details</p>
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
			<div class="col-10">
				<div class="map">
					<iframe src="https://maps.google.com/maps?q=39.0251117579485225,1.52068604333162138&amp;hl=es&amp;z=12&amp;output=embed" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			<div class="col-10 text-center">
				<a class="button" data-bs-toggle="modal" data-bs-target="#form">Enquire now</a>
				<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Palm Jumeriah</h1>
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
										<label class="form-label">Messange</label>
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
<?php include("sections/villas.php"); ?>
<?php include("footer.php"); ?>