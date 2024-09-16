@extends('components.template-index')

@section('title', 'Merchandise Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/merchandise.css') }}">
@endsection

@section('content')
    <section class="bg-all-wrap">
        <section class="bg-banner-wrap">
            <section class="bg-banner-merchandise">
                <div class="container">
                    <div class="banner-merchandise-title">
                        <p>{{ $caption->value }}</p>
                        <h1>{{ $title->value }}</h1>
                        <span>{{ $description->value }}</span>
                    </div>
                </div>
            </section>
            <section class="bg-merchandise">
                <div class="container">
                    <div class="merchandise" id="merchandise">
                        @foreach ($merchandise as $merch)
                        <div class="merchandise-card">
                            <div class="merchandise-image">
                                <img src="{{ asset('assets/images/merchandise/'.$merch->foto) }}" alt="Product">
                                <div class="backdrop">
                                    <a href="{{ $merch->link }}" target="_blank">Beli di Tokopedia <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                            <div class="merchandise-text">
                                <strong>Rp {{ number_format($merch->harga) }}</strong>
                                <h2>{{ $merch->judul }}</h2>
                                <p>{{ $merch->deskripsi }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="merchandise-button">
                        <button id="merch-btn">Lihat lebih banyak</button>
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

    <script>
        let btn = document.querySelector('#merch-btn');
        let container = document.querySelector('#merchandise');

        btn.addEventListener('click', async () => {
            let api = await fetch('{{ route('merchandiseAPI') }}');
            let response = await api.json();

            let temp = '';
            
            response.forEach((merch) => {
                temp += `<div class="merchandise-card">
                            <div class="merchandise-image">
                                <img src="assets/images/merchandise/${merch.foto}" alt="Product">
                                <div class="backdrop">
                                    <a href="${merch.link}" target="_blank">Beli di Tokopedia <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                            <div class="merchandise-text">
                                <strong>Rp ${new Intl.NumberFormat().format(merch.harga)}</strong>
                                <h2>${merch.judul}</h2>
                                <p>${merch.deskripsi}</p>
                            </div>
                        </div>`;
            });

            container.innerHTML = temp;
            btn.remove();
        });
    </script>
@endsection
