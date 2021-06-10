<nav class="navh">
    <!-- Menu menu_principal -->
    <ul id="menu_principal" class="menu_principal">
        <li class="menu-item menu-item-page menu-item-21 {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Accueil</a></li>
        <li class="menu-item menu-item-external menu-item-103 {{ Request::is('/nos-prestations/..') ? 'active' : '' }}"><a href="#!" target="_blank">Nos prestations</a></li>
        <li class="menu-item menu-item-page menu-item-29 {{ Request::is('/nos-realisations') ? 'active' : '' }}"><a href="{{ url('/nos-realisations') }}">Nos réalisations</a></li>
        <li class="menu-item menu-item-contact menu-item-29 {{ Request::is('/contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
    <!-- /Menu menu_principal -->
</nav>