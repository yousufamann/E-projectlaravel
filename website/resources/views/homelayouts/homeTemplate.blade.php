<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, rtl, Laboratory, medical" />
    <meta name="description" content="Laboratory & Science Research HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Lab Automation</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('homeAssets/images/favicon.ico') }}" />
    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ asset('homeAssets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--== animate -->
    <link href="{{ asset('homeAssets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="{{ asset('homeAssets/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('homeAssets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="{{ asset('homeAssets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== lightslider -->
    <link href="{{ asset('homeAssets/css/lightslider.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('homeAssets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('homeAssets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="{{ asset('homeAssets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <!--== style -->
    <link href="{{ asset('homeAssets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="{{ asset('homeAssets/css/color-customize/color-customizer.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- page wrapper start -->
    <div class="page-wrapper">

        <!--header start-->
        <header id="site-header" class="header">
            <div class="header-top light-bg">
                <div class="container-fluid px-lg-8">
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-between">
                            <div class="topbar-link d-flex align-items-center text-black">
                                <div class="d-none d-sm-flex align-items-center me-3"style="font-size: 15px">
                                    <div> <i class="las la-phone"></i>
                                    </div>
                                    <div>Emergency Line: <a class="text-black"> +91-234-567-8900</a>
                                    </div>
                                </div>
                                <div class="d-none d-md-flex align-items-center me-3"style="font-size: 15px">
                                    <div> <i class="las la-map-marker"></i>
                                    </div>
                                    <div>
                                        <div>Location: Aptech Garden Center</div>
                                    </div>
                                </div>
                                <div class="d-none d-lg-flex align-items-center me-3" style="font-size: 15px">
                                    <div>
                                        <i class="las la-business-time"></i>
                                    </div>
                                    <div>
                                        <div>Mon-Sat: 9.30am To 7.00pm</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                @if (Auth::check())
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn btn-white btn-sm py-3" type="submit">
                                            <span>Logout</span>
                                        </button>
                                    </form>
                                @else
                                    <a class="btn btn-white btn-sm py-3" href="/login" style="font-size: 15px">
                                        <span>Login</span>
                                    </a>
                                @endif
                                <div class="social-icons d-none d-lg-inline-block ms-3">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL" style="font-size: 18px"><i
                                                    class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/login" style="font-size: 18px">
                                            <i class="lab la-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/testlab41" style="font-size: 18px"><i
                                                    class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-wrap">
                <div class="container-fluid px-lg-8">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand logo" href="#">
                                    <h1 style="font-size: 40px"><span style="color: #2363d5">LAB</span> AUTOMATION</h1>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation"> <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ms-auto me-auto position-relative">
                                        <!-- Home -->
                                        <li class="nav-item"><a class="nav-link" href="/"
                                                style="font-size: 18px">Home</a></li>
                                        {{-- About --}}
                                        <li class="nav-item"><a class="nav-link" href="about"
                                                style="font-size: 18px">About</a></li>
                                        {{-- contact --}}
                                        <li class="nav-item"> <a class="nav-link" href="/contact"
                                                style="font-size: 18px">Contact</a>
                                                {{-- Test --}}
                                                @if(Auth::check())
                                                <li class="nav-item"><a class="nav-link" href="test"
                                                    style="font-size: 18px">Tests</a></li>
                                                    @endif
                                            {{-- Products --}}
                                            @if (Auth::check())
                                        <li class="nav-item"><a class="nav-link"
                                                href="/products"style="font-size: 18px">Products</a>
                                            @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        @yield('homecontent')
        <!--footer start-->
        <footer class="footer light-bg">
            <div class="primary-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-12 white-bg p-4 p-md-6">
                            <a class="footer-logo" href="index.html">
                                <h1 style="font-size: 40px"><span style="color: #2363d5">LAB</span> AUTOMATION</h1>
                            </a>
                            <p class="my-4">LabAutomation will be administered through customizable programs
                                incorporate partnership between family illness or disease management. LabAutomation Made
                                With Latest Technology Bootstrap 5.</p>
                            <div class="social-icons social-colored footer-social">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="lab la-instagram"></i></a>
                                    </li>
                                    <li><a href="#"><i class="lab la-dribbble"></i></a>
                                    </li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 p-4 p-md-6">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <h4 class="mb-4">Quick Links</h4>
                                    <div class="footer-list">
                                        <ul class="list-unstyled">
                                            <li><a href="#">About Us</a>
                                            </li>
                                            <li><a href="#">Contact Us</a>
                                            </li>
                                            <li><a href="#">Tests</a>
                                            </li>
                                            <li><a href="#">Products</a>
                                            </li>
                                            <li> <a href="#">Terms & Condition</a>
                                            </li>
                                            <li><a href="#">Our Team</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mt-6 mt-sm-0">
                                    <h4 class="mb-4">Tests</h4>
                                    <div class="footer-list">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Electrical Safety Testing</a>
                                            </li>
                                            <li><a href="#">Enviromental Testing</a>
                                            </li>
                                            <li><a href="#">Electromagnetic Compatibility(EMC) Testing</a>
                                            </li>
                                            <li><a href="#">Perfomance Testing</a>
                                            </li>
                                            <li><a href="#">Reliability Testing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12 mt-6 mt-md-0">
                                    <h4 class="mb-4">Get In Touch</h4>
                                    <div class="footer-cntct my-4">
                                        <ul class="media-icon list-unstyled">
                                            <li> <i class="flaticon-hospital"></i>
                                                <p class="mb-0">423B, Road Wordwide Country, USA</p>
                                            </li>
                                            <li><i class="flaticon-medical-report"></i> <a
                                                    href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
                                            </li>
                                            <li><i class="flaticon-medical-assistance"></i> <a
                                                    href="tel:+912345678900">+91-234-567-8900</a>
                                            </li>
                                            <li><i class="flaticon-working-hours"></i>
                                                <p class="mb-0">Mon-Sat:9.30am To 7.00pm</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="copyright p-4 white-bg mt-5 ms-md-n6">Copyright © 2024 All rights
                                        reserved | LabAutomation Made by <i
                                            class="lar la-heart text-theme heartBeat2"></i><u><a href>2309A</a></u>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!-- page wrapper end -->

        <!--back-to-top start-->
        <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-location-arrow"></i></a>
        </div>
        <!--back-to-top end-->

        <!-- inject js start -->
        <!--== jquery -->
        <script src="{{ asset('homeAssets/js/theme.js') }}"></script>
        <!--== theme-plugin -->
        <script src="{{ asset('homeAssets/js/theme-plugin.js') }}"></script>
        <!--== color-customize -->
        <script src="{{ asset('homeAssets/js/color-customize/color-customizer.js') }}"></script>
        <!--== theme-script -->
        <script src="{{ asset('homeAssets/js/theme-script.js') }}"></script>
        <!-- inject js end -->
</body>

</html>
