@extends('layout.contact')
@section('content')
<div class="hide-print banniere parallax cover"></div>
    <div class="fluid-contenu">
        <p class="slogan parallaxOpacity "><strong class="titre">Contact</strong></p>
        <div class="dotencart">
            <div class="container nopad">
                <div class="row relative corps">
                    <div class="container3">
                        <ol class="fil-arianne" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a
                                    itemprop="item" href="/"><span itemprop="name">Accueil</span></a> >
                                <meta itemprop="position" content="1" />
                            </li>
                            <li> <span>Contact</span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </div>

                    <div class="contact  container2 node-5">
                        <div class="container">
                            <h1>Nos coordonnées</h1>

                            <!-- Maps -->
                            <div class="row delay-200" data-anim="fadeInUp">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="maps">
                                        <iframe
                                            src="https://maps.google.com/maps?q=78%20Rue%20Victor%20Hugo%202e%20%C3%A9tage%2024000%20P%C3%A9rigueux%20France&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div><!-- Maps -->

                            <div class="row coordonnes-contact delay-400" data-anim="fadeInUp">
                                <!-- Coordonne -->
                                <address class="cordonne" itemscope itemtype="http://schema.org/Organization">
                                    <div class="col-md-4 col-sm-4 col-xs-12 p-0">
                                        <p class="adress_contact">
                                            <span>Adresse</span>
                                            78 Rue Victor Hugo 2e étage <br>
                                            24000 Périgueux <br>
                                            France
                                        </p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <p class="tel_contact">
                                            <span>Téléphone</span>
                                            <div class="tel tel2 callTracker"><span class="t_phone"
                                                    itemprop="telephone">09 51 19 48 47</span><span
                                                    class="t_affiche" data-zone="Contenu" data-page="contact"
                                                    data-source="site">Afficher le numéro</span></div>

                                        </p>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <p class="fax_contact">
                                            <span>Email</span>
                                            <div class="tel tel2 callTracker"><span class="t_phone"
                                                    itemprop="email">edconcept24@gmail.com</span><span
                                                    class="t_affiche" data-zone="Contenu" data-page="contact"
                                                    data-source="site">Afficher l'email</span></div>

                                        </p>
                                    </div>

                                </address>
                            </div><!-- Coordonne -->






                            <div class="row formu light-contact" id="formu">
                                <div class="col-md-12  contact2 pad-sm pad-xs hide-print formulaire"
                                    data-anim="fadeInLeft">
                                    <h1 class="titrecontact">CONTACTEZ-NOUS PAR COURRIEL</h1>

                                    <div class="description-contact clear">
                                        <p>Merci de bien vouloir remplir ce formulaire afin de nous faire part de
                                            vos demandes.</p>
                                    </div>
                                    @include('sections.contact-form')
                                </div>

                            </div>
                        </div>

                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- main -->
        </div>
    </div>
@endsection