@extends('admin.layout.main')

@section('title')
    Data Register
@endsection

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        #preview {
            width: 500px;
            height: 500px;
            margin: 0px auto;
        }
    </style>
@endsection

@section('path')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Scan QR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/scan">Scan QR</a></li>
                        <li class="breadcrumb-item active">Scan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">Silahkan Scan QR Anda Pada Kamera</h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <video id="preview" style="margin-top: -80px "></video>
            </div>
        </div>
        <div class="row" style="margin-top: -50px">
            <div class="col-md-5"></div>
            <div class="col-md-6">
                <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        var scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            scanPeriod: 5,
            mirror: false
        });
        scanner.addListener('scan', function(content) {
            // alert('INI ADALAH HASIL QR NYA ' + content);
            $.ajax({
                url: 'cektiket/' + content,
                type: 'GET',
                success: function(response) {
                    if (response.result == 'success') {
                        Swal.fire(
                            'Tiket anda valid ! Silahkan Masuk',
                            `Nama Anda : ${response.data.nama} <br> No WA : ${response.data.no_wa}`,
                            'success'
                        );
                    } else if (response.result == 'habis') {
                        Swal.fire(
                            'Tiket anda telah digunakan semua peserta ! Silahkan Hubungi Admin',
                            'Mohon maaf sepertinya tiket anda bermasalah !',
                            'error'
                        );
                    } else {
                        Swal.fire(
                            'Tiket anda bermasalah ! Silahkan Hubungi Admin',
                            'Mohon maaf sepertinya tiket anda bermasalah !',
                            'error'
                        );

                    }
                }
            });
            //window.location.href=content;
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
                $('[name="options"]').on('change', function() {
                    if ($(this).val() == 1) {
                        if (cameras[0] != "") {
                            scanner.start(cameras[0]);
                        } else {
                            alert('No Front camera found!');
                        }
                    } else if ($(this).val() == 2) {
                        if (cameras[1] != "") {
                            scanner.start(cameras[1]);
                        } else {
                            alert('No Back camera found!');
                        }
                    }
                });
            } else {
                console.error('No cameras found.');
                alert('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
            alert(e);
        });
    </script>
@endsection
