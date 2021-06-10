<footer class="hide-print pied post-content">
<div class="bande3">
    <div class="row">
        <div class="col-md-3 col-sm-6 nopad navf col-sm-6">
            <em>Accès rapide</em>

            <!-- Menu menu_footer -->
            <ul id="menu_footer" class="menu_footer">
                <li class="menu-item menu-item-page menu-item-22 active"><a href="{{ url('/') }}" title="Accueil">Accueil</a></li>                            
                <li class="menu-item menu-item-contact menu-item-761"><a href="{{ url('/nos-realisations') }}" title="Nos Réalisations">Nos Réalisations</a></li>
                <li class="menu-item menu-item-contact menu-item-30"><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>
                <li class="menu-item menu-item-copyright menu-item-31"><a href="{{ url('/mentions-legales') }}" title="Mentions légales">Mentions légales</a></li>
            </ul>

            <!-- /Menu menu_footer -->
        </div>
        <div class="col-md-3 col-sm-6 navf nopad">
            <em>Nos prestations</em>


            <!-- Menu menu_footer2 -->
            <ul id="menu_footer2" class="menu_footer2">
                <li class="menu-item menu-item-service.list menu-item-133"><a href="{{ url('nos-prestations/site-vitrine') }}">Site Vitrine</a></li>
                <li class="menu-item menu-item-service.list menu-item-135"><a href="{{ url('nos-prestations/e-commerce') }}">E-Commerce</a></li>
                <li class="menu-item menu-item-service.list menu-item-134"><a href="{{ url('nos-prestations/referencement') }}">Référenecment Naturel</a></li>
            </ul>

            <!-- /Menu menu_footer2 -->

        </div>

        <div class="col-md-3 col-sm-6 navf  nopad">

            <em>Contactez-nous</em>
            <address>
                <p class="adresse">
                    <span class="texte">78 Rue Victor Hugo 2e étage</span><br /><span class="texte">24000 Périgueux</span> <br /> France</p>




                <p class="tel tel1 callTracker"><span class="t_phone" itemprop="telephone">09 51 19 48 47</span>
                <span class="t_affiche" data-zone="Pied de page" data-page="autre" data-source="site"> Afficher le numéro</span>
                </p>
                <p class="tel tel2 callTracker"><span class="t_phone" itemprop="email">edconcept24@gmail.com</span>
                <span class="t_affiche" data-zone="Pied de page" data-page="autre" data-source="site"> Afficher l'email</span></p>
            </address>

        </div>

        <div class="col-md-3 col-sm-6 navf nopad">
            <em>Suivez-nous</em>
            <div class="social_links_footer">
                <a class="btn-fb-f" href="https://fr-fr.facebook.com/edconcept24/" target="_blank"></a>
            </div>
        </div>
    </div>

</div>
@include('sections.keywords')
</footer>
<div class="remonter"><a href="#!"><img src="{{ asset('images/ico-remonter.png') }}" alt="Haut du site" /></a></div>

</div>
