@extends('layout.page')
@section('content')
<div class="hide-print banniere parallax cover"></div>
        <div class="fluid-contenu">
            <h1 class="slogan parallaxOpacity">
                <strong class="titre">Site Vitrine</strong>
            </h1>
            <div class="dotencart">
                <div class="container nopad">
                    <div class="row relative corps">
                        <div class="container3">
                            <ol class="fil-arianne" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="https://www.edconcept24.fr"><span
                                            itemprop="name">Accueil</span>
                                        <meta itemprop="position" content="1" /></a> &gt;
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item"
                                        href="creation-site-internet-idf.html"><span
                                            class="custom-link-fill" itemprop="name">NOS PRESTATIONS</span>
                                        <meta itemprop="position" content="2" /></a> &gt;
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <span itemprop="name">Site Vitrine<span class="hidden">🌐</span></span>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="page clear">
                            <div class="prestation" id="service-103">
                                <div class="cell photo cover" style="vertical-align: middle;">
                                    <img class="lazy" data-src="{{ asset('images/conception.svg') }}" alt=""/>
                                </div>
                                <div class="cell texte">
                                    <div class="contenu">
                                        <h2 class=""><strong>Sites web vitrine</strong></h2>
                                        <p>&nbsp;</span>Un site web est un outil regroupant plusieurs aspects et plusieurs techniques pour donner une<span style="color: #8d2a73;"><strong>&nbsp;image professionnelle</strong> </span>de son propriétaire. Bien que les modules graphiques et fonctionnels soient bien menés, il est crucial de munir le site web de plusieurs caractéristiqu</span><span class="s6">es en plus&nbsp;</span>pour conditionner son succès et lui conférer un <span style="color: #8d2a73;"><strong>caractère personnalisé</strong></span>.</p>
                                        <p>Lorsque l’on parle de réalisation de site web, il faut garder à&nbsp;l’esprit qu’un bon site, est&nbsp;un site efficace, un outil qui vous amène <span style="color: #8d2a73;"><strong>visibilité, crédibilité et surtout des opportunités&nbsp;d’affaires</strong></span>. Une boutique en ligne ou un site vitrine professionnels se doivent d’être :</span></p>
                                        <ul style="list-style-type: circle;">
                                        <li><span style="color: #8d2a73;"><strong>Attractifs</strong></span>, afin de séduire vos clients et vos prospects;</span></li>
                                        <li><span style="color: #8d2a73;"><strong>Rentables</strong></span>, en mettant votre activité ou vos produits sur le devant de la scène;</span></li>
                                        <li><span style="color: #8d2a73;"><strong>Visibles</strong></span>, en étant facilement trouvable dans les moteurs de recherche;</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="prestation" id="service-103">
                                <div class="cell photo cover" style="vertical-align: middle;">
                                    <img class="lazy" data-src="{{ asset('images/site-vitrine-development.svg') }}" alt="" /> 
                                </div>
                                <div class="cell texte">
                                    <div class="contenu">
                                        <h2><strong>Conception de site web</strong></h2>
                                        <p>Le développement d’un site web peut prendre plusieurs formes de&nbsp;la simple page statique à la&nbsp;page dynamique avec connexion à une base de données.</span></p>
                                        <p>La phase de <span style="color: #8d2a73;"><strong>conception d’un site Internet est primordiale</strong></span>. Choisir <span style="color: #8d2a73;"><strong>ED Concept24 c’est faire le&nbsp;</strong></span></span><span style="color: #8d2a73;"><strong><span class="s6">choix du professionnalisme, de l’adaptation à vos spécificités et</span><span class="s6">&nbsp;d’une équipe disponible et à&nbsp;</span></strong></span><span class="s6"><span style="color: #8d2a73;"><strong>l’écoute tout au long de la réalisation de votre site</strong></span>, en fonction de vos objectifs, de vos besoins et de votre budget.&nbsp;</span></p>
                                        <p>Nous prenons en charge tous les aspects techniques de votre site avec une réelle gestion de&nbsp;votre&nbsp;projet.&nbsp;</span></p>
                                        <blockquote>
                                        <p><span style="color: #8d2a73;"><strong><span class="s6">Pour nous, un bon client est un client qui a réussi à développer son activité grâce à nos&nbsp;services de création de sites web.</span></strong></span></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="family">
                            PARCE QU’UN SITE INTERNET N’EST BEAU<br> QUE SI IL EST VU...

                            <div class="btn1"><a
                                    href="{{ url('/nos-prestations/referencement-naturel') }}"
                                    class="plus2">Découvrez nos solutions de référencement</a></div>

                        </div>


                    </div><!-- .row -->
                </div><!-- .container -->




            </div><!-- main -->
        </div>
@endsection