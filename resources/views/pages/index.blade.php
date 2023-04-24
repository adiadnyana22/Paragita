@extends('components.template')

@section('title', 'Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('content')
    <section class="bg-banner">
        <div class="container">
            <div class="banner-head">
                <div class="banner-title">
                    <p>We are also known as ‘PSM UI Paragita’ or ‘Paragita Choir’</p>
                    <h1>Paduan Suara Mahasiswa<br>Universitas Indonesia<span>Paragita</span></h1>
                    <img class="banner-vector" src="{{ asset('assets/images/vectorBanner.png') }}" alt="Vector Banner">
                </div>
                <div class="banner-link">
                    <a href="#about">
                        <p>Pelajari lebih tentang PSM UI Paragita</p>
                        <span><i class='bx bx-down-arrow-circle' ></i></span>
                    </a>
                </div>
            </div>
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
        </div>
    </section>
    <section class="bg-achievement" id="achievement">
        <div class="container">
            <div class="achievement-head">
                <div class="achievement-title">
                    <span>PSM UI Paragita’s</span>
                    <h2>Achievements</h2>
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
    <section class="bg-news" id="news">
        <div class="container">
            <div class="news-head">
                <div class="news-title">
                    <span>This is our recent activiy,</span>
                    <h2>News</h2>
                </div>
                <div class="news-btn">
                    <a href="#">Read more news <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="news-list">
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('assets/images/news.png') }}" alt="News">
                        <div class="backdrop"></div>
                    </div>
                    <div class="news-text">
                        <p>06 March, 2023</p>
                        <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('assets/images/news.png') }}" alt="News">
                        <div class="backdrop"></div>
                    </div>
                    <div class="news-text">
                        <p>06 March, 2023</p>
                        <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('assets/images/news.png') }}" alt="News">
                        <div class="backdrop"></div>
                    </div>
                    <div class="news-text">
                        <p>06 March, 2023</p>
                        <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gallery" id="gallery">
        <div class="gallery-title">
            <div class="container">
                <span>This is our recent activiy,</span>
                <h2>Galleries</h2>
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
@endsection
