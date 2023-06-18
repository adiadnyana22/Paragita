@extends('admin-component.template')

@section('title', 'Paragita About Coach')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Coach</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Coach</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminAboutCoachEditMethod', $coach->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $coach->nama }}" placeholder="Nama ..." required>
                    @error('nama')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10" placeholder="Deskripsi ..." required>{{ $coach->deskripsi }}</textarea>
                    @error('deskripsi')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <img src="{{ asset('assets/images/coach/'.$coach->foto) }}" alt="Coach" class="w-25 d-block mb-2">
                    <label class="form-label">Foto <b>(File tidak perlu diisi jika foto tidak ingin diubah)</b></label>
                    <input type="file" class="form-control" name="foto" id="foto" accept=".png,.jpg,.jpeg">
                    @error('foto')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminAboutCoach') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
