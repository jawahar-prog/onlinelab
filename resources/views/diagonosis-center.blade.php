@extends('layouts.app')

@section('content')
<section class="page-banner bg_cover" style="background-image: url(./images/page-banner-8.jpg)" data-overlay="5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content text-center">
          <h2 class="page-title">Diagnostic Center</h2>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Diagnostic Center</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-page pt-50 pb-80">
  <div class="container">
    <div class="row">
    <h3 style="margin-bottom:15px;">Diagnostic Lab Center</h3>
  <table class="table table-bordered  Patientdk Diagnostic">
    <thead>
        <tr>
            <th>Name &amp; Address</th>
            <th>Phone</th>
            
        </tr>
    </thead>
            <tbody><tr>
                <td><img src="images/lab-1.png" alt=""> Home sample pickup all over Delhi </td>
              
                <td><i class="fa fa-phone"></i> +91 8745087093</td>
            </tr>
            <tr>
                <td><img src="images/lab-2.png" alt=""> Home sample pickup all over Delhi </td>
                <td><i class="fa fa-phone"></i> +91 8745087093</td>
            </tr>
            <tr>
                <td><img src="images/lab-3.png" alt=""> Home sample pickup all over Delhi </td>
                <td><i class="fa fa-phone"></i> +91 8745087093</td>
            </tr>
    </tbody></table>
   
    </div>
  </div>
</section>
@endsection
