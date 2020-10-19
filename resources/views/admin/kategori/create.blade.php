@extends('admin.layout.master')


@section('content')
<link rel="stylesheet" href="{{ asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/themify-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/vendors/selectFX/css/cs-skin-elastic.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{ $pagename }}</strong>
                    </div>
                        <div class="card-body card-block">
                            <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kategori</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="txtnama_kategori" placeholder="Masukan Nama Kategori" class="form-control">
                                        @error('txtnama_kategori')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Status Tugas</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="radiostatus_kategori" value=0 class="form-check-input">Masih Berjalan
                                                <div class="col col-md-6"></div>
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="radiostatus_kategori" value=1 class="form-check-input">Selesai
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col col-md-3"></div>
                                    <div class="col col-md-9">
                                        @error('radiostatus_kategori')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>  
                            

                            <script src="{{ asset('public/vendors/jquery/dist/jquery.min.js') }}"></script>
                            <script src="{{ asset('public/vendors/popper.js/dist/umd/popper.min.js') }}"></script>

                            <script src="{{ asset('public/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
                            <script src="{{ asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js') }}"></script>

                            <script src="{{ asset('public/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('public/assets/js/main.js') }}"></script>
@endsection