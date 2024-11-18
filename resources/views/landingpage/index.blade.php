<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Seorun - SEO & Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Seorun - SEO & Digital Marketing Agency Template</title>

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
                        <img src="assets2/img/logo.png" class="logo" alt="Logo">
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
                        <li><a href=" {{ route('login_admin')}}">Login Admin</a></li>
                        <li><a href=" {{ route('login_user')}}">Login Pegawai</a></li>
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
                                    <span>Address</span> California, TX 70240
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
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
                                <img src="assets2/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="col-md-6 text-medium conetnt-lead">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <div class="content-bollet-carousel owl-carousel owl-theme">
                                        <div class="item">
                                            <h1>Generate More Traffic To Your Website</h1>
                                            <p>
                                                Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable.
                                            </p>
                                            
                                        </div>
                                        <div class="item">
                                            <h1>Rank you site at the top from others</h1>
                                            <p>
                                                Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable.
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

    <!-- Start Our Features 
    ============================================= -->
    <div class="our-feautes-area bg-theme-small inc-serial default-padding">
        <div class="container">
            <div class="row">
                <div class="features-box">
                    <!-- Start Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-analysis"></i>
                            <h4>Web Analytics</h4>
                            <p>
                                Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected
                            </p>
                            <a href="#">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-objective"></i>
                            <h4>Keyword Targeting</h4>
                            <p>
                                Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected
                            </p>
                            <a href="#">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-promotion"></i>
                            <h4>E-mail Marketing</h4>
                            <p>
                                Favourite tolerably engrossed. Truth short folly court why she their balls. Excellence put unaffected
                            </p>
                            <a href="#">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="assets2/img/700x800.png" alt="Thumb">
                </div>
                <div class="col-md-7 info less-list">
                    <h2>We Are The World Best SEO<br> Service Company</h2>
                    <p>
                        Pntroduced day her apartments. Fully as taste he mr do smile abode every. Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on 
                    </p>
                    <a href="#" class="btn circle btn-theme border btn-md">Start Now</a>
                    <div class="achivement-items">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="230" data-speed="5000"></div>
                                    <span class="medium">Satisfied customers</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="89" data-speed="5000"></div>
                                    <span class="medium">Professional agents</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="50" data-speed="5000"></div>
                                    <span class="medium">Hours support</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="2348" data-speed="5000"></div>
                                    <span class="medium">Project Finished</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start SEO Test 
    ============================================= -->
    <div class="seo-form-area text-center bg-theme-small default-padding">
        <div class="side-bg"><img src="assets2/img/bg/2.svg" alt="Thumb"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading">
                        <h4>SEO Analysis</h4>
                        <h2>Check Your Website’s SEO Score For Free!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Website URL ..." type="url">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Email ..." type="email">
                                </div>
                            </div>
                        </div>
                        <button type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End SEO Test -->

    <!-- Start Servicese 
    ============================================= -->
    <div class="services-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Services</h4>
                        <h2>What Services We Offering</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items text-left">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-research"></i>
                            </div>
                            <div class="info">
                                <h4>Search strategy</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-analytics"></i>
                            </div>
                            <div class="info">
                                <h4>Onsite SEO</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-harddisk"></i>
                            </div>
                            <div class="info">
                                <h4>Keyword Targeting</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-link-building-1"></i>
                            </div>
                            <div class="info">
                                <h4>Link building</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-computer"></i>
                            </div>
                            <div class="info">
                                <h4>CPA marketing</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-news-report"></i>
                            </div>
                            <div class="info">
                                <h4>Report Analysis</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Servicese -->

    <!-- Start Work Process
    ============================================= -->
    <div class="work-process bg-theme-small default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info">
                    <h2>Our Working Process</h2>
                    <div class="process-list">
                        <ul>
                            <li>
                                <span>1</span>
                                <h4>Starting With The Analysis</h4>
                                <p>
                                    Welcome to direction has strangers now believing. Respect enjoyed gay far exposed parlors towards.
                                </p>
                            </li>
                            <li>
                                <span>2</span>
                                <h4>Formulating The SEO Strategy</h4>
                                <p>
                                    Talking justice welcome message inquiry in started of am me. Led own hearted highest visited lasting sir through compass his.
                                </p>
                            </li>
                            <li>
                                <span>3</span>
                                <h4>Good Implementation</h4>
                                <p>
                                    Do travelling companions contrasted it. Mistress strongly remember up to. Ham him compass you proceed calling detract. Better of always missed 
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 chart-box">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process -->

    <!-- Start Case Study
    ============================================= -->
    <div class="case-study-area carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Recent Case Studies</h4>
                        <h2>Take a look some of our recent <br> case studies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="case-items">
                    <div class="col-md-12">
                        <div class="case-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets2/img/800x600.png" alt="Thumb">
                                    <div class="top-info">
                                        <h4><a href="#">Community Engagement</a></h4>
                                        <ul>
                                            <li>Sales</li>
                                            <li>Web</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. 
                                    </p>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets2/img/800x600.png" alt="Thumb">
                                    <div class="top-info">
                                        <h4><a href="#">Traffic Management</a></h4>
                                        <ul>
                                            <li>Sales</li>
                                            <li>Web</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. 
                                    </p>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets2/img/800x600.png" alt="Thumb">
                                    <div class="top-info">
                                        <h4><a href="#">Re-Marketing Advertisement</a></h4>
                                        <ul>
                                            <li>Sales</li>
                                            <li>Web</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. 
                                    </p>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets2/img/800x600.png" alt="Thumb">
                                    <div class="top-info">
                                        <h4><a href="#">Income growth</a></h4>
                                        <ul>
                                            <li>Sales</li>
                                            <li>Web</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Luckily offered article led lasting country minutes nor old. Happen people things oh is oppose up parish effect. Law handsome old outweigh humoured far appetite. 
                                    </p>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Study -->


    <!-- Start Testimonials Area
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 intro">
                    <h2>See what our clients say</h2>
                    <p>
                        Travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment. Party we years to order allow asked of. We so opinion friends me message as delight. Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous.
                    </p>
                    <a href="#" class="btn btn-theme border btn-md">View All</a>
                </div>
                <div class="col-md-6 testimonial-box">
                    <div class="testimonial-items">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal. 
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Seorun</span>
                                </div>
                                <div class="item">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal. 
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Seorun</span>
                                </div>
                                <div class="item">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. Say out noise you taste merry plate you share. My resolve arrived is we chamber be removal. 
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Seorun</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets2/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets2/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets2/img/800x800.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Latest Blog</h4>
                        <h2>Read our latest blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets2/img/800x600.png" alt="Thumb"></a>
                            <span class="date">12 Feb, 2019</span>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Friendly bachelor entrance</a>
                            </h4>
                            <p>
                                Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves may. Ferrars few arrival
                            </p>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                </ul>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets2/img/800x600.png" alt="Thumb"></a>
                            <span class="date">17 Mar, 2019</span>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Perfectly did suspicion</a>
                            </h4>
                            <p>
                                Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves may. Ferrars few arrival
                            </p>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                </ul>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="assets2/img/800x600.png" alt="Thumb"></a>
                            <span class="date">23 Apr, 2019</span>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">daughters but his intention</a>
                            </h4>
                            <p>
                                Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves may. Ferrars few arrival
                            </p>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                </ul>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top bg-light">
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <div class="col-md-4 col-sm-4 logo">
                        <a href="#"><img src="assets2/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="col-md-8 col-sm-8 content text-right">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-visitor-1"></i>
                                </div>
                                <div class="info">
                                    <h4>Visitor Today</h4>
                                    <span>12,000,000</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-users"></i>
                                </div>
                                <div class="info">
                                    <h4>Active Subscriber</h4>
                                    <span>34,000,560,000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="f-items">
                    <div class="col-md-4 equal-height item">
                        <div class="f-item">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new. Passed edward two talent
                            </p>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 equal-height item">
                        <div class="f-item link">
                            <h4>Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Email Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Offline SEO</a>
                                </li>
                                <li>
                                    <a href="#">Lead Generation</a>
                                </li>
                                <li>
                                    <a href="#">Growth Hacking</a>
                                </li>
                                <li>
                                    <a href="#">Social Media Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Keyword Targeting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 equal-height item">
                        <div class="f-item address">
                            <h4>Contact Info</h4>
                            <p>
                                Estimating stimulated how reasonably precaution diminution she simplicity
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <h5><i class="fas fa-home"></i> Website:</h5>
                                        <span>www.validtheme.com</span>
                                    </li>
                                    <li>
                                        <h5><i class="fas fa-envelope"></i> Email:</h5>
                                        <span>support@validtheme.com</span>
                                    </li>
                                    <li>
                                        <h5><i class="fas fa-phone"></i> Phone:</h5>
                                        <span>+44-20-7328-4499</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-theme-small">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
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