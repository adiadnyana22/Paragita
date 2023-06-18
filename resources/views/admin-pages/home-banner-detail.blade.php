@extends('admin-component.template')

@section('title', 'Paragita Home Banner')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Banner</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/images/carousel/'.$carousel->foto) }}" alt="Carousel" height="400px">
                </div>
            </div>
            <a href="{{ route('adminHomeCarousel') }}" class="btn btn-info float-right mr-3 mt-2">Kembali</a>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
