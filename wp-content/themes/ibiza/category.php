<?php get_header(); ?>
<section class="hero">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-hero.jpg" class="d-block w-100" alt="Sliders 01">
	<div class="yachts">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="head">
						<h2 class="title"><?php single_cat_title(); ?></h2>
						<p class="description"><?php echo category_description(); ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) :
						the_post(); ?>
						<article class="col-6 col-lg-4">
							<a href="<?php the_permalink(); ?>" class="shadow">
								<?php if ( get_field( 'imagen_01' ) ) : ?>
									<img src="<?php the_field( 'imagen_01' ); ?>" class="img" alt="<?php the_title(); ?>">
								<?php endif ?>
								<h3 class="name"><?php the_title(); ?></h3>
								<ul class="list">
									<li><?php the_field( 'month_01' ); ?> <span><?php the_field( 'price_month_01' ); ?> €</span></li>
									<li><?php the_field( 'month_02' ); ?> <span><?php the_field( 'price_month_02' ); ?> €</span></li>
									<li><?php the_field( 'month_03' ); ?> <span><?php the_field( 'price_month_03' ); ?> €</span></li>
									<li><?php the_field( 'month_04' ); ?> <span><?php the_field( 'price_month_04' ); ?> €</span></li>
								</ul>
							</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else:  ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_template_part("sections/guide"); ?>
<?php get_template_part("sections/about"); ?>
<?php get_footer(); ?>