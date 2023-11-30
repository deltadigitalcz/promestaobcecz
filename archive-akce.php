<?php get_header() ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>



<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
            <div class="col-lg-9 mx-auto text-center py-5">
                <h2 class="display-5">Kalendář akcí</h2>
                <span class="lead">Přehledný seznam všech nadcházejících akcí na jednom místě</span>
            </div>
        </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    'post_type' => 'akce',
    'meta_key' => 'zacatek_akce',
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
$posts = new WP_Query( $args );
?>

<?php if ( isset($posts->post_count) AND $posts->post_count > 0) : ?>
<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
        <div class="row g-4">
            <div class="col-lg-9">   
                <?php
                if ( $posts->have_posts() ) :
                    while ( $posts->have_posts() ) : $posts->the_post();  ?>
                        <?php $custom_fields = get_fields( $post->ID ) ?>     
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
                                    <ul class="nav nav-divider align-items-center">
                                        <?php 
                                            if($custom_fields['zacatek_akce'] == $custom_fields['konec_akce']){

                                                echo'<li class="nav-item"><i class="bi bi-calendar-week me-2"></i>'. date( get_option('date_format'), strtotime($custom_fields['zacatek_akce']) ) .'</li>';
                                            }
                                            else{
                                                echo'<li class="nav-item"><i class="bi bi-calendar-week me-2"></i>'. date( get_option('date_format'), strtotime($custom_fields['zacatek_akce']) ) .' - '. date( get_option('date_format'), strtotime($custom_fields['konec_akce']) ) .'</li>';
                                            }
                                        ?>
                                        <li class="nav-item"><i class="bi bi-geo-alt ms-2 me-2"></i><?php echo $custom_fields['misto_konani'] ?></li>
                                    </ul>
                                    <p class="mt-2">
                                        <?php echo $custom_fields['strucny_popis_akce'] ?>
                                    </p>
                                </div>
                                <!-- Image -->
                                <div class="col-sm-3">
                                    <a href="<?php echo get_permalink( $post->ID ) ?>"><img class="rounded-3" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'medium' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <?php unset($custom_fields); ?>
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
            <!-- Hosted START -->
            <div class="col-lg-3">
            <div class="text-center" data-sticky="" data-margin-top="80" data-sticky-for="991" >
                <!-- Newsletter START -->
                <div class="bg-light p-4 rounded-3 text-center">
                    <h4>Nenašli jste zde vaši akci?</h4>
                    <p>Napište nám a rádi ji zde přidáme.</p>
                    <a class="nav-link p-0" href="mailto:redakce@promestaobce.cz">
                        redakce@promestaobce.cz
                    </a>
                </div>
                <!-- Newsletter END -->
                <?php get_template_part( 'template-parts/ads-sidebar' ); ?>
                <?php get_template_part( 'template-parts/newsletter-form-sidebar' ); ?>
            </div>
            </div>
            <!-- Hosted START -->
        </div>
	</div>
</section>
<!-- =======================
Main content END -->
<?php endif ?>


</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>