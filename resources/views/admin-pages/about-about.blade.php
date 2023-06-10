@extends('admin-component.template')

@section('title', 'Paragita About Paragita UI')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Paragita UI</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminAboutAboutMethod') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Paragita UI (Tentang Kami)</label>
                    <textarea name="about" id="about" class="form-control" rows="10" placeholder="Input keterangan Paragita UI yang akan tampil di tentang kami ...">{{ $about->value }}</textarea>
                    @error('about')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminDashboard') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
