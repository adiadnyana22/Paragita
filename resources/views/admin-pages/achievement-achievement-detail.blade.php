@extends('admin-component.template')

@section('title', 'Paragita Achievement')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penghargaan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Penghargaan</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/achievement/'.$achievement->foto) }}" alt="Achievement" class="w-100">
                </div>
                <div class="col-lg-7">
                    <h1 class="mb-3 mt-2 text-dark">{{ $achievement->judul }}</h1>
                    <ul>
                        @foreach(explode(',', $achievement->deskripsi) as $detail)
                            <li>{{ trim($detail) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="{{ route('adminAchievementAchievement') }}" class="btn btn-info float-right mr-3 mt-2">Kembali</a>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
