@extends('components.template')

@section('title', 'Achievement Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/achievement.css') }}">
@endsection

@section('content')
    <section class="bg-banner-achievement">
        <div class="banner-achievement-title">
            <div class="container">
                <p>PSM UI Paragita’s</p>
                <h1>Achievements</h1>
            </div>
        </div>
        <div class="banner-achievement-link">
            <div class="container">
                <ul>
                    @foreach($years as $year)
                        <li><a href="#{{ $year->nama }}">{{ $year->nama }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <section class="bg-achievement-list">
            <div class="container">
                @foreach($years as $year)
                <div class="achievement-list-container" id="{{ $year->nama }}">
                    <h2>{{ $year->nama }}</h2>
                    <div class="achievement-list-body">
                        @foreach($year->achievement as $achievement)
                            <div class="achievement-list-card">
                                <div class="achievement-list-image">
                                    <img src="{{ asset('assets/images/achievement/'.$achievement->foto) }}" alt="Achievement Image">
                                    <div class="backdrop"></div>
                                </div>
                                <div class="achievement-list-text">
                                    <h3>{{ $achievement->judul }}</h3>
                                    <ul>
                                        @foreach(explode(',', $achievement->deskripsi) as $desc)
                                            <li>{{ trim($desc) }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </section>

@endsection
