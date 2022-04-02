<header class="header-area">
    <a href="{{ route('home') }}" class="logo-area">
        <img class="custom-logo" src="{{ asset('img/logos/logo_aduti_blanc.png') }}" alt="">
        {{-- <img src="{{ asset('arcade-master/img/logo.png') }}" alt=""> --}}
    </a>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <div class="phone-number">+225 05 84 64 98 25</div>
    <nav class="nav-menu">
        <ul>
            <li class="active"><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('about') }}">A propos</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>
