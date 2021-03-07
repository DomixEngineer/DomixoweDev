<!-- DESKTOP NAVBAR -->
<div class="navbar desktop" id="desktopNav">
    <div class="navbar-left">
        <img src="{{ asset('assets/images/main/domixowe-logo.png') }}" class="site-logo" alt="domixowe.dev - Twój developer IT">
        <a href="http://10.0.0.10/language-set/PL">
            <img src="{{ asset('assets/images/flags/pl.png') }}" class="site-langIcon">
        </a>
        <a href="http://10.0.0.10/language-set/EN">
            <img src="{{ asset('assets/images/flags/en.png') }}" class="site-langIcon">
        </a>
    </div>
    <div class="navbar-right">
        <ul class="menu">
            <span class="menu-open">[</span>
            <li data-menuanchor="start" class="menu-item">
                <a href="#start" class="menu-item-link">'START',</a>
            </li>
            <li data-menuanchor="about" class="menu-item">
                <a href="#about" class="menu-item-link">'{{ translate('landingpage.nav.about') }}',</a>
            </li>
            <li data-menuanchor="workshop" class="menu-item">
                <a href="#workshop" class="menu-item-link">'{{ translate('landingpage.nav.workshop') }}',</a>
            </li>
            <li data-menuanchor="experience" class="menu-item">
                <a href="#experience" class="menu-item-link">'{{ translate('landingpage.nav.experience') }}',</a>
            </li>
            <li data-menuanchor="contact" class="menu-item">
                <a href="#contact" class="menu-item-link">'{{ translate('landingpage.nav.contact') }}'</a>
            </li>
            <span class="menu-open">]</span>
        </ul>
    </div>
</div>
<!-- / DESKTOP NAVBAR -->

<!-- MOBILE NAVBAR -->
<div class="navbarMobile" id="mobileNav">
    <div class="navbarMobile-bar">
        <img src="{{ asset('assets/images/main/hamburger-icon.png') }}" @click="toggleNavMobileMenu()" />
    </div>
    <div class="navbarMobile-sidebar">
    </div>
</div>
<!-- / MOBILE NAVBAR -->