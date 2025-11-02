@extends('frontend.index')


@section('content')

    <!-- BANNER SECTION START HERE -->
    <section class="sub-banner-con w-100 float-left light-bg main-box position-relative">
        <div class="wrapper1417">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="abt-desgin-content">
                        <h1 class="sub-banner-heading">Blog</h1>
                        <p>We blend innovative architecture with refined interior <br>
                            design to create spaces that inspire. </p>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <img src="assets/images/about-baner-img.jpg" alt="image" class="img-fluid">
                    </figure>
                </div>
                <!-- sub banner inner con -->
            </div>
            <!--  -->
        </div>
        <!-- sub banner con -->
    </section>
    <!-- BANNER SECTION END HERE -->
    <!-- BLOG MAIN SECTION START HERE -->
    <div class="blog-tabs-section w-100 float-left padding-top padding-bottom gradient" id="blog">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="blog-tabs-inner-section">
                <ul class="nav nav-tabs wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s" id="myTab"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-expanded="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="advices-tab" data-toggle="tab" href="#advices" role="tab"
                            aria-controls="advices">Advices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab"
                            aria-controls="announcements">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab"
                            aria-controls="news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="consultation-tab" data-toggle="tab" href="#consultation" role="tab"
                            aria-controls="consultation">Consultation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab"
                            aria-controls="development">Development</a>
                    </li>
                </ul>
                <div class="tab-content wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img1.jpg" alt="single-blog-tab-img1"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img2.jpg" alt="single-blog-tab-img2"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img5.jpg" alt="single-blog-tab-img5"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img7.jpg" alt="single-blog-tab-img7"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img8.jpg" alt="single-blog-tab-img8"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img9.jpg" alt="single-blog-tab-img9"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img10.jpg" alt="single-blog-tab-img10"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="advices" role="tabpanel" aria-labelledby="advices-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img5.jpg" alt="single-blog-tab-img5"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img5.jpg" alt="single-blog-tab-img5"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="consultation" role="tabpanel" aria-labelledby="consultation-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="single-blog.html">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="primary-button d-inline-block">
                                        <a href="single-blog.html" class="d-inline-block ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="single-blog.html" tabindex="-1"><i
                                        class="fas fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="one-column.html">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="two-column.html">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="three-column.html">3</a></li>
                            <li class="page-item"><a class="page-link" href="four-column.html">4</a></li>
                            <li class="page-item"><a class="page-link" href="three-colum-sidbar.html">5</a></li>
                            <li class="page-item"><a class="page-link" href="six-colum-full-wide.html">6</a></li>
                            <li class="page-item"><a class="page-link" href="load-more.html">7</a></li>
                            <li class="page-item"><a class="page-link" href="single-blog.html">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="single-blog.html"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG MAIN SECTION END HERE -->
@endsection
