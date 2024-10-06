@extends('admin-component.template')

@section('title', 'Paragita Merchandise Label')

@section('page-style')
    <link href="{{ asset(asset('admin-assets/vendor/datatables/dataTables.bootstrap4.min.css')) }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Merchandise</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Label</h6>
            <a href="{{ route('adminMerchLabelAdd') }}" class="btn btn-primary btn-md">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($labels as $label)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $label->nama }}</td>
                                <td class="d-flex flex-wrap" style="gap: .5rem">
                                    <button type="button" class="btn btn-danger btn-sm del" data-toggle="modal" data-target="#myModal" data-id="{{ $label->id }}">Delete</button>
                                    <a href="{{ route('adminMerchLabelEdit', $label->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Menghapus label ini akan menghapus semua produk terkait</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <form method="POST" id="modalForm">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </form>
                </div>
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

        $('#myModal').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);

            $('#modalForm').attr('action', '/api/merch-label/delete/' + button.data('id'));
        })
    </script>
@endsection
