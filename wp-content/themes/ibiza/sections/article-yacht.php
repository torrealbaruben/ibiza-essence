<?php
$params = array('category_name' => 'yachts', 'posts_per_page' => 12 );
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
	<?php while ($wc_query->have_posts()) :
		$wc_query->the_post(); ?>
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