<?php get_header(); ?>
<?php get_template_part("sections/hero-yacht"); ?>
<section class="yachts">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title">Singular Yachts</h2>
					<p class="description">We offer unique and unforgettable experiences in Ibiza & Formentera</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php get_template_part("sections/article-yacht"); ?>
			<?php get_template_part("sections/article-yacht"); ?>
		</div>
	</div>
</section>
<?php get_template_part("sections/guide"); ?>
<?php get_template_part("sections/about"); ?>
<?php get_footer(); ?>