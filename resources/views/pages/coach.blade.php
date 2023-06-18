@extends('components.template')

@section('title', 'Coach Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/coach.css') }}">
@endsection

@section('content')
    <section class="bg-banner-coach">
        <div class="container">
            <div class="banner-coach-title">
                <p>PSM UI Paragita’s</p>
                <h1>Pelatih kami,</h1>
            </div>
        </div>
    </section>
    <section class="bg-coach-list">
        <div class="coach-list-image">
            @php
                $count = 1;
            @endphp
            @foreach($coachList as $coach)
                <a href="{{ route('coach', ['id' => $coach->id]) }}" class="@if(($coachId && $coachId == $coach->id) || (!$coachId && $count == 1)) {{ 'active' }} @endif"><img src="{{ asset('assets/images/coach/'.$coach->foto) }}" alt="Coach Paragita"></a>
                @php
                    $count += 1;
                @endphp
            @endforeach
        </div>
        <div class="coach-list-body">
            @php
                $count = 1;
            @endphp
            @foreach($coachList as $coach)
                @if(($coachId && $coachId == $coach->id) || (!$coachId && $count == 1))
                    <h2>{{ $coach->nama }}</h2>
                    <p>
                        {{ $coach->deskripsi }}
                    </p>
                    @php
                        $count += 1;
                    @endphp
                @endif
            @endforeach
        </div>
    </section>
@endsection
