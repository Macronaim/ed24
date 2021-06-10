@extends('layout.main')
@section('content')

<body class="body-page body-page-1">
    <script>
        var id_page = '1';
        var site_url = '';
        var source_origine = 'false';
        var is_LT = 'false';
    </script>

    <div id="loader" class="hidden-xs hidden-sm">
        <div class="loader-section section-right">
            <div class="loader-spin"></div>
        </div>
    </div>


    <div class="main-page post-wrapper ">
        <div class="header-sidebars hidden-md hidden-lg hide-print">
            <div class="header-top">
                <a href="/" class="top-logo"><img src="{{ asset('images/logo.png') }}" alt="ED CONCEPT 24" /></a>
                <a href="contact-creation-site-ile-de-france.html" class="deploy-right-mail"></a>
                <a href="tel:0951194847" class="deploy-right-call callTracker" data-zone="En-tête" data-page="accueil" data-source="site"></a>
                <a href="/" class="deploy-right-sidebar"></a>
            </div>
        </div>
        <div class="sidebar-right hidden-md hidden-lg hide-print">
            <div class="sidebar-scroll-right">
                <div class="sidebar-header-right">
                    <a href="/" class="close-sidebar-right"></a>
                    <img src="{{ asset('images/logo_menu.png') }}" class="sidebar-right-logo" alt="ED CONCEPT 24">
                </div>

                <p class="sidebar-divider-text">MENU</p>

                <!-- Menu menu-main-menu -->
                <ul id="menu-main-menu" class="menu-mobile-dynamique">
                    <li class="menu-item menu-item-page menu-item-137 active"><a href="/">Accueil</a></li>
                    <li class="menu-item menu-item-external menu-item-139"><a href="#">Nos prestations</a>
                        <ul class="sub-menu">
                        <li class="menu-item menu-item-service.list menu-item-127"><a href="{{ url('/nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
            <li class="menu-item menu-item-service.list menu-item-129"><a href="{{ url('/nos-prestations/e-commerce') }}">E-Commerce</a></li>
            <li class="menu-item menu-item-service.list menu-item-128"><a href="{{ url('/nos-prestations/référencement-naturel') }}">Référenecment Naturel</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-external menu-item-140"><a href="#">Nos réalisations</a>
                    </li>
                    
                    
                    <li class="menu-item menu-item-contact menu-item-141"><a href="contact-creation-site-ile-de-france.html">Contact</a></li>
                </ul>

                <!-- /Menu menu-main-menu -->

            </div>
        </div>
        <div style="height:65px" class="hidden-md hidden-lg"></div>

        <div class="cd-header hidden-xs hidden-sm">
            <header class="hide-print tete">

                <div class="head">
                    <div class="container nopad">
                        <div class="row relative header">
                            <div class="col-lg-3 col-md-3  nopad">
                                <p class="logo-site">
                                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="ED CONCEPT 24" /></a>
                                </p>
                            </div>

                            <div class="col-lg-8 col-md-8 nopad right">
                                <nav class="navh">

                                    <!-- Menu menu_principal -->
                                    @include('partials.nav')

                                    <!-- /Menu menu_principal -->
                                </nav>
                            </div>
                            <div class="col-md-1 nopad">
                                <div class="menu1">
                                    <button id="showRight" class="menu-button" style="visibility: visible;">
										<span class="note">4.6</span>
                                        <span class="avis">
                                            <span class="icons1"></span>
                                        </span>
                                    </button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </header>


            <nav class="cd-3d-nav-container">

                <!-- Menu menu_principal2 -->
                <ul id="menu_principal2" class="menu_principal2">
                <li class="menu-item menu-item-service.list menu-item-127"><a href="{{ url('/nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
                <li class="menu-item menu-item-service.list menu-item-129"><a href="{{ url('/nos-prestations/e-commerce') }}">E-Commerce</a></li>
                <li class="menu-item menu-item-service.list menu-item-128"><a href="{{ url('/nos-prestations/référencement-naturel') }}">Référenecment Naturel</a></li>
                </ul>

                <!-- /Menu menu_principal2 -->

                <span class="cd-marker color-1"></span>
                <a href="#0" class="cd-3d-nav-trigger">
			Menu
			<span></span>
		</a>

            </nav>
            <!-- .cd-3d-nav-container -->

            <nav class="cd-3d-nav-container-v2">
                <span class="cd-marker color-1"></span>
                <a href="#1" class="cd-3d-nav-trigger-v2">
			Menu
			<span></span>
		</a>

            </nav>
            <!-- .cd-3d-nav-container -->




        </div>
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right hidden-sm hidden-xs" id="cbp-spmenu-s2">
            <!-- Block 4 -->
            <div class="block block-4">
                <div class="text-satisfaction">
                    <div class="title2">ILS SONT SATISFAITS ET ILS LE DISENT !</div>
                    <div class="view view-4">
                        <div class="cell photo cover"> <img class="lazy loaded" data-src="{{ asset('images/services/large/2.png') }}" alt="" src="{{ asset('images/services/large/1.png') }}" data-was-processed="true">
                        </div>
                        <p class="plus" style="z-index: 1;">
                            <a href="https://www.temoignages-edconcept24.fr/" target="_blank" rel="noopener"> 
                            <span>rejoindre les nazis</span>
                            </a>
                        </p>
                    </div>

                </div>
                <!-- /Block 4 -->
            </div>
            <div class='clearfix'></div>
        </div>



        <div class="hide-print fluid-slider">
            <div class="video-container">
            </div>			
        </div>
        <section class="full-size-page">
            <div class="background-video ">
                <div class="foreground-video">
                    <video preload="none" autoplay muted loop controls class="fullWidthVideo">
					<source src="{{ asset('videos/FD.mp4')}}" type="video/mp4" />
					<source src="{{ asset('videos/FD.webm')}}" type="video/webm" />
					<source src="{{ asset('videos/FD.ogv')}}" type="video/ogg" />
				  Votre navigateur ne supporte pas les vidéos
				</video>
                </div>
            </div>
        </section>






        <div class="fluid-contenu">


            <div class="dotencart">
                <div class="container nopad">
                    <div class="row relative corps">



                        <div class="page container2 clear  node-1">

                            <div class="col-md-6  col-xs-12 col-sm-12" data-anim="fadeInLeft">
                                <h1>EDConcept24<br> <span>Des sites web de qualité à prix serrés</span>
                                    <h3 class="texte" style="text-align: center; color: #8d2a73;"><span style="font-size: 14pt;">Lancez-vous, faites appel à des professionnels</span></h3>

                                </h1>
                                <div class="page-contenu clear">
                                    <p>ED CONCEPT 24 mise sur  la croissance fulgurante des fréquentations d’internet pour lancer sa propre gamme de site web destinée aux petites et moyennes entreprises.  (TPE.PME).</p>
                                    <p>
                                        Implantée en Dordogne depuis 2014, la société ED CONCEPT 24 met en place des solutions web adaptées aux besoin de chaque structure.
                                    </p>
                                    <ul>
                                        <li>Vitrines,</li>
                                        <li>Sites sur mesure</li>
                                    </ul>
                                    <p>Aujourd’hui indispensable au développement d’une entreprise, votre site vous donnera l’opportunité de communiquer de manière différente auprès de vos clients, prospects, partenaires et futurs collaborateurs.</p>
                                    <p class="plus" style="margin-top: 0px;"><a href="creation-site-internet-idf.html">Lire la suite</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="cell photo cover"> <img class="lazy loaded" data-src="{{ asset('images/services/large/2.png') }}" alt="" src="{{ asset('images/services/large/2.png') }}" data-was-processed="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <section class="p-4">
                                    <h2>Lancez-vous, faites appel à des professionnels</h2>
                                    <div class="progress-box">
                                        <h6 class="title text-muted">Entreprises possédant un site en France</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:65%;">
                                                <div class="progress-value d-block text-muted h6">65%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Utilisent au moins un réseau social</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:20%;">
                                                <div class="progress-value d-block text-muted h6">20%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Pensent qu’avoir un site vitrine est indispensable</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:71%;">
                                                <div class="progress-value d-block text-muted h6">71%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Pensent qu’avoir un site marchand est indispensable</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:51%;">
                                                <div class="progress-value d-block text-muted h6">51%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                </section>
                            </div>
                        </div>

                        

                    </div>
                    <!-- .row -->
                    <section class="services">
                        <div class="container post-content">
                            <h2 class="title1">Nos services</h2>
                            
                            <div class="cat-liste catalogue-4">
                                <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/conception.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">Conception de sites</h4>
                                    <p class="card__content">Du site vitrine au site développé sur mesure, nous saurons répondre à toutes vos demandes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/boutique.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">E-boutiques</h4>
                                    <p class="card__content">Nous vous proposons des solutions évolutives qui vous permettront de démarrer à petit budget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/referencement.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">Référencement</h4>
                                    <p class="card__content">Bien positionné dans les moteurs de recherche : la clé du succés</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/hebergement.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">Hébergement</h4>
                                    <p class="card__content">Nos packs incluent l'hébergement sur serveurs de qualité, des sites ayant du répondant !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/reseauxsocieux.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">Réseaux sociaux</h4>
                                    <p class="card__content">Utilisez les réseaux sociaux pour augmenter votre visibilité et vos visiteurs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <img class="card__icon" src="{{ asset('/images/faciles.svg') }}" alt="ux-design" height="200px">
                                    <div class="card__body">
                                    <h4 class="card__head">Faciles à vivre</h4>
                                    <p class="card__content">Une interface conviviale pour facilement alimenter votre site</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        </div>
                </section>
                <section id="testim" class="testim">
                    <!--         <div class="testim-cover"> -->
                                <div class="wrap">
                                    <h3 class="" style="color: #fff; text-align:center">Testemonials</h3>
                    
                                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                    <ul id="testim-dots" class="dots hidden-xs hidden-sm">
                                        <li class="dot active"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                    </ul>
                                    <div id="testim-content" class="cont">
                                        <div class="active">
                                            <h2>Merci à l'équipe EDConcept24 !, <a href="http://www.david-sono-animations.fr/">David Sono Animations</a> </h2>
                                            <p>Un grand merci à ED CONCEPT24 pour l’élaboration de mon nouveau site internet. www.davidsonoanimation.fr du très bon travail
                                            </p>                    
                                        </div>
                    
                                        <div>
                                            <h2>Hébergement, Espace Beauté</h2>
                                            <p>Depuis la prise en charge par EDConcept et l’hébergement sur leurs serveurs, mon site fonctionne enfin correctement, plus d’attente à chaque clic pour que les pages se génèrent. Un grand merci pour votre professionnalisme.</p>                    
                                        </div>
                    
                                        <div>
                                            <h2>Hausse de mes visites, Asfaux multiservices</h2>
                                            <p>Grâce au bon référencement de mon site par EDConcept, mon site se trouve bien placé sur les moteurs de recherche, un impact direct sur mon CA.
                                            </p>                    
                                        </div>
                                    </div>
                    
                                </div>
                    <!--         </div> -->
                    <script>/* Testimonial Slider */
                        // vars
                'use strict'
                var	testim = document.getElementById("testim"),
                        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
                    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
                    testimLeftArrow = document.getElementById("left-arrow"),
                    testimRightArrow = document.getElementById("right-arrow"),
                    testimSpeed = 4500,
                    currentSlide = 0,
                    currentActive = 0,
                    testimTimer,
                        touchStartPos,
                        touchEndPos,
                        touchPosDiff,
                        ignoreTouch = 30;
                ;
        
                window.onload = function() {
        
                    // Testim Script
                    function playSlide(slide) {
                        for (var k = 0; k < testimDots.length; k++) {
                            testimContent[k].classList.remove("active");
                            testimContent[k].classList.remove("inactive");
                            testimDots[k].classList.remove("active");
                        }
        
                        if (slide < 0) {
                            slide = currentSlide = testimContent.length-1;
                        }
        
                        if (slide > testimContent.length - 1) {
                            slide = currentSlide = 0;
                        }
        
                        if (currentActive != currentSlide) {
                            testimContent[currentActive].classList.add("inactive");            
                        }
                        testimContent[slide].classList.add("active");
                        testimDots[slide].classList.add("active");
        
                        currentActive = currentSlide;
                    
                        clearTimeout(testimTimer);
                        testimTimer = setTimeout(function() {
                            playSlide(currentSlide += 1);
                        }, testimSpeed)
                    }
        
                    testimLeftArrow.addEventListener("click", function() {
                        playSlide(currentSlide -= 1);
                    })
        
                    testimRightArrow.addEventListener("click", function() {
                        playSlide(currentSlide += 1);
                    })    
        
                    for (var l = 0; l < testimDots.length; l++) {
                        testimDots[l].addEventListener("click", function() {
                            playSlide(currentSlide = testimDots.indexOf(this));
                        })
                    }
        
                    playSlide(currentSlide);
        
                    // keyboard shortcuts
                    document.addEventListener("keyup", function(e) {
                        switch (e.keyCode) {
                            case 37:
                                testimLeftArrow.click();
                                break;
                                
                            case 39:
                                testimRightArrow.click();
                                break;
        
                            case 39:
                                testimRightArrow.click();
                                break;
        
                            default:
                                break;
                        }
                    })
                        
                        testim.addEventListener("touchstart", function(e) {
                                touchStartPos = e.changedTouches[0].clientX;
                        })
                    
                        testim.addEventListener("touchend", function(e) {
                                touchEndPos = e.changedTouches[0].clientX;
                            
                                touchPosDiff = touchStartPos - touchEndPos;
                            
                                console.log(touchPosDiff);
                                console.log(touchStartPos);	
                                console.log(touchEndPos);	
        
                            
                                if (touchPosDiff > 0 + ignoreTouch) {
                                        testimLeftArrow.click();
                                } else if (touchPosDiff < 0 - ignoreTouch) {
                                        testimRightArrow.click();
                                } else {
                                    return;
                                }
                            
                        })
                }</script>
                </section>
                <section class="realisations">
                    <div class="container1 post-content">
                        <h2 class="title1">Nos dernières réalisations</h2>
                        @include('sections.realisations')
                    </div>
                </section>

            </div>
        </div>
        <!-- .container -->
            <!-- main -->
        </div>
@endsection

