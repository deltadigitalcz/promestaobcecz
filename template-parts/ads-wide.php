<?php
/**
 * Ads wide
 *
 */
?>

<!-- Ads START -->
<?php if ( function_exists('the_ad_placement') ) : ?>
<section class="p-0">
	<div class="container">
		<div class="row">
			<div class="col">
                <div class="card-img-flash">
                    <?php the_ad_placement('ads_wide'); ?>
                </div>
				<small class="text-center d-block mt-2"><a href="<?php echo get_home_url(); ?>/inzerce" class="text-body"><u>Reklamní prostor</u></a></small>
			</div>
		</div>
	</div>
</section>
<?php endif ?>
<!-- Ads END -->