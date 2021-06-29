@extends('layout.page')
@section('content')
<div class="hide-print banniere parallax cover"></div>
    <div class="fluid-contenu">
        <h1 class="slogan parallaxOpacity"><strong class="titre">Page Protégé</strong></h1>
        <div class="dotencart">
            <div class="container nopad">
                <div class="row relative corps">
                    <script type="text/javascript">
                            jQuery(document).ready(function () {
                                var catalogue_type = 'catalogue.list';
                                var catalogue_list_id = '23';
                                if (catalogue_type ==
                                        'catalogue.list'
                                        ) { // ---- CHANGEMENT PAR RAPPORT GARAGE
                                        jQuery('#menu_principal').find(
                                                        'li.menu-item-' +
                                                        catalogue_list_id
                                                )
                                                .addClass("active");
                                        jQuery('#menu_principal').find(
                                                        'li.menu-item-' +
                                                        catalogue_list_id
                                                ).parent()
                                                .parent().addClass(
                                                        "active");
                                }
                                });
                    </script>
                    <div class="catalogue term-2">
                        <div class='row catalogue-2' id="catalogue-list">
                            <div class="container3">
                                <ol class="fil-arianne" itemscope
                                        itemtype="http://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope
                                                itemtype="http://schema.org/ListItem">
                                                <a itemprop="item"
                                                        href="/"><span
                                                                itemprop="name">Accueil</span></a>
                                                >
                                                <meta itemprop="position"
                                                        content="1" />
                                        </li>
                                        <li itemprop="itemListElement" itemscope
                                                itemtype="http://schema.org/ListItem">
                                                <span>
                                                        Page Protégé
                                                </span>
                                                <meta itemprop="position"
                                                        content="2" />
                                </ol>
                            </div>
                            <h1 class="titlecatalog">List des Lien Privées </h1>
                            <div class='container2 item-fd-stories nopad delay-0' data-anim="fadeInUp">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <h2>Documents</h2>
                                        <div class="content">
                                            <ul>
                                                <li>Dossier de partenariat
                                                    <a href="#">Télécharger  Ici
                                                    </a>
                                                </li>
                                                <li>Proposition tarifiaire
                                                        <a  href="#">Télécharger Ici
                                                        </a>
                                                </li>
                                                <li>Arborescence site
                                                        <a href="#">Télécharger Ici
                                                        </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <h2>Outiles</h2>
                                        <div class="detail-storie">
                                                <span>Accédez Webmail</span>
                                                <br />
                                                <a href="#" class="plus3">Webmail</a>
                                        </div>
                                        <br />
                                        <div class="detail-storie">
                                                <span>Accédez CRM</span>
                                                <br />
                                                <a href="http://archivecrm.edconcept24.fr/" class="plus3">CRM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <section class="cat-liste catalogue-4">
                            <div id="filtres" class="clear"></div>
                            <div class="nopad pad-xs pad-sm">
                                    <div class="row modele-liste"
                                            itemscope=""
                                            itemtype="http://schema.org/ItemList"
                                            id="catalogue-list">
                                            <h2>Maquettes</h2>

                                            <meta itemprop="itemListOrder"
                                                    content="Descending">
                                            <meta itemprop="name"
                                                    content="Sites web">

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->
                                                            <div class="div-proportionnel-item">
                                                                    <div class="cont-propor">
                                                                            <div class="imagecont">
                                                                                    <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->
                                                    </div>
                                                        <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 1 - Boxed</h4>
                                                                <ul>
                                                                        <li>Jardin Services</li>
                                                                        <li>Azevedo Decors</li>
                                                                        <li>Cibert Meubles</li>
                                                                </ul>
                                                        </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div class="div-proportionnel-item">
                                                                <div class="cont-propor">
                                                                    <div class="imagecont">
                                                                        <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                        <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ********** MODELE *********** -->
                                                    </div>

                                                        <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 2 - Full Width</h4>
                                                                <ul>
                                                                        <li>Café de la Paix</li>
                                                                        <li>Traiteur</li>
                                                                        <li>Call Center</li>
                                                                </ul>
                                                        </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div class="div-proportionnel-item">
                                                                <div class="cont-propor">
                                                                    <div class="imagecont">
                                                                        <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                        <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ********** MODELE *********** -->
                                                    </div>

                                                        <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 3 - Ouverture full screen</h4>
                                                                <ul>
                                                                        <li>Alice</li>
                                                                        <li>MAndiebulle</li>
                                                                        <li>Restaurant La Taula</li>
                                                                </ul>
                                                        </div>

                                                </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->
                                                            <div class="div-proportionnel-item">
                                                                    <div class="cont-propor">
                                                                            <div class="imagecont">
                                                                                    <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->
                                                    </div>
                                                        <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 4 - Full screen et Scroll</h4>
                                                                <ul>
                                                                        <li>Mariène Couture</li>
                                                                        <li>Pains et Merveilles</li>
                                                                        <li>Diva.paris</li>
                                                                </ul>
                                                        </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div
                                                                    class="div-proportionnel-item">
                                                                    <div
                                                                            class="cont-propor">
                                                                            <div
                                                                                    class="imagecont">
                                                                                    <meta itemprop="image"
                                                                                            content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover"
                                                                                            style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->

                                                    </div>

                                                    <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 5 - navigation boutons</h4>
                                                                <ul>
                                                                        <li>Motoculture Lubersac</li>
                                                                        <li>MTS</li>
                                                                        <li>Entretien Jardins</li>
                                                                </ul>
                                                        </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div
                                                                    class="div-proportionnel-item">
                                                                    <div
                                                                            class="cont-propor">
                                                                            <div
                                                                                    class="imagecont">
                                                                                    <meta itemprop="image"
                                                                                            content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover"
                                                                                            style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->

                                                    </div>

                                                    <div class="secret-fonctions">
                                                                <h4 itemprop="name">Maquette 6 - navigation verticale</h4>
                                                        </div>

                                            </div>
                                    </div>
                            </div>
                        </section>
                        <section class="cat-liste catalogue-4">
                            <div id="filtres" class="clear"></div>
                            <div class="nopad pad-xs pad-sm">
                                    <div class="row modele-liste"
                                            itemscope=""
                                            itemtype="http://schema.org/ItemList"
                                            id="catalogue-list">
                                            <h2>Fonctions Optionelle</h2>

                                            <meta itemprop="itemListOrder"
                                                    content="Descending">
                                            <meta itemprop="name"
                                                    content="Sites web">

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->
                                                            <div class="div-proportionnel-item">
                                                                    <div class="cont-propor">
                                                                            <div class="imagecont">
                                                                                    <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->
                                                    </div>
                                                    <div class="secret-fonctions">
                                                            <h4 itemprop="name">
                                                                    Catalogue
                                                                    Produits</h4>
                                                            <ul>
                                                                <li>Gestion catalogue produits</li>
                                                                <li>Galerie photos par produits</li>
                                                                <li>Ajout module page d'accueil produits récents ou mis en avant</li>
                                                                <li>Page catalogue, tri par prix, catégories etc.</li>
                                                                <li>Ajout/ suppression/ modification produits facile dans interface backdoor</li>
                                                            </ul>
                                                    </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div class="div-proportionnel-item">
                                                                <div class="cont-propor">
                                                                    <div class="imagecont">
                                                                        <meta itemprop="image" content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                        <span class="imagefond cover" style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ********** MODELE *********** -->
                                                    </div>

                                                    <div class="secret-fonctions">
                                                        <h4 itemprop="name">Page Actualité</h4>
                                                        <ul>
                                                                <li>Importation automatique de vos posts Facebook, Google+ etc</li>
                                                                <li>Intégration sur une page dédiée en temps réel</li>
                                                                <li>Amélioration des résultats du référencement naturel</li>
                                                        </ul>
                                                    </div>

                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12  delay-200 animated fadeInUp"
                                                    data-anim="fadeInUp">
                                                    <div class="item catalogue-850"
                                                            itemprop="itemListElement"
                                                            itemscope=""
                                                            itemtype="http://schema.org/Product">
                                                            <!-- ********** MODELE *********** -->

                                                            <div
                                                                    class="div-proportionnel-item">
                                                                    <div
                                                                            class="cont-propor">
                                                                            <div
                                                                                    class="imagecont">
                                                                                    <meta itemprop="image"
                                                                                            content="https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg">
                                                                                    <span class="imagefond cover"
                                                                                            style="background-image:url(https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg); filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src='https://www.edconcept24.fr/images/catalogue/large/dr_Liwarek.jpg',sizingMethod='scale')\8;"></span>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <!-- ********** MODELE *********** -->

                                                    </div>

                                                    <div class="secret-fonctions">
                                                        <h4 itemprop="name">Formulaire Personalisé
                                                    </h4>

                                                    <ul>
                                                            <li>Creation d'un formulaire personnalisé, champs illimité</li>
                                                            <li>Standard ou multi pages si formulaire complexe</li>
                                                            <li>Notification immédiate par mail de dépôt de formulaire</li>
                                                            <li>Historique des formulaire reçus dans l'interface backdoor</li>
                                                    </ul>
                                                    </div>

                                            </div>
                                    </div>
                            </div>
                        </section>
                        <section class="cat-liste catalogue-4">
                            <div class="col-md-12 col-sm-12 col-xs-12 bloc-r">
                                    <div class="detail-storie">
                                        <h2>Demos</h2>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                        <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.batilocation.fr">www.batilocation.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                        <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.yjserrurerie33.fr">www.yjserrurerie33.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                                </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                        <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.dordogne-demenagement.fr">www.dordogne-demenagement.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.travauxpublic-terrassement-87.fr">www.travauxpublic-terrassement-87.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="sarlbriandjoel.fr">sarlbriandjoel.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="piscine-duflam.fr">piscine-duflam.fr</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.kidsliterie.com">www.kidsliterie.com</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 bloc-l">
                                                <div class="secret-demos">
                                                <h6>Démo administartion</h6>
                                                        <br>
                                                        <a hred="www.adepp-control.com">www.adepp-control.com</a>
                                                        <br/>
                                                        <p><br/> id: demo-edc <br/>
                                                        Psw: 6yuikjhmMoik</p>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- main -->
@endsection