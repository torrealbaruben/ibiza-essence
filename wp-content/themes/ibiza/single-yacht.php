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
					<p class="description"><?php the_field( 'persons' ); ?> Guests • <?php the_field( 'price' ); ?></p>
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
				<ul class="list list-yacht">
					<li><span><?php the_field( 'month_01' ); ?></span> <?php the_field( 'price_month_01' ); ?></li>
					<li><span><?php the_field( 'month_02' ); ?></span> <?php the_field( 'price_month_02' ); ?></li>
					<li><span><?php the_field( 'month_03' ); ?></span> <?php the_field( 'price_month_03' ); ?></li>
					<li><span><?php the_field( 'month_04' ); ?></span> <?php the_field( 'price_month_04' ); ?></li>
				</ul>				
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
