<?php get_header() ?>
<?php $author = get_queried_object(); ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row justify-content-center text-center">
      <div class="col-md-8">
        <p>Autor:</p>
			<div class="display-1 text-primary"><?php echo get_the_author_meta( 'display_name', $author->ID )?></div>
        <p><span class="badge bg-danger fs-6">Článků: <?php echo the_author_posts($author->ID) ?></span></p>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
		<div class="row">
      <div class="col-12 mb-3">
        <h2>Články autora:</h2>
      </div>
			<!-- Main Post START -->
			<div class="col-12">
				<div class="row gy-4">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $posts_per_page = get_option('posts_per_page');
                    $posts_per_page = $posts_per_page - 1;
                    $args = array( 
						'posts_per_page' => $posts_per_page,
						'author'        =>    $author->ID,	
                        'orderby'          => 'date',
						'order'            => 'DESC',	
                    	'paged' => $paged,
						'post_type' => 'post' );
                    $posts = new WP_Query( $args );
                    $count = 0;

                    // echo "<pre>";
                    // print_r($posts);
                    // echo "</pre>";
                                
                    if ( $posts->have_posts() ) :
                        while ( $posts->have_posts() ) : $posts->the_post();  ?>
                            <?php $count++; ?> 
                            <?php if ( $count == 4) : ?>
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <!-- Card img -->
                                        <div class="position-relative">
                                            <img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <?php
                                                        $category_detail = get_the_category( $post->ID );
                                                        foreach( $category_detail as $cd ){
                                                            echo '<a href="'. get_category_link( $cd->term_id ) .'" class="badge mb-2 me-2" style="background-color: '. category_custom_color( $cd->term_id ) .';">'. $cd->cat_name .'</a>';
                                                        }
                                                        unset($category_detail);
                                                    ?>
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
                                <div class="col-12 d-block d-lg-none">
                                    <?php get_template_part( 'template-parts/ads-mobile' ); ?>
                                </div>
                            <?php else : ?>
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card">
                                        <!-- Card img -->
                                        <div class="position-relative">
                                            <img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay bottom -->
                                                <div class="w-100 mt-auto">
                                                    <!-- Card category -->
                                                    <?php
                                                        $category_detail = get_the_category( $post->ID );
                                                        foreach( $category_detail as $cd ){
                                                            echo '<a href="'. get_category_link( $cd->term_id ) .'" class="badge mb-2 me-2" style="background-color: '. category_custom_color( $cd->term_id ) .';">'. $cd->cat_name .'</a>';
                                                        }
                                                        unset($category_detail);
                                                    ?>
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
                            <?php endif ?> 
                        <?php endwhile; ?>
                    <?php endif; ?>

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
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>