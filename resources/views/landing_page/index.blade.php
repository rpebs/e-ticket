<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HUT Buser Rental Nasional</title>

    <link rel="icon" href="{{ asset('logo.png') }}" type="image/ico" />
    <!-- Bootstrap -->
    <link href="{{ asset('landing_page/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--plugins-->
    <link href="{{ asset('landing_page/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/bower_components/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/bower_components/lightbox2/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/et-line-icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/css/animate.css') }}" rel="stylesheet">
    <!--custom css file-->
    <link href="{{ asset('landing_page/css/style.css') }}" rel="stylesheet">



</head>

<body data-spy="scroll">
    <!-- Static navbar -->
    <header class="navbar navbar-default header-v2 navbar-fixed-top">
        <div class="container">
            <div class="navbar-header scroll-to">
                {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">RIDEVERTISEMENT</a> --}}
                <img src="/logo.png" alt="logo" width="60px">
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav scroll-to navbar-nav">
                    <li class="active"><a href="#home">home</a></li>
                    <li><a href="#features">Tahapan Registrasi</a></li>
                    <li><a href="#hiburan">Hiburan</a></li>
                    <li><a href="#tempat_wisata">Tempat Wisata</a></li>
                    <li><a href="#formulir">Formulir</a></li>
                    <li><a href="#newsletter">kontak </a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right socials">
                    {{-- <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li> --}}
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </header>
    <!--navigation end here-->


    <section id="home" class="home-contact">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-home-text text-center">
                            <h4>HADIRILAH !</h4>
                            <h1>HUT BRN KE - 6.</h1>
                            <p>Rayakan Kesuksesan Bersama !.</p>
                        </div>
                    </div>
                    {{-- <div class="col-sm-5">
                        <img src="landing_page/images/pamflet.jpeg" alt="" width="300">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>


    <!--modal of video-->
    <!-- Modal -->
    {{-- <div class="modal video-modal fade" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="video-popup">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="fa fa-times"></span></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="vimeo-video" src="http://player.vimeo.com/video/57175742"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!--end the modal of video-->

    <section id="features">
        <div class="container">
            {{-- <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <h2>Keterangan Acara</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                        temporibus, adipisci aliquid inventore et quaerat alias.</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.1s">
                        <i class="icon-mobile"></i>
                        <h3>Mobile friendly</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.2s">
                        <i class="icon-chat red"></i>
                        <h3>24/7 support</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.3s">
                        <i class="icon-layers green"></i>
                        <h3>SASS preprocessors </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.4s">
                        <i class="icon-pencil blue"></i>
                        <h3>Easy to use</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.5s">
                        <i class="icon-gears yellow"></i>
                        <h3>Free updates</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box wow animated fadeInDown" data-wow-delay="0.6s">
                        <i class="icon-browser gold"></i>
                        <h3>Cross Browser</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                            temporibus.
                        </p>
                    </div>
                </div>
            </div> --}}
            <hr>

            <div class="row vertical-align-child aside-feature-row">
                <div class="col-sm-6 margin-b-30 wow animated fadeInLeft" data-wow-delay="0.1s">
                    <img src="/landing_page/images/pamflet.jpeg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-5 col-sm-offset-1 wow animated fadeInRight" data-wow-delay="0.2s">
                    <h3>Growing Of Spectacular</h3>
                    <p>
                        Hadirilah acara HUT BRN Ke - 6 yang dibintangi oleh artis ternama, dan bintang tamu menarik
                        lainnya.
                        Anda juga mendapatkan berbagai fasilitas menarik dan pengalaman yang menyenangkan.
                    </p>
                    {{-- <p class="collapse" id="collapseExample">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit voluptatem dolores eos
                        qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.
                    </p>
                    <a class="btn btn-icon-only" role="button" data-toggle="collapse" href="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        More
                    </a> --}}
                </div>
            </div>




            <div class="space-40"></div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-quote"></i>
                    <h2>Tahapan Registrasi</h2>
                    <p>Berikut adalah waktu dan harga registrasi acara ini.</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="testi-box left clearfix wow animated fadeInDown" data-wow-delay="0.1s">
                        <span class="thumb">
                            <img src="images/t-1.jpg" class="img-circle img-responsive" alt="">
                        </span>
                        <div class="testi-text">
                            <h3>1 Juli - 30 September</h3>
                            <h4>Rp. 800.000</h4>
                            {{-- <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-empty"></i>
                                </span> --}}
                        </div>
                    </div>
                    <!--testi box end-->
                    <div class="testi-box left clearfix wow animated fadeInDown" data-wow-delay="0.2s">
                        <span class="thumb">
                            <img src="images/t-2.jpg" class="img-circle img-responsive" alt="">
                        </span>
                        <div class="testi-text">
                            <h3>1 Oktober - 19 Oktober</h3>
                            <h4>Rp. 1.000.000</h4>
                        </div>
                    </div>
                    <!--testi box end-->
                </div>
                <!--col end-->
                <div class="col-sm-6 ">
                    <div class="testi-box right clearfix wow animated fadeInDown" data-wow-delay="0.3s">
                        <span class="thumb">
                            <img src="images/t-2.jpg" class="img-circle img-responsive" alt="">
                        </span>
                        <div class="testi-text">
                            <h3>20 Oktober - 22 Oktober</h3>
                            <h4>Rp. 1.500.000</h4>
                        </div>
                    </div>
                    <!--testi box end-->
                    {{-- <div class="testi-box right clearfix wow animated fadeInDown" data-wow-delay="0.4s">
                        <span class="thumb">
                            <img src="images/t-1.jpg" class="img-circle img-responsive" alt="">
                        </span>
                        <div class="testi-text">
                            <h3>Fasilitas</h3>
                            <h4>Kaos & Kamar 3 Hari</h4>
                        </div>
                    </div> --}}
                    <!--testi box end-->
                </div>
                <!--col end-->
            </div>
        </div>
    </section>

    <section class="gallery-container" id="hiburan">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-calendar"></i>
                    <h2>Hiburan</h2>
                    <p>Berikut adalah hiburan dari acara ini.</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://www.cakrawalanews.co.id/images/view/-A971A077-B40E-4A68-ACDC-F9E635C019A8.jpeg"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Kotak Band
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://assets.pikiran-rakyat.com/crop/4x134:1079x950/x/photo/2022/12/28/3515351006.jpg"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Niken Salindri

                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2023/05/27/shinta-arsinta-3-4244945691.jpg"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="images/img-3.jpg" data-lightbox="gallery">
                                Shinta Arshinta
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://i.ytimg.com/vi/y2tEaKNNORw/maxresdefault.jpg" alt=""
                            class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                DJ. Biddy
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->

            </div>

        </div>
    </section>

    <section class="gallery-container" id="tempat_wisata">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-calendar"></i>
                    <h2>Tempat Wisata</h2>
                    <p>Tempat Wisata Di Daerah Malang.</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://1.bp.blogspot.com/-O0abBLx988A/X9ocJ5dWJLI/AAAAAAAAWRg/-HFhE62LrPoDWkrqJPajW402_UGlQU-SACPcBGAYYCw/s2048/7.png"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Gunung Bromo
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://www.agentwisatabromo.com/wp-content/uploads/2015/10/Jatim-Park-Wahana-Wisata-Terbaru-Di-Kota-Batu-Malang.jpg"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Jatim Park

                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://www.nativeindonesia.com/foto/eco-green-park/Landmark-Eco-Green-Park.jpg"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="" data-lightbox="gallery">
                                Eco Green Park
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1602843360/blog/xe0kmiauxwzs3tamuend.webp"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Kampung Warna Warni
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1624853932/blog/ogapz4zwfa21qlnr2bkc.webp"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Taman Labirin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gallery">
                        <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1624853678/blog/puca3gyjn1yd1azvd1vy.webp"
                            alt="" class="img-responsive">
                        <div class="gallery-overlay">
                            <a href="#" data-lightbox="gallery">
                                Batu Night Spectacular
                            </a>
                        </div>
                    </div>
                </div>
                <!--col end-->

            </div>

        </div>
    </section>
    <!--section features end-->

    {{-- <section class="wide-image-wrapper">
        <div class="container-fluid">
            <div class="row vertical-align-child">
                <div class="col-md-5 col-md-offset-1">
                    <h3>Improve your business working with us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere veritatis inventore eum,
                        cupiditate esse debitis consectetur nisi harum. Tempore, assumenda ducimus vero totam labore.
                        Ipsam, eos odit eaque, voluptatum minima, odio eveniet soluta saepe, culpa quo enim omnis iusto.
                        Possimus, at numquam beatae non atque?
                    </p>
                    <a href="#" class="btn btn-radius btn-dark btn-lg">Learn more</a>
                </div>
                <div class="col-md-6 img-right hidden-xs hidden-sm">

                </div>
            </div>
        </div>
    </section> --}}
    <!--section video end-->
    <!--gallery-->
    <section id="formulir" class="gallery-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-calendar"></i>
                    <h2>Formulir Registrasi</h2>
                    <div class="card ">
                        <div class="card-body">
                            <div class="col-md-6 col-md-offset-3">
                                <form action="/register" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control"
                                            id="exampleInputEmail1"
                                            value="{{ \Illuminate\Support\Carbon::now()->format('Y-m-d') }}" readonly>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama</label>
                                        <input type="text" name="nama" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Nama Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No Whatsapp</label>
                                        <input type="number" name="no_wa" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan No Whatsapp Anda">
                                        <span style="color: red"><b>*Nomor harus diawali angka 62 (Contoh :
                                                628222223333)</b></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Korwil</label>
                                        <input type="text" name="korwil" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Korwil Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Korda</label>
                                        <input type="text" name="korda" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Korda Anda">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jumlah Peserta</label>
                                        <input type="number" name="jml_peserta" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Jumlah Peserta">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jumlah Anak</label>
                                        <input type="number" name="jml_anak" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Jumlah Peserta">
                                        <span style="color: red"><b>*Anak tidak dikenakan biaya</b></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Bukti Transfer</label>
                                        <input type="file" name="bukti" class="form-control"
                                            id="exampleInputPassword1" placeholder="Masukkan Nama Andna">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary"
                                        style="width:200px">Daftar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--center title row end-->
            <!--col end-->


        </div>
    </section>
    <!--end gallery-->



    <!--pricing start-->
    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-pricetags"></i>
                    <h2>Partner Kami</h2>
                    <p>Dalam acara ini kami menjalin partner bersama</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="col-sm-4">
                    <div class="price-box text-center wow animated fadeInUp" data-wow-delay="0.1s">
                        {{-- <i class="icon-phone"></i>
                        <h3>Single Application</h3>
                        <div class="price">
                            <sup>$</sup>19
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <a href="#" class="btn btn-lg btn-default btn-radius">Learn More</a> --}}
                        <img src="/landing_page/images/r.png" width="300px" alt="">
                    </div>
                    <!--price box end-->
                </div>
                <!--price col end-->
                <div class="col-sm-4">
                    <div class="price-box text-center wow animated fadeInUp" data-wow-delay="0.2s">
                        <img src="landing_page/images/ridevertisement.png" width="300px" alt="">
                    </div>
                    <!--price box end-->
                </div>
                <!--price col end-->
                <div class="col-sm-4">
                    <div class="price-box text-center wow animated fadeInUp" data-wow-delay="0.2s">
                        <img src="landing_page/images/brn.png" width="300px" alt="">
                    </div>
                    <!--price box end-->
                </div>
                <!--price col end-->
            </div>
        </div>
    </section>
    <!--pricing end-->


    <!--services-->
    {{-- <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-bike"></i>
                    <h2>What we do?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quas necessitatibus nesciunt
                        temporibus, adipisci aliquid inventore et quaerat alias.</p>
                </div>
            </div>
            <!--center title row end-->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <ul class="list-inline text-center tabs-navigation" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#ui" aria-controls="ui" role="tab" data-toggle="tab"><span><i
                                        class="icon-pencil"></i></span> UI / UX Design</a>
                        </li>
                        <li role="presentation">
                            <a href="#responsive" aria-controls="responsive" role="tab"
                                data-toggle="tab"><span><i class="icon-mobile"></i></span>Responsive Design</a>
                        </li>
                        <li role="presentation">
                            <a href="#develop" aria-controls="develop" role="tab" data-toggle="tab"><span><i
                                        class="icon-speedometer"></i></span>Web development</a>
                        </li>
                        <li role="presentation">
                            <a href="#seo" aria-controls="seo" role="tab" data-toggle="tab"><span><i
                                        class="icon-search"></i></span>Seo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--tabs header row end-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content service-tab-content">
                        <div role="tabpanel" class="tab-pane active" id="ui">
                            <div class="row vertical-align-child">

                                <div class="col-sm-6 hidden-xs animated fadeInLeft">
                                    <img src="images/ipad.png" alt="" class="img-responsive">
                                </div>
                                <div class="col-sm-5 col-sm-offset-1 text-left animated fadeInUp">
                                    <h1>UI/UX Design</h1>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--tab content end-->
                        <div role="tabpanel" class="tab-pane" id="responsive">
                            <div class="row vertical-align-child">
                                <div class="col-sm-5 col-sm-offset-1 text-left animated fadeInUp">
                                    <h1>Responsive design</h1>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est.
                                    </p>
                                </div>
                                <div class="col-sm-6 hidden-xs animated fadeInRight">
                                    <img src="images/mockup-1.png" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <!--tab content end-->
                        <div role="tabpanel" class="tab-pane" id="develop">
                            <div class="row vertical-align-child">

                                <div class="col-sm-6 hidden-xs animated fadeInLeft">
                                    <img src="images/wide_shot_1.png" alt="" class="img-responsive">
                                </div>
                                <div class="col-sm-5 col-sm-offset-1 text-left animated fadeInUp">
                                    <h1>Web Development</h1>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--tab content end-->
                        <div role="tabpanel" class="tab-pane" id="seo">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 text-center animated fadeInUp">
                                    <h1>Seo ready</h1>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni. Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--tab content end-->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--end services-->




    <div class="clients">
        <div class="container">
            <ul class="list-inline text-center">
                <li><a href="#">
                        <img src="images/cl-1.png" alt="">
                    </a></li>
                <li><a href="#">
                        <img src="images/cl-2.png" alt="">
                    </a></li>
                <li><a href="#">
                        <img src="images/cl-3.png" alt="">
                    </a></li>
                <li><a href="#">
                        <img src="images/cl-4.png" alt="">
                    </a></li>
                <li><a href="#">
                        <img src="images/cl-5.png" alt="">
                    </a></li>
            </ul>
        </div>
    </div>

    <!--subscribe-->
    <section id="newsletter" class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 center-title">
                    <i class="icon-envelope"></i>
                    <h2>Ada Pertanyaan ?</h2>
                    <p>Anda memiliki pertanyaan terkait detail acara dan sebagainya ?.</p>
                </div>
            </div>
            <!--center title row end-->
            <div class="row">
                <div class="center-title">
                    <a href="https://wa.me/+6282332112221" class="btn btn-md btn-primary">Whatsapp Kami Sekarang !</a>

                </div>
            </div>
        </div>
    </section>
    <!--end subscribe-->

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 margin-b-30">
                    <h2>Tentang Kita</h2>
                    <p>
                        Buser Rentcar Nasional
                    </p>
                </div>
                <div class="col-sm-4 margin-b-30">
                    <h2>Contact us</h2>
                    <ul class="list-unstyled clearfix">
                        <li class="clearfix">
                            <i class="fa fa-map-marker"></i>
                            <span>Selecta Kota Batu, Malang, Jawa Timur</span>
                        </li>
                        {{-- <li class="clearfix">
                            <i class="fa fa-envelope-o"></i>
                            <span><a href='#'>mylifedesign143@gmail.com</a></span>
                        </li> --}}
                        <li class="clearfix">
                            <i class="fa fa-whatsapp"></i>
                            <span>0823-3211-2221 (Yosia Calvin Pangalela)</span>
                        </li>
                    </ul>
                </div>
                <!--col4 end-->
                <div class="col-sm-4 margin-b-30">
                    <h2>Follow us</h2>
                    <ul class="list-inline clearfix">
                        <li><a href='https://www.facebook.com/buserrentcar/'><i
                                    class="fa fa-facebook-official"></i></a></li>
                        <li><a href='https://www.youtube.com/c/BuserRentCarNasional'><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <!--col4 end-->
            </div>
            <!--row end-->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-bottom">
                        {{-- <ul class="list-inline">
                            <li><a href='#'>Home</a></li>
                            <li><a href='#'>News</a></li>
                            <li><a href='#'>Help</a></li>
                            <li><a href='#'>Terms</a></li>
                            <li><a href='#'>Privacy</a></li>
                        </ul> --}}
                        <span>&copy; Copyright 2023. Orginal Design by PT RIDE MEDIA CORPORINDO</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <script src="{{ asset('landing_page/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_page/js/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_page/js/jquery.backstretch.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_page/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('landing_page/bower_components/wow/dist/wow.min.js') }}"></script>
    <script src="{{ asset('landing_page/bower_components/lightbox2/dist/js/lightbox.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('landing_page/owl-carousel/owl.carousel.min.js" type="text/javascript') }}"></script>
    <script src="{{ asset('landing_page/js/modernizr.custom.97074.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_page/js/parallax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_page/js/custom.js') }}" type="text/javascript"></script>
    <!-- Vimeo video API -->
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script type="text/javascript" src="js/vimeo.js"></script>
    <script src="{{ asset('landing_page/contact_form/contact.js') }}"></script>
    <!-- Vimeo video API -->
    <script src="{{ asset('landing_page/js/headroom.js') }}" type="text/javascript"></script>
    <script>
        // grab an element
        var myElement = document.querySelector("header");
        // construct an instance of Headroom, passing the element
        var headroom = new Headroom(myElement);
        // initialise
        headroom.init();
    </script>
</body>

</html>
