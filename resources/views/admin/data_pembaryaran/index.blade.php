@extends('admin.layout.main')

@section('title')
    Data pembayaran
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
    @include('sweetalert::alert')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data pembayaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/data_pembayaran">Data</a></li>
                        <li class="breadcrumb-item active">Data pembayaran</li>
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
                                    <th>Nama</th>
                                    <th>No Whatsapp</th>
                                    <th>Kode</th>
                                    <th>Peserta</th>
                                    {{-- <th>Nama Hotel</th>
                                    <th>No Kamar</th> --}}
                                    <th>Qrcode</th>
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
        {{-- <div class="modal fade" id="editJabatan" tabindex="-1" aria-labelledby="kat_editLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kat_editLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/data/pembayaran/sethotel" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <input type="hidden" name="id" id="id">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nama">Nama Hotel</label>
                                            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel"
                                                required>
                                            <label for="nama">No Kamar</label>
                                            <input type="text" class="form-control" id="no_kamar" name="no_kamar"
                                                required>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                        class="fas fa-sign-out-alt"></i>
                                    Close</button>
                                <button type="submit" class="btn btn-primary simpan-edit-p"><i class="fas fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> --}}
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

            load_data();


            function load_data() {
                $('#tab_karyawan').DataTable({
                    dom: '<"text-center mb-3"B><"row"<"col-md-6"l><"col-md-6 text-right"f>>rtip',
                    buttons: ['csv', 'excel', 'pdf'],
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '/data/pembayaran/show',
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            width: '40px',
                            orderable: false,
                            searchable: false
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
                            data: 'kode',
                            name: 'kode'
                        },
                        {
                            data: 'peserta',
                            name: 'peserta'
                        },
                        // {
                        //     data: 'nama_hotel',
                        //     name: 'nama_hotel'
                        // },
                        // {
                        //     data: 'no_kamar',
                        //     name: 'no_kamar'
                        // },

                        {
                            data: 'qrcode',
                            name: 'qrcode',
                            render: function(data, type, full, meta) {
                                return '<img width="50px" src="/' + data + '">'
                            },
                            title: 'qrcode',
                            orderable: true,
                            searchable: true
                        },


                        {
                            data: 'aksi',
                            name: 'Aksi',
                            orderable: false,
                            searchable: false
                        },
                    ],

                });
            }

        });



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.editJabatan', function(e) {
            const id = $(this).data('id');
            $.ajax({
                url: '/data_pembayaran/getid/' + id,
                type: 'GET',
                success: function(response) {
                    $('#editJabatan').modal('show');
                    $('#id').val(response.result.id);
                    $('#nama_hotel').val(response.result.nama_hotel);
                    $('#no_kamar').val(response.result.no_kamar);
                }
            });
        });
    </script>
@endsection
