<section class="hero">
	<div id="carouselHero" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php the_post_thumbnail( 'full', [ 'class' => 'd-block w-100', 'alt' => esc_html (get_the_title() ) ] );  ?>
			</div>
		</div>
	</div>
</section>
<section class="single-villa">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title"><?php the_title(); ?></h2>
					<h3 class="subtitle"><?php the_field( 'subtitle' ); ?></h3>
					<p class="description"><?php the_field( 'price' ); ?></p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12">					
				<div id="gallery" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<?php if ( get_field( 'imagen_01' ) ) : ?>
								<img src="<?php the_field( 'imagen_01' ); ?>" class="d-block w-100" alt="Sliders 01">
							<?php endif ?>
						</div>
						<?php if ( get_field( 'imagen_02' ) ) : ?>
							<div class="carousel-item">
								<img src="<?php the_field( 'imagen_02' ); ?>" class="d-block w-100" alt="Sliders 01">
							</div>
						<?php endif ?>
						<?php if ( get_field( 'imagen_03' ) ) : ?>
							<div class="carousel-item">
								<img src="<?php the_field( 'imagen_03' ); ?>" class="d-block w-100" alt="Sliders 01">
							</div>
						<?php endif ?>
						<?php if ( get_field( 'imagen_04' ) ) : ?>
							<div class="carousel-item">
								<img src="<?php the_field( 'imagen_04' ); ?>" class="d-block w-100" alt="Sliders 01">
							</div>
						<?php endif ?>
						<?php if ( get_field( 'imagen_05' ) ) : ?>
							<div class="carousel-item">
								<img src="<?php the_field( 'imagen_05' ); ?>" class="d-block w-100" alt="Sliders 01">
							</div>
						<?php endif ?>
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
				<h3 class="text"><?php the_field( 'description' ); ?></h3>
			</div>
			<div class="col-5">
				<div class="content">
					<?php the_content(); ?>				
				</div>
			</div>
			<div class="col-10">
				<ul class="list">
					<li><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-family.png" alt="Bed"> <?php the_field( 'persons' ); ?></li>
					<li><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-bed.png" alt="Bed"> <?php the_field( 'bedroom' ); ?></li>
					<li><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-shower.png" alt="Bed"> <?php the_field( 'showers' ); ?></li>
					<li><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-place.png" alt="Bed"> <?php the_field( 'address' ); ?></li>
				</ul>				
			</div>
			<div class="col-10">
				<p class="table-title">Villa details</p>
				<table class="table">
					<tbody>
						<tr>
							<th>Amenities</th>
							<th>Dining</th>
						</tr>
						<tr>
							<td>
								<ul>
									<?php $amenities_checked_values = get_field( 'amenities' ); ?>
									<?php if ( $amenities_checked_values ) : ?>
										<?php foreach ( $amenities_checked_values as $amenities_value ): ?>
											<li><?php echo esc_html( $amenities_value ); ?></li>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>						
							</td>
							<td>
								<ul>
								<?php $dinning_checked_values = get_field( 'dinning' ); ?>
								<?php if ( $dinning_checked_values ) : ?>
									<?php foreach ( $dinning_checked_values as $dinning_value ): ?>
										<li><?php echo esc_html( $dinning_value ); ?></li>
									<?php endforeach; ?>
								<?php endif; ?>
								</ul>	
							</td>
						</tr>
						<tr>
							<th>Entertainment</th>
							<th>Family features</th>
						</tr>
						<tr>
							<td>
								<ul>
									<?php $entertainment_checked_values = get_field( 'entertainment' ); ?>
									<?php if ( $entertainment_checked_values ) : ?>
										<?php foreach ( $entertainment_checked_values as $entertainment_value ): ?>
											<li><?php echo esc_html( $entertainment_value ); ?></li>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>
							</td>
							<td>
								<ul>
									<?php $family_features_checked_values = get_field( 'family_features' ); ?>
									<?php if ( $family_features_checked_values ) : ?>
										<?php foreach ( $family_features_checked_values as $family_features_value ): ?>
											<?php echo esc_html( $family_features_value ); ?>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Pool Wellness</th>
							<th>Security</th>
						</tr>
						<tr>
							<td>
								<ul>
									<?php $pool_wellness_checked_values = get_field( 'pool__wellness' ); ?>
									<?php if ( $pool_wellness_checked_values ) : ?>
										<?php foreach ( $pool_wellness_checked_values as $pool_wellness_value ): ?>
											<li><?php echo esc_html( $pool_wellness_value ); ?></li>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>
							</td>
							<td>
								<ul>
									<?php $security_checked_values = get_field( 'security' ); ?>
									<?php if ( $security_checked_values ) : ?>
										<?php foreach ( $security_checked_values as $security_value ): ?>
											<li><?php echo esc_html( $security_value ); ?></li>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Suitable for</th>
							<th></th>
						</tr>
						<tr>
							<td>
								<ul>
									<?php $suitable_for_checked_values = get_field( 'suitable_for' ); ?>
									<?php if ( $suitable_for_checked_values ) : ?>
										<?php foreach ( $suitable_for_checked_values as $suitable_for_value ): ?>
											<li><?php echo esc_html( $suitable_for_value ); ?></li>
										<?php endforeach; ?>
									<?php endif; ?>
								</ul>
							</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-10">
				<div class="map">
					<?php the_field( 'map' ); ?>
				</div>
			</div>
			<div class="col-10 text-center">
				<a class="button" data-bs-toggle="modal" data-bs-target="#form">Enquire now</a>
				<div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel"><?php the_title(); ?> - <?php the_field( 'subtitle' ); ?></h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<?php echo do_shortcode('[contact-form-7 id="3209bc4" title="Villa form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
