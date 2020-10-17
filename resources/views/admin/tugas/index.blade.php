@extends('admin.layout.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    @if (session()->get('sukses'))
                        <div class="alert alert-success">
                            {{ session()->get('sukses') }}
                        </div>
                    @endif

                    <div class="card-header">
                        <strong class="card-title">{{ $pageName }}</strong>
                        <a href="{{ route('tugas.create') }}" class="btn btn-primary pull-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i=>$row)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $row->nama_tugas }}</td>
                                        <td>{{ $row->id_kategori }}</td>
                                        <td>{{ $row->ket_tugas }}</td>
                                        <td>{{ $row->status_tugas }}</td>
                                        <td><a href="{{ route('tugas.edit', $row->id) }}" class="btn btn-primary">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


    <script src="{{ asset('public/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('public/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endsection