@extends('components.template')

@section('title', 'Berita Paragita')

@section('pageHeadExtention')
    <link rel="stylesheet" href="{{ asset('assets/css/news-detail.css') }}">
@endsection

@section('content')
    <section class="bg-all-wrap">
        <section class="bg-banner-news-img">
            <img src="{{ asset('assets/images/news.png') }}" alt="News">
            <div class="backdrop"></div>
        </section>
        <section class="bg-news-content">
            <div class="container">
                <h1>The Resonanz Children’s Choir Raih Juara European Grand Prix in Choral Singing</h1>
                <p>
                    Ratna Kusumaningrum Katamsi, atau yang dikenal dengan Aning Katamsi, merupakan Principal Conductor dan pelatih dari Paduan Suara Mahasiswa Universitas Indonesia (PSM UI) Paragita. Bakat musiknya sudah diasah sejak kecil oleh ibunya, Pranawengrum Katamsi, yang merupakan soprano terkemuka di Indonesia. Ia kemudian melanjutkan pendidikan vokalnya di Sekolah Musik Yayasan Pendidikan Musik (YPM) dengan bimbingan dari beberapa guru terkemuka, antara lain Catharina W. Leimena dan Lee Alison Sibley.
                </p>
                <p>
                    Selain vokal, Aning Katamsi juga menekuni bidang piano di bawah bimbingan Susiana A. Wibowo dan Iravati M. Sudiarso di Sekolah Musik YPM. Ia mengikuti masterclass vokal dari beberapa ahli, seperti Ruth Drucker, Andrea Ehrenreich, Adib Fazah, Lee Alison Sibley, dan Rudolf Jansen.
                </p>
                <p>
                    Pada tahun 2008, ia meluncurkan buku "Klasik Indonesia" yang berisi kumpulan lagu Seriosa Indonesia karya Binsar Sitompul, F.X Sutopo, dan Mochtar Embut. Ia juga terlibat dalam beberapa proyek penerbitan buku, termasuk sebagai salah satu editor pada buku "Panduan Pelafalan Seriosa Indonesia" (2011) dan "Antologi Musik Klasik Indonesia" (2013) yang diterbitkan bersama Dewan Kesenian Jakarta. Dengan pengalaman dan kiprahnya di bidang musik klasik, Aning Katamsi telah memberikan kontribusi besar dalam pengembangan bakat musikal di Indonesia.
                </p>
            </div>
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
