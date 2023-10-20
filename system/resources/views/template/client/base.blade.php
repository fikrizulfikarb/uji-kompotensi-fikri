<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from duruthemes.com/demo/html/ckarla/two/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 20:00:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('public/two') }}/images/favicon.png" />
    <title>Elegacy Event Organizer | Wedding Photographer</title>
    <link href="{{ url('public/two') }}/css/bootstrap.min.css" rel=stylesheet>
    <link href="{{ url('public/two') }}/css/animate.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/css/themify-icons.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/modules/slick/slick.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/modules/slick/slick-theme.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/modules/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/modules/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/modules/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ url('public/two') }}/css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-144098545-1');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div id="karla-page-loading" class="karla-pageloading">
        <div class="karla-pageloading-inner">
            <h2>Elegacy Event Organizer<span>Wedding Photographer</span></h2>
        </div>
    </div>
    <!-- Header -->
    @include('template.client.section.navbar')
    <!-- Slider -->
    {{-- <div class="karla-homepage-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="karla-slider">
                        <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/a.jpg" alt=""> 
                            <div class="karla-slider-caption">
                                <div class="karla-slider-title">Wedding in Filzmoos Sam & Paul</div>
                                <div class="karla-slider-subtitle">Wedding in Austria</div>
                            </div>
                        </div>
                        <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/b.jpg" alt=""> 
                            <div class="karla-slider-caption">
                                <div class="karla-slider-title">Wedding at Chateau de Lacoste</div>
                                <div class="karla-slider-subtitle">Wedding in France</div>
                            </div>
                        </div>
                        <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/c.jpg" alt=""> 
                            <div class="karla-slider-caption">
                                <div class="karla-slider-title">Pre-wedding in Vienna</div>
                                <div class="karla-slider-subtitle">Helen & Eddy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding recent-weddings bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <span class="heading-meta">Portfolio</span>
                    <h2 class="pwe-heading">Recent Weddings</h2>
                    <hr class="line line-hr-center">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/1.jpg" alt=""> </div>
                        <div class="content">
                            <h5><a href="post.html">Wedding in Barcelona<br>Marine & Kevin</a></h5>
                            <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/2.jpg" alt=""> </div>
                        <div class="content">
                            <h5><a href="post.html">Olivia and Enrico<br>Wedding in Switzerland</a></h5>
                            <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/3.jpg" alt=""> </div>
                        <div class="content">
                            <h5><a href="post.html">Wedding in France<br>Tammy & Matthew</a></h5>
                            <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testiominals -->

            @yield('client_content')
        
    <!-- Clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/1.png" alt=""></a>
                    </div>
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/2.png" alt=""></a>
                    </div>
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/3.png" alt=""></a>
                    </div>
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/4.png" alt=""></a>
                    </div>
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/5.png" alt=""></a>
                    </div>
                    <div class="client-logo">
                        <a href="#"><img src="{{ url('public/two') }}/images/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('template.client.section.footer')
    <!-- toTop -->
    <a href="#" class="totop">TOP</a>
    <!-- Js -->
    <script src="{{ url('public/two') }}/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/two') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('public/two') }}/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('public/two') }}/js/plugins/jquery.isotope.v3.0.2.js"></script>
    <script src="{{ url('public/two') }}/js/plugins/modernizr-2.6.2.min.js"></script>
    <script src="{{ url('public/two') }}/js/plugins/jquery.waypoints.min.js"></script>
    <script src="{{ url('public/two') }}/modules/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ url('public/two') }}/modules/slick/slick.js"></script>
    <script src="{{ url('public/two') }}/modules/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="{{ url('public/two') }}/modules/masonry/masonry.pkgd.min.js"></script>
    <script src="{{ url('public/two') }}/js/script.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/ckarla/two/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 20:00:50 GMT -->
</html>
