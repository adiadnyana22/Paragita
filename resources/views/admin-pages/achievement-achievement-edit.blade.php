@extends('admin-component.template')

@section('title', 'Paragita Achievement')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penghargaan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Penghargaan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminAchievementAchievementEditMethod', $achievement->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="judul" value="{{ $achievement->judul }}" placeholder="Nama ..." required>
                    @error('judul')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <select class="form-control" name="tahun" required>
                        <option value="" disabled>-- Pilih Tahun Penghargaan --</option>
                        @foreach($years as $year)
                            <option value="{{ $year->id }}" {{ ($achievement->year_id == $year->id) ? 'selected' : '' }}>{{ $year->nama }}</option>
                        @endforeach
                    </select>
                    @error('tahun')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi <b>(Berikan tanda koma "," untuk setiap deskripsi yang ingin ditambahkan)</b></label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10" placeholder="Deskripsi ..." required>{{ $achievement->deskripsi }}</textarea>
                    @error('deskripsi')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto <b>(File tidak perlu diisi jika foto tidak ingin diubah)</b></label>
                    <input type="file" class="form-control" name="foto" id="foto" accept=".png,.jpg,.jpeg">
                    @error('foto')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminAchievementAchievement') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
