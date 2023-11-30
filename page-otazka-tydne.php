<?php get_header() ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section class="pb-3">
	<div class="container">
		<div class="row">
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4"><?php the_title() ?></h1>
        <!-- breadcrumb -->
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>"><i class="bi bi-house me-1"></i> Titulní stránka</a></li>
            <li class="breadcrumb-item active"><?php the_title() ?></li>
          </ol>
        </nav>      
      </div>
    </div>
	<!-- =======================
Inner intro END --></div>
</section>

<!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
		<div class="row g-4">
            <div class="col-12">
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Děkujeme za vaši odpověď.</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">
						<div class="row">
							<div class="col-12">
                                <?php
                                if(isset($_GET['email'])){
                                    global $wpdb;
                                    $date= current_time('mysql');
                                    $referenceId = uniqid();
                                    $table = $wpdb->prefix.'otazky';
                                    $data = array('dateCreated' => $date, 'otazka' => $_GET['otazka'], 'email' => $_GET['email'], 'value' => $_GET['value'] );
                                    $format = array( '%s', '%s', '%s', '%s');
                                    $wpdb->insert($table,$data,$format);
                                }
                                ?>
                                <?php echo do_shortcode('[contact-form-7 id="32349" title="Otazka_tydne" destination-email="'. $_GET['email'] .'" destination-value="'. $_GET['value'] .'" destination-otazka="'. $_GET['otazka'] .'"]');  ?>
							</div>
						</div>
					</div>
					<!-- Card body END -->
				</div>
			</div>
        </div>
	</div>
</section>
<section class="pt-4">
	<div class="container">
		<div class="row">
            <?php the_content() ?>
        </div>
  </div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php get_footer() ?>