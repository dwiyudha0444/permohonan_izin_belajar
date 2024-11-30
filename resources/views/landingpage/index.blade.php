<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Seorun - SEO & Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>SIBELA</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets2/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets2/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/responsive.css') }}" rel="stylesheet" />

    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets2/js/html5/html5shiv.min.js"></script>
      <script src="assets2/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets2/img/logo3.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                {{-- <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                            </ul>
                        </li>
                         
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse --> --}}
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href=" {{ route('login_admin') }}">Login Admin</a></li>
                        <li><a href=" {{ route('login_user') }}">Login Pegawai</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title">Contact Info</h4>
                    <div class="address">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Address</span> 5RVR+CMR, Kudus, Demaan, Kec. Kota Kudus, Kabupaten Kudus,
                                    Jawa Tengah 59313
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> bksdm@kuduskab.go.id
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> (0291) 438415
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-double normal-text">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="double-items">
                            <div class="col-md-6 thumb">
                                <img src="assets2/img/bg1.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-6 text-medium conetnt-lead">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <div class="content-bollet-carousel owl-carousel owl-theme">
                                        <div class="item">
                                            <h1>Sistem Informasi Izin Belajar (SIBELA)</h1>
                                            <p>
                                                Sistem Informasi Izin Belajar (SIBELA) digunakan untuk mempermudah
                                                proses administrasi pengajuan izin belajar di Badan Kepegawaian dan
                                                Pengembangan Sumber Daya Manusia. Sistem ini
                                                bertujuan untuk mengotomatisasi, mendokumentasikan, dan mempermudah
                                                pengelolaan data izin belajar
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->



    <div class="work-process bg-theme-small default-padding" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 chart-box">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Start Footer
    ============================================= -->
    <footer class="default-padding-top bg-light">
        
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-theme-small">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Adam Fathul Hakim</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets2/js/jquery-1.12.4.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/equal-height.min.js"></script>
    <script src="assets2/js/jquery.appear.js"></script>
    <script src="assets2/js/jquery.easing.min.js"></script>
    <script src="assets2/js/jquery.magnific-popup.min.js"></script>
    <script src="assets2/js/modernizr.custom.13711.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/wow.min.js"></script>
    <script src="assets2/js/progress-bar.min.js"></script>
    <script src="assets2/js/isotope.pkgd.min.js"></script>
    <script src="assets2/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets2/js/count-to.js"></script>
    <script src="assets2/js/bootsnav.js"></script>
    <script src="assets2/js/Chart.min.js"></script>
    <script src="assets2/js/custom-chart.js"></script>
    <script src="assets2/js/main.js"></script>

</body>

</html>
