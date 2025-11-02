@extends('frontend.index')

@section('content')

 <!-- BANNER SECTION START HERE -->
    <section class="sub-banner-con w-100 float-left light-bg main-box position-relative">
        <div class="wrapper1417">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="abt-desgin-content">
                        <h1 class="sub-banner-heading">Contact Us</h1>
                        <p>Get in touch to learn more about our architecture <br>
                            and interior design services. </p>
                        <div class="breadcrumb-con d-inline-block">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <img src="assets/images/contact-baner-img.jpg" alt="image" class="img-fluid">
                    </figure>
                </div>
                <!-- sub banner inner con -->
            </div>
            <!--  -->
        </div>
        <!-- sub banner con -->
    </section>
    <!-- BANNER SECTION END HERE -->

    <!-- CONTACT HELP SECTION -->
    <section
        class="float-left w-100 position-relative contact-help-con padding-top padding-bottom main-box text-center background-navy-medium">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">Contact Info</span>
                <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Our Contact Information</h2>
            </div>
            <div class="row align-items-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="white-box position-relative w-100">
                        <figure class="skin-circle"><img src="assets/images/loc-img.png" alt="icon" class="img-fluid">
                        </figure>
                        <h6 class="">Our Location</h6>
                        <ul class="list-unstyled p-0">
                            <li>121 King Street, Melbourne <br>
                                Victoria 3000 Australia</li>
                        </ul>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="white-box position-relative w-100">
                        <figure class="dark-circle"><img src="assets/images/email-img.png" alt="icon" class="img-fluid">
                        </figure>
                        <h6 class="">Email us at</h6>
                        <ul class="list-unstyled p-0">
                            <li><a href="mailto:support@archilux.com">support@archilux.com
                                </a></li>
                            <li><a href="mailto:archilux@gmail.com">archilux@gmail.com</a></li>
                        </ul>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="white-box position-relative w-100">
                        <figure class="light-circle"><img src="assets/images/contct-img.png" alt="icon"
                                class="img-fluid"></figure>
                        <h6 class="">Phone Number</h6>
                        <ul class="list-unstyled p-0">
                            <li><a href="tel:+012(345)67899">+012 (345) 678 99</a></li>
                            <li><a href="tel:+1234567847858">+12345678 478 58</a></li>
                        </ul>
                        <!-- white box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- why choose us con  -->
    </section>
    <!-- CONTACT FORM SECTION-->
    <section class="float-left w-100 position-relative contact-form-con padding-top padding-bottom main-box light-bg">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="generic-title text-center">
                <span class="d-block wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">Get in Touch</span>
                <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Send us a Message</h2>
            </div>
            <div class="row wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="col-xl-12 col-lg-12 mr-auto ml-auto">
                    <form class="main-form text-center" method="post" id="contactpage">
                        <ul class="list-unstyled p-0 float-left w-100 mb-0">
                            <li>
                                <input type="text" placeholder="Name" name="fname" id="fname">
                            </li>
                            <li>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                            </li>
                            <li>
                                <input type="email" placeholder="Email" name="email" id="email">
                            </li>
                            <li>
                                <textarea placeholder="Message" rows="6" name="msg"></textarea>
                            </li>
                        </ul>
                        <div class="secondary-btn d-inline-block">
                            <button type="submit" id="submit"> Send Now <i class="fas fa-arrow-right ml-2"></i></button>
                        </div>
                    </form>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>

            <!-- container -->
        </div>
        <!-- contact form con -->
    </section>

    <!-- MAP SECTION -->
    <div class="float-left w-100 contact-map-con position-relative">
        <div class="container-fluid p-0 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.367176743588!2d144.95736461590413!3d-37.81813957974638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65cbce858f6d7%3A0x9cc486b305ba3fb1!2s21%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1669200882885!5m2!1sen!2s"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <!-- container fluid -->
        </div>
        <!-- contact map con -->
    </div>
    <div class="clearfix"></div>

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
