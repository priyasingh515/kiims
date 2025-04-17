<!DOCTYPE html> 
<html lang="zxx">    
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Paramedical - Paramedical</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </head> 
  
    <body class="home-style4">
        
        <div class="full-width-header header-style3 modify">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="logo-part hidden-md">
                        <a class="light-logo" href="{{url('/')}}">
                            <img src="{{asset('assets/images/rays.png')}}" alt="">
                        </a>
                        <a class="small-logo" href="{{url('/')}}">
                            <img src="{{asset('assets/images/rays.png')}}" alt="">
                        </a>
                    </div>
                    <div class="container">
                        <div class="responsive-logo">
                            <img src="{{asset('assets/images/rays.png')}}" alt="">
                        </div> 
                        
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu d-flex justify-content-end align-items-center d-lg-none">
                                    <!-- Register Button -->
                                    
                                    <a href="{{ url('register') }}" class=" mr-5" style="background-color: #21a7d0; color: white; border-radius: 30px; padding: 11px 24px;line-height:1;">
                                        Register
                                    </a>
                                
                                    <!-- Menu Toggle Icon -->
                                    <a class="rs-menu-toggle" id="mobile-menu-toggle">
                                        
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            
                                <nav class="rs-menu" id="main-nav">
                                    <ul class="nav-menu">
                                        <li class="current-menu-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('allCourse') }}">All Courses</a></li>
                                                <li><a href="{{ url('ot') }}">O.T</a></li>
                                                <li><a href="{{ url('dmit') }}">D.M.I.T</a></li>
                                                <li><a href="{{ url('dmlt') }}">D.M.L.T</a></li>
                                                <li><a href="{{ url('bmlt') }}">B.M.L.T</a></li>
                                                <li><a href="{{ url('cms') }}">CMS & ED</a></li>
                                                <li><a href="{{ url('ctMR') }}">CT/MRI/X-RAY/ICU</a></li>
                                                <li><a href="{{ url('emt') }}">E.M.T</a></li>
                                                <li><a href="{{ url('opthemic') }}">OPHTHALMIC</a></li>
                                                <li><a href="{{ url('dresser') }}">DRASSER</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/team') }}">Team</a></li>
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                        <li><a href="{{route('verify.user')}}">Admission Verification</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                            {{-- <div class="expand-btn-inner">
                                <ul>
                                    <li>
                                        <a class="apply-btn" href="{{url('register')}}">Registration</a>
                                    </li>
                                </ul>
                                <span><a id="nav-expander" class="nav-expander style5">
                                        <span class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </span>
                                    </a>
                                </span>
                            </div> --}}
                            <div class="expand-btn-inner">
                                <a class="apply-btn" href="{{url('register')}}">Registration</a>
                            
                                <a id="nav-expander" class="nav-expander style5">
                                    <span class="bar">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href=""><img src="{{asset('assets/images/logo-dark.png')}}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/1.jpg')}}"><img src="{{asset('assets/images/gallery/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/2.jpg')}}"><img src="{{asset('assets/images/gallery/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/3.jpg')}}"><img src="{{asset('assets/images/gallery/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/4.jpg')}}"><img src="{{asset('assets/images/gallery/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/5.jpg')}}"><img src="{{asset('assets/images/gallery/5.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/6.jpg')}}"><img src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="{{asset('assets/images/map.jpg')}}" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>

        {{-- <script>
            document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
                document.getElementById('main-nav').classList.toggle('active');
            });
        </script> --}}