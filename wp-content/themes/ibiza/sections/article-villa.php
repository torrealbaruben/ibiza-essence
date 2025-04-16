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