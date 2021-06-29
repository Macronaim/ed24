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
                <a href="{{ url('/') }}" class="top-logo"><img src="{{ asset('images/logo.png') }}" alt="ED CONCEPT 24" /></a>
                <a href="{{ url('/contact') }}" class="deploy-right-mail"></a>
                <a href="tel:0951194847" class="deploy-right-call callTracker" data-zone="En-tête" data-page="accueil" data-source="site"></a>
                <a href="{{ url('/') }}" class="deploy-right-sidebar"></a>
            </div>
        </div>
        <div class="sidebar-right hidden-md hidden-lg hide-print">
            <div class="sidebar-scroll-right">
                <div class="sidebar-header-right">
                    <a href="{{ url('/') }}" class="close-sidebar-right"></a>
                    <img src="{{ asset('images/logo_menu.png') }}" class="sidebar-right-logo" alt="ED CONCEPT 24">
                </div>

                <p class="sidebar-divider-text">MENU</p>

                <!-- Menu menu-main-menu -->
                <ul id="menu-main-menu" class="menu-mobile-dynamique">
                    <li class="menu-item menu-item-page menu-item-137 active"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="menu-item menu-item-external menu-item-139"><a href="#">Nos prestations</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-service.list menu-item-127"><a href="{{ url('/nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
                            <li class="menu-item menu-item-service.list menu-item-129"><a href="{{ url('/nos-prestations/e-commerce') }}">E-Commerce</a></li>
                            <li class="menu-item menu-item-service.list menu-item-128"><a href="{{ url('/nos-prestations/referencement-naturel') }}">Référencement Naturel</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-external menu-item-139"><a href="#">Vous êtes?</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" href="{{ url('/#commerçant') }}">Commerçant</a></li>
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" href="{{ url('/#sante-beaute') }}">Santé et Beauté</a></li>
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" 
                                    href="{{ url('/#batiment') }}">Professionnel du bâtiment</a></li>
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" 
                                    href="{{ url('/#secteur-services') }}">Services</a></li>
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" 
                                    href="{{ url('/#restau') }}">Restaurateurs et traiteurs</a></li>
                            <li class="menu-item menu-item-service.list"><a class="secteurLinkMobile" 
                                    href="{{ url('/#autres') }}">Autres TPE / PME</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-page menu-item-140"><a href="{{ url('/nos-realisations') }}">Nos réalisations</a> </li>
                    <li class="menu-item menu-item-contact menu-item-141"><a href="{{ url('/contact') }}">Contact</a></li>
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
                            <div class="col-lg-3 col-md-3">
                                <p class="logo-site">
                                    <a href="{{ url('/') }}/"><img src="{{ asset('images/logo.png') }}" alt="ED CONCEPT 24" /></a>
                                </p>
                            </div>

                            <div class="col-lg-8 col-md-8">
                                <nav class="navh">

                                    <!-- Menu menu_principal -->
                                    @include('partials.nav')

                                    <!-- /Menu menu_principal -->
                                </nav>
                            </div>
                            <div class="col-md-1 nopad">
                                <div class="menu1">
                                    <button id="showRight" onClick="javascript:window.open('https://www.google.fr/search?q=ED+Concept+24&biw=1366&bih=661&ei=t6bMYNGoFuGPlwTfh7iwCA&oq=ED+Concept+24&gs_lcp=Cgdnd3Mtd2l6EAMyBggAEBYQHjIGCAAQFhAeOgcIABBHELADOggILhCRAhCTAjoFCAAQkQI6AggAOgIILjoHCC4QQxCTAjoECC4QCjoECAAQCjoFCC4QkwI6BwguEA0QkwI6BAgAEA06CAguEMcBEK8BOgsILhDHARCvARCTAjoICAAQFhAKEB5Q2zZYo1tgi15oBHACeAKAAdcBiAGDFJIBBjAuMTUuMpgBAKABAaoBB2d3cy13aXrIAQjAAQE&sclient=gws-wiz&ved=0ahUKEwiR4I3Xq6HxAhXhx4UKHd8DDoYQ4dUDCBE&uact=5', '_blank');" class="menu-button" style="visibility: visible;">
                                    <span class="note">4.8</span>
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
                <li class="menu-item menu-item-service.list menu-item-127"><a href="{{ url('/nos-prestations/site-vitrine')}}">Site Vitrine</a></li>
                <li class="menu-item menu-item-service.list menu-item-129"><a href="{{ url('/nos-prestations/e-commerce')}}">E-Commerce</a></li>
                <li class="menu-item menu-item-service.list menu-item-128"><a href="{{ url('/nos-prestations/referencement-naturel')}}">Référencement Naturel</a></li>
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
                                    <p class="plus" style="margin-top: 0px;"><a href="{{ url('/nos-prestations/site-vitrine') }}">Lire la suite</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12" data-anim="fadeInRight">
                                <div class="cell photo cover"> <img class="lazy loaded" data-src="{{ asset('images/conception-et-design.svg') }}" alt="" src="{{ asset('images/ipad.png') }}" data-was-processed="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12" data-anim="fadeInLeft">
                                <section class="p-4">
                                    <h2>Lancez-vous, faites appel à des professionnels</h2>
                                    <div class="progress-box">
                                        <h6 class="title text-muted">Entreprises possédant un site en France (65%)</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:65%;">
                                                <div class="progress-value d-block text-muted h6">65%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Utilisent au moins un réseau social (20%)</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:20%;">
                                                <div class="progress-value d-block text-muted h6">20%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Pensent qu’avoir un site vitrine est indispensable (71%)</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:71%;">
                                                <div class="progress-value d-block text-muted h6">71%</div>
                                            </div>
                                        </div>
                                    </div><!--end process box-->
                                    <div class="progress-box mt-4">
                                        <h6 class="title text-muted">Pensent qu’avoir un site marchand est indispensable (51%)</h6>
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
                    @include('sections.secteurs')
                    <section class="services">
                        <div class="container2 post-content">
                            <h2 class="title1">Nos services</h2>
                            @include('sections.timeline')  
                            <div class="cat-liste catalogue-4">
                                <div class="row relative corps">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card" data-anim="fadeInUp">
                                            <img class="card__icon" src="{{ asset('/images/conception.svg') }}" alt="ux-design" height="200px">
                                            <div class="card__body">
                                            <h4 class="card__head">Conception de sites</h4>
                                            <p class="card__content">Du site vitrine au site développé sur mesure, nous saurons répondre à toutes vos demandes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card" data-anim="fadeInUp">
                                            <img class="card__icon" src="{{ asset('/images/boutique.svg') }}" alt="ux-design" height="200px">
                                            <div class="card__body">
                                            <h4 class="card__head">Commerçants</h4>
                                            <p class="card__content">Nous vous proposons des solutions évolutives qui vous permettront de démarrer à petit budget.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card" data-anim="fadeInUp">
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
                                        <div class="card" data-anim="fadeInUp">
                                            <img class="card__icon" src="{{ asset('/images/hebergement.svg') }}" alt="ux-design" height="200px">
                                            <div class="card__body">
                                            <h4 class="card__head">Hébergement</h4>
                                            <p class="card__content">Nos packs incluent l'hébergement sur serveurs de qualité, des sites ayant du répondant !</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card" data-anim="fadeInUp">
                                            <img class="card__icon" src="{{ asset('/images/reseauxsocieux.svg') }}" alt="ux-design" height="200px">
                                            <div class="card__body">
                                            <h4 class="card__head">Réseaux sociaux</h4>
                                            <p class="card__content">Utilisez les réseaux sociaux pour augmenter votre visibilité et vos visiteurs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card" data-anim="fadeInUp">
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
                    @include('sections.google-my-business')
                </div>
            </div>
        </div>
@endsection

