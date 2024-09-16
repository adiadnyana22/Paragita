@extends('components.template')

@section('title', 'Berita Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('content')
    <section class="bg-all-wrap">
        <section class="bg-banner-wrap">
            <section class="bg-banner-news-list">
                <div class="container">
                    <div class="banner-news-list-title">
                        <p>PSM UI Paragita</p>
                        <h1>Tentang kami</h1>
                    </div>
                </div>
            </section>
            <section class="bg-about">
                <div class="container">
                    <p>
                        {{ $about->value }}
                    </p>
                </div>
            </section>
        </section>
        <div class="background-circle1"></div>
        <div class="background-circle2"></div>
        <div class="background-circle3"></div>
        <div class="background-circle-pattern1"></div>
        <div class="background-circle-pattern2"></div>
    </section>
@endsection
