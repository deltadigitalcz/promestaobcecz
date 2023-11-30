<?php get_header() ?>

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
Contact info START -->
<section class="pt-1">
	<div class="container">
		<div class="row">
            <?php the_content() ?>
        </div>
  </div>
</section>
<!-- =======================
Contact info END -->

</main>

<?php get_footer() ?>