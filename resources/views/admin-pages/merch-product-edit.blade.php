@extends('admin-component.template')

@section('title', 'Paragita Merchandise')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Merchandise</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Merchandise</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminMerchProductEditMethod', $merchandise->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="judul" value="{{ $merchandise->judul }}" placeholder="Nama Merchandise ..." required>
                    @error('judul')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10" placeholder="Deskripsi ..." required>{{ $merchandise->deskripsi }}</textarea>
                    @error('deskripsi')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $merchandise->harga }}" placeholder="Harga ..." required>
                    @error('harga')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" class="form-control" name="link" value="{{ $merchandise->link }}" placeholder="Link ..." required>
                    @error('link')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Label</label>
                    <select class="form-control" name="label" required>
                        <option value="" disabled>-- Pilih Label Merchandise --</option>
                        @foreach($labels as $label)
                            <option value="{{ $label->id }}" {{ ($merchandise->label_id == $label->id) ? 'selected' : '' }}>{{ $label->nama }}</option>
                        @endforeach
                    </select>
                    @error('label')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto <b>(File tidak perlu diisi jika foto tidak ingin diubah)</b></label>
                    <input type="file" class="form-control" name="foto" id="foto" accept=".png,.jpg,.jpeg">
                    @error('foto')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminMerchProduct') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
