<?php get_header() ?>
<?php gt_set_post_view(); ?>
<?php $post = get_post(); ?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<?php $custom_fields = get_fields( $post->ID ); ?>
<?php if($custom_fields['pdf_token'] == $_GET['token']) :?>
  <section class="pt-0">
    <div class="container">
      <?php
        if (is_file(ABSPATH .'casopis_promo/'. $custom_fields['nazev_pdf_full'])) {
          echo '<div class="row"><div class="col-11 col-lg-8 ms-auto me-auto mb-3">';
          echo do_shortcode('[pdf-embedder url="'. get_site_url() .'/casopis_promo/'. $custom_fields['nazev_pdf_full'] .'"]');
          echo '</div></div>';
        }
      ?>
    </div>
  </section>
<?php else: ?>
  <!-- =======================
  Inner intro START -->
  <section class="pb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto text-center">
          <nav class="d-flex justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dots mb-0">
              <li class="breadcrumb-item">Časopis Pro města a obce</li>
            </ol>
          </nav>  
          <h1 class="display-4"><?php the_title() ?></h1>
          <!-- breadcrumb -->
          <nav class="d-flex justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dots mb-0">
              <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/casopis/"><i class="bi bi-house me-1"></i> Všechna vydání</a></li>
              <li class="breadcrumb-item active"><?php the_title() ?></li>
            </ol>
          </nav>      
        </div>
      </div>
    <!-- =======================
  Inner intro END --></div>
  </section>

  <!-- =======================
  Main START -->
  <section class="pt-0">
    <div class="container position-relative" data-sticky-container>
      <div class="row">
        <!-- Main Content START -->
        <div class="col-lg-9 mb-5">
                <?php 
                  if (is_file(ABSPATH .'casopis_promo/'. $custom_fields['nazev_pdf_obsah'])) {
                    echo '<div class="row"><div class="col-11 col-lg-8 mb-3">';
                    echo do_shortcode('[pdf-embedder url="'. get_site_url() .'/casopis_promo/'. $custom_fields['nazev_pdf_obsah'] .'"]');
                    echo '</div></div>';
                  }
                ?>              
                <?php the_content() ?>
        </div>
        <!-- Main Content END -->
        
        <!-- Right sidebar START -->
        <div class="col-lg-3">
          <div>
                  <?php
                    // if ( is_user_logged_in() ) {
                    //   if (is_file(ABSPATH .'casopis_promo/'. $custom_fields['nazev_pdf_full'])) {
                    //     echo '<div class="row g-2 mb-3">
                    //     <a href="'. get_permalink() .'/?token='. $custom_fields['pdf_token'] .'" target="_blank">ODKAZ NA FULL VERZI</a>
                    //     <br>
                    //     <a href="'. get_site_url() .'/casopis_promo/'. $custom_fields['nazev_pdf_full'] .'" target="_blank">ODKAZ NA PDF</a>
                    //       </div>';
                    //   }
                    // }
                  ?>
                  <?php 
                    if( $_GET['token'] == "dfnk3F3SF"){
                      if (isset($custom_fields['nazev_pdf_full']) && !empty($custom_fields['nazev_pdf_full'])) {
                        if (strpos(get_permalink(), "2023") !== false) {
                          echo'
                          <div class="row g-2 mb-3">
                            <a href="'. $custom_fields['nazev_pdf_full'] .'" target="_blank">
                              <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'"><br>
                              Zobrazit PDF
                            </a>
                          </div>';
                        } else {
                          echo'
                          <div class="row g-2 mb-3">
                              <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'">
                          </div>';
                        }
                      }
                      else{
                        echo'
                        <div class="row g-2 mb-3">
                            <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'">
                        </div>';
                      }
                    }
                    elseif($custom_fields['pdf_token'] == $_GET['token']){
                      if (isset($custom_fields['nazev_pdf_full']) && !empty($custom_fields['nazev_pdf_full'])) {
                        echo'
                        <div class="row g-2 mb-3">
                          <a href="'. $custom_fields['nazev_pdf_full'] .'" target="_blank">
                            <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'"><br>
                            Zobrazit PDF
                          </a>
                        </div>';
                      }
                      else{
                        echo'
                        <div class="row g-2 mb-3">
                            <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'">
                        </div>';
                      }
                    }
                    else{
                      echo'
                      <div class="row g-2 mb-3">
                          <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'">
                      </div>';
                    }
                    // echo'
                    // <div class="row g-2 mb-3">
                    //     <img class="card-img" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) .'">
                    // </div>';
                  ?>     
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
<?php endif ?>


</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>