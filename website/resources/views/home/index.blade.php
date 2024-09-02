@extends('homelayouts.homeTemplate')
@section('homecontent')
  <!--hero section start-->
<section class="banner p-0 pos-r">
  <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
    <div class="item overlay-50 theme-overlay" data-bg-img="{{asset('homeAssets/images/bg/01.jpg')}}" data-overlay="9">
      <div class="container">
        <div class="row pt-8 custom-pb-2">
          <div class="col-lg-6 col-md-8 col-12">
            <h1 class="mb-4 text-white">Providing Best Laboratory Service</h1>
            <p class="lead font-w-5 text-white">Labortech is modern laboratory services Delivering newer
              <br>flows by their place website is the first impression.</p>
            <div class="btn-box mt-5">
              <a class="btn btn-white" href="#"> <span>More About</span>
              </a>
              <a class="btn btn-dark" href="#"> <span>Test Appointment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item overlay-50 theme-overlay" data-bg-img="{{asset('homeAssets/images/bg/02.jpg')}}" data-overlay="9">
      <div class="container">
        <div class="row pt-8 custom-pb-2">
          <div class="col-lg-6 col-md-8 col-12">
            <h1 class="mb-4 text-white">Providing Best Laboratory Service</h1>
            <p class="lead font-w-5 text-white">Labortech is modern laboratory services Delivering newer
              <br>flows by their place website is the first impression.</p>
            <div class="btn-box mt-5">
              <a class="btn btn-white" href="#"> <span>More About</span>
              </a>
              <a class="btn btn-dark" href="#"> <span>Test Appointment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--hero section end-->

  <!--body content start-->

<div class="page-content">
  <!--client start-->
  <section class="pb-0">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="owl-carousel no-pb" data-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="20" data-autoplay="true">
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/09.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/10.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/11.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/12.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/13.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/14.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/15.png')}}" alt="">
              </div>
            </div>
            <div class="item">
              <div class="client-logo">
                <img class="img-fluid" src="{{asset('homeAssets/images/client/16.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--client end-->

   <!--test start-->
   <div class="page-content">
    <!--recent test start-->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-12">
                    <div class="section-title">
                        <h2 class="title mb-0">Related Testing</h2>
                    </div>
                </div>
   <section class="pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons" height="64px" src="{{asset('homeAssets/testicon/electric-safety.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Electrical Safety Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1 active">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/eco-friendly.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Enviromental Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/magnet.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Electromagnetic Compatibility(EMC) Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/seo.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Perfomance Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/reliability.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Reliability Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/testing.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Compliance Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/software-development.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Software Testing</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
          <div class="featured-item style-1">
            <div class="featured-icon">
                <img class="icons"  height="64px" src="{{asset('homeAssets/testicon/market-analysis.png')}}" alt="">
            </div>
            <div class="featured-title">
              <h5>Failure Analysis</h5>
            </div>
            <div class="featured-desc">
              <p>Our firm is expert to create an efficient user interface that.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--test end-->

    <!--about start-->
    <section>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-5 col-12 order-lg-1">
            <img class="img-fluid" src="{{asset('homeAssets/images/about/01.jpg')}}" alt="">
          </div>
          <div class="col-lg-7 col-12 mt-6 mt-lg-0">
            <div class="row align-items-end">
              <div class="col-md-7">
                <div class="section-title">
                  <h2 class="title">We Employ Latest Research Technology & Company</h2>
                  <p class="text-black font-w-5 mb-3">We're here to care for you and your entire family doctor will general health!</p>
                  <p>Our doctors include highly qualified male and female practitioners who come from a range of backgrounds and bring a diversity of skills.</p>
                </div>
                <a class="btn btn-theme" href="#"> <span>More About</span>
                </a>
              </div>
              <div class="col-md-5 mt-6 mt-md-0">
                <p class="mb-4">Our administration and support staff all have exceptional people skills around the world.</p>
                <img class="img-fluid" src="{{asset('homeAssets/images/sign.png')}}" alt="">
                <ul class="list-unstyled list-icon mt-4">
                  <li class="mb-3"><i class="las la-check"></i> Home medicine review</li>
                  <li class="mb-3"><i class="las la-check"></i> Highest Quality Results</li>
                  <li><i class="las la-check"></i> We Ensure Safe Diagnosis</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--about end-->

    <!--product start-->
    <section>
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-12">
              <div class="section-title">
                <h2 class="title mb-0">Related Products</h2>
              </div>
            </div>
          </div>
          <div class="container-fluid container-team py-4">
            <div class="container pb-5">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:175px;">
                                <img class="img-fluid w-100" src="{{asset('homeAssets/product/Automatic Analyzer 1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Automatic Analyzer</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('homeAssets/product/DAQ System 1.webp') }}"
                                    alt="" style="height: 175px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">DAQ System</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('homeAssets/product/Data Loggers 1.webp') }}"
                                    alt="">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Data Loggers</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('HomeAssets/product/DC Power Supply 1.jpg') }}"
                                    alt="" style="height: 175px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">DC Power Supply</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 pt-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('HomeAssets/product/Enviromental Chamber 1.jpg') }}"
                                    alt="" style="height:170px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Enviromental Chamber</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('HomeAssets/product/Fire Alarm System 1.jpg') }}"
                                    alt="" style="height:195px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Fire Alarm System</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:195px;">
                                <img class="img-fluid w-100" src="{{asset('HomeAssets/product/Fume Hood 1.jpg') }}"
                                    alt="" style="height:170px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Fume Hood</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:195px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Laboratory Incubator 1.jpg') }}"
                                    alt="" style="height:190px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Laboratory Incubator</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 pt-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('HomeAssets/product/Liquid Handling System 1.jpg') }}"
                                    alt="" style="height:170px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Liquid Handling System</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:195px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Microcontroller 1.jpg') }}"
                                    alt="" style="height:170px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Microcontroller</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi
                            bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:195px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Microscope 1.jpg') }}"
                                    alt="" style="height:190px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Microscope</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:195px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Oscilloscopes 1.jpg') }}"
                                    alt="" style="height:190px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Oscilloscopes</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 pt-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/pH Meter 1.jpg') }}"
                                    alt="" style="height:180px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">pH Meter</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:155px;">
                                <img class="img-fluid w-100"
                                    src="{{ asset('HomeAssets/product/Progammable Logic Controller 1.jpg') }}" alt=""
                                    style="height:160px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Programmable Logic Controller</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:180px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Robotic Arm 1.jpg') }}"
                                    alt="" style="height:160px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Robotic Arm</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi
                                bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden" style="height:180px;">
                                <img class="img-fluid w-100" src="{{ asset('HomeAssets/product/Spectrophotometer 1.jpg') }}"
                                    alt="" style="height:160px;">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Spectrophotometer</h5>
                                <a class="btn btn-light px-3" href="">Read More<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--product end-->

<!--call us start-->
<section class="p-0">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="p-md-8 p-4 text-center parallaxie" data-bg-img="{{asset('homeAssets/images/bg/04.jpg')}}" data-overlay="4">
                    <h2 class="text-white mb-5">Questions About Laboratory Testing And Products</h2>
                    <a class="btn btn-white" href="contact"><span>Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>
</section>
<!--call us end-->
</div>
    <!--body content end-->
@endsection
