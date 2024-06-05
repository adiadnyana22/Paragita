@extends('admin-component.template')

@section('title', 'Paragita Event')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Event</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Event</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminEventEditMethod', $event->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $event->judul }}" placeholder="Nama ..." required>
                    @error('judul')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="{{ $event->tanggal }}" placeholder="Tanggal ..." required>
                    @error('tanggal')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10" placeholder="Deskripsi ..." required>{{ $event->deskripsi }}</textarea>
                    @error('deskripsi')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Link <b>(Kosongkan jika link pemesanan tiket belum tersedia)</b></label>
                    <input type="text" class="form-control" name="link" value="{{ $event->link }}" placeholder="Link ...">
                    @error('link')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto <b>(File tidak perlu diisi jika foto tidak ingin diubah)</b></label>
                    <input type="file" class="form-control" name="foto" id="foto" accept=".png,.jpg,.jpeg">
                    @error('foto')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminEvent') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
