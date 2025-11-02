@extends('frontend.index')

@section('content')



    <!-- BANNER SECTION START HERE -->
    <section class="banner-main-con w-100 float-left light-bg main-box position-relative">
        <div class="wrapper1417">
            <div class="banner-inner-con wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="banner-text-con">
                    <span class="d-inline-block">Design. Create. Inspire.</span>
                    <h1>Designing <br> Future Living.</h1>
                    <p>Designing innovative spaces that seamlessly blend <br>
                        aesthetics and functionality.</p>
                    <div class="banner-btns">
                        <a class="primary-btn" href="contact.html">Start Project<i class="fas fa-arrow-right"></i></a>
                        <a class="white-btn" href="about.html">Learn More<i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="banner-small-imgs">
                        <figure class="mb-0">
                            <img src="{{  asset('assets/images/banner-small-img1.jpg') }}" alt="banner-small-img1">
                        </figure>
                        <figure class="mb-0">
                            <img src="{{  asset('assets/images/banner-small-img2.jpg') }}" alt="banner-small-img2">
                        </figure>
                        <figure class="mb-0">
                            <img src="{{  asset('assets/images/banner-small-img3.jpg') }}" alt="banner-small-img3">
                        </figure>
                    </div>
                </div>
                <div class="banner-img-con">
                    <figure class="mb-0">
                        <img src="{{  asset('assets/images/banner-main-img.jpg') }}" alt="banner-main-img">
                    </figure>
                    <div class="our-work-btn bottom-arrow">
                        <a href="#user"><img src="{{  asset('assets/images/bottom-arrow.png') }}" alt="arrow"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END HERE -->
    <!-- USER SECTION START HERE -->
    <section class="user-main-con w-100 float-left padding-top padding-bottom circle-bg-shapes main-box" id="user">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="user-inner-con">
                <div class="user-heading-con wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                    <h3>User-Driven Designs,
                        Creatively Realized</h3>
                    <p>Empowering our users to bring their unique design
                        visions to life with creativity and precision.</p>
                </div>
                <div class="users-details-con wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="user-detrail-box">
                        <figure>
                            <img src="{{  asset('assets/images/user-detail-img1.png') }}" alt="user-detail-img1">
                        </figure>
                        <span class="d-inline-block count">9</span><span class="d-inline-block alphabet">k</span><sup
                            class="d-inline-block align-middle">+</sup>
                        <p>Interior Designed Worldwide</p>
                    </div>
                    <div class="user-detrail-box">
                        <figure>
                            <img src="{{  asset('assets/images/user-detail-img2.png') }}" alt="user-detail-img2">
                        </figure>
                        <span class="d-inline-block count">98</span><span class="d-inline-block alphabet">%</span>
                        <p>Happy Customers</p>
                    </div>
                    <div class="user-detrail-box">
                        <figure>
                            <img src="{{  asset('assets/images/user-detail-img3.png') }}" alt="user-detail-img3">
                        </figure>
                        <span class="d-inline-block count">25</span><sup class="d-inline-block align-middle">+</sup>
                        <p>Professional Architects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- USER SECTION END HERE -->
    <!-- HOME ABOUT SECTION START HERE -->
    <section class="home-about-main-con w-100 float-left padding-top padding-bottom main-box">
        <div class="wrapper1417 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="home-about-inner-con">
                <div class="home-about-main-img-con wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <figure class="mb-0">
                        <img src="{{  asset('assets/images/home-about-main-img.jpg') }}" alt="home-about-main-img">
                    </figure>
                </div>
                <div class="home-about-content-con wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">
                    <span class="d-block">About us</span>
                    <h2>Architecture & Design Studios</h2>
                    <p>Our approach combines creative vision with practical solutions to create spaces that are both
                        aesthetically pleasing & purpose-driven.</p>
                    <p>Whether it's residential, commercial, or interior design, we focus on optimizing every square
                        foot to enhance the way people live, work, & interact with their environment.</p>
                    <div class="btn-con">
                        <a class="primary-btn" href="about.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="home-about-small-imgs-con wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <figure class="home-about-small-img1 mb-0">
                        <img src="{{  asset('assets/images/home-about-small-img1.jpg') }}" alt="home-about-small-img1">
                    </figure>
                    <figure class="home-about-small-img2 mb-0">
                        <img src="{{  asset('assets/images/home-about-small-img2.jpg') }}" alt="home-about-small-img2">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME ABOUT SECTION END HERE -->
    <!-- OUR WORK SECTION START HERE -->
    <section class="our-work-main-con w-100 float-left padding-top padding-bottom main-box">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
            <div class="generic-title text-center">
                <span class="d-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">What We Do</span>
                <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">Expert Solutions for
                    Architecture, <br> Interiors, and Custom Design</h2>
            </div>
            <div class="our-work-inner-con wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="our-work-outer-box">
                    <figure class="mb-0">
                        <img src="assets/images/work-detail-small-img1.png" alt="work-detail-small-img1">
                    </figure>
                    <div class="our-work-content-box">
                        <div class="our-work-text-box">
                            <h4>Architectural Design</h4>
                            <p>From residential homes to commercial buildings, we create thoughtful,
                                sustainable designs tailored to your lifestyle or business goals.</p>
                        </div>
                        <div class="our-work-hidden-img">
                            <figure class="mb-0">
                                <img src="assets/images/our-work-main-img1.jpg" alt="our-work-main-img1">
                            </figure>
                        </div>
                        <div class="our-work-btn">
                            <a href="portfolio.html"><img src="assets/images/arrow-right.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="our-work-outer-box">
                    <figure class="mb-0">
                        <img src="assets/images/work-detail-small-img2.png" alt="work-detail-small-img2">
                    </figure>
                    <div class="our-work-content-box">
                        <div class="our-work-text-box">
                            <h4>Interior Design</h4>
                            <p>We craft interiors that harmonize beauty and practicality, reflecting
                                your personality or brand identity in every detail.</p>
                        </div>
                        <div class="our-work-hidden-img">
                            <figure class="mb-0">
                                <img src="assets/images/our-work-main-img2.jpg" alt="our-work-main-img">
                            </figure>
                        </div>
                        <div class="our-work-btn">
                            <a href="portfolio.html"><img src="assets/images/arrow-right.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="our-work-outer-box">
                    <figure class="mb-0">
                        <img src="assets/images/work-detail-small-img3.png" alt="work-detail-small-img3">
                    </figure>
                    <div class="our-work-content-box">
                        <div class="our-work-text-box">
                            <h4>Resedential Renovation</h4>
                            <p>We specialize in transforming existing homes into renewed spaces
                                that reflect your evolving lifestyle, taste, and functional needs.</p>
                        </div>
                        <div class="our-work-hidden-img">
                            <figure class="mb-0">
                                <img src="assets/images/our-work-main-img3.jpg" alt="our-work-main-img">
                            </figure>
                        </div>
                        <div class="our-work-btn">
                            <a href="portfolio.html"><img src="assets/images/arrow-right.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="our-work-outer-box">
                    <figure class="mb-0">
                        <img src="assets/images/work-detail-small-img4.png" alt="work-detail-small-img4">
                    </figure>
                    <div class="our-work-content-box">
                        <div class="our-work-text-box">
                            <h4>Design & Execution</h4>
                            <p>Our Design & Execution service offers a comprehensive, start-to
                                -finish solution that brings your vision to life.</p>
                        </div>
                        <div class="our-work-hidden-img">
                            <figure class="mb-0">
                                <img src="assets/images/our-work-main-img4.jpg" alt="our-work-main-img1">
                            </figure>
                        </div>
                        <div class="our-work-btn">
                            <a href="portfolio.html"><img src="assets/images/arrow-right.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-main-btn">
                <a class="secondary-btn" href="portfolio.html">View All <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- OUR WORK SECTION END HERE -->
    <!-- LATEST PROJECT SECTION START HERE -->
    <section class="latest-proj-main-con w-100 float-left padding-top padding-bottom light-bg main-box">
        <div class="wrapper1417 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block">Latest Projects</span>
                <h2>Recent Work We Have Done</h2>
            </div>
            <div class="latest-proj-inner-con wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="owl-carousel owl-theme" id="owl-carousel-project">
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img1.jpg" alt="latest-project-img1">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Interior – Luxury Living</small>
                                    <h5>Living Room Interior</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img2.jpg" alt="latest-project-img2">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Architecture– Luxury Living</small>
                                    <h5>Cube Modern House</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img3.jpg" alt="latest-project-img3">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Decor – Lighting</small>
                                    <h5>Light Interior Design</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img1.jpg" alt="latest-project-img1">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Interior – Luxury Living</small>
                                    <h5>Living Room Interior</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img2.jpg" alt="latest-project-img2">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Architecture– Luxury Living</small>
                                    <h5>Cube Modern House</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img3.jpg" alt="latest-project-img3">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Decor – Lighting</small>
                                    <h5>Light Interior Design</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img1.jpg" alt="latest-project-img1">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Interior – Luxury Living</small>
                                    <h5>Living Room Interior</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img2.jpg" alt="latest-project-img2">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Architecture– Luxury Living</small>
                                    <h5>Cube Modern House</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="latest-proj-box">
                            <figure class="mb-0">
                                <img src="assets/images/latest-project-img3.jpg" alt="latest-project-img3">
                            </figure>
                            <div class="latest-proj-content-con">
                                <div class="latest-proj-heading">
                                    <small class="d-block">Decor – Lighting</small>
                                    <h5>Light Interior Design</h5>
                                </div>
                                <div class="latest-proj-btn">
                                    <a href="portfolio.html"><img src="assets/images/small-right-arrow.png"
                                            alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST PROJECT SECTION END HERE -->
    <!-- CLIENT SECTION START HERE -->
    <div class="client-review-slider w-100 float-left padding-top padding-bottom position-relative main-box">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block">Testimonials</span>
                <h2>What Our Clients Say</h2>
            </div>
            <div class="client-review-slider-inner-con wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div id="home1_testimonial_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="client-review-box">
                                <figure class="rating-stars">
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <p class="review-text">“Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem
                                    quia
                                    voluptas aspernatur aurodit aut fugit,
                                    sed neatae vitae dicta ripiscing elit, sed do euismod tempor incidunt labore are
                                    dolore
                                    magna aliqua aut enim a minim adipiscing elit, sed do euismod tempor incidunt labore
                                    minima veniam.”
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client-review-box">
                                <figure class="rating-stars">
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <p class="review-text">“Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem
                                    quia
                                    voluptas aspernatur aurodit aut fugit,
                                    sed neatae vitae dicta ripiscing elit, sed do euismod tempor incidunt labore are
                                    dolore
                                    magna aliqua aut enim a minim adipiscing elit, sed do euismod tempor incidunt labore
                                    minima veniam.”</p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client-review-box">
                                <figure class="rating-stars">
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <p class="review-text">“Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem
                                    quia
                                    voluptas aspernatur aurodit aut fugit,
                                    sed neatae vitae dicta ripiscing elit, sed do euismod tempor incidunt labore are
                                    dolore
                                    magna aliqua aut enim a minim adipiscing elit, sed do euismod tempor incidunt labore
                                    minima veniam.”</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client-review-box">
                                <figure class="rating-stars">
                                    <img src="assets/images/rating-stars.png" alt="rating-stars">
                                </figure>
                                <p class="review-text">“Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem
                                    quia
                                    voluptas aspernatur aurodit aut fugit,
                                    sed neatae vitae dicta ripiscing elit, sed do euismod tempor incidunt labore are
                                    dolore
                                    magna aliqua aut enim a minim adipiscing elit, sed do euismod tempor incidunt labore
                                    minima veniam.”</p>
                            </div>
                        </div>
                    </div>
                    <ul class="carousel-indicators">
                        <li data-target="#home1_testimonial_slider" data-slide-to="0" class="active">
                            <figure class="mb-0">
                                <img src="./assets/images/client-img1.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="name_wrapper">
                                <p class="client-name">Jennifer Troyer</p>
                                <span class="d-block">Administrator</span>
                            </div>
                        </li>
                        <li data-target="#home1_testimonial_slider" data-slide-to="1">
                            <figure class="mb-0">
                                <img src="./assets/images/client-img2.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="name_wrapper">
                                <p class="client-name">Fergus Douchebag</p>
                                <span class="d-block">Happy Customer</span>
                            </div>
                        </li>
                        <li data-target="#home1_testimonial_slider" data-slide-to="2">
                            <figure class="mb-0">
                                <img src="./assets/images/client-img3.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="name_wrapper">
                                <p class="client-name">lucy Smith</p>
                                <span class="d-block">Satisfied Customer</span>
                            </div>
                        </li>
                        <li data-target="#home1_testimonial_slider" data-slide-to="3">
                            <figure class="mb-0">
                                <img src="./assets/images/client-img4.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="name_wrapper">
                                <p class="client-name">John Smith</p>
                                <span class="d-block">Satisfied Client</span>
                            </div>
                        </li>
                    </ul>
                    <div class="pagination-outer">
                        <a class="carousel-control-prev" href="#home1_testimonial_slider" role="button"
                            data-slide="prev">
                            <i class="prev-arrow fa-solid fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#home1_testimonial_slider" role="button"
                            data-slide="next">
                            <i class="next-arrow fa-solid fa-arrow-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENT SECTION END HERE -->
    <!-- GET STARTED SECTION START HERE -->
    <section class="get-started-main-con w-100 float-left position-relative">
        <div class="circle-bg-shapes padding-top padding-bottom">
            <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="get-started-inner-con col-xl-9 mr-auto ml-auto">
                    <div class="generic-title text-center">
                        <span class="d-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">Work With
                            Us</span>
                        <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">Begin Your Space
                            Transformation With Us</h2>
                    </div>
                    <div class="get-started-btn text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                        <a class="secondary-btn" href="contact.html">Get Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GET STARTED SECTION END HERE -->
    <!-- WHY CHOOSE US SECTION START HERE -->
    <section class="why-choose-us-main-con w-100 float-left padding-top padding-bottom main-box position-relative">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="why-choose-us-inner-con">
                <div class="why-choose-us-img-con wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                    <figure class="mb-0">
                        <img src="assets/images/why-choose-main-img.jpg" alt="why-choose-main-img">
                    </figure>
                </div>
                <div class="why-choose-us-content-con wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="generic-title">
                        <span class="d-block">Why Choose Us</span>
                        <h2>Designing with Quality and care.</h2>
                    </div>
                    <div class="why-choose-us-detail">
                        <figure class="mb-0">
                            <img src="assets/images/certified-insurence-img.png" alt="certified-insurence-img">
                        </figure>
                        <div class="why-choose-us-text">
                            <span class="d-block">Certified Insurance</span>
                            <p>Trusted coverage backed by official certification and expert guidance.</p>
                        </div>
                    </div>
                    <div class="why-choose-us-detail">
                        <figure class="mb-0">
                            <img src="assets/images/exp-img.png" alt="exp-img">
                        </figure>
                        <div class="why-choose-us-text">
                            <span class="d-block">20+ Year Experience</span>
                            <p>Bringing over two decades of proven expertise & trusted design solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US SECTION END HERE -->
    <!-- BLOG SECTION START HERE -->
    <section class="home-blog-main-con w-100 float-left padding-top padding-bottom position-relative light-bg main-box">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">News & Articles</span>
                <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">Our Latest Blog Posts</h2>
            </div>
            <div class="home-blog-inner-con wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="home-blog-box">
                    <a href="single-blog.html">
                        <figure>
                            <img src="assets/images/home-blog-img1.jpg" alt="home-blog-img1" class="img-fluid">
                        </figure>
                        <span class="d-block">March 18, 2019 - 0 Comments</span>
                        <h6>Top Interior Design Trends to Transform Your Space</h6>
                    </a>
                </div>
                <div class="home-blog-box">
                    <a href="single-blog.html">
                        <figure>
                            <img src="assets/images/home-blog-img2.jpg" alt="home-blog-img2" class="img-fluid">
                        </figure>
                        <span class="d-block">March 18, 2019 - 0 Comments</span>
                        <h6>Functionality and Style in Modern Architecture</h6>
                    </a>
                </div>
                <div class="home-blog-box">
                    <a href="single-blog.html">
                        <figure>
                            <img src="assets/images/home-blog-img3.jpg" alt="home-blog-img3" class="img-fluid">
                        </figure>
                        <span class="d-block">March 18, 2019 - 0 Comments</span>
                        <h6>5 Common Design Mistakes and How to Avoid Them</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END HERE -->
    <!-- FAQ SECTION START HERE -->
    <section class="faq-main-con w-100 float-left padding-top padding-bottom position-relative main-box">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">Faq’s</span>
                <h2 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">Frequently Asked Questions</h2>
            </div>
            <div class="faq-inner-con float-left w-100 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.4s">
                <div id="accordion">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            What services do you offer in architecture & interior?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How does the design process work from start to finish?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How long does a typical project take?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingfour">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsefour" aria-expanded="true"
                                            aria-controls="collapsefour">
                                            What information you need from me to get started?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header" id="headingfive">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsefive" aria-expanded="true"
                                            aria-controls="collapsefive">
                                            Can you work with my existing space or furniture?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsesix" aria-expanded="false"
                                            aria-controls="collapsesix">
                                            Do you handle project management & construction?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingseven">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseseven" aria-expanded="false"
                                            aria-controls="collapseseven">
                                            What is your design fees and how pricing structured?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingeight">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseeight" aria-expanded="true"
                                            aria-controls="collapseeight">
                                            Do you offer sustainable or eco-friendly options?
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseeight" class="collapse" aria-labelledby="headingeight"
                                    data-parent="#accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END HERE -->
    <!-- SUBSCRIPTION SECTION START HERE -->
    <section class="subscription-main-con w-100 float-left padding-top padding-bottom position-relative main-box">
        <div class="wrapper1417 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="subscription-inner-con">
                <div class="subscription-img-con1 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                    <figure class="text-left">
                        <img src="assets/images/subscription-big-img1.jpg" alt="subscription-big-img1">
                    </figure>
                    <figure class="mb-0 text-right">
                        <img src="assets/images/subscription-small-img1.jpg" alt="subscription-small-img1">
                    </figure>
                </div>
                <div class="subscription-content-con">
                    <div class="generic-title text-center">
                        <span class="d-block wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">Get
                            Updates</span>
                        <h3 class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">Subscribe to Our
                            Newsletter to Get the Latest Updates</h3>
                    </div>
                    <div class="subscription-mail-box wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.6s">
                        <input type="email" id="mail" placeholder="Enter Your Email Address:">
                        <button><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
                <div class="subscription-img-con2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <figure class="text-right">
                        <img src="assets/images/subscription-small-img2.jpg" alt="subscription-small-img2">
                    </figure>
                    <figure class="mb-0 text-left">
                        <img src="assets/images/subscription-big-img2.jpg" alt="subscription-big-img2">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- SUBSCRIPTION SECTION END HERE -->





@endsection
