@extends('frontend.index')

@section('content')

  <!-- SUB BANNER SECTION -->
  <section
    class="float-left w-100 coming-soon-con d-flex flex-column justify-content-center position-relative main-box light-bg">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="row">
        <div class="col-xl-10 mr-auto ml-auto">
          <div class="sub-content-con position-relative">
            <img src="assets/images/large-logo.png" alt="logo-icon" class="img-fluid new-logo wow fadeInUp"
              data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="position-relative coming-content-con">
              <h3 class="font-weight-500 green-text wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Our
                Website is under construction</h3>
              <h1 class="black-text wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">Coming Soon</h1>
              <div id="compaign_countdown2" class="compaign_countdown wow fadeInDown" data-wow-duration="2s"
                data-wow-delay="0.7s">
                <ul class="p-0 d-flex justify-content-center align-items-center">
                  <li><span id="days" class="days"></span> Days</li>

                  <li><span id="hours" class="hours"></span>Hours</li>

                  <li><span id="minutes" class="minutes"></span>Mints</li>

                  <li><span id="seconds" class="seconds"></span>Sec</li>
                </ul>
              </div>
              <!-- coming-content-con -->
            </div>
            <!-- sub content con-->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- coming soon con -->
  </section>
@endsection
