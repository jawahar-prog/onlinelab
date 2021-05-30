@extends('layouts.app')

@section('content')
<section class="page-banner bg_cover" style="background-image: url(./images/page-banner-8.jpg)" data-overlay="5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content text-center">
          <h2 class="page-title">Contact Us</h2>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-page pt-30 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="contact-form pt-20">
          <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
            <div class="row">
              <div class="col-md-6">
                <div class="single-contact-form form-group">
                  <input type="text" name="name" placeholder="Name" data-error="Name is required." required="">
                  <div class="help-block with-errors"></div>
                  <i class="fa fa-user"></i> </div>
              </div>
              <div class="col-md-6">
                <div class="single-contact-form form-group">
                  <input type="email" name="email" placeholder="Email" data-error="Valid email is required." required="">
                  <div class="help-block with-errors"></div>
                  <i class="fa fa-envelope"></i> </div>
              </div>
              <div class="col-md-6">
                <div class="single-contact-form form-group">
                  <input type="text" name="subject" placeholder="Subject" data-error="Subject is required." required="">
                  <div class="help-block with-errors"></div>
                  <i class="fa fa-pencil"></i> </div>
              </div>
              <div class="col-md-6">
                <div class="single-contact-form form-group">
                  <input type="text" name="phone" placeholder="Phone Number" data-error="Phone is required." required="">
                  <div class="help-block with-errors"></div>
                  <i class="fa fa-user"></i> </div>
              </div>
              <div class="col-md-12">
                <div class="single-contact-form form-group">
                  <textarea name="message" placeholder="Your Comment" data-error="Please,leave us a message." required=""></textarea>
                  <div class="help-block with-errors"></div>
                  <i class="fa fa-pencil-square-o"></i> </div>
              </div>
              <p class="form-message"></p>
              <div class="col-md-12">
                <div class="single-contact-form form-group">
                  <button type="submit" class="main-btn">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info mt-50">
          <h4 class="info-title">Don’t Hesitate to contact with us for any kind of information</h4>
          <ul>
            <li>
              <div class="single-info">
                <div class="info-icon"> <i class="fa fa-location-arrow"></i> </div>
                <div class="info-content">
                  <p class="text">A-132 Chand Nagar, Near Tilak Nagar</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single-info">
                <div class="info-icon"> <i class="fa fa-phone"></i> </div>
                <div class="info-content">
                  <p class="text">+91 8745087093</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single-info">
                <div class="info-icon"> <i class="fa fa-envelope"></i> </div>
                <div class="info-content">
                  <p class="text">info@weblogicdesign.com </p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</section>
@endsection
