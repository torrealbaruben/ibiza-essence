<section class="hero">
	<div id="carouselHero" class="carousel slide">
		<div class="carousel-inner">
			<?php
				$params = array('category_name' => 'home-slider	', 'posts_per_page' => 3 );
				$wc_query = new WP_Query($params);
				$i = 1;
			?>
			<?php if ($wc_query->have_posts()) : ?>
				<?php while ($wc_query->have_posts()) :
					$wc_query->the_post(); ?>
					<div class="carousel-item <?php if ($i ==1) echo"active"; ?>">
						<?php the_post_thumbnail( 'full', [ 'class' => 'd-block w-100', 'alt' => esc_html (get_the_title() ) ] );  ?>
						<div class="carousel-caption">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						<div class="carousel-shadow d-none d-md-block"></div>
					</div>
					<?php $i++ ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else:  ?>
			<?php endif; ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>