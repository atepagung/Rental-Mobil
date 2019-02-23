<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>AJK Website </title>
        <link rel="shortcut icon" href="{{ asset('/wheel/images/favicon.ico') }}" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/wheel/assets/css/css_reset.css') }}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/wheel/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/wheel/assets/css/jquery.datetimepicker.min.css') }}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('/wheel/assets/css/bootstrap-select.min.css') }}">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/wheel/assets/css/loaders.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/wheel/assets/css/index.css') }}">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <!-- <img src="{{ asset('/wheel/images/loader.gif') }}" alt="" class="image"> -->
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="{{ asset('/wheel/images/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span  style="color:#ffffff">(+62) 12345678</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span style="color:#ffffff">contact@rental.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span style="color:#ffffff">Akun</span>
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="register.html" style="color:#ffffff">Login</a></li>
                                            <li><a href="register.html" style="color:#ffffff">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="#">HOME</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="#"> PILIHAN ARMADA </a>
                                        <!--class=" dl-submenu "-->
                                        <ul class="sub-menu dl-submenu">
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-grid.html">Car Listing - Grid View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-list-3col2.html">Car Listing - List View</a>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="car-listing-details.html">car listing details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="reservation1.html">KLIEN KAMI</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="#">TENTANG KAMI</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="contact.html">contact</a></li>
                                            <li class="menu-item "><a href="register.html">Register</a></li>
                                            <li class="menu-item "><a href="checkout.html">Ceckout</a></li>
                                            <li class="menu-item "><a href="about.html">About</a></li>
                                            <li class="menu-item "><a href="shopping.html">shopping cart</a></li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Level 2</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                    <li class="menu-item"><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="#">KONTAK KAMI</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="news.html">News</a></li>
                                            <li class="menu-item"><a href="news-details.html">News details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        @yield('content')
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="{{ asset('/wheel/images/bg4.jpg') }}" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="{{ asset('/wheel/images/logo2.png') }}" alt=""></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>121 King Street, Melbourne <br>
                                    VIC 3000, Australia  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +61 3 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>contact@wheel-rental.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="" class="">About us</a></li>
                                <li><a href="" class="">Customer Service</a></li>
                                <li><a href="" class="">Contact Us</a></li>
                                <li><a href="" class="">Safety Recall</a></li>
                                <li><a href="" class="">Privacy policy</a></li>
                                <li><a href="" class="">Site Map</a></li>
                                <li><a href="" class="">Terms & condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                            <h3>Vehicles</h3>
                            <ul>
                                <li><a href="" class="">Exotic Cars</a></li>
                                <li><a href="" class="">SUVs</a></li>
                                <li><a href="" class="">Trucks</a></li>
                                <li><a href="" class="">Mini Vans</a></li>
                                <li><a href="" class="">Moving Trucks</a></li>
                                <li><a href="" class="">Vans</a></li>
                                <li><a href="" class="">RVs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd-lr0">
                        <div class="wheel-footer-gallery">
                            <h3>Photo Gallery</h3>
                            <div class="  clearfix">
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i11.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i12.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i13.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i14.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i15.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i16.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i17.jpg') }}" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href=""><img src="{{ asset('/wheel/images/i18.jpg') }}" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 2016 | Designed with Love By bigpsfan</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Listings</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/jquery-2.2.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/bootstrap.min.js') }}"></script>
        <!-- count -->
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/jquery.countTo.js') }}"></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/idangerous.swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/equalHeightsPlugin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/jquery.datetimepicker.full.min.js') }}"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/bootstrap-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/wheel/assets/js/index.js') }}"></script>
        <!-- sixth block end -->
    </body>
</html>