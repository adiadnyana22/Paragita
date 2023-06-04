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
                        @foreach($news as $new)
                            <a href="{{ route('newsDetail', ['news' => $new->id]) }}" class="news-list-card">
                                <div class="news-list-img">
                                    <img src="{{ asset('assets/images/news/'.$new->foto) }}" alt="News">
                                    <div class="backdrop"></div>
                                </div>
                                <div class="news-list-text">
                                    <span>{{ date("F j, Y", strtotime($new->tanggal)) }}</span>
                                    <h2>{{ $new->judul }}</h2>
                                    <p>
                                        {{ $new->isi }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
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
                    @foreach($otherNews as $news)
                        <a class="other-news-card" href="{{ route('newsDetail', ['news' => $news->id]) }}">
                            <div class="other-news-image">
                                <img src="{{ asset('assets/images/news/'.$news->foto) }}" alt="News">
                                <div class="backdrop"></div>
                            </div>
                            <div class="other-news-text">
                                <p>{{ date("F j, Y", strtotime($news->tanggal)) }}</p>
                                <h3>{{ $news->judul }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="background-circle1"></div>
        <div class="background-circle2"></div>
        <div class="background-circle3"></div>
    </section>
@endsection
