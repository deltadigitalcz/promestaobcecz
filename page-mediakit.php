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
                <ul class="nav nav-tabs nav-tabs-line">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-7-1">Úvod</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-2">Struktura čtenářů</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-3">Ediční plán</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-4">Print</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-5">Web</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-6">Newsletter</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-7">Mediální partnerství</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-8">Kontakt & cenová nabídka</a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="tab-7-1">
                        <div class="row">
                            <div id="item-4">
                                <h2 class="mt-4 mb-2">Vítejte ve světě 'PRO města a obce'</h2>
                                <p>Vážení partneři,<br><br> s potěšením vám představujeme mediakit našeho časopisu 'PRO města a obce', který již deset let slouží jako důvěryhodný a respektovaný zdroj informací ve světě veřejné správy. Připojte se k nám a oslovte cílovou skupinu v oblasti veřejné správy.</p>
                                <p>Naše cesta začala v roce 2014 a od té doby jsme se stali lídrem na trhu, specializujícím se na poskytování aktuálních a relevantních informací pro starosty, hejtmany, zastupitele a úředníky, ale i pro širokou veřejnost se zájmem o veřejnou správu. Přinášíme praktické rady a nezbytná fakta pro každodenní rozhodování našich čtenářů.</p>
                                <p>V naší nabídce naleznete jak tradiční tištěné vydání, tak moderní online platformy včetně pravidelných newsletterů. Tímto způsobem zasahujeme široké spektrum čtenářů a zvyšujeme viditelnost vaší značky.</p>
                                <p>V následujících záložkách naleznete detailní informace o možnostech inzerce, včetně ceníku, formátů, rozměrů a statistik, které vám pomohou při výběru ideálního reklamního prostoru.<p>
                                <p>Jsme přesvědčeni, že vaše spolupráce s námi bude úspěšná a přinese vám hodnotné kontakty a nové příležitosti.<br><br>S úctou,<br>Tým časopisu 'PRO města a obce'</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-2">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/images/stat_01.jpg" data-glightbox="" data-gallery="image-popup">
                                <img class="rounded" src="<?php echo get_template_directory_uri() ?>/assets/images/stat_01.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/images/stat_02.jpg" data-glightbox="" data-gallery="image-popup">
                                <img class="rounded" src="<?php echo get_template_directory_uri() ?>/assets/images/stat_02.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/images/stat_03.jpg" data-glightbox="" data-gallery="image-popup">
                                <img class="rounded" src="<?php echo get_template_directory_uri() ?>/assets/images/stat_03.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/images/stat_04.jpg" data-glightbox="" data-gallery="image-popup">
                                <img class="rounded" src="<?php echo get_template_directory_uri() ?>/assets/images/stat_04.jpg" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-3">
                        <div class="row g-3 align-items-center justify-content-between">
                            <div class="col-md-8">
                                <h2>Ediční plán 2024</h2>
                            </div>
                            <!-- Tab buttons -->
                            <div class="col-md-3">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/files/Edicni_plan_PROmo_2024.pdf" target="_blank"class="bg-primary py-2 px-3 text-white rounded ms-2">Stáhnout v PDF</a>
                            </div>
                        </div>    
                        <div class="row">
                            <!-- Leden -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Leden 2024</h5>
                                                    <p class="mb-0 small">#1</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 15.12</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 8.1</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Prezentace měst a obcí</h5>
                                                    <p class="mb-0 small">(webové stránky, zpravodaj, FB atd.) informační otevřenost a ochrana dat</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Technické služby</strong>, stroje, údržba obce. </span>
                                                        <span class="h6 mb-0">Energetika, solární panely, financování a úspory.</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Ústecký kraj</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Únor -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Únor 2024</h5>
                                                    <p class="mb-0 small">#2</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 15.1</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 5.2</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Dopravní infrastruktura </h5>
                                                    <p class="mb-0 small"> veřejná doprava, alternativní možnosti dopravy</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Odpady,</strong> kolektivní systémy, zpětný odběr</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Karlovarský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Březen -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Březen 2024</h5>
                                                    <p class="mb-0 small">#3</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 16.2</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 4.3</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Finanční produkty</h5>
                                                    <p class="mb-0 small">pojištění měst a obcí</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Smart technologie (informační systémy)</strong>, ISSS 2024</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Královéhradecký kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">ISSS 2024</h6>
                                                                            </td>
                                                                            <td>13. - 14.5.2024</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Hradec Králové</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">VIII. Mezinárodní konference obecních policií</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Olomouc</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Dny malých obcí</h6>
                                                                            </td>
                                                                            <td>19. a 26.3.2024</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Olomouc a Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Duben -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Duben 2024</h5>
                                                    <p class="mb-0 small">#4</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 18.3</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 8.4</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Městský mobiliář</h5>
                                                    <p class="mb-0 small">cyklostezky, pěší zóny, architektura</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Veřejné osvětlení,</strong> kamerové a informační systémy</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Olomoucký kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Celostátní setkání tajemníků ČR</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">-</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Dny teplárenství a energetiky</h6>
                                                                            </td>
                                                                            <td>23.-24.4.2024</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Olomouc</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Celostátní setkání tajemníků</h6>
                                                                            </td>
                                                                            <td>19.-21.5.2024</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Špindlerův mlýn</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Sdružení pro veřejné osvětlení</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">-</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Květen -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Květen 2024</h5>
                                                    <p class="mb-0 small">#5</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 15.4</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 6.5</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Bezpečnost v obcích</h5>
                                                    <p class="mb-0 small">ochrana majetku, ochrana dat, osobních údajů, GDPR</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Energetika, vodovody, kanalizace</strong></span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Pardubický kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Konference školství</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">-</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">23. mezinárodní vodohospodářská výstava VOD - KA</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>
                            <!-- Červen -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Červen 2024</h5>
                                                    <p class="mb-0 small">#6</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 13.5</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 3.6</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Odpadové hospodaření měst a obcí</h5>
                                                    <p class="mb-0 small"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Prostranství, parky a městský mobiliář </span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Zlínský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Konference Odpady a obce</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Hradec Králové</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Červenec -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Červenec 2024</h5>
                                                    <p class="mb-0 small">#7</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 10.6</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 1.7</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Veřejná doprava</h5>
                                                    <p class="mb-0 small">silnice, železnice</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Turistický ruch, památky</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Jihočeský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>    
                            <!-- Srpen -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Srpen 2024</h5>
                                                    <p class="mb-0 small">#8</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 15.7</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 5.8</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Vodovody a kanalizace</h5>
                                                    <p class="mb-0 small"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Chytrá řešení pro obce - Smart City</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Kraj Vysočina</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>   
                            <!-- Září -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Září 2024</h5>
                                                    <p class="mb-0 small">#9</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 12.8</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 2.9</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Otevřený úřad a komunikace s občany</h5>
                                                    <p class="mb-0 small"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Financování měst a obcí</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Jihomoravský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Moderní škola</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Ocenění Manažer roku</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>    
                            <!-- Říjen -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Říjen 2024</h5>
                                                    <p class="mb-0 small">#10</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 16.9</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 7.10</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Spolupráce měst, obcí, regionů a soukromých subjektů</h5>
                                                    <p class="mb-0 small"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Komunální odpad - zpracování a svoz</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Středočeský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Dny malých obcí</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Olomouc / Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Celostátní setkání tajemníků ČR</h6>
                                                                            </td>
                                                                            <td>13.-15.10.2024</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Tábor</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div> 
                            <!-- Listopad -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Listopad 2024</h5>
                                                    <p class="mb-0 small">#11</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 14.10</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 4.11</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Ochrana klimatu v praxi obcí a měst</h5>
                                                    <p class="mb-0 small">emise, elektromobilita, šetrné budovy, zelené střechy, fotovoltaika</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Informační systémy, datové a komunikační sítě</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Plzeňský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <!-- Description -->
                                                    <li class="list-group-item">
                                                        <span>Prezentace na:</span>
                                                            <div class="table-responsive border-0">
                                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                                    <!-- Table body START -->
                                                                    <tbody class="border-top-0">
                                                                        <!-- Table item -->
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Moderní škola</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <h6 class="table-title mt-2 mt-md-0 mb-0">Vyhlášení České společnosti pro jakost</h6>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>
                                                                                <span class="badge bg-success bg-opacity-10 text-success mb-2">Praha</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- Table body END -->
                                                                </table>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>       
                            <!-- Prosinec -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Prosinec 2024</h5>
                                                    <p class="mb-0 small">#12</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 11.11</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 2.12</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Služby ve městech a obcích</h5>
                                                    <p class="mb-0 small"></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0">Obce a voda</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Moravskoslezský kraj</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>   
                            <!-- Leden -->
                            <div class="col-lg-6 mt-4">
                                <!-- Chart START -->
                                <div class="card border h-100">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="ms-1">
                                                    <h5 class="mb-0">Leden 2024</h5>
                                                    <p class="mb-0 small">#1</p>
                                                </div>
                                            </div>
                                            <!-- Tags -->
                                            <div class="d-flex mt-3 mt-sm-1">
                                                <h6 class="bg-danger py-2 px-3 text-white rounded">Uzávěrka 9.12</h6>
                                                <h6 class="bg-success py-2 px-3 text-white rounded ms-2">Expedice 6.1</h6>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                                            <!-- Avatar detail -->
                                            <div class="d-flex align-items-center">
                                                <!-- Info -->
                                                <div class="">
                                                    <h5 class="mb-0">Prezentace měst a obcí</h5>
                                                    <p class="mb-0 small">(webové stránky, zpravodaj, FB atd.) informační otevřenost a ochrana dat</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Information START -->
                                        <div class="row">
                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Speciální příloha:</span>
                                                        <span class="h6 mb-0"><strong>Technické služby</strong>, stroje, údržba obce</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Information item -->
                                            <div class="col-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span>Krajská příloha:</span>
                                                        <span class="h6 mb-0">Ústecký kraj</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Information END -->
                                    </div>
                                </div>
                                <!-- Chart END -->
                            </div>                                                                                                                                                                                                                                                      
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <!-- Card START -->
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom p-3">
                                        <!-- Search and select START -->
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <!-- Search bar -->
                                            <div class="col-md-8">
                                                <h2>Časopis Pro města a obce:<br>Oslovte čtenáře přímo v jejich rukou</h2>
                                            </div>
                                            <!-- Tab buttons -->
                                            <div class="col-md-3">
                                                <a href="https://ctecka.promestaobce.cz/prosinec_sdGsG442g/" target="_blank"class="bg-primary py-2 px-3 text-white rounded ms-2">Ukázkové vydání</a>
                                            </div>
                                            <div class="col-12">
                                                <p>Časopisu 'PRO města a obce' poskytuje jedinečnou příležitost pro vaši reklamu. Jako měsíčník jsme prezentováni v tištěné i elektronické formě s nákladem <strong>2500 až 3000 výtisků</strong>. Naše distribuce je cílená a flexibilní, zaměřujeme se na předplatitele,ale nabízíme i řízenou distribuci podle vašich specifikací – od velikosti obce přes pozici příjemce až po konkrétní kraj.</p>
                                                <p>Navzdory obecnému poklesu tištěných médií náš časopis v cílové skupině veřejné správy stále získává na popularitě. Nabízíme různé formáty reklamy: od tradičních reklamních ploch, přes vklady letáků, až po přiložení dalších materiálů. Nezapomínejte ani na možnost publikace PR článků, které poskytují prostor pro rozšířenou prezentaci vaší značky.</p>
                                                <p>Prohlédněte si ukázkové vydání a zjistěte, jak může váš inzerát v našem časopise vypadat.</p>
                                            </div>
                                        </div>
                                        <!-- Search and select END -->
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body p-3 pb-0">
                                        <!-- Tabs content START -->
                                        <div class="tab-content py-0 my-0">
                                            <h3>Nejžádanější reklamní plochy:</h3>
                                            <!-- Tabs content item START -->
                                            <div class="tab-pane fade active show">
                                                <!-- Table START -->
                                                <div class="table-responsive border-0">
                                                    <table class="table align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start" style="min-width: 50px;"></th>
                                                                <th scope="col" class="border-0 rounded-start">Typ</th>
                                                                <th scope="col" class="border-0">Na zrcadlo</th>
                                                                <th scope="col" class="border-0">Na spad</th>
                                                                <th scope="col" class="border-0">Cena</th>
                                                                <th scope="col" class="border-0 rounded-end"></th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody class="border-top-0">
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_02.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_02s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/1</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>182 x 258 mm</td>
                                                                <!-- Table data -->
                                                                <td>210 x 297 mm</td>
                                                                <!-- Table data -->
                                                                <td>xyz Kč</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr> 
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_04.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_04s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/2</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>182 x 128 mm</td>
                                                                <!-- Table data -->
                                                                <td>210 x 148 mm</td>
                                                                <!-- Table data -->
                                                                <td>xyz Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                                 
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_07.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_07s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/3</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>182 x 82 mm</td>
                                                                <!-- Table data -->
                                                                <td>210 x 99 mm</td>
                                                                <!-- Table data -->
                                                                <td>xyz Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                        
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                            <!-- Tabs content item END -->
                                            <h3 class="mt-3">Ostatní reklamní plochy:</h3>
                                            <!-- Tabs content item START -->
                                            <div class="tab-pane fade active show">
                                                <!-- Table START -->
                                                <div class="table-responsive border-0">
                                                    <table class="table align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start" style="min-width: 50px;"></th>
                                                                <th scope="col" class="border-0 rounded-start">Typ</th>
                                                                <th scope="col" class="border-0">Na zrcadlo</th>
                                                                <th scope="col" class="border-0">Na spad</th>
                                                                <th scope="col" class="border-0 rounded-end"></th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody class="border-top-0">
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_01.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_01s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">2/1</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>394 x 258 mm</td>
                                                                <!-- Table data -->
                                                                <td>420 x 297 mm</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_03.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_03s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">2/3</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>123 x 258 mm</td>
                                                                <!-- Table data -->
                                                                <td>135 x 297 mm</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                                     
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_05.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_05s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/3 kolejnice</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>69 x 258 mm</td>
                                                                <!-- Table data -->
                                                                <td>70 x 297 mm</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>    
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_06.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_06s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/3</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>64 x 258 mm</td>
                                                                <!-- Table data -->
                                                                <td>70 x 297 mm</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_08.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_08s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/4</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>182 x 62 mm</td>
                                                                <!-- Table data -->
                                                                <td>210 x 74 mm</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_09.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/c_09s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">1/4</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>123 x 82 mm</td>
                                                                <!-- Table data -->
                                                                <td></td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                            <!-- Tabs content item END -->
                                        </div>
                                        <!-- Tabs content END -->
                                    </div>
                                    <!-- Card body END -->

                                    <!-- Card Footer START -->
                                    <div class="card-footer p-3">
                                        <!-- Pagination START -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start">Rozměry <strong>"NA SPAD"</strong> jsou uvedeny v čistém formátu po ořezu. Pro ořez je nutné zajistit překreslení o dalších 5 mm nad čistý formát po obvodu inzerátu!</p>
                                        </div>
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start"><strong>Termíny pro předání podkladů:</strong> Hotové předlohy – do 15 pracovních dnů před zveřejněním / Ostatní podklady – do 20 pracovních dnů před zveřejněním</p>
                                        </div>
                                        <!-- Pagination END -->
                                    </div>
                                    <!-- Card Footer END -->
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-5">
                        <div class="row g-4">
                            <div class="col-12">
                                <!-- Card START -->
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom p-3">
                                        <!-- Search and select START -->
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <!-- Search bar -->
                                            <div class="col-md-8">
                                                <h2>Portál Pro města a obce:<br>Digitální rozšíření vaší značky</h2>
                                            </div>
                                            <!-- Tab buttons -->
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-12">
                                                <p>Naším webovým portálem 'PRO města a obce' se v roce 2021 otevřel nový digitální svět pro naše čtenáře a inzerenty. Jak se veřejná správa modernizuje a mládne, stále více našich čtenářů přechází z tištěného vydání na digitální platformy. S měsíční návštěvností přes 11000 uživatelů a více než 32000 zobrazeními stránek, náš web představuje silnou platformu pro rozšíření vaší online přítomnosti ve veřejné správě.</p>
                                                <p>Webový portál má úzké propojení s tištěným časopisem. Často odkazujeme v tištěném vydání na pokračování článků na webu, kde mohou být doplněny audiovizuálními prvky a rozsáhlejší infografikou. Nejčtenější kategorie na našem webu zahrnují Chytré město, Energetiku, IT, Dotace a Finance, Odpady, Kyberbezpečnost.</p>
                                                <p>Nabízíme klasickou bannerovou reklamu a PR články. S 75 % návštěvníků přistupujících na mobilní verzi našeho webu je naše platforma ideálním místem pro cílenou mobilní reklamu.</p>
                                                <p>Připojte se k nám v této digitální éře a rozšiřte dosah vaší značky prostřednictvím našeho webového portálu.</p>
                                            </div>
                                        </div>
                                        <!-- Search and select END -->
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body p-3 pb-0">
                                        <!-- Tabs content START -->
                                        <div class="tab-content py-0 my-0">
                                            <h3>Nejžádanější reklamní plochy:</h3>
                                            <!-- Tabs content item START -->
                                            <div class="tab-pane fade active show">
                                                <!-- Table START -->
                                                <div class="table-responsive border-0">
                                                    <table class="table align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start" style="min-width: 50px;"></th>
                                                                <th scope="col" class="border-0">Typ</th>
                                                                <th scope="col" class="border-0">Zařízení</th>
                                                                <th scope="col" class="border-0">Rozměr</th>
                                                                <th scope="col" class="border-0">Max. kb</th>
                                                                <th scope="col" class="border-0">Cena</th>
                                                                <th scope="col" class="border-0 rounded-end"></th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody class="border-top-0">
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_08.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_08s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Mobile Square</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>300 x 250 px</td>
                                                                <!-- Table data -->
                                                                <td>50kB</td>
                                                                <!-- Table data -->
                                                                <td>10 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>   
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_01.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_01s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <td>
                                                                    <h6 class="mb-0">Half Page</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>300 x 600 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>8 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_03.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_03s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Wall Paper</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>970 x 310 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>8 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>       
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_07.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_07s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">PR článek</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop/Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>-</td>
                                                                <!-- Table data -->
                                                                <td>-</td>
                                                                <!-- Table data -->
                                                                <td>13 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                    <p class="mt-2 mb-2">* Cena ja za 1 000 zobrazení banneru</p>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                            <!-- Tabs content item END -->
                                            <h3 class="mt-4">Ostatní reklamní plochy:</h3>
                                            <!-- Tabs content item START -->
                                            <div class="tab-pane fade active show">
                                                <!-- Table START -->
                                                <div class="table-responsive border-0">
                                                    <table class="table align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start" style="min-width: 50px;"></th>
                                                                <th scope="col" class="border-0">Typ</th>
                                                                <th scope="col" class="border-0">Zařízení</th>
                                                                <th scope="col" class="border-0">Rozměr</th>
                                                                <th scope="col" class="border-0">Max. kb</th>
                                                                <th scope="col" class="border-0 rounded-end"></th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody class="border-top-0">
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_02.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_02s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Desktop Square</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>300 x 250 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>     
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_04.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_04s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Wide Square</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>480 x 480 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>    
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_05.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_05s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Mega Board</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>1200 x 200 px</td>
                                                                <!-- Table data -->
                                                                <td>150 kB</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>  
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_06.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_06s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Partner kategorie</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop/Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>cca 120 x 30 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>        
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_09.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_09s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Mobile Sticky Branding</h6>
                                                                </td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>600 x 200 px</td>
                                                                <!-- Table data -->
                                                                <td>50kB</td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                            <!-- Tabs content item END -->                                            

                                        </div>
                                        <!-- Tabs content END -->
                                    </div>
                                    <!-- Card body END -->

                                    <!-- Card Footer START -->
                                    <div class="card-footer p-3">
                                        <!-- Pagination START -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start">Formát souborů: JPG, PNG, GIF</p>
                                        </div>
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start">Partner kategorie: Formát PNG nebo SVG s transparentním pozadím. Ideálně dvě verze loga ( pro tmavé a světlé pozadí ).</p>
                                        </div>
                                        <!-- Pagination END -->
                                    </div>
                                    <!-- Card Footer END -->
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <!-- Card START -->
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom p-3">
                                        <!-- Search and select START -->
                                        <div class="row g-3 align-items-center justify-content-between">
                                            <!-- Search bar -->
                                            <div class="col-md-8">
                                                <h2>Newsletter:<br>Cílená komunikace s vašimi klíčovými zákazníky</h2>
                                            </div>
                                            <!-- Tab buttons -->
                                            <div class="col-md-3">
                                                <a href="https://promestaobce.ecomailapp.cz/campaigns/render/69/6a34a4be99eb75e88b490aa0bbb9ba3b#" target="_blank"class="bg-primary py-2 px-3 text-white rounded ms-2">Ukázkový newsletter</a>
                                            </div>
                                            <div class="col-12">
                                                <p>Naše newslettery poskytují jedinečnou příležitost pro přímou a cílenou komunikaci s vysoce angažovanými čtenáři. Newsletter 'PRO města a obce' vychází každé úterý a je distribuován dvěma hlavním skupinám odběratelů.</p>
                                                <p>VIP skupina, se zhruba <strong>7000 aktivními odběrateli</strong>, je charakteristická vysokou mírou interakce. Členové této skupiny pravidelně klikají na články a reklamní bannery a aktivně se zapojují do našich pravidelných otázek týdne v newsletteru. Druhou skupinou je přibližně 14000 čtenářů, kteří jsou méně aktivní, ale přesto tvoří důležitou součást naší čtenářské základny.</p>
                                                <p>S průměrným <strong>Open Rate 32 %</strong> nabízí náš newsletter vynikající příležitost pro efektivní dosažení vaší cílové skupiny. Naše kampaně můžeme cílit specificky podle kraje, velikosti obce či specifické pozice na úřadu, což umožňuje přesně oslovit vámi vybranou demografii.</p>
                                                <p>Prohlédněte si ukázkové vydání našeho newsletteru a zjistěte, jak může vaše reklama vypadat a působit na naše čtenáře.</p>
                                            </div>
                                        </div>
                                        <!-- Search and select END -->
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body p-3 pb-0">
                                        <!-- Tabs content START -->
                                        <div class="tab-content py-0 my-0">

                                            <!-- Tabs content item START -->
                                            <div class="tab-pane fade active show">
                                                <!-- Table START -->
                                                <div class="table-responsive border-0">
                                                    <h3>Reklamní plochy:</h3>
                                                    <table class="table align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start" style="min-width: 50px;"></th>
                                                                <th scope="col" class="border-0">Typ</th>
                                                                <th scope="col" class="border-0">Zařízení</th>
                                                                <th scope="col" class="border-0">Rozměr</th>
                                                                <th scope="col" class="border-0">Max. kb</th>
                                                                <th scope="col" class="border-0">Cena</th>
                                                                <th scope="col" class="border-0 rounded-end"></th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody class="border-top-0">
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/n_01.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/n_01s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Wall Paper</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>600 x 250 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>8 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>    
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_08.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_08s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Mobile Square</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>300 x 250 px</td>
                                                                <!-- Table data -->
                                                                <td>50kB</td>
                                                                <!-- Table data -->
                                                                <td>8 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                               
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_07.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/w_07s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">PR článek</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop/Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>-</td>
                                                                <!-- Table data -->
                                                                <td>-</td>
                                                                <!-- Table data -->
                                                                <td>15 000 Kč</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                
                                                            <!-- Table row -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <a href="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/n_02.jpg" data-glightbox="" data-gallery="image-popup"><img src="<?php echo get_template_directory_uri() ?>/assets/images/reklamni_plochy/n_02s.jpg" class="img-fluid rounded" alt=""></a>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <h6 class="mb-0">Partner Newsletteru</h6>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Desktop/Mobile</span>
                                                                </td>
                                                                <!-- Table data -->
                                                                <td>cca 120 x 30 px</td>
                                                                <!-- Table data -->
                                                                <td>100 kB</td>
                                                                <!-- Table data -->
                                                                <td>Individuální</td>                                                                
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                    <p class="mt-2 mb-2">* Cena pro PR článek je celková za uveřejnění jak na webu, tak i v newsletteru.</p>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                            <!-- Tabs content item END -->

                                        </div>
                                        <!-- Tabs content END -->
                                    </div>
                                    <!-- Card body END -->

                                    <!-- Card Footer START -->
                                    <div class="card-footer p-3">
                                        <!-- Pagination START -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start">Formát souborů: JPG, PNG, GIF</p>
                                        </div>
                                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <!-- Content -->
                                            <p class="mb-sm-0 text-center text-sm-start">Partner kategorie: Formát PNG nebo SVG s transparentním pozadím. Ideálně dvě verze loga ( pro tmavé a světlé pozadí ).</p>
                                        </div>
                                        <!-- Pagination END -->
                                    </div>
                                    <!-- Card Footer END -->
                                </div>
                                <!-- Card END -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7-7">
                        <div class="row g-4">
                            <div class="col-12">

                                <div class="card border">
                                    <div class="card-body p-3 pb-0">
                                        <h2 class="mb-2">Mediální partnerství:<br>Spolupracujme pro vzájemný úspěch</h2>
                                        <p>V 'PRO města a obce' se aktivně věnujeme rozvoji a podpoře mediálních partnerství. Věříme, že spolupráce s organizacemi a akcemi zaměřenými na veřejnou správu přináší oboustranně prospěšné výsledky. Naše zkušenosti a dosah v oblasti veřejné správy nám umožňují být významnými partnery prestižních akcí a projektů v tomto sektoru, jako jsou například Dny malých obci, ISSS, Setkání tajemniku.</p>
                                        <p>Pokud máte zájem o vytvoření mediálního partnerství s naším časopisem, neváhejte nás kontaktovat pro další informace. Společně můžeme vytvořit efektivní strategie pro propagaci vaší akce nebo projektu prostřednictvím našich tištěných a digitálních kanálů.</p>
                                        <p>Níže naleznete podklady pro vaše marketingové týmy (naše logo a používané barvy atp.), které vám pomohou vytvořit materiály, jež budou v souladu s naším brandem.</p>                    
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    </div>                    
                    <div class="tab-pane" id="tab-7-8">
                        <div class="row g-3 align-items-center justify-content-between">
                            <div class="col-md-8">
                                <h2>Napište nám</h2>
                            </div>
                            <!-- Tab buttons -->
                            <div class="col-md-3">
                                <a href="<?php echo get_template_directory_uri() ?>/assets/files/Edicni_plan_PROmo_2024.pdf" target="_blank"class="bg-primary py-2 px-3 text-white rounded ms-2">Stáhnout v PDF</a>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6"><!-- Chart START -->
                                <div class="card border">
                                    <div class="card-body pt-0 pb-0">
                                        <div class="mt-2 mb-2">
                                            <div class="d-flex align-items-start">
                                                <div class="avatar avatar-lg">
                                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="https://www.promestaobce.cz/wp-content/themes/promestaobce/assets/images/avatar/pf.jpg" alt="" />
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Petr Pfleger</h5>
                                                    <p class="mb-0 small">Print</p>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">Email:
                                                        <span class="h6 mb-0"><a href="mailto:petr.pfleger@promestaobce.cz">petr.pfleger@promestaobce.cz</a></span>
                                                    </li>
                                                    <li class="list-group-item">Telefon:
                                                        <span class="h6 mb-0">+420 603 198 873</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"><!-- Chart START -->
                                <div class="card border">
                                    <div class="card-body pt-0 pb-0">
                                        <div class="mt-2 mb-2">
                                            <div class="d-flex align-items-start">
                                                <div class="avatar avatar-lg">
                                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="https://www.promestaobce.cz/wp-content/themes/promestaobce/assets/images/avatar/jr.jpg" alt="" />
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Jaroslav Robert</h5>
                                                    <p class="mb-0 small">Online</p>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">Email:
                                                        <span class="h6 mb-0"><a href="mailto:jaroslav.robert@promestaobce.cz">jaroslav.robert@promestaobce.cz</a></span>
                                                    </li>
                                                    <li class="list-group-item">Telefon:
                                                        <span class="h6 mb-0">+420 770 116 803</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- Chart END -->                         
                        </div>
                    </div>
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