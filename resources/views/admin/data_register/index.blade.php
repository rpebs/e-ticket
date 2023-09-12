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
    <style>
        .zoom-image {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .zoom-image img {
            transition: transform .3s;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            display: block;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
        }

        .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
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
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="tab_karyawan">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>No Whatsapp</th>
                                    <th>Korwil</th>
                                    <th>Korda</th>
                                    <th>Peserta</th>
                                    <th>Anak</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Bukti</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--  --}}

            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
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
        $(document).ready(function() {

            function openModal(img) {
                var modal = document.getElementById("myModal");
                var modalImg = document.getElementById("modalImage");

                modal.style.display = "block";
                modalImg.src = img.src;
            }

            function closeModal() {
                var modal = document.getElementById("myModal");
                modal.style.display = "none";
            }

            load_data();


            function load_data() {
                $('#tab_karyawan').DataTable({
                    dom: '<"text-center mb-3"B><"row"<"col-md-6"l><"col-md-6 text-right"f>>rtip',
                    buttons: ['csv', 'excel', 'pdf'],
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '/data/register/show',
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            width: '40px',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'no_wa',
                            name: 'no_wa'
                        },
                        {
                            data: 'korwil',
                            name: 'korwil'
                        },
                        {
                            data: 'korda',
                            name: 'korda'
                        },
                        {
                            data: 'jml_peserta',
                            name: 'jml_peserta'
                        },
                        {
                            data: 'jml_anak',
                            name: 'jml_anak'
                        },
                        {
                            data: 'harga',
                            name: 'harga',
                            render: $.fn.dataTable.render.number('.', '.', 0, 'Rp ')
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },

                        {
                            data: 'bukti',
                            name: 'bukti',
                            render: function(data, type, full, meta) {
                                return '<a class="zoom-image" href="' + data +
                                    '" target="_blank"><img width="50px" src="' + data +
                                    '" ></a>'
                            },
                            title: 'bukti',
                            orderable: true,
                            searchable: true
                        },


                        {
                            data: 'aksi',
                            name: 'Aksi',
                            orderable: false,
                            searchable: false
                        }
                    ],

                });
            }

        });
    </script>
@endsection
