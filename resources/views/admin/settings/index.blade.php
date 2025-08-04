@extends('admin.layout.main')

@section('title')
    Data Register
@endsection

@section('link')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('path')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Register</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/data_register">Data</a></li>
                        <li class="breadcrumb-item active">Data Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">

                {{--  --}}
                <div class="card">
                    <div class="card-header">
                        <h4>Pengaturan Event</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="col-12">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Nama Event</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group" id="tgl">
                                        <label for="">Tanggal</label>
                                        <input type="text" name="tanggal[]" class="form-control">
                                    </div>
                                    <div id="#newForm"></div>
                                    <button id="addTgl" class="btn btn-sm btn-primary">Tambah Tanggal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--  --}}

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.js"></script>
    <script type="text/javascript">
        $('#addTgl').click(function(e) {
            e.preventDefault();
            newInput = '<div id="row"> <div class="input-group m-3">' +
                '<div class="input-group-prepend">' +
                '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash"></i> Delete</button> </div>' +
                '<input type="text" class="form-control m-input"> </div> </div>';


            $('#newForm').append(newInput);
        })
    </script>
@endsection
