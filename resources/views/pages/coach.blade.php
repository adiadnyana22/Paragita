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
            <a href="#" class="active"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
            <a href="#"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
            <a href="#"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
            <a href="#"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
            <a href="#"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
            <a href="#"><img src="{{ asset('assets/images/coachImage.png') }}" alt="Coach Paragita"></a>
        </div>
        <div class="coach-list-body">
            <h2>Aning Katamsi</h2>
            <p>
                Ratna Kusumaningrum Katamsi, atau yang dikenal dengan Aning Katamsi, merupakan Principal Conductor dan pelatih dari Paduan Suara Mahasiswa Universitas Indonesia (PSM UI) Paragita. Bakat musiknya sudah diasah sejak kecil oleh ibunya, Pranawengrum Katamsi, yang merupakan soprano terkemuka di Indonesia. Ia kemudian melanjutkan pendidikan vokalnya di Sekolah Musik Yayasan Pendidikan Musik (YPM) dengan bimbingan dari beberapa guru terkemuka, antara lain Catharina W. Leimena dan Lee Alison Sibley.
                <br><br>
                Selain vokal, Aning Katamsi juga menekuni bidang piano di bawah bimbingan Susiana A. Wibowo dan Iravati M. Sudiarso di Sekolah Musik YPM. Ia mengikuti masterclass vokal dari beberapa ahli, seperti Ruth Drucker, Andrea Ehrenreich, Adib Fazah, Lee Alison Sibley, dan Rudolf Jansen.
                <br><br>
                Pada tahun 2008, ia meluncurkan buku "Klasik Indonesia" yang berisi kumpulan lagu Seriosa Indonesia karya Binsar Sitompul, F.X Sutopo, dan Mochtar Embut. Ia juga terlibat dalam beberapa proyek penerbitan buku, termasuk sebagai salah satu editor pada buku "Panduan Pelafalan Seriosa Indonesia" (2011) dan "Antologi Musik Klasik Indonesia" (2013) yang diterbitkan bersama Dewan Kesenian Jakarta. Dengan pengalaman dan kiprahnya di bidang musik klasik, Aning Katamsi telah memberikan kontribusi besar dalam pengembangan bakat musikal di Indonesia.
            </p>
        </div>
    </section>
@endsection
