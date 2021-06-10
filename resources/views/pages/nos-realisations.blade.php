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
                                            itemprop="name">Nos réalisations</span></a> &gt;
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
                        @include('sections.realisations')
                        <div class="infinite-scroll plus" style="text-align: center;">
                            <a href="javascript:void(0)"
                                data-query="ipp=6&p=2&termid=4&order=position+ASC&sort=position+ASC"
                                id="infinite-scroll-button" class="center"> +
                            </a>
                            <div class="chargement"></div>
                        </div>


                    </div>


                </div><!-- .row -->
            </div><!-- .container -->




        </div><!-- main -->
@endsection