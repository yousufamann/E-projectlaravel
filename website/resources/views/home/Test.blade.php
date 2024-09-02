@extends('homelayouts.homeTemplate')
@section('homecontent')
    <!--page title start-->
    <section class="page-title parallaxie" data-bg-img="{{ asset('homeAssets/images/bg/06.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="white-bg p-md-5 p-3 d-inline-block">
                        <h1 class="text-theme">Testing<span class="text-black">Types</span></h1>
                        <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Test</li>
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
        <!--recent test start-->
        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-12">
                        <div class="section-title">
                            <h2 class="title mb-0">Related Testing</h2>
                        </div>
                    </div>
                     <!--test start-->
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
                </div>
            </div>
        </section>
        <!--recent test end-->
    </div>
    <!--body content end-->
@endsection
