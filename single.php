<?php get_header() ?>
<?php gt_set_post_view(); ?>
<?php $post = get_post(); ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-2">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-5 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url(<?php the_post_thumbnail_url('large') ?>); background-position: top; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
              <!-- Card category -->
              <?php
                $categories = get_the_category( $post->ID );
                foreach($categories as $category){
                    echo '<a href="'. get_category_link( $category->term_id ) .'" class="badge mb-2 me-2" style="background-color: '. category_custom_color( $category->term_id ) .';">'. $category->cat_name .'</a>';
                }
              ?>
              <!-- Card title -->
              <h2 class="text-white display-5"><?php the_title() ?></h2>
              <!-- Card info -->
              <ul class="nav nav-divider text-white-force align-items-center justify-content-center">
                <li class="nav-item">
                  <div class="nav-link">
                    <div class="d-flex align-items-center text-white position-relative">
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
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section class="pt-0">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mb-5">
      	       <?php the_content() ?>
			</div>
			<!-- Main Content END -->
			
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div>
                    <?php get_template_part( 'template-parts/share-button' ); ?>
                    <?php
                        $tags = get_the_tags( $post->ID );
                    ?>
                    <?php if ( isset ( $tags['0'] ) ) : ?>
                        <!-- Tags -->
                        <div class="row g-2 mb-3">
                            <h5>Štítky</h5>
                            <ul class="list-inline text-primary-hover mt-0 mt-lg-1">
                                <?php foreach ( $tags as $tag ) : ?>
                                    <li class="list-inline-item">
                                        <a class="text-body" href="<?php echo get_tag_link( $tag->term_id ) ?>">#<?php echo $tag->name ?></a>
                                    </li>
                                <?php endforeach ?>
                                <?php unset($tags); ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <!-- Categories -->
                    <div class="row g-2">
                    
                        <h5>Nejčtenější kategorie</h5>
                        <?php
                            $args = array(
                                'number'      => 5,
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
                            <div class="d-flex justify-content-between align-items-center bg-success-soft rounded p-2 position-relative">
                                <h6 class="m-0" style="color:<?php echo category_custom_color( $category->term_id ) ?>"><?php echo apply_filters( 'the_title' , $category->cat_name ) ?></h6>
                                <a href="<?php echo get_category_link( $category->term_id ) ?>" class="badge stretched-link" style="background-color:<?php echo category_custom_color( $category->term_id ) ?>"><?php echo $category->category_count ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php unset($categories); ?>
                    </div>
                    
                    <?php get_template_part( 'template-parts/newsletter-form-sidebar' ); ?>

                    <div class="row"  data-sticky data-margin-top="30" data-sticky-for="767">
                        <?php get_template_part( 'template-parts/ads-sidebar' ); ?>
                    </div>
                </div>
            </div>
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->

<?php
$post_id = $post->ID; // current post ID
$cat = get_the_category(); 
$current_cat_id = $cat[0]->cat_ID; // current category ID 

$args = array( 
    'category' => $current_cat_id,
    'orderby'  => 'post_date',
    'order'    => 'DESC'
);
$posts = get_posts( $args );
// get IDs of posts retrieved from get_posts
$ids = array();
foreach ( $posts as $thepost ) {
    $ids[] = $thepost->ID;
}
// get and echo previous and next post in the same category
$thisindex = array_search( $post_id, $ids );
$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;

if (false !== $previd ) {
    ?>
    <!-- =======================
    Sticky post START -->
    <div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
        <div class="d-flex align-items-center">
            <!-- Title -->
            <div class="me-3">
                <span>Další článek<i class="bi bi-arrow-right ms-3"></i></span>
                <h6 class="m-0"> <a href="<?php echo get_permalink($previd) ?>" class="stretched-link btn-link text-reset"><?php echo get_the_title($previd) ?></a></h6>
            </div>
            <!-- image -->
            <div class="col-4 d-none d-md-block">
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $previd ), 'image-150' ) ?>" alt="Image">
            </div>
        </div>
    </div>
    <!-- =======================
    Sticky post END -->
    <?php
}
if (false !== $nextid ) {
    ?>
    <!-- =======================
    Sticky post START -->
    <div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
        <div class="d-flex align-items-center">
            <!-- Title -->
            <div class="me-3">
                <span>Další článek<i class="bi bi-arrow-right ms-3"></i></span>
                <h6 class="m-0"> <a href="<?php echo get_permalink($nextid) ?>" class="stretched-link btn-link text-reset"><?php echo get_the_title($nextid) ?></a></h6>
            </div>
            <!-- image -->
            <div class="col-4 d-none d-md-block">
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $nextid ), 'image-150' ) ?>" alt="Image">
            </div>
        </div>
    </div>
    <!-- =======================
    Sticky post END -->
    <?php
}
?>



</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>