<!DOCTYPE html>
<?php
if(isset($_COOKIE['theme'])){
	if ($_COOKIE['theme'] == "dark"){
		$temp = 'data-theme="dark"';
	}
	elseif ($_COOKIE['theme'] == "light"){
		$temp = 'data-theme="light"';
	}
}
?>
<html <?php language_attributes() ?> <?php $temp ?>>
<head>
	<!-- Meta Tags -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Delta Digital s.r.o.">

	<?php if(is_front_page()) : ?>
		<?php
			echo '<meta name="title" content="Pro města a obce - Váš průvodce světem veřejné správy a samosprávy">
			<meta name="description" content="Pro města a obce je předním zpravodajským portálem a časopisem určeným pro představitele samosprávy a úředníky. Nabízíme aktuální zprávy, hluboké analýzy a inspirativní informace pro zastupitele, starosty a další klíčové aktéry ve veřejné správě. S naším obsahem zůstanete vždy informováni o nejnovějších trendech, politikách a inovacích v oblasti městského a obecního rozvoje.">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="article">
			<meta property="og:url" content="https://www.promestaobce.cz/">
			<meta property="og:title" content="Pro města a obce - Váš průvodce světem veřejné správy a samosprávy">
			<meta property="og:description" content="Pro města a obce je předním zpravodajským portálem a časopisem určeným pro představitele samosprávy a úředníky. Nabízíme aktuální zprávy, hluboké analýzy a inspirativní informace pro zastupitele, starosty a další klíčové aktéry ve veřejné správě. S naším obsahem zůstanete vždy informováni o nejnovějších trendech, politikách a inovacích v oblasti městského a obecního rozvoje.">
			<meta property="og:image" content="https://www.promestaobce.cz/wp-content/uploads/2023/11/promoweb.png">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="https://www.promestaobce.cz/">
			<meta property="twitter:title" content="Pro města a obce - Váš průvodce světem veřejné správy a samosprávy">
			<meta property="twitter:description" content="Pro města a obce je předním zpravodajským portálem a časopisem určeným pro představitele samosprávy a úředníky. Nabízíme aktuální zprávy, hluboké analýzy a inspirativní informace pro zastupitele, starosty a další klíčové aktéry ve veřejné správě. S naším obsahem zůstanete vždy informováni o nejnovějších trendech, politikách a inovacích v oblasti městského a obecního rozvoje.">
			<meta property="twitter:image" content="https://www.promestaobce.cz/wp-content/uploads/2023/11/promoweb.png">';
		?>
	<?php else : ?>
		<?php
		if( is_single() === true){
			echo '<meta name="title" content="'. esc_attr( $post->post_title ) .'">
			<meta name="description" content="'. wp_trim_excerpt( $post->post_contenr ).'">

			<!-- Open Graph / Facebook -->
			<meta property="og:type" content="article">
			<meta property="og:url" content="'. get_permalink( $post->ID ) .'">
			<meta property="og:title" content="'. esc_attr( $post->post_title ) .'">
			<meta property="og:description" content="'. wp_trim_excerpt( $post->post_contenr ).'">
			<meta property="og:image" content="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'large' ) .'">

			<!-- Twitter -->
			<meta property="twitter:card" content="summary_large_image">
			<meta property="twitter:url" content="'. get_permalink( $post->ID ) .'">
			<meta property="twitter:title" content="'. esc_attr( $post->post_title ) .'">
			<meta property="twitter:description" content="'. wp_trim_excerpt( $post->post_contenr ).'">
			<meta property="twitter:image" content="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'large' ) .'">';
		}
		?>
	<?php endif; ?>

		
	


	<?php
	$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'localhost') !== false) {
	} else {
		if ( is_user_logged_in() ) {
		} else {
			echo "<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-TM32JV5');</script>
			<!-- End Google Tag Manager -->";
		}
	}
	?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/logo40x40.png' ?>">
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <script> 
		var url = "<?php echo get_template_directory_uri() ?>";
		document.cookie = "theme = " + localStorage.getItem('data-theme');
	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/vendor/glightbox/css/glightbox.css">

	<?php
		if(isset($_COOKIE['theme']) AND $_COOKIE['theme'] == "dark"){
			echo'
			<!-- Theme CSS -->
			<link id="style-switch" rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/style-dark.css">';
		}
		else{
			echo'
			<!-- Theme CSS -->
			<link id="style-switch" rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/style.css">';
		}
		unset($_COOKIE['theme']);
	?>

	<!-- Theme Color CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/color.css" />
	
	<meta name="facebook-domain-verification" content="zzjzs1uiv2gignea69n21aihzlpqea" />
	<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
	<?php wp_head() ?>
</head>

<body>

	<?php
	if (strpos($url,'localhost') !== false) {
	} else {
		if ( is_user_logged_in() ) {
		} else {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM32JV5"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	}
	?>
	
	<!-- Offcanvas START -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
	<div class="offcanvas-header justify-content-end">
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body d-flex flex-column pt-0">
		<div class="row">
			<div class="col-12 mb-1">
				<h2>Newsletter</h2>
				<p>Dostávejte to nejzajímavější ze světa veřejné správy i v našich newsletterech.</p>
			</div>
			<div class="col-12 ms-0 mb-1">
				<script>
					(function (w,d,s,o,f,js,fjs) {
						w['ecm-widget']=o;w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments) };
						js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
						js.id = '1-43c2cd496486bcc27217c3e790fb4088'; js.dataset.a = 'promestaobce'; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs);
					}(window, document, 'script', 'ecmwidget', 'https://d70shl7vidtft.cloudfront.net/widget.js'));
				</script>
				<div id="f-1-43c2cd496486bcc27217c3e790fb4088"></div>
			</div>
			<div class="col-12 mb-1">
				<p><small>* Kliknutím na „Odebírat“ souhlasíte s našimi zásadami o Ochraně osobních údajů a zasíláním pravidelných newsletterů. Odhlásit se můžete kdykoliv.</small></p>
			</div>
		</div>
	</div>
	</div>
	<!-- Offcanvas END -->

	<!-- =======================
	Header START -->
	<header class="navbar-light navbar-sticky header-static">
		<div class="navbar-top d-none d-lg-block small">
			<div class="container">
				<div class="d-md-flex justify-content-between align-items-center my-2">
					<!-- Top bar left -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'secondary',
								'items_wrap'     => '<ul class="nav">%3$s</ul>',
								'add_li_class'  => 'nav-item',
								'link_class'   => 'nav-link',
								'container' => false
							));
						?>
					<!-- Top bar right -->
					<div class="d-flex align-items-center">
						<!-- Dark mode switch -->
						<script type="text/javascript">
							if (window.innerWidth > 993) {
								document.write('<div class="modeswitch" id="darkModeSwitch"><div class="switch"></div></div>');
							}
						</script>
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="https://www.facebook.com/promestaaobce"><i class="fab fa-facebook-square"></i></a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
							</li> -->
						</ul>
					</div>
				</div>
				<!-- Divider -->
				<div class="border-bottom border-2 border-primary opacity-1"></div>
			</div>
		</div>

		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<img class="navbar-brand-item light-mode-item" id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_light.png' ?>" alt="logo">			
					<img class="navbar-brand-item dark-mode-item" id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_dark.png' ?>" alt="logo">			
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Main navbar START -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<!-- Nav item 0 Mega menu -->
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie</a>
							<div class="dropdown-menu" aria-labelledby="megaMenu">
								<div class="container">
									<!-- Trending tags -->
									<div class="row px-3">
										<div class="col-12">
											<ul class="list-inline mt-3">
												<li class="mb-2">Nejčtenější kategorie:</li>
												<?php
													$args1 = array(
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
													$categories = get_categories( $args1 );
													unset($args1);
												?>
												<?php foreach ( $categories as $category ) : ?>
													<li class="list-inline-item"><a href="<?php echo get_category_link( $category->term_id ) ?>" class="btn btn-sm btn-primary-soft"><?php echo apply_filters( 'the_title' , $category->cat_name ) ?></a></li>
												<?php endforeach ?>
												<?php unset($categories); ?>
											</ul>
											<ul class="list-inline mt-3">
												<li class="mb-2">Dále vás může zajímat:</li>
												<?php
													$args2 = array(
														'number'      => 10,
														'meta_key' => 'priorita_kategorie',
														'orderby' => 'meta_value',
														'order' => 'DESC',
														'exclude' => [1,8571],
														'meta_query' => array(
														array(
															'key'           => 'priorita_kategorie',
															'value'         => 0,
															'compare'       => '='
														)
														)
													);
													$categories = get_categories( $args2 );
													unset($args2);
												?>
												<?php foreach ( $categories as $category ) : ?>
													<li class="list-inline-item"><a href="<?php echo get_category_link( $category->term_id ) ?>" class="btn btn-sm btn-outline-secondary"><?php echo apply_filters( 'the_title' , $category->cat_name ) ?></a></li>
												<?php endforeach ?>
												<?php unset($categories); ?>
											</ul>

										</div>
									</div> <!-- Row END -->
								</div>
							</div>
						</li>

						<!-- Nav item 0 Mega menu -->
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aktuality z krajů</a>
							<div class="dropdown-menu" aria-labelledby="megaMenu">
								<div class="container">
									<!-- Trending tags -->
									<div class="row px-3">
										<div class="col-12">
											<ul class="list-inline mt-3">
												<?php
													$terms = get_terms( array(
														'taxonomy' => 'kraje',
														'hide_empty' => false,
													) );
												?>
												<?php foreach ( $terms as $term ) : ?>
													<li class="list-inline-item"><a href="<?php echo get_category_link( $term->term_id ) ?>" class="btn btn-sm btn-outline-secondary"><?php echo apply_filters( 'the_title' , $term->name ) ?></a></li>
												<?php endforeach ?>
												<?php unset($terms); ?>
											</ul>
										</div>
									</div> <!-- Row END -->
								</div>
							</div>
						</li>

						<!-- Nav item 5 link-->
						<li class="nav-item"> <a class="nav-link" href="<?php echo get_home_url(); ?>/akce/">Kalendář akcí</a></li>

						<!-- Nav item 2 -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exkluzivně</a>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'exkluzivne',
									'items_wrap'     => '<ul class="dropdown-menu" aria-labelledby="homeMenu">%3$s</ul>',
									'add_li_class'  => 'dropdown-item',
									'link_class'   => '',
									'container' => false
								));
							?>
							<!-- <ul class="dropdown-menu" aria-labelledby="homeMenu">
								<li> <a class="dropdown-item" href="#">Jak to vidí starostové</a></li>
								<li> <a class="dropdown-item" href="#">Rozhovory</a></li>
								<li> <a class="dropdown-item" href="#">Zajímavosti</a></li>
							</ul> -->
						</li>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'secondary',
								'items_wrap'     => '%3$s',
								'add_li_class'  => 'nav-item d-block d-lg-none',
								'link_class'   => 'nav-link',
								'container' => false
							));
						?>
					</ul>
				</div>
				<!-- Main navbar END -->

				<!-- Nav right START -->
				<div class="nav flex-nowrap align-items-center">
					<!-- Nav Button -->
					<!-- <div class="nav-item d-none d-md-block">
						<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Newsletter</a>
					</div> -->
					<!-- Nav Search -->
					<div class="ms-1 nav-item dropdown dropdown-toggle-icon-none nav-search">
						<a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-search fs-4"> </i>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
						<form class="input-group" action="<?php echo home_url( '/' ); ?>" method="get">
							<input type="search" class="search-field form-control border-success" placeholder="Hledat …" value="" name="s">
							<button class="btn btn-success m-0" type="submit">Hledat</button>
						</form>
						</div>
					</div>
					<!-- Offcanvas menu toggler -->
					<div class="nav-item">
						<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
							<i class="bi bi-envelope-paper rtl-flip fs-4" data-bs-target="#offcanvasMenu"> </i>
						</a>
					</div>
					<script type="text/javascript">
						if (window.innerWidth < 600){
							document.write('<div id="darkModeSwitch"><div class="switch"><img src="<?php echo get_template_directory_uri() ?>/assets/images/switch.png" style="height: 22px; margin-left: 0.8rem !important; margin-bottom: 3px;"></div></div>');
						}
						else if (window.innerWidth < 993) {
							document.write('<div class="modeswitch" id="darkModeSwitch"><div class="switch"></div></div>');
						}
					</script>
				</div>
				<!-- Nav right END -->
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- =======================
	Header END -->
