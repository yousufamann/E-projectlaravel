@extends('homelayouts.homeTemplate')
@section('homecontent')
<!--page title start-->
<section class="page-title parallaxie" data-bg-img="{{asset('homeAssets/images/bg/02.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="white-bg p-md-5 p-3 d-inline-block">
          <h1 class="text-theme">Contact <span class="text-black">Us</span></h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
            <ol class="breadcrumb">
             
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
    <!--contact start-->
<section>
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8 col-12">
          <div class="section-title">
            <h2 class="title">Drop A Line!</h2> 
            <p class="mb-0">Any Question or Remarks ? Just Write Us a Message!</p>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-lg-8">
          <div class="contact-main white-bg shadow-sm p-5">
            <form id="contact-form" class="row" method="post" action="https://themeht.com/template/labortech/html/php/contact.php">
              <div id="formmessage"></div>
              <div class="form-group col-md-6">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required">
              </div>
              <div class="form-group col-md-6">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
              </div>
              <div class="form-group col-md-6">
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required">
              </div>
              <div class="form-group col-md-6">
                <select name="select" class="form-select form-control">
                  <option>- Choose Service</option>
                  <option>Pathology</option>
                  <option>Diabetes</option>
                  <option>Chemical</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required"></textarea>
              </div>
              <div class="col-md-12 text-center mt-4">
                <button class="btn btn-theme"><span>Send Messages</span>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 dark-bg">
          <div class="px-3 py-5 p-md-5 text-white">
            <div class="contact-media mb-4">
              <h5 class="text-white">Find Office:</h5>
              <span>423B, Road Wordwide Country, USA</span>
            </div>
            <div class="contact-media mb-4">
              <h5 class="text-white">Contact Us:</h5>
              <ul class="list-unstyled">
                <li class="mb-2">Phone: <a href="tel:+912345678900">+91-234-567-8900</a>
                </li>
                <li>Email: <a href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                </li>
              </ul>
            </div>
            <div class="contact-media mb-4">
              <h5 class="text-white">Working Hours:</h5>
              <span>Monday - Saturday: 9.30am To 7.00pm</span>
            </div>
            <div class="social-icons">
              <ul class="list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-instagram"></i></a>
                </li>
                <li><a href="#"><i class="lab la-dribbble"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--contact end-->

  <!--map start-->
<section class="p-0">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-md-12">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--map end-->
  </div>
  <!--body content end--> 
@endsection