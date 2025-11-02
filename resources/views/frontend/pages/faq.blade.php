@extends('frontend.index')

@section('content')
  <!-- BANNER SECTION START HERE -->
    <section class="sub-banner-con w-100 float-left light-bg main-box position-relative">
        <div class="wrapper1417">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="abt-desgin-content">
                        <h1 class="sub-banner-heading">Faq's</h1>
                        <p>Answers to your questions about our architecture <br>
                            and interior design.</p>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faq's</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <img src="assets/images/faq-baner-img.jpg" alt="image" class="img-fluid">
                    </figure>
                </div>
                <!-- sub banner inner con -->
            </div>
            <!--  -->
        </div>
        <!-- sub banner con -->
    </section>
    <!-- BANNER SECTION END HERE -->
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
                            <img src="assets/images/user-detail-img1.png" alt="user-detail-img1">
                        </figure>
                        <span class="d-inline-block count">9</span><span class="d-inline-block alphabet">k</span><sup
                            class="d-inline-block align-middle">+</sup>
                        <p>Interior Designed Worldwide</p>
                    </div>
                    <div class="user-detrail-box">
                        <figure>
                            <img src="assets/images/user-detail-img2.png" alt="user-detail-img2">
                        </figure>
                        <span class="d-inline-block count">98</span><span class="d-inline-block alphabet">%</span>
                        <p>Happy Customers</p>
                    </div>
                    <div class="user-detrail-box">
                        <figure>
                            <img src="assets/images/user-detail-img3.png" alt="user-detail-img3">
                        </figure>
                        <span class="d-inline-block count">25</span><sup class="d-inline-block align-middle">+</sup>
                        <p>Professional Architects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- USER SECTION END HERE -->
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
