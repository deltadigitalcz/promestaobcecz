<?php get_header() ?>
<?php $category = get_category( get_query_var( 'cat' ) ); ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-300 text-center" style="background-image:url(<?php echo wp_get_attachment_image_url( category_image( $category->term_id ), 'large' ) ?>); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
                <div class="text-white mb-3">Kategorie:</div>
                <h1 class="text-white h2">
                    <span class="badge bg-warning mb-2"><?php echo $category->cat_name ?></span>
                </h1>
                <div class="text-center position-relative">
                    <span class="badge bg-info fs-6">Článků: <?php echo $category->category_count ?></span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container" data-sticky-container>
        <?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
        <!-- Category Partner -->
            <div class="row g-2 mb-4 d-block d-lg-none">
                <h5>Partneři kategorie</h5>
                <div class="d-flexalign-items-start p-2 position-relative">
                    <?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
                        <?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
                            <a href="<?php echo category_partner_one_url( $category->term_id ) ?>">
                        <?php endif ?>
                        <img src="<?php echo wp_get_attachment_image_url( category_partner_one( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
                        <?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
                            </a>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if ( category_partner_two( $category->term_id ) > 0  ) : ?>
                        <?php if ( strpos( category_partner_two_url( $category->term_id ), 'http') !== false )  : ?>
                            <a href="<?php echo category_partner_two_url( $category->term_id ) ?>">
                        <?php endif ?>
                        <img class="ms-4" src="<?php echo wp_get_attachment_image_url( category_partner_two( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
                        <?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
                            </a>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        <?php endif ?>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<div class="row gy-4">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 'posts_per_page' => get_option('posts_per_page'), 'cat' => $category->term_id,  
                    'paged' => $paged,'post_type' => 'post' );
                    $posts = new WP_Query( $args );
                    $count = 0;
                                
                    if ( $posts->have_posts() ) :
                        while ( $posts->have_posts() ) : $posts->the_post();  ?>
                            <?php $count++; ?> 
                            <?php if ( $count == 4) : ?>
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
                                                            <span> <a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
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
                                <div class="col-12 d-block d-lg-none">
                                    <?php get_template_part( 'template-parts/ads-mobile' ); ?>
                                </div>
                            <?php else : ?>
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
                                                            <span> <a href="<?php echo get_author_posts_url( $post->post_author ) ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta( 'display_name', $post->post_author )?></a></span>
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
                            <?php endif ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php unset($count); ?>

                    <?php
                        $tests = paginate_links( array( 
                            'mid_size' => 1,
                            'type' => 'array' ) ); 
                        wp_reset_postdata();
                    ?>  
                    <?php if ( isset( $tests['0'] ) ) : ?>
                        <!-- Pagination START -->
                        <div class="col-12 text-center mt-5">
                            <nav class="mb-5 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-sm d-inline-block d-md-flex justify-content-center">
                                    <?php foreach ( $tests as $test ) : ?>
                                        <?php                    
                                        if (  strpos( $test, 'current') !== false ) {
                                            echo '<li class="page-item active">'. str_replace("page-numbers", "page-link", $test) .'</li>';
                                        } else {
                                            if (  strpos( $test, 'dots') !== false ) {
                                                echo '<li class="page-item disabled">'. str_replace("page-numbers", "page-link", $test) .'</li>';
                                            }
                                            else{
                                                echo '<li class="page-item">'. str_replace("page-numbers", "page-link", $test) .'</li>';
                                            }
                                            
                                        }
                                        ?>
                                    <?php endforeach ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    <?php endif ?>   
				</div>
			</div>
			<!-- Main Post END -->

			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div>
                    <?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
                    <!-- Category Partner -->
                        <div class="row g-2 mb-4 d-none d-lg-block">
                            <h5>Partneři kategorie</h5>
                            <div class="d-flex justify-content-between align-items-center p-2 position-relative">
                            <?php if ( category_partner_one( $category->term_id ) > 0  ) : ?>
								<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
									<a href="<?php echo category_partner_one_url( $category->term_id ) ?>">
								<?php endif ?>
								<img src="<?php echo wp_get_attachment_image_url( category_partner_one( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
								<?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
									</a>
								<?php endif ?>
							<?php endif ?>
                            </div>
                            <?php if ( category_partner_two( $category->term_id ) > 0  ) : ?>
                                <div class="d-flex justify-content-between align-items-center p-2 position-relative">
                                    <?php if ( strpos( category_partner_two_url( $category->term_id ), 'http') !== false )  : ?>
                                        <a href="<?php echo category_partner_two_url( $category->term_id ) ?>">
                                    <?php endif ?>
                                    <img src="<?php echo wp_get_attachment_image_url( category_partner_two( $category->term_id ), 'image-150' ) ?>" alt="" style="height: 20px;">
                                    <?php if ( strpos( category_partner_one_url( $category->term_id ), 'http') !== false )  : ?>
                                        </a>
                                    <?php endif ?>
                                </div>
							<?php endif ?>
                        </div>
                    <?php endif ?>
                    <!-- Top post widget START -->
                    <div class="col-12">
                        <h4 class="mt-0 mb-3">Nejčtenější v kategorii</h4>
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
                                        <img class="rounded" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-150' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
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

                    <div class="row"  data-sticky data-margin-top="30" data-sticky-for="767">
                        <?php get_template_part( 'template-parts/ads-sidebar' ); ?>
                    </div>

				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->



</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>