<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon Library -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('pageHeadExtention')
    <title>@yield('title')</title>
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer-index')
    <div class="nav-mobile" id="nav-mobile-menu">
        <ul>
            <li><a href="{{ route('index') }}">Beranda</a></li>
            <li>
                <a href="#" id="nav-mobile-dropdown-btn">Tentang Kami <i class='bx bx-chevron-down' ></i></a>
                <div class="nav-mobile-dropdown" id="nav-mobile-dropdown">
                    <a href="{{ route('about') }}">Paragita UI</a>
                    <a href="{{ route('coach') }}">Pelatih</a>
                </div>
            </li>
            <li><a href="{{ route('achievement') }}">Penghargaan</a></li>
            <li><a href="{{ route('newsList') }}">Berita</a></li>
            <li><a href="{{ route('gallery') }}">Galeri</a></li>
        </ul>
        <a href="#" class="nav-close-btn" id="close-btn"><i class='bx bx-x'></i></a>
    </div>

    <script>
        let closeBtn = document.querySelector('#close-btn');
        let burgerBtn = document.querySelector('#burger-btn');
        let mobileNav = document.querySelector('#nav-mobile-menu');

        closeBtn.addEventListener('click', () => {
           mobileNav.style.width = 0;
        });

        burgerBtn.addEventListener('click', () => {
            mobileNav.style.width = '100vw';
        });
    </script>

    <script>
        let mobileDropdownBtn = document.querySelector('#nav-mobile-dropdown-btn');
        let mobileDropdownPanel = document.querySelector('#nav-mobile-dropdown');

        mobileDropdownBtn.addEventListener('click', () => {
            if(mobileDropdownPanel.classList.contains('active')){
                mobileDropdownPanel.style.height = '0';
                mobileDropdownPanel.style.marginTop = '0';
                mobileDropdownPanel.classList.remove('active');
            } else {
                mobileDropdownPanel.style.height = '125px';
                mobileDropdownPanel.style.marginTop = '1.5rem';
                mobileDropdownPanel.classList.add('active');
            }
        });
    </script>
</body>
</html>
