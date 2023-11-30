
	<!-- =======================
	Footer START -->
	<footer class="pb-0">
		<div class="container">
			<hr>
			<!-- Widgets START -->
			<div class="row pt-5">

				<!-- Footer Widget -->
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="<?php echo get_home_url(); ?>" ><img class="light-mode-item" src="<?php echo get_template_directory_uri() . '/assets/images/logo_light.png'?>" alt="logo"></a>
					<a href="<?php echo get_home_url(); ?>" ><img class="dark-mode-item" src="<?php echo get_template_directory_uri() . '/assets/images/logo_dark.png'?>" alt="logo"></a>
					<p class="mt-3">Měsíčník PRO města a obce přináší užitečné informace pro starosty, hejtmany, volené zastupitele, ale i pro zaměstnance obecních, městských a krajských úřadů a pro všechny čtenáře, kteří se zajímají o veřejnou správu. Důležitá fakta pro svou činnost v něm však naleznou rovněž podnikatelé a firmy poskytující výrobky a služby městům, obcím a úředníkům krajských a městských úřadů, magistrátů a státních orgánů.</p>
				</div>

				<!-- Footer Widget -->
				<div class="col-sm-6 col-lg-3 mb-4">
					<h5 class="mb-4">Nejčtenější kategorie</h5>
					<ul class="list-inline">
						<?php
							$args3 = array(
								'number'      => 10,
								'meta_key' => 'priorita_kategorie',
								'orderby' => 'meta_value',
								'order' => 'DESC',
								'meta_query' => array(
								array(
									'key'           => 'priorita_kategorie',
									'value'         => 0,
									'compare'       => '>'
								)
								)
							);
							$categories = get_categories( $args3 );
							unset($args3);
						?>
						<?php foreach ( $categories as $category ) : ?>
							<li class="list-inline-item"><a href="<?php echo get_category_link( $category->term_id ) ?>" class="btn btn-sm btn-success-soft" style="color: <?php echo category_custom_color( $category->term_id ) ?>"><?php echo apply_filters( 'the_title' , $category->cat_name ) ?></a></li>
						<?php endforeach ?>
						<?php unset($categories); ?>
					</ul>
				</div>

				<!-- Footer Widget -->
				<div class="col-sm-6 col-lg-2 mb-4">
					<h5 class="mb-4">Sociální sítě</h5>
					<ul class="nav flex-column">
						<li class="nav-item"><a class="nav-link pt-0" href="https://www.facebook.com/promestaaobce"><i class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
					</ul>
				</div>

				<!-- Footer Widget -->
				<div class="col-md-6 col-lg-3 mb-4">
					<h5 class="mb-4">Navigace</h5>
					<div class="row">
						<div class="col-6">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'secondary',
									'items_wrap'     => '<ul class="nav  flex-column">%3$s</ul>',
									'add_li_class'  => 'nav-item',
									'link_class'   => 'nav-link',
									'container' => false
								));
							?>
						</div>
						<div class="col-6">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'legal',
									'items_wrap'     => '<ul class="nav  flex-column">%3$s</ul>',
									'add_li_class'  => 'nav-item',
									'link_class'   => 'nav-link',
									'container' => false
								));
							?>
						</div>
					</div>
				</div>	

				<!-- Footer Widget -->
				<div class="col-12 mb-4">
					<div class="mt-4">©2022 City PH Publishing s.r.o.. - Vytvořeno <a href="https://deltadigital.cz/" target="_blank">&Delta; Delta Digital s.r.o.</a>
					</div>
				</div>			
			</div>
			<!-- Widgets END -->
		</div>
	</footer>
	<!-- =======================
	Footer END -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<!-- =======================
	JS libraries, plugins and custom scripts -->
	<script src="<?php echo get_template_directory_uri()?>/assets/vendor/glightbox/js/glightbox.js"></script>
	<script src="<?php echo get_template_directory_uri() . '/assets/js/functions.js' ?>"></script>
	

	<?php wp_footer() ?>
</body>
</html>