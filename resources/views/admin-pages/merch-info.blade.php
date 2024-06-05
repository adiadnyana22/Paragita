@extends('admin-component.template')

@section('title', 'Paragita Informasi Merchandise')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Merchandise</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Halaman</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminMerchInfoMethod') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Caption Halaman Merchandise</label>
                    <input type="text" class="form-control" name="caption" value="{{ $caption->value }}" required>
                    @error('caption')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul Halaman Merchandise</label>
                    <input type="text" class="form-control" name="title" value="{{ $title->value }}" required>
                    @error('title')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Halaman Merchandise</label>
                    <input type="text" class="form-control" name="description" value="{{ $description->value }}" required>
                    @error('description')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminDashboard') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
