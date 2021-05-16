@extends('layouts.admin')

@section('content')
<section class="page-banner bg_cover" style="background-image: url({{ url('/images/page-banner-8.jpg') }} )" data-overlay="5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content text-center">
          <h2 class="page-title">Welcome to Admin Panel</h2>
          <ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-page pt-30 pb-80">
  <div class="container">
 
<div class="about-page-content pt-10">
<div class="row">
<div class="col-xl-6 col-lg-6">
<div class="about-image-tow mt-50">
    <img src="{{ url('images/Helpful-Test.png') }}" alt="About">
</div> 
</div>
<div class="col-lg-6">
 <div class="about-content-tow mt-45">
<div class="section-title mb-30">
<h3 class="title">Helpful Test</h3>
</div> 
<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor lorem vel nibh dictum, sit amet imperdiet dui sodales.</p>

<a class="main-btn" href="contact.html">Contact us <i class="fa fa-angle-right"></i></a>
</div> 
</div>
</div> 
</div> 
</div>
</section>
@endsection
