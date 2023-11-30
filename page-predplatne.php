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
			<div class="col-xl-8">
                <div class="card card-body border p-3">
                    <h2>Časopis PRO města a obce</h2>
                    <p class="lead">Váš zdroj informací z dění ve světě veřejné správy.</p>
                    <p>Měsíčník PRO města a obce přináší užitečné informace pro starosty, hejtmany, volené zastupitele, ale i pro zaměstnance obecních, městských a krajských úřadů a pro všechny čtenáře, kteří se zajímají o veřejnou správu. Důležitá fakta pro svou činnost v něm však naleznou rovněž podnikatelé a firmy poskytující výrobky a služby městům, obcím a úředníkům krajských a městských úřadů, magistrátů a státních orgánů.</p>
                    <p>Časopis poskytuje praktické rady a odpovědi na otázky, které cílová skupina čtenářů musí při výkonu svých funkcí řešit.</p>
                    <p>V jednotlivých rubrikách se časopis pravidelně věnuje problematice hospodaření, financování, řízení, správy a ekonomiky měst a obcí. Odpadovému hospodářství, životnímu prostředí, mezinárodním zkušenostem, rozvoji infrastruktury a regionů a dalším tématům.</p>
                </div>
                <div class="card card-body border p-3 mt-3">
                    <div class="d-flex align-items-center">
                        <!-- Icon -->
                        <div class="icon-xl fs-1 bg-primary bg-opacity-10 rounded-3 text-primary">
                        <img class="w-80" src="https://www.promestaobce.cz/wp-content/uploads/2021/11/computer.png" alt="product">
                        </div>
                        <!-- Content -->
                        <div class="ms-3">
                            <h3>„Pro celou radnici“ - 5 000 Kč / rok</h3>
                            <p class="mb-0">2x tištěné a elektronické předplatné na 12 měsíců (např. starosta / primátor a tajemník úřadu) a neomezený počet elektronického předplatného pro zastupitele a další zaměstnance úřadu.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-body border p-3 mt-3">
                    <div class="d-flex align-items-center">
                        <!-- Icon -->
                        <div class="icon-xl fs-1 bg-primary bg-opacity-10 rounded-3 text-primary">
                        <img class="w-80" src="https://www.promestaobce.cz/wp-content/uploads/2021/11/Magazine.png" alt="product">
                        </div>
                        <!-- Content -->
                        <div class="ms-3">
                            <h3>Tištěné + Elektronické předplatné - 1 500 Kč / rok</h3>
                            <p class="mb-0">Celoroční předplatné měsíčníku Pro města a obce, ke kterému navíc získáte zdarma elektronické předplatné.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-body border p-3 mt-3">
                    <div class="d-flex align-items-center">
                        <!-- Icon -->
                        <div class="icon-xl fs-1 bg-success bg-opacity-10 rounded-3 text-success">
                            <img class="w-80" src="https://www.promestaobce.cz/wp-content/uploads/2021/11/computer.png" alt="product">
                        </div>
                        <!-- Content -->
                        <div class="ms-3">
                            <h3>Elektronické předplatné - 990 Kč / rok</h3>
                            <p class="mb-0">Digitální verze časopisu ke stažení do tabletu, iPadu, chytrého telefonu i počítače.</p>
                        </div>
                    </div>
                </div>
			</div>

			<div class="col-xl-4">
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Objednat předplatné</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">

						<div class="row">
							<div class="col-12">
                                <?php echo do_shortcode('[contact-form-7 id="24201" title="Předplatné"]');  ?>
							</div>
						</div>
					</div>
					<!-- Card body END -->
				</div>
			</div>
        </div>
	</div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php get_footer() ?>