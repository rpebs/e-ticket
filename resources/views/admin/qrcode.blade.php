<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pembayaran Berhasil</title>
</head>

<body>

    <center>
        <div class="container">
            <div class="row text-center mt-2">
                <div class="col-md-12">
                    <h1>Ini Adalah Tiket Anda</h1>
                </div>
            </div>
            <div class="row mt-5 mx-auto">

                <div class="col-md-12">

                    <img class="mx-auto" width="300px" src="/{{ $data->qrcode }}">


                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <p>Atas Nama : {{ $data->nama }}</p>
                        <p>Whatsapp : {{ $data->no_wa }}</p>
                        <p>Korwil : {{ $data->korwil }}</p>
                        <p>Korda : {{ $data->korda }}</p>
                        <p>Peserta : {{ $data->peserta }} Orang</p>
                        {{-- <p>Nama Hotel : {{ $data->nama_hotel }}</p>
                        <p>No Kamar : {{ $data->no_kamar }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </center>


    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
