<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="{{  asset('assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{  asset('assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{  asset('assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{  asset('assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{  asset('assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{  asset('assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{  asset('assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{  asset('assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{  asset('assets/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{  asset('assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{  asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{  asset('assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{  asset('assets/images/favicon/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{  asset('ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <title>Shared on NULLPHPSCRIPT.COM - Home | Archilux</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="{{  asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/css/mobile.css') }}">
</head>

<body>
    <!-- LOADER -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- HEADER SECTION START HERE -->
    <div class="header-main-con w-100 float-left main-box">
        <div class="wrapper1417">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand p-0" href="{{ route('frontend.home') }}">
                    <figure class="mb-0">
                        <img src="{{  asset('assets/images/header-logo.png') }}" alt="header-logo" loading="lazy">
                    </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0 active" href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{ route('frontend.about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{  route('frontend.services') }}">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown2" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="{{ route('frontend.about') }}" class="dropdown-item">About</a></li>
                                    <li><a href="{{ route('frontend.teams') }}" class="dropdown-item">Team</a></li>
                                    <li><a href="{{route('frontend.testimonials')}}" class="dropdown-item">Testimonial</a></li>
                                    <li><a href="{{ route('frontend.portfolios') }}" class="dropdown-item">Portfolio</a></li>
                                    <li><a href="{{ route('frontend.services') }}" class="dropdown-item">Services</a></li>
                                    <li><a href="{{  route('frontend.faqs') }}" class="dropdown-item">FAQ</a></li>
                                    <li><a href="{{ route('frontend.comingsoon') }}" class="dropdown-item">Coming Soon</a></li>
                                    {{-- <li><a href="404.html" class="dropdown-item">404</a></li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown4" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="{{ route('frontend.blogs') }}" class="dropdown-item">Blog</a></li>
                                    <li><a href="{{ route('frontend.blogs1') }}" class="dropdown-item">Single Blog</a></li>
                                    {{-- <li><a href="one-column.html" class="dropdown-item">One Column</a></li>
                                    <li><a href="two-column.html" class="dropdown-item">Two Column</a></li>
                                    <li><a href="three-column.html" class="dropdown-item">Three Column</a></li>
                                    <li><a href="three-colum-sidbar.html" class="dropdown-item">Three Column
                                            Sidbar</a></li>
                                    <li><a href="four-column.html" class="dropdown-item">Four Column</a></li>
                                    <li><a href="six-colum-full-wide.html" class="dropdown-item">Six Column</a>
                                    </li>
                                    <li><a href="load-more.html" class="dropdown-item">Load More</a></li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{  route('frontend.contacts') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-btns d-flex align-items-center">
                    <div class="contact-btn">
                        <figure class="mb-0">
                            <img src="{{  asset('assets/images/phone-img.png') }}" alt="phone-img">
                        </figure>
                        <a href="tel:+01912466718">
                            +01912466718
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- HEADER SECTION END HERE -->
