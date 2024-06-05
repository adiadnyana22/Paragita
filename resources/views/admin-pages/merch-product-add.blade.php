@extends('admin-component.template')

@section('title', 'Paragita Merchandise')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Merchandise</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Merchandise</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminMerchProductAddMethod') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="judul" value="{{ old('judul') }}" placeholder="Nama Merchandise ..." required>
                    @error('judul')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10" placeholder='Deskripsi ...' required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ old('harga') }}" placeholder="Harga ..." required>
                    @error('harga')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" class="form-control" name="link" value="{{ old('link') }}" placeholder="Link ..." required>
                    @error('link')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Label</label>
                    <select class="form-control" name="label" required>
                        <option value="" disabled {{ !old('label') ? 'selected' : '' }}>-- Pilih Label Merchandise --</option>
                        @foreach($labels as $label)
                            <option value="{{ $label->id }}" {{ (old('label') && (old('label') == $label->id)) ? 'selected' : '' }}>{{ $label->nama }}</option>
                        @endforeach
                    </select>
                    @error('label')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto" accept=".png,.jpg,.jpeg" required>
                    @error('foto')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Tambah</button>
                <a href="{{ route('adminMerchProduct') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
