<?php
if(isset($_GET['promokod']) && $_GET['promokod'] == "cdfk3D54fa"){

}
else{
    header("Location: https://www.promestaobce.cz");
    exit();
}

?>
<?php get_header() ?>

<main>

<!-- =======================
Inner intro START -->
<section class="pb-3">
	<div class="container">
		<div class="row">
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4">Ročník 2023</h1>
        <!-- breadcrumb -->
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>"><i class="bi bi-house me-1"></i> Titulní stránka</a></li>
            <li class="breadcrumb-item active">Časopis</li>
          </ol>
        </nav>      
      </div>
    </div>
	<!-- =======================
Inner intro END --></div>
</section>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array( 
    'posts_per_page' => '12',
    'paged' => $paged,
    'post_type' => 'casopis',
    'orderby' => 'date',
    'order' => 'DESC',
    'date_query' => array(
        array(
            'year' => 2023,
        ),
    ),
);
$posts = new WP_Query( $args );
?>


<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
		<div class="row">
            <div class="col-xl-9 mx-auto">
				<h2>PRO města a obce</h2>
				<p class="lead">Váš zdroj informací z dění ve světě veřejné správy.</p>
				<p>Měsíčník PRO města a obce přináší užitečné informace pro starosty, hejtmany, volené zastupitele, ale i pro zaměstnance obecních, městských a krajských úřadů a pro všechny čtenáře, kteří se zajímají o veřejnou správu. Důležitá fakta pro svou činnost v něm však naleznou rovněž podnikatelé a firmy poskytující výrobky a služby městům, obcím a úředníkům krajských a městských úřadů, magistrátů a státních orgánů.</p>
				<p>Časopis poskytuje praktické rady a odpovědi na otázky, které cílová skupina čtenářů musí při výkonu svých funkcí řešit.</p>
				<p>V jednotlivých rubrikách se časopis pravidelně věnuje problematice hospodaření, financování, řízení, správy a ekonomiky měst a obcí. Odpadovému hospodářství, životnímu prostředí, mezinárodním zkušenostem, rozvoji infrastruktury a regionů a dalším tématům.</p>
            </div>
			<?php if ( isset($posts->post_count) AND $posts->post_count > 0) : ?>
				<?php
                    if ( $posts->have_posts() ) :
                        while ( $posts->have_posts() ) : $posts->the_post();  ?>
                            <?php
                            $custom_fields = get_fields( $post->ID );
                            ?>
                          	<!-- Card item START -->
							<div class="col-sm-6 col-lg-3">
								<div class="card mb-4">
									<!-- Card img -->
									<div class="card-fold position-relative">
										<img class="card-img" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'image-420' ) ?>" alt="<?php echo esc_attr( $post->post_title ) ?>">
									</div>
									<div class="card-body px-0 pt-3">
										<h4 class="card-title"><a href="<?php echo $custom_fields['nazev_pdf_full']; ?>" target="_blank" class="btn-link text-reset stretched-link fw-bold"><?php echo esc_attr( $post->post_title ) ?></a></h4>
									</div>
								</div>
							</div>
                            <?php unset($custom_fields); ?>
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
			<?php endif ?>
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->


</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php get_footer() ?>