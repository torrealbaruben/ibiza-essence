<?php $category_id = get_cat_ID ( 'Hospitality', 'textdomain' ); ?>
<?php $category_link = get_category_link( $category_id ); ?>
<section class="services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head">
					<h2 class="title"><?php echo get_cat_name( $category_id ) ?></h2>					
					<div class="description">
						<?php echo category_description( $category_id ) ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<?php mostrar_subcategorias_services(4); ?>
			<div class="col-12">
				<a href="<?php echo esc_url( $category_link ); ?>" class="button">Explore all services</a>
			</div>
		</div>
	</div>
</section>