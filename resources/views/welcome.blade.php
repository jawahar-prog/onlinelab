@extends('layouts.app')

@section('content')

<!-- Slider --->
<section class="slider-area">
  <div class="slider-active">
    <div class="single-slider">
      <div class="slider-image bg_cover" data-overlay="2" style="background-image:url(images/s-1.jpg)"></div>
      <div class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content overflow-hidden">
               
                <h1 class="slider-title" data-animation="fadeInUp" data-delay="1s">Doctor's & Patient's Login</h1>
                <h5 class="slider-sub-title" data-animation="fadeInUp" data-delay="0.5s">Save and Access your Medical records online.</h5>
                <a class="main-btn" href="pathologys-login.html" data-animation="fadeInLeft" data-delay="1.5s">Pathology's Login <i class="fa fa-arrow-right"></i></a>
                  <a class="main-btn" href="patient-login.html" data-animation="fadeInLeft" data-delay="1.5s">Patient's Login <i class="fa fa-arrow-right"></i></a> 

                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-slider">
      <div class="slider-image bg_cover" data-overlay="2" style="background-image:url(images/s-2.jpg)"></div>
      <div class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content overflow-hidden">
               
                <h1 class="slider-title" data-animation="fadeInUp" data-delay="1s">Doctor's & Patient's Login</h1>
                <h5 class="slider-sub-title" data-animation="fadeInUp" data-delay="0.5s">Save and Access your Medical records online.</h5>
                <a class="main-btn" href="pathologys-login.html" data-animation="fadeInLeft" data-delay="1.5s">Pathology's Login <i class="fa fa-arrow-right"></i></a>
                  <a class="main-btn" href="patient-login.html" data-animation="fadeInLeft" data-delay="1.5s">Patient's Login <i class="fa fa-arrow-right"></i></a>  

                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-slider">
      <div class="slider-image bg_cover" data-overlay="2" style="background-image:url(images/s-3.jpg)"></div>
      <div class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content overflow-hidden">
               
                <h1 class="slider-title" data-animation="fadeInUp" data-delay="1s">Doctor's & Patient's Login</h1>
                <h5 class="slider-sub-title" data-animation="fadeInUp" data-delay="0.5s">Save and Access your Medical records online.</h5>
                 <a class="main-btn" href="pathologys-login.html" data-animation="fadeInLeft" data-delay="1.5s">Pathology's Login <i class="fa fa-arrow-right"></i></a>
                  <a class="main-btn" href="patient-login.html" data-animation="fadeInLeft" data-delay="1.5s">Patient's Login <i class="fa fa-arrow-right"></i></a> 

                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- About --->
<section class="about-area pt-15 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about-image mt-50"> <img src="images/about.jpg" alt="about"> </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content mt-40">
          <div class="section-title">
            <h3 class="title">About Medico Patho Lab.</h3>
          </div>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
           <p class="text">Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div class="about-form">
          <button class="main-btn">Readmore</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services --->
<section class="department-area gray-bg pt-50 pb-60">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="section-title text-center">
          <h3 class="title">Pathology Services</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="department-tab mt-25">
          <ul class="nav justify-content-between" id="myTab" role="tablist">
          
            <li class="nav-item"> <a class="active" id="body-tab" data-toggle="tab" href="#patholab" role="tab" aria-controls="patholab" aria-selected="true"> 
            <i class="flaticon-blood-drop-1"></i> 
            <span>Haematology</span> </a> </li>
            
            <li class="nav-item"> <a id="dental-tab" data-toggle="tab" href="#patholab2" role="tab" aria-controls="dental" aria-selected="false"> 
            <i class="flaticon-drop"></i> 
            <span>Biochemistry</span> </a> </li>
            
            <li class="nav-item"> <a id="blood-tab" data-toggle="tab" href="#patholab3" role="tab" aria-controls="blood" aria-selected="false"> 
            <i class="flaticon-lab"></i> 
            <span>Serology</span> </a> </li>
            
            <li class="nav-item"> <a id="brain-tab" data-toggle="tab" href="#patholab4" role="tab" aria-controls="brain" aria-selected="false"> 
            <i class="flaticon-dna"></i> 
            <span>Microbiology</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab5" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-injection"></i>  
            <span>Intolerance</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab6" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-test-tube"></i>   
            <span>Urine Examination</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab7" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-user"></i>   
            <span>Profile</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab8" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-antibodies"></i>   
            <span>Immunology</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab9" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-rash"></i>   
            <span>Allergy</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab10" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-chemotherapy"></i>   
            <span>Cancer</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab11" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-ultrasound"></i>   
            <span>Ultrasound</span> </a> </li>
            
            <li class="nav-item"> <a id="allergic-tab" data-toggle="tab" href="#patholab12" role="tab" aria-controls="allergic" aria-selected="false"> 
            <i class="flaticon-x-ray"></i>   
            <span>X-Ray Digital</span> </a> </li>
            
          </ul>
          <div class="tab-content mt-40" id="myTabContent">
            <div class="tab-pane fade show active" id="patholab" role="tabpanel" aria-labelledby="body-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Haematology.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Haematology</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab2" role="tabpanel" aria-labelledby="dental-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6 order-lg-last">
                    <div class="department-image mt-30"> <img src="images/Biochemistry.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6 order-lg-first">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Biochemistry</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab3" role="tabpanel" aria-labelledby="blood-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Serology.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Serology</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab4" role="tabpanel" aria-labelledby="brain-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6 order-lg-last">
                    <div class="department-image mt-30"> <img src="images/microbiology.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6 order-lg-first">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Microbiology</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab5" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Intolerance.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Intolerance</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab6" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Urine-Examination.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Urine Examination</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="tab-pane fade" id="patholab7" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Profile.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Profile</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab8" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Immunology.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Immunology</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab9" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/allergy.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Allergy</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab10" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Cancer.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Cancer</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab11" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/Ultrasound.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">Ultrasound</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="patholab12" role="tabpanel" aria-labelledby="allergic-tab">
              <div class="department-content">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="department-image mt-30"> <img src="images/X-Ray-Digital.png" alt="department"> </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="department-info-text mt-30">
                      <h5 class="sub-title">X-Ray Digital</h5>
                      <h3 class="title">We are here to help when you need us</h3>
                      <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                      <a class="main-btn" href="#">Contact Us</a> </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Appointment --->
<section class="appointment-working pt-40 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="appointment-area mt-45">
          <div class="section-title section-title-two">
            <h5 class="sub-title">Make an</h5>
            <h3 class="title">Appointment</h3>
          </div>
          <div class="appointment-form mt-30">
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="single-appointment-form">
                    <input type="text" placeholder="Full Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-appointment-form">
                    <input type="text" placeholder="Your Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-appointment-form">
                     <input type="date" id="birthday" name="birthday">
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="single-appointment-form">
                    <input type="text" placeholder="Your Email id">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-appointment-form">
                    <button class="main-btn main-btn-2">Submit Now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="working-area mt-45">
          <div class="section-title section-title-two">
            <h5 class="sub-title">DISCOVER</h5>
            <h3 class="title">Working Time</h3>
          </div>
          <div class="working-content mt-20">
          
          <table class="table table-bordered Workingtimetable">
    <thead>
      <tr>
        <th><i class="fa fa-calendar"></i> Monday – Friday</th>
        <th><i class="fa fa-calendar"></i> Saturday</th>
        <th><i class="fa fa-calendar"></i> Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><i class="fa fa-clock-o"></i> 8.00 – 17.00</td>
        <td><i class="fa fa-clock-o"></i> 9.30 – 17.30</td>
        <td><i class="fa fa-clock-o"></i> CLOSED</td>
      </tr>
      
      <tr>
        <td colspan="3"><i class="fa fa-phone"></i> 987 654 3216</td>
      </tr>
    </tbody>
  </table>
          
          
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="working-bg"></div>
</section>
<!-- our doctore --->
<!--
<section class="team-area pt-60 pb-60">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="section-title text-center pb-15">
          <h3 class="title">Our Doctors</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center mt-30">
          <div class="team-image"> <img src="images/t-1.jpg" alt="Team"> </div>
          <div class="team-content">
            <h5 class="team-name"><a href="doctors-details.html">Mitchel Sweedon</a></h5>
            <span>Founder</span>
            <ul class="social">
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center mt-30">
          <div class="team-image"> <img src="images/t-2.jpg" alt="Team"> </div>
          <div class="team-content">
            <h5 class="team-name"><a href="doctors-details.html">Mitchel Sweedon</a></h5>
            <span>Founder</span>
            <ul class="social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center mt-30">
          <div class="team-image"> <img src="images/t-3.jpg" alt="Team"> </div>
          <div class="team-content">
            <h5 class="team-name"><a href="doctors-details.html">Mitchel Sweedon</a></h5>
            <span>Founder</span>
            <ul class="social">
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

<!-- Patient Feedback --->
<section class="video-testimonial bg_cover pt-60 pb-90" style="background-image: url(images/video-bg.jpg)" data-overlay="3">
  <div class="container">
  <h3 class="title">Patient Feedback</h3>
    <div class="row align-items-center">
      <div class="col-lg-12 order-lg-last">
        <div class="testimonial-area mt-10">
          <div class="testimonial-active">
            <div class="single-testimonial">
              <p class="text">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. </p>
              <h5 class="testimonial-name">Mohammad Mostofa</h5>
              <span>- Envato Customer</span> </div>
            <div class="single-testimonial">
              <p class="text">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. </p>
              <h5 class="testimonial-name">Bobby Akter</h5>
              <span>- Envato Customer</span> </div>
            <div class="single-testimonial">
              <p class="text">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. </p>
              <h5 class="testimonial-name">Humayun Ahmed</h5>
              <span>- Envato Customer</span> </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection
