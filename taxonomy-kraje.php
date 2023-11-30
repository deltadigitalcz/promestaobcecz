<?php get_header() ?>
<?php $category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') ); ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row justify-content-center text-center">
      <div class="col-md-10">
				<div class="display-1 text-primary"><?php echo $category->name ?></div>
        <p>Článků: <?php echo $category->count ?></p>
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
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<div class="row gy-4">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 
                        'posts_per_page' => get_option('posts_per_page'), 
                        'paged' => $paged,
                        'post_type' => ['post','akce'],
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'kraje',   
                                'field' => 'term_id',           
                                'terms' => $category->term_id,                  
                            )
                        )
                    );
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
                                            <img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                </div>
                                            </div>
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
                                            <img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                </div>
                                            </div>
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
                        <div class="row g-2 mb-4">
                            <h5>Partneři kategorie</h5>
                            <div class="d-flex justify-content-between align-items-center p-2 position-relative">
                                <img class="ms-2" src="<?php echo wp_get_attachment_image_url( category_partner_one( $category->term_id ), 'thumbnail' ) ?>" alt="" style="height: 20px;"><img class="ms-2" src="<?php echo wp_get_attachment_image_url( category_partner_two( $category->term_id ), 'thumbnail' ) ?>" alt="" style="height: 20px;">
                            </div>
                        </div>
                    <?php endif ?>
                   <!-- Top post widget START -->
                    <div class="col-12">
                        <h4 class="mt-0 mb-3">Nejčtenější v kraji</h4>
                        <?php
                            $args = array(
                                'post_type'        => 'post',
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
                                ),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'kraje',   
                                        'field' => 'term_id',           
                                        'terms' => $category->term_id,                  
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
                                        <img class="rounded" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'medium' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
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