<?php get_header(); ?>
<main class="page-about-us">
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
						<h2 class="title"><?php the_field( 'subtitle' ); ?></h2>
						<h3 class="subtitle"><?php the_field( 'extra_text' ); ?></h3>
						<p class="description">Ibiza Essence Real Estate & Hospitality</p>
					</div>
				</div>
			</div>
			<div class="col-12">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-about-01.jpg" class="d-block w-100 guide-img" alt="Erika Suárez">
			</div>
			<div class="row justify-content-center align-items-center">
				<div class="col-10">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part("sections/testimonial"); ?>
</main>
<?php get_footer(); ?>