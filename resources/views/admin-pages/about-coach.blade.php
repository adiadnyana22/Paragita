@extends('admin-component.template')

@section('title', 'Paragita About Coach')

@section('page-style')
    <link href="{{ asset(asset('admin-assets/vendor/datatables/dataTables.bootstrap4.min.css')) }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Coaches</h6>
            <a href="{{ route('adminAboutCoachAdd') }}" class="btn btn-primary btn-md">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($coaches as $coach)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $coach->nama }}</td>
                                <td>{{ (\Illuminate\Support\Str::length($coach->deskripsi) > 300) ? \Illuminate\Support\Str::substr($coach->deskripsi, 0, 300).'...' : $coach->deskripsi }}</td>
                                <td class="d-flex flex-wrap" style="gap: .5rem">
                                    <form method="POST" action="{{ route('adminAboutCoachDeleteMethod', $coach->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm del">Delete</button>
                                    </form>
                                    <a href="{{ route('adminAboutCoachEdit', $coach->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('adminAboutCoachDetail', $coach->id) }}" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('admin-assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
