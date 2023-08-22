<header>
    <div class="container">
        <nav>
            <div class="head-logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/logoWhite.png') }}" alt="Logo Paragita"></a></div>
            <ul id="nav-desktop">
                <li><a href="{{ route('index') }}">Beranda</a></li>
                <li class="nav-dropdown">
                    <a href="#">Tentang Kami <i class='bx bx-chevron-down' ></i></a>
                    <div class="nav-dropdown-content">
                        <a href="{{ route('about') }}">Paragita UI</a>
                        <a href="{{ route('coach') }}">Pelatih</a>
                    </div>
                </li>
                <li><a href="{{ route('achievement') }}">Penghargaan</a></li>
                <li><a href="{{ route('newsList') }}">Berita</a></li>
                <li><a href="{{ route('gallery') }}">Galeri</a></li>
                <li><a href="https://wa.me/6285216147761" target="_blank" class="btn-highlight">Hubungi Kami</a></li>
            </ul>
            <ul id="nav-mobile">
                <li><a href="#" id="burger-btn"><i class='bx bx-menu-alt-right' ></i></a></li>
            </ul>
        </nav>
    </div>
</header>
