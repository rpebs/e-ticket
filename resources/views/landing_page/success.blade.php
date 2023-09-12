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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-success text-white">
                        Pendaftaran Berhasil
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pendaftaran Berhasil Dilakukan !</h5>
                        <p class="card-text">Nama : {{ $data['nama'] }}</p>
                        <p class="card-text">Korda : {{ $data['korda'] }}</p>
                        <p class="card-text">Korwil : {{ $data['korwil'] }}</p>
                        <p class="card-text">No Whatsapp : {{ $data['no_wa'] }}</p>
                        <p class="card-text">Tanggal : {{ $data['tanggal'] }}</p>
                        <p class="card-text">Harga : {{ $data['harga'] }}</p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Pendaftaran akan diproses oleh Admin mohon tunggu proses
                        verifikasi
                        pendaftaran hingga 2 x 24 Jam
                    </div>
                </div>
            </div>
        </div>
    </div>


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
