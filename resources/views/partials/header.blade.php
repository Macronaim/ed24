<body class="body-service-list body-service-list-{{ $bannier }}">
<script>
    var id_page = '88';
    var site_url = '';
    var source_origine = 'catalogue.list';
    var is_LT = 'catalogue.list';
</script>

<div id="loader" class="hidden-xs hidden-sm">
    <div class="loader-section section-right">
        <div class="loader-spin"></div>
    </div>
</div>

<div class="main-page post-wrapper">
<div class="header-sidebars hidden-md hidden-lg hide-print">
    <div class="header-top">
        <a href="{{ url('/') }}" class="top-logo"><img
                src="{{ asset('images/logo.png') }}"
                alt="ED CONCEPT 24" /></a>


        <a href="{{ url('/contact') }}"
            class="deploy-right-mail"></a>



        <a href="tel:0951194847" class="deploy-right-call callTracker" data-zone="En-tête" data-page="autre"
            data-source="site"></a>





        <a href="#" class="deploy-right-sidebar"></a>
    </div>
</div>
<div class="sidebar-right hidden-md hidden-lg hide-print">
    <div class="sidebar-scroll-right">
        <div class="sidebar-header-right">
            <a href="{{ url('/') }}" class="close-sidebar-right"></a>
            <img src="{{ asset('images/logo_menu.png') }}"
                class="sidebar-right-logo" alt="ED CONCEPT 24">
        </div>

        <p class="sidebar-divider-text">MENU</p>

        <!-- Menu menu-main-menu -->
        <ul id="menu-main-menu" class="menu-mobile-dynamique">
            <li class="menu-item menu-item-page menu-item-137"><a
                    href="{{ url('/') }}">Accueil</a></li>
            <li class="menu-item menu-item-external menu-item-139"><a href="#">Nos prestations</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-service.list menu-item-142 active"><a
                            href="{{ url('/nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
                    <li class="menu-item menu-item-service.list menu-item-143"><a
                            href="{{ url('/nos-prestations/e-commerce') }}">E-Commerce</a></li>
                    <li class="menu-item menu-item-service.list menu-item-144"><a
                            href="{{ url('/nos-prestations/referencement-naturel') }}">Référencement Naturel</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-external menu-item-139"><a href="#">Vous êtes?</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#commerçant') }}">Commerçant</a></li>
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#sante-beaute') }}">Santé et Beauté</a></li>
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#batiment') }}">Professionnel du bâtiment</a></li>
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#secteur-services') }}">Services</a></li>
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#restau') }}">Restaurateurs et traiteurs</a></li>
                    <li class="menu-item menu-item-service.list"><a
                            href="{{ url('/#autres') }}">Autres TPE / PME</a></li>
                </ul>
            </li>
            <li class="menu-item menu-item-page menu-item-140"><a href="{{ url('/nos-realisations') }}">Nos réalisations</a>
            </li>
            
            <li class="menu-item menu-item-contact menu-item-141"><a
                    href="{{ url('/contact') }}">Contact</a></li>
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
                            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="ED CONCEPT 24" /></a>
                        </p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <nav class="navh">
                            <!-- Menu menu_principal -->
                            <ul id="menu_principal" class="menu_principal">
                                <li class="menu-item menu-item-page menu-item-21 {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="menu-item menu-item-external menu-item-103 {{ Request::is('nos-prestations*') ? 'active' : '' }}"><a href="#!" target="_blank">Nos prestations</a></li>
                                <li class="menu-item menu-item-external menu-item-131">
                                    <div class="dropdown">
                                        <a href="#" target="_self">Vous êtes</a>
                                        <div class="dropdown-content">
                                            <a class="secteurLink" href="{{ url('/#commerçant') }}">Commerçant</a>
                                            <a class="secteurLink" href="{{ url('/#sante-beaute') }}">Santé et Beauté</a>
                                            <a class="secteurLink" href="{{ url('/#batiment') }}">Professionnel du bâtiment</a>
                                            <a class="secteurLink" href="{{ url('/#secteur-services') }}">Services</a>
                                            <a class="secteurLink" href="{{ url('/#restau') }}">Restaurateurs et traiteurs</a>
                                            <a class="secteurLink" href="{{ url('/#autres') }}">Autres TPE / PME</a>
                                        </div>
                                    </div>  
                                </li>
                                <li class="menu-item menu-item-page menu-item-29 {{ Request::is('nos-realisations') ? 'active' : '' }}"><a href="{{ url('/nos-realisations') }}">Nos réalisations</a></li>
                                <li class="menu-item menu-item-contact menu-item-29 {{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                            <!-- /Menu menu_principal -->
                        </nav>
                    </div>
                    <div class="col-md-1 nopad"><div class="menu1">
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
            <li class="menu-item menu-item-service.list menu-item-127"><a href="{{ url('/nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
            <li class="menu-item menu-item-service.list menu-item-129"><a href="{{ url('/nos-prestations/e-commerce') }}">E-Commerce</a></li>
            <li class="menu-item menu-item-service.list menu-item-128"><a href="{{ url('/nos-prestations/referencement-naturel') }}">Référencement Naturel</a></li>
        </ul>

        <!-- /Menu menu_principal2 -->

        <span class="cd-marker color-1"></span>
        <a href="#0" class="cd-3d-nav-trigger">
            Menu
            <span></span>
        </a>

    </nav> <!-- .cd-3d-nav-container -->


</div>