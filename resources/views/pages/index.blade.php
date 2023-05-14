@extends('components.template-index')

@section('title', 'Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection

@section('content')
    <section class="bg-banner">
        <div class="main-carousel" data-flickity='{ "cellAlign": "left", "prevNextButtons": false, "autoPlay": true, "wrapAround": true }'>
            <div class="carousel">
                <img src="{{ asset('assets/images/banner1.png') }}" alt="Banner Image">
            </div>
            <div class="carousel">
                <img src="{{ asset('assets/images/banner1.png') }}" alt="Banner Image">
            </div>
            <div class="carousel">
                <img src="{{ asset('assets/images/banner1.png') }}" alt="Banner Image">
            </div>
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="banner-head">
                    <div class="banner-title">
                        <p>Kita juga dikenal sebagai ‘PSM UI Paragita’ atau ‘Paragita Choir’</p>
                        <h1>Paduan Suara Mahasiswa<br>Universitas Indonesia</h1>
                        <img class="banner-logo" src="{{ asset('assets/images/logoWhite.png') }}" alt="Logo Banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-about">
        <div class="banner-about" id="about">
            <div class="about-card">
                <div class="about-image">
                    <img src="{{ asset('assets/images/logoWhite.png') }}" alt="Logo Paragita">
                </div>
                <div class="about-text">
                    <h2>Tentang Kami,</h2>
                    <p>
                        PSM UI Paragita adalah wadah bagi Mahasiswa UI yang sangat mengedepankan mutu dan kualitas dalam mengembangkan minat dan bakat di bidang berpaduan suara. Dengan fokus pada pengembangan bakat sumber daya yang dimilikinya, PSM UI Paragita telah meraih prestasi dan pencapaian yang membanggakan.
                    </p>
                    <a href="/coach">Learn more <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-achievement" id="achievement">
        <div class="container">
            <div class="achievement-head">
                <div class="achievement-title">
                    <span>PSM UI Paragita’s</span>
                    <h2>Penghargaan</h2>
                </div>
                <div class="achievement-btn">
                    <a href="/achievement">Pelajari prestasi Paragita <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="achievement-body">
                <div class="achievement-image">
                    <img src="{{ asset('assets/images/achievementImage.png') }}" alt="Achievement">
                </div>
                <div class="achievement-text">
                    <div class="achievement-list">
                        <div class="achievement">
                            <strong>128+</strong>
                            <span>Achievements</span>
                        </div>
                        <div class="achievement">
                            <strong>6+</strong>
                            <span>Countries</span>
                        </div>
                        <div class="achievement">
                            <strong>18</strong>
                            <span>Costumes</span>
                        </div>
                    </div>
                    <div class="achievement-list">
                        <div class="achievement">
                            <strong>2</strong>
                            <span>Coaches</span>
                        </div>
                        <div class="achievement">
                            <strong>52</strong>
                            <span>Choir Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-news-gallery">
        <section class="bg-news" id="news">
            <div class="container">
                <div class="news-head">
                    <div class="news-title">
                        <span>This is our recent activiy,</span>
                        <h2>Berita</h2>
                    </div>
                    <div class="news-btn">
                        <a href="#">Read more news <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="news-list">
                    <a class="news-card" href="#">
                        <div class="news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                    <a class="news-card" href="#">
                        <div class="news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                    <a class="news-card" href="#">
                        <div class="news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="bg-gallery" id="gallery">
            <div class="gallery-title">
                <div class="container">
                    <span>This is our recent activiy,</span>
                    <h2>Galeri Foto</h2>
                </div>
            </div>
            <div class="gallery-body">
                <div class="gallery-list">
                    <img src="{{ asset('assets/images/news11.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news12.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news13.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news14.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news15.png') }}" alt="Gallery">
                </div>
                <div class="gallery-list">
                    <img src="{{ asset('assets/images/news21.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news22.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news23.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news24.png') }}" alt="Gallery">
                    <img src="{{ asset('assets/images/news25.png') }}" alt="Gallery">
                </div>
            </div>
        </section>
{{--        Circle Ngebug kalo klik gallery di navbar--}}
{{--        <div class="news-gallery-circle1"></div>--}}
{{--        <div class="news-gallery-circle2"></div>--}}
{{--        <div class="news-gallery-circle3"></div>--}}
    </section>
@endsection
