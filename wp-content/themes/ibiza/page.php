<?php get_header(); ?>
<?php global $post; ?>
<main class="page">
	<section class="">
		<?php the_post_thumbnail( 'full', [ 'class' => 'img-fluid', 'alt' => esc_html (get_the_title() ) ] );  ?>
		<div class="container">
			<article class="row justify-content-center">
				<div class="col-12">
					<div class="head page-header">
						<h1 class="title"><?php the_title(); ?>
						<h2 class="subtitle"><?php the_field( 'subtitle' ); ?></h2>
						<p class="description"><?php the_field( 'extra_text' ); ?></p>
					</div>
					<?php if ( get_field( 'image' ) ) : ?>
						<img src="<?php the_field( 'image' ); ?>" class="page-img" alt="<?php the_title(); ?>">
					<?php endif ?>
				</div>
				<div class="col-10">
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		</div>
	</section>
	<?php get_template_part("sections/guide"); ?>
</main>
<?php get_footer(); ?>