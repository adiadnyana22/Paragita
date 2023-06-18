@extends('admin-component.template')

@section('title', 'Paragita Achievement Year')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tahun</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Tahun</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminAchievementYearAddMethod') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" class="form-control" name="tahun" placeholder="Tahun ..." required>
                    @error('tahun')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Tambah</button>
                <a href="{{ route('adminAchievementYear') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
