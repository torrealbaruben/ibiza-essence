<?php $category_id = get_cat_ID ( 'Villa rents', 'textdomain' ); ?>
<?php $category_link = get_category_link( $category_id ); ?>
<section class="villas">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title">Special Featured Villas</h2>
					<p class="description">Here you can find our best selection</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$id_entrada_actual = get_the_ID();
				$params = array('category_name' => 'villa-rents', 'posts_per_page' => 4 );
				$wc_query = new WP_Query($params);
			?>
			<?php if ($wc_query->have_posts()) : ?>
				<?php while ($wc_query->have_posts()) :
					$wc_query->the_post(); ?>
					<article class="col-6 col-lg-4">
						<a href="<?php the_permalink(); ?>" class="shadow">
							<?php if ( get_field( 'imagen_01' ) ) : ?>
								<img src="<?php the_field( 'imagen_01' ); ?>" class="img" alt="<?php the_title(); ?>" />
							<?php endif ?>
							<?php //the_post_thumbnail( 'full', [ 'class' => 'img', 'alt' => esc_html (get_the_title() ) ] );  ?>
							<h3 class="name"><?php the_title(); ?></h3>
							<p class="price"><?php the_field( 'price' ); ?></p>
							<p class="text"><?php the_field( 'description' ); ?></p>
							<ul class="list">
								<li><?php the_field( 'persons' ); ?></li>
								<li><?php the_field( 'bedroom' ); ?></li>
								<li><?php the_field( 'showers' ); ?></li>
								<li><?php the_field( 'address' ); ?></li>
							</ul>
						</a>
					</article>
					<?php //include(TEMPLATEPATH . '/sections/article-villa.php'); ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else:  ?>
			<?php endif; ?>			
			<div class="col-12 text-center">
				<a href="<?php echo esc_url( $category_link ); ?>" class="button">Explore more Villas</a>
			</div>
		</div>
	</div>
</section>