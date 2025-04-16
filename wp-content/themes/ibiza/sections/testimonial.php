<section class="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title">What people say</h2>
					<p class="description">Testimonial</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php
				$params = array('category_name' => 'testimonial', 'posts_per_page' => 2 );
				$wc_query = new WP_Query($params);
			?>
			<?php if ($wc_query->have_posts()) : ?>
				<?php while ($wc_query->have_posts()) :
					$wc_query->the_post(); ?>
						<article class="col-12 col-md-6">
							<div class="bg">
								<p class="name"><?php the_title(); ?></p>
								<div class="comment">
									<?php the_content(); ?>	
								</div>
							</div>
						</article>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else:  ?>
			<?php endif; ?>	
		</div>
	</div>
</section>