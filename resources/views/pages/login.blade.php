@extends('layout.page')
@section('content')
        <div class="hide-print banniere parallax cover"></div>
        <div class="fluid-contenu">
            <h1 class="slogan parallaxOpacity">
                <strong class="titre">Login pour Page Protégé</strong>
                
            </h1>







            <div class="dotencart">
                <div class="container nopad">
                    <div class="row relative corps">

                        <script type="text/javascript">
                            jQuery(document).ready(function () {
                                var catalogue_type = 'catalogue.list';
                                var catalogue_list_id = '23';
                                if (catalogue_type == 'catalogue.list') { // ---- CHANGEMENT PAR RAPPORT GARAGE
                                    jQuery('#menu_principal').find('li.menu-item-' + catalogue_list_id)
                                        .addClass("active");
                                    jQuery('#menu_principal').find('li.menu-item-' + catalogue_list_id).parent()
                                        .parent().addClass("active");
                                }
                            });
                        </script>




                        <div class="catalogue term-2">







                            <div class='row catalogue-2' id="catalogue-list">
                                <div class="container3">

                                    <ol class="fil-arianne" itemscope itemtype="http://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="/"><span itemprop="name">Accueil</span></a> >
                                            <meta itemprop="position" content="1" />
                                        </li>
                                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                            <span>
                                                Qui sommes-nous ? </span>
                                                
                                            <meta itemprop="position" content="2" />
                                    </ol>
                                </div>


                                <h1 class="titlecatalog">Vous devez entrer le mot de passe pour afficher ce contenu. </h1>
                                <div class="row paddingContact">
                                <div style="text-align:center;margin-top:20px;margin-bottom:50px;">
                                        <form action="{{ action('App\http\Controllers\SecretPageController@Index') }}" method="POST"  class="form-horizontal">@csrf
                                                <label for="protege">Mot de passe:</label>
                                                <input type="password" name="password">
                                        </form>
                                </div>
                        </div>

                            </div>
                        </div>
                    </div>




                </div><!-- .row -->
            </div><!-- .container -->




        </div><!-- main -->
    </div>
@endsection