<?php
$params = array('pagename' => 'about-us' );
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
	<?php while ($wc_query->have_posts()) :
		$wc_query->the_post(); ?>
		<section class="about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 bg shadow-lg">
						<article class="row justify-content-between align-items-center">
							<div class="col-12 col-md-5">
								<div class="head">
									<h2 class="title"><?php the_title(); ?></h2>
									<p class="description"><?php the_field( 'extra_text' ); ?></p>
								</div>
								<div class="text">
									<blockquote>
										<?php the_field( 'excerpt' ); ?>
									</blockquote>
								</div>
								<a href="<?php echo esc_url( get_page_link(137)); ?>" class="button">Know more</a>
							</div>
							<div class="col-12 col-md-6 order-first order-md-last">
								<?php if ( get_field( 'image' ) ) : ?>
									<img class="img" src="<?php the_field( 'image' ); ?>" alt="<?php the_title(); ?>">
								<?php endif ?>
							</div>						
						</article>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>