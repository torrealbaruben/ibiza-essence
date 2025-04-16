	<footer class="">
		<div class="container">
			<div class="row footer">
				<div class="col-12">
					<ul class="info">
						<li><a href="https://api.whatsapp.com/send?phone=34683268514" target="_blank">+34 683 26 85 14</a></li>
						<li><a href="mailto:hello@ibizapureessence.com" target="_blank">hello@ibizapureessence.com</a></li>
						<li><a href="https://instagram.com/ibiozaessence" target="_blank">@ibiozaessence</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<ul class="menu">
						<li>Hospitality</li>
						<?php mostrar_submenu(4); ?>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<ul class="menu">
						<li>Transport</li>
						<?php mostrar_submenu(13); ?>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<ul class="menu">
						<li>Events</li>
						<?php mostrar_submenu(20); ?>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-3">
					<ul class="menu">
						<li>Tailor</li>
						<?php mostrar_submenu(17); ?>
					</ul>
				</div>
			</div>
			<div class="row copyright">
				<div class="col-12">
					<p><strong>Ibiza Pure Essence</strong> 2025. All right reserved.</p>
					<p><a href="<?php echo esc_url( get_page_link(8)); ?>">Terms & conditions</a> • <a href="<?php echo esc_url( get_page_link(3)); ?>">Privacy policy</a></p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>