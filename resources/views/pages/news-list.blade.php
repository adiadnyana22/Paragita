@extends('components.template')

@section('title', 'Berita Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/news-list.css') }}">
@endsection

@section('content')
    <section class="bg-all-wrap">
        <section class="bg-banner-wrap">
            <section class="bg-banner-news-list">
                <div class="container">
                    <div class="banner-news-list-title">
                        <p>PSM UI Paragita</p>
                        <h1>Berita</h1>
                    </div>
                </div>
            </section>
            <section class="bg-news-list">
                <div class="container">
                    <div class="news-list">
                        <a href="#" class="news-list-card">
                            <div class="news-list-img">
                                <img src="{{ asset('assets/images/news.png') }}" alt="News">
                                <div class="backdrop"></div>
                            </div>
                            <div class="news-list-text">
                                <span>06 March, 2023</span>
                                <h2>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h2>
                                <p>
                                    Ratna Kusumaningrum Katamsi, atau yang dikenal dengan Aning Katamsi, merupakan Principal Conductor dan pelatih dari Paduan Suara Mahasiswa Universitas Indonesia (PSM UI)
                                </p>
                            </div>
                        </a>
                        <a href="#" class="news-list-card">
                            <div class="news-list-img">
                                <img src="{{ asset('assets/images/news.png') }}" alt="News">
                                <div class="backdrop"></div>
                            </div>
                            <div class="news-list-text">
                                <span>06 March, 2023</span>
                                <h2>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h2>
                                <p>
                                    Ratna Kusumaningrum Katamsi, atau yang dikenal dengan Aning Katamsi, merupakan Principal Conductor dan pelatih dari Paduan Suara Mahasiswa Universitas Indonesia (PSM UI)
                                </p>
                            </div>
                        </a>
                        <a href="#" class="news-list-card">
                            <div class="news-list-img">
                                <img src="{{ asset('assets/images/news.png') }}" alt="News">
                                <div class="backdrop"></div>
                            </div>
                            <div class="news-list-text">
                                <span>06 March, 2023</span>
                                <h2>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h2>
                                <p>
                                    Ratna Kusumaningrum Katamsi, atau yang dikenal dengan Aning Katamsi, merupakan Principal Conductor dan pelatih dari Paduan Suara Mahasiswa Universitas Indonesia (PSM UI)
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </section>
        <section class="bg-other-news">
            <div class="container">
                <div class="other-news-head">
                    <h3>Berita Lainnya</h3>
                </div>
                <div class="other-news-list">
                    <a class="other-news-card" href="#">
                        <div class="other-news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="other-news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                    <a class="other-news-card" href="#">
                        <div class="other-news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="other-news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                    <a class="other-news-card" href="#">
                        <div class="other-news-image">
                            <img src="{{ asset('assets/images/news.png') }}" alt="News">
                            <div class="backdrop"></div>
                        </div>
                        <div class="other-news-text">
                            <p>06 March, 2023</p>
                            <h3>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <div class="background-circle1"></div>
        <div class="background-circle2"></div>
        <div class="background-circle3"></div>
    </section>
@endsection
