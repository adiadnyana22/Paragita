@extends('components.template')

@section('title', 'Berita Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
@endsection

@section('content')
    <section class="bg-all-wrap">
        <section class="bg-banner-wrap">
            <section class="bg-banner-news-list">
                <div class="container">
                    <div class="banner-news-list-title">
                        <p>PSM UI Paragita</p>
                        <h1>Galeri</h1>
                    </div>
                </div>
            </section>
            <section class="bg-gallery">
                <div class="container">
                    <div class="gallery-list">
                        @foreach($gallery as $gal)
                            <a data-src="{{ asset('assets/images/gallery/'.$gal->foto) }}" data-fancybox="gallery">
                                <img src="{{ asset('assets/images/gallery/'.$gal->foto) }}" alt="Gallery">
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
        <div class="background-circle1"></div>
        <div class="background-circle2"></div>
        <div class="background-circle3"></div>
        <div class="background-circle-pattern1"></div>
        <div class="background-circle-pattern2"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {

        });
    </script>
@endsection
