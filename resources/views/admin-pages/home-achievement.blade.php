@extends('admin-component.template')

@section('title', 'Paragita Home Achievement')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penghargaan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminHomeAchievementMethod') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Achievement (Beranda)</label>
                    <input type="text" class="form-control" name="achievements" value="{{ $achievements->value }}" required>
                    @error('achievements')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Countries (Beranda)</label>
                    <input type="text" class="form-control" name="countries" value="{{ $countries->value }}" required>
                    @error('countries')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Costumes (Beranda)</label>
                    <input type="text" class="form-control" name="costumes" value="{{ $costumes->value }}" required>
                    @error('costumes')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Coaches (Beranda)</label>
                    <input type="text" class="form-control" name="coaches" value="{{ $coaches->value }}" required>
                    @error('coaches')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Choir Members (Beranda)</label>
                    <input type="text" class="form-control" name="choirMembers" value="{{ $choirMembers->value }}" required>
                    @error('choirMembers')<p class="text-danger mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary float-right">Ubah</button>
                <a href="{{ route('adminDashboard') }}" class="btn btn-info float-right mr-3">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@section('page-script')
@endsection
