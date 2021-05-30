<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
   <link rel="shortcut icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="{{ asset('patho/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/LineIcons.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('patho/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/jquery.timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('patho/css/responsive.css') }}">
</head>
<style>.invalid-feedback{display: block;}</style>
<!-- header --->
<header class="header-area">
  <div class="header-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-12 col-lg-9">
          <div class="header-info d-lg-block">
            <ul>
              <li><i class="fa fa-envelope"></i> info@weblogicdesign.com</li>
              <li><i class="fa fa-mobile"></i> +91 8745087093</li>
              <li><i class="fa fa-clock-o"></i> 8AM to 11PM </li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-lg-3">
          <div class="header-social text-right">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ url('images/logo.png') }}" alt="Logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="toggler-icon"></span> <span class="toggler-icon"></span> <span class="toggler-icon"></span> </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul class="navbar-nav ml-autooooo">
                    
                    @guest
                    <li class="nav-item "> <a class="active" href="{{ url('/') }}">Home</a> </li>
                    <li class="nav-item"> <a href="{{'about-us'}}">About us</a> </li>
                    <li class="nav-item"> <a href="{{'diagnostic-center'}}">Diagnostic Center</a></li>
                    <li class="nav-item"> <a href="{{'book-appointment'}}">Book Appointment</a></li>
                    <li class="nav-item"> <a href="{{'contact'}}">Contact</a> </li>
                    <button class="signup dropbtn"><a href="{{ url('/register')}}"><i class="fa fa-user"></i> Pathology Register</a></button>
                    <div class="dropdown navbar-btn  d-sm-block logcontent">
                    
                    <button class="dropbtn loginbtn"><i class="fa fa-lock"></i> Login</button>
                    <div class="dropdown-content">
                    <a href="{{ url('/login?user=pathology') }}">Pathology's Login</a>
                    <a href="{{ url('/login/?user=patient') }}">Patient's Login</a>
                    </div>
                    @else
                    <style type="text/css">
                    .navigation .navbar .navbar-nav .nav-item a{
                      padding: 15px 32px;
                        }
                    .select,
                    #locale {
                    width: 100%;
                    }
                    .like {
                    margin-right: 10px;
                        }
                  </style>
                    <li class="nav-item "> <a class="active" href="{{ url('/home') }}">Home</a> </li>
                    <li class="nav-item"> <a href="book-appointment.html">Book Appointment</a></li>
                    <li class="nav-item"> <a href="contact.html">Contact</a> </li>
                    <div class="dropdown navbar-btn  d-sm-block logcontent">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                               <div class="dropdown-content">
                          
                                    <!-- update password -->
                                    <a class="dropdown-item" href="{{ route('updateUserPassword') }}"
                                       >
                                        Update Profile Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                    @endguest
                    </div>
                    

                </ul>
            </div>
           
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<body>
    @yield('content')
<footer class="footer-area">
  <div class="footer-widget pt-0 pb-50">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-9 col-md-9">
          <div class="footer-departments mt-45">
            <div class="footer-title">
              <h4 class="title">Services</h4>
              <hr>
            </div>
            <div class="footer-department-link  pt-10">
              <ul>
                <li><a href="haematology.html">Haematology</a></li>
                <li><a href="biochemistry.html">Biochemistry</a></li>
                <li><a href="serology.html">Serology</a></li>
                <li><a href="microbiology.html">Microbiology</a></li>
              </ul>
              <ul> 
                <li><a href="intolerance.html">Intolerance</a></li>
                <li><a href="urine-examination.html">Urine Examination</a></li>
                 <li><a href="profile.html">Profile</a></li>
                <li><a href="immunology.html">Immunology</a></li>
              </ul>
              <ul> 
                 <li><a href="allergy.html">Allergy</a></li>
                 <li><a href="cancer.html">Cancer</a></li>
                 <li><a href="ultrasound.html">Ultrasound</a></li>
                 <li><a href="X-Ray.html">X-Ray Digital</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="footer-contact mt-45">
            <div class="footer-title">
              <h4 class="title">Contact Info</h4>
              <hr>
            </div>
            <ul class="pt-20">
              <li>
                <div class="single-f-contact  align-items-center">
                  <div class="contact-icon"> <i class="fa fa-phone"></i> </div>
                  <div class="contact-content media-body">
                    <p>+91 8745087093 </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-f-contact  align-items-center">
                  <div class="contact-icon"> <i class="fa fa-envelope"></i> </div>
                  <div class="contact-content media-body">
                    <p>info@weblogicdesign.com</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-f-contact  align-items-center">
                  <div class="contact-icon"> <i class="fa fa-home"></i> </div>
                  <div class="contact-content media-body">
                    <p>A-132 Chand Nagar,<br> Near Tilak Nagar</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-content text-center">
            <p class="text"> &copy; 2020 Copyright by <a href="#">Patholab</a> All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<a href="#" class="back-to-top"><i class="flaticon-next"></i><span>Back To Top</span></a> 
 
<script src="{{ asset('patho/js/jquery.min.js') }}"></script> 
<script src="{{ asset('patho/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('patho/js/slick.min.js') }}"></script> 
<script src="{{ asset('patho/js/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ asset('patho/js/wow.min.js') }}"></script> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="{{ asset('patho/js/gijgo.min.js') }}"></script> 
<script src="{{ asset('patho/js/jquery.nice-select.min.js') }}"></script> 

<script src="{{ asset('patho/js/main.js') }}"></script>

<script>
    $(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
    $('nav').addClass('fixed-header');
    $('nav div').addClass('visible-title');}
    else {
    $('nav').removeClass('fixed-header');
    $('nav div').removeClass('visible-title');
    }
    });
    
    
</script>

</body>
</html>
