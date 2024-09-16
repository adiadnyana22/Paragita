@extends('components.template-index')

@section('title', 'Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection

@section('content')
    <section class="bg-banner">
        <div class="main-carousel" data-flickity='{ "cellAlign": "left", "prevNextButtons": false, "autoPlay": 4000, "wrapAround": true }'>
            @foreach($carousels as $carousel)
                <div class="carousel">
                    <img src="{{ asset('assets/images/carousel/'.$carousel->foto) }}" alt="Banner Image">
                </div>
            @endforeach
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
        <div class="banner-about">
            <div class="about-card">
                <div class="about-image">
                    <img src="{{ asset('assets/images/logoWhite.png') }}" alt="Logo Paragita">
                </div>
                <div class="about-text">
                    <h2>Tentang Kami,</h2>
                    <p>
                        {{ $about->value }}
                    </p>
                    <a href="{{ route('about') }}">Learn more <i class='bx bx-right-arrow-alt'></i></a>
                    <div class="about-pattern1"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-achievement">
        <div class="container">
            <div class="achievement-head">
                <div class="achievement-title">
                    <span>PSM UI Paragita’s</span>
                    <h2>Penghargaan</h2>
                </div>
                <div class="achievement-btn">
                    <a href="{{ route('achievement') }}">Pelajari prestasi Paragita <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="achievement-body">
                <div class="achievement-image">
                    <img src="{{ asset('assets/images/achievementImage.png') }}" alt="Achievement">
                </div>
                <div class="achievement-text">
                    <div class="achievement-list">
                        <div class="achievement">
                            <strong>{{ $achievements->value }}</strong>
                            <span>Achievements</span>
                        </div>
                        <div class="achievement">
                            <strong>{{ $countries->value }}</strong>
                            <span>Countries</span>
                        </div>
                        <div class="achievement">
                            <strong>{{ $costumes->value }}</strong>
                            <span>Costumes</span>
                        </div>
                    </div>
                    <div class="achievement-list">
                        <div class="achievement">
                            <strong>{{ $coaches->value }}</strong>
                            <span>Coaches</span>
                        </div>
                        <div class="achievement">
                            <strong>{{ $choirMembers->value }}</strong>
                            <span>Choir Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-news-gallery">
        <section class="bg-ticket" id="ticket">
            <div class="container">
                <div class="ticket-head">
                    <div class="ticket-title">
                        <span>PSM UI Paragita’s Upcoming Event</span>
                        <h2>Informasi Event</h2>
                    </div>
                </div>
                <div class="ticket-list">
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($ticket as $tick)
                    <div class="ticket-card" style="{{ $count == 1 ? 'background-color: var(--black-color);' : '' }}">
                        <div class="ticket-image">
                            <img src="{{ asset('assets/images/ticket/'.$tick->foto) }}" alt="Ticket">
                        </div>
                        <div class="ticket-text">
                            <div class="ticket-text-detail">
                                <span>{{ date("l, j F Y", strtotime($tick->tanggal)) }}</span>
                                <h3>{{ $tick->judul }}</h3>
                                <p>
                                    {{ $tick->deskripsi }}
                                </p>
                            </div>
                            <div class="ticket-text-button">
                                @if ($tick->link)
                                <a href="{{ $tick->link }}" target="_blank">Beli Tiket <i class='bx bx-right-arrow-alt'></i></a>
                                @else
                                <span>Coming Soon!</span>
                                @endif
                            </div>
                        </div>
                        @php
                            $count++;
                        @endphp
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-news">
            <div class="container">
                <div class="news-head">
                    <div class="news-title">
                        <span>This is our recent activiy,</span>
                        <h2>Berita</h2>
                    </div>
                    <div class="news-btn">
                        <a href="{{ route('newsList') }}">Read more news <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="news-list">
                    @foreach($news as $new)
                        <a class="news-card" href="{{ route('newsDetail', ['news' => $new->id]) }}">
                            <div class="news-image">
                                <img src="{{ asset('assets/images/news/'.$new->foto) }}" alt="News">
                                <div class="backdrop"></div>
                            </div>
                            <div class="news-text">
                                <p>{{ date("F j, Y", strtotime($new->tanggal)) }}</p>
                                <h3>{{ $new->judul }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-gallery">
            <div class="container">
                <div class="gallery-title">
                    <div class="container">
                        <span>This is our recent activiy,</span>
                        <h2>Galeri Foto</h2>
                    </div>
                </div>
                <div class="gallery-body">
                    <div class="gallery-list">
                        @foreach($gallery as $gall)
                            <img src="{{ asset('assets/images/gallery/'.$gall->foto) }}" alt="Gallery">
                        @endforeach
                    </div>
                    <div class="gallery-btn">
                        <a href="{{ route('gallery') }}">Lihat Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="news-gallery-circle1"></div>
        <div class="news-gallery-circle2"></div>
        <div class="news-gallery-circle3"></div>
        <div class="news-gallery-pattern1"></div>
        <div class="news-gallery-pattern2"></div>
        <div class="news-gallery-pattern3"></div>
    </section>
@endsection
