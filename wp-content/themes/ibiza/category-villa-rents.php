<?php get_header(); ?>
<main class="category-page">
	<?php get_template_part("sections/hero-villa"); ?>
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
			<div class="row justify-content-center">
				<?php get_template_part("sections/article-villa"); ?>
			</div>
		</div>
	</section>
	<?php get_template_part("sections/guide"); ?>
	<?php get_template_part("sections/about"); ?>
	
</main>
<?php get_footer(); ?>
