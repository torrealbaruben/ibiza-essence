<section class="guide">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<?php
					$params = array('pagename' => 'ibiza-guide');
					$wc_query = new WP_Query($params);
					?>
					<?php if ($wc_query->have_posts()) : ?>
						<?php while ($wc_query->have_posts()) :
							$wc_query->the_post(); ?>
							<h2 class="title"><?php the_title(); ?></h2>
							<p class="description"><?php the_field( 'subtitle' ); ?></p>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php
			$ibiza_id = 158;
			$args = array(
				'post_parent' => $ibiza_id,
				'post_type' => 'page',
				'posts_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'title',
			);
			$subpaginas_query = new WP_Query($args);
			if ($subpaginas_query->have_posts()) {
				while ($subpaginas_query->have_posts()) {
					$subpaginas_query->the_post(); ?>
					<article class="col-10 col-md-4">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_field( 'image_thumbs' ); ?>" class="img" alt="<?php the_title(); ?>">
							<h3 class="name"><?php the_title(); ?></h3>
						</a>
					</article>
				<?php }
				wp_reset_postdata();
			} else {
				echo 'No hay subpáginas para Ibiza.';
			}
			?>
		</div>
	</div>
</section>