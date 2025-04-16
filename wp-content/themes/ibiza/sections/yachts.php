<?php $category_id = get_cat_ID ( 'Yachts', 'textdomain' ); ?>
<?php $category_link = get_category_link( $category_id ); ?>
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
		<div class="row">
			<?php include(TEMPLATEPATH . '/sections/article-yacht.php'); ?>
			<div class="col-12 text-center">
				<a href="<?php echo esc_url( $category_link ); ?>" class="button">Explore more Yacths</a>
			</div>
		</div>
	</div>
</section>