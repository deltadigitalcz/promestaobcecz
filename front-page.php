<?php get_header() ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Main hero START -->
<?php
$args = array(
	'numberposts'      => 1,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        =>  ['post','akce'],
	'suppress_filters' => true,
	'tax_query' => array(
		array(
			'taxonomy' => 'umisteni',
			'field' => 'slug',
			'terms' => array('homepage-primary')
		)
	)
);
$posts = get_posts( $args );
unset($args);
$exclude_posts[] = $posts['0']->ID;
?>
<section class="py-0 mt-0 card-grid">
	<div class="container">
		<div class="row">
			<!-- Slider START -->
			<div class="col-lg-7">
				<div class="card">
					<!-- Card img -->
					<div class="px-0 pt-0">
						<h3 class="card-title"><a href="<?php echo get_permalink( $posts['0']->ID ) ?>" class="btn-link text-reset fw-bold"><?php echo esc_attr( $posts['0']->post_title ) ?></a></h3>
					</div>
					<div class="position-relative">
						<a href="<?php echo get_permalink( $posts['0']->ID ) ?>"><img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $posts['0']->ID ), 'large' ) ?>" alt="<?php echo esc_attr( $posts['0']->post_title ) ?>"></a>
					</div>
					<div class="card-body px-0 pt-2 d-none d-lg-block">
						<p class="card-text"><?php apply_filters( 'the_content', custom_echo( strip_tags( strip_shortcodes( $posts['0']->post_content ) ), 280 ) ) ?></p>
					</div>
					<div class="card-body px-0 pt-2 d-block d-lg-none">
						<p class="card-text"><?php apply_filters( 'the_content', custom_echo( strip_tags( strip_shortcodes( $posts['0']->post_content ) ), 170 ) ) ?></p>
					</div>
				</div>
			</div>
			<?php unset($posts); ?>
			<!-- Slider END -->
			<?php
				$args = array(
					'numberposts'      => 4,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => ['post','akce'],
					'suppress_filters' => true,
					'tax_query' => array(
						array(
							'taxonomy' => 'umisteni',
							'field' => 'slug',
							'terms' => array('homepage-secondary')
						)
					)
				);
				$posts = get_posts( $args );
				unset($args);
			?>
			<div class="col-lg-5 mt-5 mt-lg-0">
				<?php foreach ( $posts as $post ) : ?>
					<?php $exclude_posts[] = $post->ID; ?>
					<!-- Card item START -->
					<div class="card mb-3">
						<div class="row g-3">
							<div class="col-4">
								<a href="<?php echo get_permalink( $post->ID ) ?>"><img class="rounded-3" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'medium' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>" style="max-height: 100px;"></a>
							</div>
							<div class="col-8">
								<?php
									$category_detail = get_the_category( $post->ID );
									foreach($category_detail as $cd_key => $cd){
										if( $cd_key < 2){
											echo '<a href="'. get_category_link( $cd->term_id ) .'" class="badge mb-2 me-2" style="background-color: '. category_custom_color( $cd->term_id ) .';">'. $cd->cat_name .'</a>';
										}
									}
									unset($category_detail);
								?>
								<h5><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset stretched-link fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h5>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
									<li class="nav-item">
										<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
												<span><a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
											</div>
										</div>
									</li>
									<li class="nav-item"><?php echo get_the_time( get_option('date_format'), $post->ID ) ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				<?php endforeach ?>
				<?php unset($posts); ?>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================
Trending START -->
<section class="py-2 mt-2">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 bg-primary-soft p-2 rounded">
				<div class="d-sm-flex align-items-center text-center text-sm-start">
					<!-- Title -->
					<div class="me-3">
						<span class="badge bg-primary p-2 px-3">Nadcházející akce:</span>
					</div>
					<div class="mt-2 d-block d-sm-none"></div>
					<!-- Slider -->
					<div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
						<div class="tiny-slider-inner"
							data-autoplay="true"
							data-hoverpause="true"
							data-gutter="0"
							data-arrow="true"
							data-dots="false"
							data-items="1">
							<!-- Slider items -->
							<?php
								 $args = array(
									'numberposts'      => 5,
									'post_type' => 'akce',
									'post_status' => 'any',
									'meta_key' => 'konec_akce',
									'orderby' => 'meta_value',
									'order' => 'ASC',
									'meta_query' => array(
									array(
										'key'           => 'konec_akce',
										'value'         => date('Ymd', time()),
										'compare'       => '>='
									)
									)
								);
								$posts = get_posts( $args );
								unset($args);
							?>
							<?php foreach ( $posts as $post ) : ?>
								<?php $custom_fields = get_fields( $post->ID ) ?>   
								<div> <a href="<?php echo get_permalink( $post->ID ) ?>" class="text-reset btn-link">
								<?php echo apply_filters( 'the_title' , $post->post_title ) ?>
								<br class="mt-2 d-block d-sm-none">
								<?php 
									if($custom_fields['zacatek_akce'] == $custom_fields['konec_akce']){
										echo '<i class="bi bi-calendar-week ms-2 me-2"></i>';
										echo date( get_option('date_format'), strtotime($custom_fields['zacatek_akce']) );
									}
									else{
										echo '<i class="bi bi-calendar-week ms-2 me-2"></i>';
										echo date( get_option('date_format'), strtotime($custom_fields['zacatek_akce']) ) .' - '. date( get_option('date_format'), strtotime($custom_fields['konec_akce']) );
									}
									echo '<i class="bi bi-geo-alt ms-2 me-2"></i>';
									echo $custom_fields['misto_konani'];
								?>
								</a></div>
								<?php unset($custom_fields); ?>
							<?php endforeach ?>
							<?php unset($posts); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-0 d-block d-lg-none">
				<?php get_template_part( 'template-parts/ads-mobile' ); ?>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Trending END -->

<!-- =======================
Main content START -->
<section class="position-relative">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Nejnovější články</h2>
					<p>Buďte stále v obraze.</p>
				</div>
				<div class="row gy-4">
					<?php
						$args = array(
							'post_type'        => 'post',
							'numberposts'      => 8,
							'exclude'		   => $exclude_posts,
							'orderby'          => 'date',
							'order'            => 'DESC',							
						);
						$posts = get_posts( $args );
						unset($args);
					?>
					<?php foreach ( $posts as $post ) : ?>
						<!-- Card item START -->
						<div class="col-sm-6">
							<div class="card">
								<!-- Card img -->
								<div class="position-relative">
									<a href="<?php echo get_permalink( $post->ID ) ?>"><img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>"></a>
									<?php
												$category_detail = get_the_category( $post->ID );
												foreach( $category_detail as $cd ){
													echo '<a href="'. get_category_link( $cd->term_id ) .'" class="badge mt-2 mb-0 me-2" style="background-color: '. category_custom_color( $cd->term_id ) .';">'. $cd->cat_name .'</a>';
												}
												unset($category_detail);
											?>
								</div>
								<div class="card-body px-0 pt-2">
									<h4 class="card-title"><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h4>
									<p class="card-text"><?php apply_filters( 'the_content', custom_echo( strip_tags( strip_shortcodes( $post->post_content ) ), 170 ) ) ?></p>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<span><a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
												</div>
											</div>
										</li>
										<li class="nav-item"><?php echo get_the_time( get_option('date_format'), $post->ID ) ?></li>
										<li class="nav-item"><?php echo reading_time( $post->ID ) ?> čtení</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					<?php endforeach ?>
					<?php unset($posts); ?>

					<!-- Load more START -->
					<!-- <div class="col-12 text-center mt-5">
						<a href="" type="button" class="btn btn-primary-soft">Zobrazit více článků <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></a>
					</div> -->
					<!-- Load more END -->
				</div>
			</div>
			<!-- Main Post END -->
			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0" data-sticky-container>
				<!-- Trending topics widget START -->
				<div>
					<h4 class="mt-4 mb-3">Nejčtenější kategorie</h4>
					<?php
						$args = array(
							'number'      => 6,
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
						$categories = get_categories( $args );
						unset($args);
					?>
					<?php foreach ( $categories as $category ) : ?>
						<!-- Category item -->
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(<?php echo wp_get_attachment_image_url( category_image( $category->term_id ), 'image-420' ) ?>); background-position: center left; background-size: cover;">
							<div class="p-3">
								<a href="<?php echo get_category_link( $category->term_id ) ?>" class="stretched-link btn-link fw-bold text-white h5"><?php echo apply_filters( 'the_title' , $category->cat_name ) ?></a>
							</div>
						</div>
					<?php endforeach ?>
					<?php unset($categories); ?>
					<!-- View All Category button -->
					<!-- <div class="text-center mt-3">
						<a href="#" class="fw-bold text-body text-primary-hover"><u>Zobrazit všechny kategorie</u></a>
					</div> -->
				</div>
				<!-- Trending topics widget END -->
				<div class="row"  data-sticky data-margin-top="30" data-sticky-for="767">
					<?php get_template_part( 'template-parts/ads-sidebar' ); ?>
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

<!-- =======================
Featured Interview START -->
<section class="bg-light">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 ">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-people-fill me-2"></i>Představujeme vám</h2>
					<p>Rozhovory nejen s představiteli veřejné správy.</p>
				</div>
				<!-- Slider -->
				<div class="tiny-slider arrow-hover arrow-dark arrow-blur arrow-round">
					<div class="tiny-slider-inner"
					data-autoplay="false"
					data-hoverpause="true"
					data-gutter="24"
					data-arrow="true"
					data-dots="false"
					data-items-xl="6" 
					data-items-lg="4" 
					data-items-md="3" 
					data-items-sm="2" 
					data-items-xs="2"
					>
					<?php
						$args = array(
							'post_type'        => 'post',
							'category'        => 8571,
							'numberposts'      => 15,
							'orderby'          => 'date',
							'order'            => 'DESC',							
						);
						$posts = get_posts( $args );
						unset($args);
					?>
						<?php foreach ( $posts as $post ) : ?>
							<!-- Guest item -->
							<div>
								<div class="card bg-transparent">
									<a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset fw-bold"><img class="card-img" src="<?php echo wp_get_attachment_image_url( get_field( "profilovy_ctvercovy_obrazek", $post->ID ), 'medium' ) ?>" alt="<?php echo apply_filters( 'the_title' , $post->post_title ) ?>"></a>
									<div class="card-body ps-0">
										<h5 class="mb-0"><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset fw-bold"><?php echo apply_filters( 'the_title' , get_field( "cele_jmeno", $post->ID ) ) ?></a></h5>
										<small><?php echo apply_filters( 'the_title' , $post->post_excerpt ) ?></small>
									</div>
								</div>
							</div>
						<?php endforeach ?>
						<?php unset($posts); ?>
					</div>
				</div> <!-- Slider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Featured Interview END -->

<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>




<?php
	$args = array(
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
	$categories = get_categories( $args );
	unset($args);
?>
<?php foreach ( $categories as $key_category => $category ) : ?>
	<?php if ( IsEven($key_category) == 1) : ?>
		<!-- =======================
		Category content START -->
		<section class="position-relative">
			<div class="container" data-sticky-container>
				<div class="row">
					<div class="col-12 col-lg-6">
						<!-- Title -->
						<div class="mb-4 d-md-flex justify-content-between align-items-center">
							<h2 class="m-0"><i class="<?php echo apply_filters( 'the_title' , category_icon( $category->term_id ) ) ?>"></i> <?php echo apply_filters( 'the_title' , $category->name ) ?></h2>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="mb-4 text-lg-end">
							<?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
								<small><u>Partneři kategorie:</u></small>
								<br class="d-block d-sm-none mb-2"> 
								<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
									<a href="<?php echo category_partner_one_url( $category->term_id ) ?>">
								<?php endif ?>
								<img class="ms-sm-3" src="<?php echo wp_get_attachment_image_url( category_partner_one( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
								<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
									</a>
								<?php endif ?>
								<?php if ( strpos( category_partner_two_url( $category->term_id ), 'http') !== false )  : ?>
									<a href="<?php echo category_partner_two_url( $category->term_id ) ?>">
								<?php endif ?>
								<img class="ms-3" src="<?php echo wp_get_attachment_image_url( category_partner_two( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
								<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
									</a>
								<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				</div> 
				<div class="row">
					<!-- Main Post START -->
					<div class="col-lg-9">
						<div class="row gy-4">
							<?php
								$args = array(
									'post_type'        => 'post',
									'category'         => $category->term_id,
									'numberposts'      => 6,
									'orderby'          => 'date',
									'order'            => 'DESC',							
								);
								$posts = get_posts( $args );
								unset($args);
							?>
							<?php foreach ( $posts as $post ) : ?>
								<!-- Card item START -->
								<div class="col-sm-6">
									<div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<a href="<?php echo get_permalink( $post->ID ) ?>"><img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>"></a>
										</div>
										<div class="card-body px-0 pt-3">
											<h4 class="card-title"><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h4>
											<p class="card-text"><?php apply_filters( 'the_content', custom_echo( strip_tags(strip_shortcodes( $post->post_content ) ), 170 ) ) ?></p>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<span><a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
														</div>
													</div>
												</li>
												<li class="nav-item"><?php echo get_the_time( get_option('date_format'), $post->ID ) ?></li>
												<li class="nav-item"><?php echo reading_time( $post->ID ) ?> čtení</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							<?php endforeach ?>
							<?php unset($posts); ?>
							<!-- Load more START -->
							<div class="col-12 text-center mt-5">
								<a href="<?php echo get_category_link( $category->term_id ) ?>" type="button" class="btn btn-primary-soft">Zobrazit více článků <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></a>
							</div>
							<!-- Load more END -->
						</div>
					</div>
					<!-- Main Post END -->
					<!-- Sidebar START -->
					<div class="col-lg-3 mt-5 mt-lg-0" data-sticky-container>
						<!-- Top post widget START -->
						<div class="col-12 col-lg-12">
							<h4 class="mt-0 mb-3 d-none d-lg-block">Nejčtenější v kategorii:</h4>
							<h5 class="mt-0 mb-3 d-block d-lg-none">Nejčtenější v <?php echo apply_filters( 'the_title' , $category->name ) ?>:</h5>
							<?php
								$args = array(
									'post_type'        => 'post',
									'category'         => $category->term_id,
									'numberposts'      => 3,
									'meta_key' => 'post_views_count',
									'orderby' => 'meta_value',
									'order' => 'DESC',
									'meta_query' => array(
									array(
										'key'           => 'post_views_count',
										'value'         => 0,
										'compare'       => '>'
									)
									)								
								);
								$posts = get_posts( $args );
								unset($args);
							?>
							<?php foreach ( $posts as $post ) : ?>
								<!-- Top post item -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<a href="<?php echo get_permalink( $post->ID ) ?>"><img class="rounded" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-150' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>"></a>
										</div>
										<div class="col-8">
											<h6><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link stretched-link text-reset fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h6>
											<div class="small mt-1"><?php echo get_the_time( get_option('date_format'), $post->ID ) ?></div>
										</div>
									</div>
								</div>										
							<?php endforeach ?>
							<?php unset($posts); ?>
						</div>
						<!-- Top post widget END -->
						<div class="row">
							<?php get_template_part( 'template-parts/ads-sidebar' ); ?>
						</div>
					</div>
					<!-- Sidebar END -->
				</div> <!-- Row end -->
			</div>
		</section>
		<!-- =======================
		Category content END -->
	<?php else : ?>
		<!-- =======================
		Section START -->
		<section class="pt-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-12 col-md-6">
								<!-- Title -->
								<div class="mb-4 d-md-flex justify-content-between align-items-center">
									<h2 class="m-0"><i class="<?php echo apply_filters( 'the_title' , category_icon( $category->term_id ) ) ?>"></i> <?php echo apply_filters( 'the_title' , $category->name ) ?></h2>
								</div>
							</div>
							<div class="col-12 col-lg-6">
							<div class="mb-4 text-lg-end">
									<?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
										<small><u>Partneři kategorie:</u></small>
										<br class="d-block d-sm-none mb-2"> 
										<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
											<a href="<?php echo category_partner_one_url( $category->term_id ) ?>">
										<?php endif ?>
										<img class="ms-sm-3" src="<?php echo wp_get_attachment_image_url( category_partner_one( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
										<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
											</a>
										<?php endif ?>
										<?php if ( strpos( category_partner_two_url( $category->term_id ), 'http') !== false )  : ?>
											<a href="<?php echo category_partner_two_url( $category->term_id ) ?>">
										<?php endif ?>
										<img class="ms-3" src="<?php echo wp_get_attachment_image_url( category_partner_two( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
										<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
											</a>
										<?php endif ?>
									<?php endif ?>
								</div>
							</div>
							<div class="col-12">
								<div class="tiny-slider arrow-blur arrow-dark arrow-round">
									<div class="tiny-slider-inner"
										data-autoplay="true"
										data-hoverpause="true"
										data-gutter="24"
										data-arrow="true"
										data-dots="false"
										data-items-xl="4" 
										data-items-md="3" 
										data-items-sm="2" 
										data-items-xs="1">
										<?php
											$args = array(
												'post_type'        => 'post',
												'category'         => $category->term_id,
												'numberposts'      => 10,
												'orderby'          => 'date',
												'order'            => 'DESC',							
											);
											$posts = get_posts( $args );
											unset($args);
										?>
										<?php foreach ( $posts as $post ) : ?>
											<!-- Card item START -->
											<div class="card">
												<!-- Card img -->
												<div class="position-relative">
												<a href="<?php echo get_permalink( $post->ID ) ?>"><a href="<?php echo get_permalink( $post->ID ) ?>"><img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>"></a>
												</div>
												<div class="card-body px-0 pt-3">
													<h5 class="card-title"><a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h5>
													<!-- Card info -->
													<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
														<li class="nav-item">
															<div class="nav-link">
																<div class="d-flex align-items-center position-relative">
																	<span><a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
																</div>
															</div>
														</li>
														<li class="nav-item"><?php echo get_the_time( get_option('date_format'), $post->ID ) ?></li>
													</ul>
												</div>
											</div>
											<!-- Card item END -->
										<?php endforeach ?>
										<?php unset($posts); ?>					
									</div>
								</div>
								<!-- Load more START -->
								<div class="text-center">
									<a href="<?php echo get_category_link( $category->term_id ) ?>" type="button" class="btn btn-primary-soft">Zobrazit více článků <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></a>
								</div>
								<!-- Load more END -->
							</div>
						</div> 
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
		Section END -->

		<?php get_template_part( 'template-parts/ads-wide' ); ?>
	<?php endif ?>	
<?php endforeach ?>
<?php unset($categories); ?>



<!-- =======================
Tab post START -->
<section class="pt-4 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="#tab-1-1"> <i class="fab fa-readme me-2"></i> Nejčtenější</a> </li>
					<li class="nav-item"> <a class="nav-link fs-5" data-bs-toggle="tab" href="#tab-1-2"> <i class="fas fa-fire me-2"></i> Nejaktuálnější</a> </li>
				</ul>
				<div class="tab-content">
					<!-- Most read tab START -->
					<div class="tab-pane show active" id="tab-1-1">
						<div class="row">
							<?php
								$args = array(
									'post_type'        => 'post',
									'numberposts'      => 21,
									'meta_key' => 'post_views_count',
									'orderby' => 'meta_value',
									'order' => 'DESC',
									'meta_query' => array(
									array(
										'key'           => 'post_views_count',
										'value'         => 0,
										'compare'       => '>'
									)
									)								
								);
								$posts = get_posts( $args );
								unset($args);
							?>
							<?php $count_temp = "1" ?>
							<?php foreach ( $posts as $post ) : ?>
								<?php if ($count_temp == "1") : ?>
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4">
								<?php endif ?>

								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5"><?php if($count_temp<10){echo "0";} ?><?php echo $count_temp ?></span>
									<h5><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo esc_attr( $post->post_title ) ?>" class="stretched-link text-reset btn-link"><?php echo custom_echo( esc_attr( $post->post_title ), 65 ) ?></a></h5>
								</div>

								<?php if ($count_temp == "7") : ?>
									</div>
									<!-- Tab items group END -->
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4">
								<?php endif ?>
								<?php if ($count_temp == "14") : ?>
									</div>
									<!-- Tab items group END -->
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4 d-none d-xl-block">
								<?php endif ?>
								<?php $count_temp++ ?>
							<?php endforeach ?>
									</div>
									<!-- Tab items group END -->
							<?php unset($count_temp); ?>
							<?php unset($posts); ?>
						</div>
					</div>
					<!-- Most read tab END -->
					<!-- Trending tab START -->
					<div class="tab-pane show" id="tab-1-2">
						<div class="row">
							<?php
								$args = array(
									'post_type'        => 'post',
									'numberposts'      => 21,
									'orderby'          => 'date',
									'order'            => 'DESC'							
								);
								$posts = get_posts( $args );
								unset($args);
							?>
							<?php $count_temp = "1" ?>
							<?php foreach ( $posts as $post ) : ?>
								<?php if ($count_temp == "1") : ?>
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4">
								<?php endif ?>

								<!-- Item -->
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5"><?php if($count_temp<10){echo "0";} ?><?php echo $count_temp ?></span>
									<h5><a href="<?php echo get_permalink( $post->ID ) ?>" title="<?php echo esc_attr( $post->post_title ) ?>" class="stretched-link text-reset btn-link"><?php echo custom_echo( esc_attr( $post->post_title ), 65 ) ?></a></h5>
								</div>

								<?php if ($count_temp == "7") : ?>
									</div>
									<!-- Tab items group END -->
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4">
								<?php endif ?>
								<?php if ($count_temp == "14") : ?>
									</div>
									<!-- Tab items group END -->
									<!-- Tab items group START -->
									<div class="col-lg-6 col-xl-4 d-none d-xl-block">
								<?php endif ?>
								<?php $count_temp++ ?>
							<?php endforeach ?>
									</div>
									<!-- Tab items group END -->
							<?php unset($count_temp); ?>
							<?php unset($posts); ?>
						</div>
					</div>
					<!-- Trending tab END -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Tab post END -->

<!-- =======================
Newsletter START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="bg-dark p-3 p-sm-5 rounded-3 position-relative overflow-hidden">
					<!-- SVG shape START -->
					<figure class="position-absolute top-50 start-50 translate-middle">
						<svg width="1848" height="481" viewBox="0 0 1848.9 481.8" xmlns="http://www.w3.org/2000/svg">
							<path class="fill-success" d="m779.4 251c-10.3-11.5-19.9-23.8-29.4-36.1-9-11.6-18.4-22.8-27.1-34.7-15.3-21.2-30.2-45.8-54.8-53.3-10.5-3.2-21.6-3.2-30.6 2.5-7.6 4.8-13 12.6-17.3 20.9-10.8 20.6-16.1 44.7-24.6 66.7-7.9 20.2-19.4 38.6-33.8 54.3-14.7 16.2-31.7 30-50.4 41-15.9 9.4-33.4 17.2-52 19.3-18.4 2-38-2.5-56.5-6.2-22.4-4.4-45.1-9.7-67.6-10.9-9.8-0.5-19.8-0.3-29.1 2.3-9.8 2.8-18.7 8.6-26.6 15.2-17.3 14.5-30.2 34.4-43.7 52.9-12.9 17.6-26.8 34.9-45.4 45.4-19.5 11-42.6 12.1-65 6.6-52.3-13.1-93.8-56.5-127.9-101.5-8.8-11.6-17.3-23.4-25.6-35.4-0.6-0.9-1.1-1.8-1.6-2.7-1.1-2.4-0.9-2.6 0.6-1.2 1 0.9 1.9 1.9 2.7 3 35.3 47.4 71.5 98.5 123.2 123.9 22.8 11.2 48.2 17.2 71.7 12.2 23-5 40.6-21.2 55.3-39.7 24.5-30.7 46.5-75.6 87.1-83 19.5-3.5 40.7 0.1 60.6 3.7 21.2 3.9 42.3 9.1 63.6 11.7 17.8 2.3 35.8-0.1 52.2-7 20-8.1 38.4-20.2 54.8-34.6 16.2-14.1 31-30.7 41.8-50.4 11.1-20.2 17-43.7 24.9-65.7 6.1-16.9 13.8-36.2 29.3-44.5 16.1-8.6 37.3-1.9 52.3 10.6 18.7 15.6 31.2 39.2 46.7 58.2"/>
							<path class="fill-warning" d="m1157.9 344.9c9.8 7.6 18.9 15.8 28.1 24 8.6 7.7 17.6 15.2 26 23.2 14.8 14.2 29.5 30.9 51.2 34.7 9.3 1.6 18.8 0.9 26.1-3.8 6.1-3.9 10.2-9.9 13.2-16.2 7.6-15.6 10.3-33.2 15.8-49.6 5.2-15.1 13.6-29 24.7-41.3 11.4-12.6 24.8-23.6 40-32.8 12.9-7.8 27.3-14.6 43.1-17.3 15.6-2.6 32.8-0.7 49 0.7 19.6 1.7 39.4 4 58.8 3.4 8.4-0.3 17-1.1 24.8-3.6 8.2-2.7 15.4-7.4 21.6-12.7 13.7-11.6 23.1-26.7 33.3-40.9 9.6-13.5 20.2-26.9 35.3-35.6 15.8-9.2 35.6-11.6 55.2-9.1 45.7 5.8 84.8 34.3 117.6 64.4 8.7 8 17.2 16.2 25.6 24.6 2.5 3.2 1.9 3-1.2 1-34.3-32-69.7-66.9-116.5-81.9-20.5-6.5-42.7-9.2-62.4-4-19.3 5.1-33.1 17.9-44.3 32.2-18.5 23.7-33.9 57.5-68.1 65.5-16.5 3.8-34.9 2.6-52.3 1.3-18.5-1.4-37-3.7-55.4-4.2-15.5-0.5-30.7 2.5-44.2 8.5-16.5 7.2-31.3 17.1-44.3 28.5-12.8 11.2-24.1 24.1-31.9 39-7.9 15.3-11.1 32.5-16.2 48.9-3.9 12.6-9 26.9-21.6 33.9-13.1 7.3-31.9 3.8-45.7-4.1-17.2-10-29.9-26.1-44.6-38.8"/>
							<path class="fill-warning opacity-6" d="m1840.8 379c-8.8 40.3-167.8 79.9-300.2 45.3-42.5-11.1-91.4-32-138.7-11.6-38.7 16.7-55 66-90.8 67.4-25.1 1-48.6-20.3-58.1-39.8-31-63.3 50.7-179.9 155.7-208.1 50.4-13.5 97.3-3.2 116.1 1.6 36.3 9.3 328.6 87.4 316 145.2z"/>
							<path class="fill-success opacity-6" d="M368.3,247.3C265.6,257.2,134,226,110.9,141.5C85,47.2,272.5-9.4,355.5-30.7s182.6-31.1,240.8-18.6    C677.6-31.8,671.5,53.9,627,102C582.6,150.2,470.9,237.5,368.3,247.3z"/>
						</svg>
					</figure>
					<!-- SVG shape END -->
					<div class="row">
						<div class="col-md-8 col-lg-6 mx-auto text-center py-5 position-relative">
							<!-- Title -->
							<h2 class="display-5 text-white">Nezmeškejte žádné informace!</h2>
							<p class="text-white">Přihlaste se k odběru newsletteru a buďte stále v obraze</p>
							<div class="col-12">
								<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
									<button data-bs-target="#offcanvasMenu" class="btn btn-primary btn-lg m-0">Přihlásit</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Newsletter END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>