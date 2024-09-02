@extends('homelayouts.homeTemplate')
@section('homecontent')
<!--page title start-->
<section class="page-title parallaxie" data-bg-img="{{asset('homeAssets/images/bg/04.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="white-bg p-md-5 p-3 d-inline-block">
          <h1 class="text-theme">About <span class="text-black">Lab Automation</span></h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
              <a class="btn btn-theme" href="about-us.html"><span>More About</span>
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

    <!--multi-sec start-->
    <section class="p-0 mt-n6">
        <div class="container-fluid ps-0">
          <div class="row">
            <div class="col-lg-7 col-md-10 col-11">
              <div class="dark-bg p-lg-7 p-4 pb-10 custom-pt-1" data-bg-img="{{asset('homeAssets/images/pattern/02.png')}}">
                <div class="section-title ms-md-5">
                  <h2 class="title">We’re Setting the New Standards in Laboratory & Research Professional.</h2> 
                  <p class="lead text-light">We Provide All Aspects Of Medical Practice For Your Whole Family!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-8 pe-md-0">
              <div class="light-bg p-5 z-index-1 mt-n7">
                <div class="ht-progress-bar mb-4">
                  <h4>Environmental Testing</h4>
                  <div class="progress" data-value="85">
                    <div class="progress-bar">
                      <div class="progress-parcent"><span>85</span>%</div>
                    </div>
                  </div>
                </div>
                <div class="ht-progress-bar mb-4">
                  <h4>Immune system</h4>
                  <div class="progress" data-value="75">
                    <div class="progress-bar">
                      <div class="progress-parcent"><span>75</span>%</div>
                    </div>
                  </div>
                </div>
                <div class="ht-progress-bar mb-4">
                  <h4>Advanced Microscopy</h4>
                  <div class="progress" data-value="95">
                    <div class="progress-bar">
                      <div class="progress-parcent"><span>95</span>%</div>
                    </div>
                  </div>
                </div>
                <div class="ht-progress-bar">
                  <h4>Management</h4>
                  <div class="progress" data-value="80">
                    <div class="progress-bar">
                      <div class="progress-parcent"><span>80</span>%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-10 col-12 ms-auto ps-0">
              <div class="position-relative overflow-hidden img-border mt-n15 custom-mt-0">
                <img class="img-fluid w-100" src="{{asset('homeAssets/images/about/02.jpg')}}" alt="">
                <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube mr-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="las la-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!--multi-sec end-->

<!--call us start-->
<section class="theme-bg py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-12">
          <h3 class="text-light">Need a Help for Check-up? Call for an Emergency Laboratory Services</h3>
        </div>
        <div class="col-md-5 col-12 ms-auto mt-3 mt-lg-0">
          <div class="d-flex align-items-start justify-content-end">
            <div class="text-white text-end"> <span>Help Desk 24/7</span>
              <h3 class="font-w-4"><a class="text-decoration-underline text-white" href="tel:+(01)24665813917">(01)-246-6581-3917</a></h3>
            </div> <span class="white-bg d-inline-block p-2 ms-4"><i class="las la-phone ic-3x text-theme"></i></span>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--call us end-->
</div>
<!--body content end--> 
@endsection