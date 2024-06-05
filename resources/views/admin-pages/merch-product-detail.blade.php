@extends('admin-component.template')

@section('title', 'Paragita Merchandise')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Merchandise</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Merchandise</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/merchandise/'.$merchandise->foto) }}" alt="Merchandise" class="w-100">
                </div>
                <div class="col-lg-7">
                    <h1 class="mb-3 mt-2 text-dark">{{ $merchandise->judul }}</h1>
                    <div class="row">
                        <div class="col-md-6"><p><b>Ketersediaan</b> : {{ $merchandise->status == 1 ? 'Tersedia' : 'Tidak tersedia' }}</p></div>    
                        <div class="col-md-6"><p><b>Label</b> : {{ $merchandise->label->nama }}</p></div>
                        <div class="col-md-4"><p><b>Harga</b> : Rp {{ number_format($merchandise->harga) }}</p></div>
                        <div class="col-md-8"><p><b>Link</b> : {{ $merchandise->link }}</p></div>
                    </div>
                    <p>
                        {{ $merchandise->deskripsi }}
                    </p>
                </div>
            </div>
            <a href="{{ route('adminMerchProduct') }}" class="btn btn-info float-right mr-3 mt-2">Kembali</a>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
