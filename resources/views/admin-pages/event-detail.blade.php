@extends('admin-component.template')

@section('title', 'Paragita Event')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Event</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/ticket/'.$event->foto) }}" alt="Event" class="w-100">
                </div>
                <div class="col-lg-7">
                    <h1 class="mb-3 mt-2 text-dark">{{ $event->judul }}</h1>
                    <div class="row">
                        <div class="col-md-4"><p><b>Tanggal</b> : {{ $event->tanggal }}</p></div>
                        <div class="col-md-8"><p><b>Link</b> : {{ $event->link ?? 'Link belum tersedia' }}</p></div>
                    </div>
                    <p>
                        {{ $event->deskripsi }}
                    </p>
                </div>
            </div>
            <a href="{{ route('adminEvent') }}" class="btn btn-info float-right mr-3 mt-2">Kembali</a>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
