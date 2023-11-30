<?php
/**
 * Ads for sidebar
 *
 */
?>

<!-- Ads START -->
<?php if ( function_exists('the_ad_placement') ) : ?>
<section>
    <div class="row">
        <div class="col">
            <div class="card-img-flash">
                <?php the_ad_placement('ads_sidebar'); ?>
            </div>
            <small class="text-center d-block mt-2"><a href="<?php echo get_home_url(); ?>/inzerce" class="text-body"><u>Reklamní prostor</u></a></small>
        </div>
    </div>
</section>
<?php endif ?>
<!-- Ads END -->


