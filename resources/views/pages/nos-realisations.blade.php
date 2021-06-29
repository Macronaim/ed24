@extends('layout.page')
@section('content')
<div class="hide-print banniere parallax cover"></div>
        <div class="fluid-contenu">
            <h1 class="slogan parallaxOpacity">
                <strong class="titre">Nos Réalisations</strong>
            </h1>
            <div class="dotencart">
                <div class="container nopad">
                    <div class="row relative corps">



                        <div class="container3">
                            <ol class="fil-arianne" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="https://www.edconcept24.fr"><span
                                            itemprop="name">Accueil</span></a> &gt;
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                                    date-test="">
                                    <a itemprop="item" href="nos-realisations.html"><span
                                            itemprop="name">Nos réalisations</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>



                        <script type="text/javascript">
                            jQuery(document).ready(function () {
                                var catalogue_type = 'catalogue.list';
                                var catalogue_list_id = '';
                                if (catalogue_type == 'catalogue.list') { // ---- CHANGEMENT PAR RAPPORT GARAGE
                                    jQuery('#menu_principal').find('li.menu-item-' + catalogue_list_id)
                                        .addClass("active");
                                    jQuery('#menu_principal').find('li.menu-item-' + catalogue_list_id).parent()
                                        .parent().addClass("active");
                                }
                            });
                        </script>
                        <div class="container2 catalogue term-2">
                            <div class="row catalogue-2" id="catalogue-list">
                                <h1 class="titlecatalog">ce sont eux qui en parlent le mieux </h1>
                                <div class="col-md-12 item-fd-stories nopad delay-0 animated fadeInUp" data-anim="fadeInUp">                                        
                                    <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12 bloc-l">
                                        <div class="photo-client" style="background-image:url( {{ asset('images/dordogne.png') }} );"></div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12 bloc-r">
                                        <div class="detail-storie">
                                            <h2>Dordogne Déménagement</span></h2>
                                            <div class="content">
                                            La société Dordogne Déménagement implantée à Périgueux, se met au service des professionnels et des particuliers sur la Dordogne et la France entière. Experte dans le domaine, Dordogne Déménagement vous apportera conseil et suivi lors de votre déménagement tout en s’adaptant à votre budget. Sérieuse et rigoureuse, Dordogne Déménagement réalisera votre déménagement avec une prestation à la hauteur de vos attentes.
                                            </div>
                                            <a href="https://www.dordogne-demenagement.fr/" class="plus3">Consulter le site</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-md-12 item-fd-stories nopad delay-200 animated fadeInUp" data-anim="fadeInUp">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12 bloc-r">
                                            <div class="detail-storie">
                                                <h2>KIDS LITERIE</h2>                        
                                                <div class="content">KIDS LITERIE une entreprise familiale qui sélectionne des fabricants d’ameublement soigneusement, surtout pour leurs savoir faire.<br>
                                                Nous essayons d’apporter a notre clientèle les produits pour enfants d’une qualité supérieur à un meilleur prix.
                                                </div>
                                                <a href="https://www.kidsliterie.com/" class="plus3">Consulter le site</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 bloc-l">
                                            <div class="photo-client" style="background-image:url( {{ asset('images/kids.png') }} );"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @include('sections.realisations')
                        <!--
                        <div class="infinite-scroll plus" style="text-align: center;">
                            <a href="javascript:void(0)"
                                data-query="ipp=6&p=2&termid=4&order=position+ASC&sort=position+ASC"
                                id="infinite-scroll-button" class="center"> +
                            </a>
                            <div class="chargement"></div>
                        </div>
                        -->

                    </div>


                </div><!-- .row -->
            </div><!-- .container -->




        </div><!-- main -->
@endsection