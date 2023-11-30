<?php get_header() ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>



<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
            <div class="col-lg-9 mx-auto text-center py-5">
                <span>Výsledek hledání</span>
                <?php
                if(strlen(get_search_query()) > 2 ) : ?>
                    <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $posts = new WP_Query( array( 
                            's' => get_search_query(),
                            'posts_per_page' => get_option('posts_per_page'),  
                            'paged' => $paged,
                            'post_type' => ['post','akce'] ) );
                         
                    ?>
                    <h2 class="display-5">"<?php echo get_search_query() ?>"</h2>
                    <span class="lead">Počet nalezených: <?php  echo $posts->post_count  ?></span>
                <?php else : ?>  
                    <h2 class="display-5">"<?php echo get_search_query() ?>"</h2>
                    <span class="lead">Pro hledání je potřeba zadat minimálně tři znaky</span>                      
                <?php endif ?>
                <!-- Search -->
                <div class="row">
                        <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
                            <form class="input-group mt-4"  action="<?php echo home_url( '/' ); ?>" method="get">
                            <input type="search" class="search-field form-control border-success" placeholder="Hledat …" value="" name="s">
                                <button class="btn btn-success btn-lg m-0" type="submit">
                                <span class="d-none d-md-block">Hledat</span>
                                <i class="d-block d-md-none fas fa-search"></i></button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<?php if ( isset($posts->post_count) AND $posts->post_count > 0) : ?>
<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9 mx-auto">

                    <?php
                    if ( $posts->have_posts() ) :
                        while ( $posts->have_posts() ) : $posts->the_post();  ?>
                        	<!-- Card item START -->
                            <div class="card border rounded-3 up-hover p-4 mb-4">
                                <div class="row g-3">
                                    <div class="col-sm-9">
                                        <!-- Card category -->
										<?php
											$category_detail = get_the_category( $post->ID );
											foreach( $category_detail as $cd ){ 
                                                echo '<a href="'. get_category_link( $cd->term_id ) .'" class="badge me-2 mb-2" style="background-color: '. category_custom_color( $cd->term_id ) .';"><i class="fas fa-circle me-2 small fw-bold"></i>'. $cd->cat_name .'</a>';
											}
											unset($category_detail);
										?>
                                        <!-- Title -->
                                        <h3 class="card-title">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-link text-reset stretched-link"><?php echo esc_attr( $post->post_title ) ?></a>
                                        </h3>
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
                                    <!-- Image -->
                                    <div class="col-sm-3">
                                        <img class="rounded-3" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'medium' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
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
			<!-- Main Post END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->
<?php endif ?>


</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>