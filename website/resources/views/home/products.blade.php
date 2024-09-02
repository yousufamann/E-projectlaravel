@extends('homelayouts.homeTemplate')
@section('homecontent')
<!--page title start-->
<section class="page-title parallaxie" data-bg-img="{{asset('homeAssets/images/bg/05.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="white-bg p-md-5 p-3 d-inline-block">
          <h1 class="text-theme">My <span class="text-black">Products</span></h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
          </nav>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--page title end-->

  <!--body content start-->
  <div class="page-content">
<!--recent product start-->
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
  <!--recent product end-->
  </div>
   <!--body content end-->
@endsection
