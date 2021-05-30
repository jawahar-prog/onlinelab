@extends('layouts.app')
@sections('content')
<section class="contact-page pt-30 pb-80 loginpage">
  <div class="container">
    <ul class="inlink">
        <li><a href="index.html">Home</a></li>
        <li>|</li>
        <li>Simple Collection Home Appointment</li>
    </ul>
<div class="about-page-content pt-20">
    <div class="row">
    	<div class="container">
        <div class="login-form loginpages">
<div class="main-div">
<a href="index.html"><i class="fa fa-close"></i></a>
    <div class="panel">
   <h2>Simple Collection Home Appointment</h2>
<hr>
   </div>
    <form id="Login" class="boxtitle">
        <div class="form-group">
        <label>Name of Patient</label>
        <input type="text" class="form-control" id="Patient">
        </div>
       

        <div class="form-group">
        <label>Address</label>
        <br>
        <div class="box">
        <textarea name="message" placeholder="Address-1" data-error="Please,leave us a message." required=""></textarea>
        <textarea name="message" placeholder="Address-2" data-error="Please,leave us a message." required=""></textarea>
        <input type="text" class="form-control" id="Patient" placeholder="Pincode">
        </div>
        </div>
        
        <div class="form-group">
        <label>Phone Number</label>
        <input type="text" class="form-control" id="Patient">
        </div>
        
        <div class="form-group date_time">
        <div class="row">
        <div class="col-md-6 col-xs-12">
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        </div>
        
        <div class="col-md-6 col-xs-12">
        <label for="appt">Select a time:</label>
        <input type="time" id="appt" name="appt">
         </div>
         </div>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
       
    </form>
    </div>
</div>
        </div>
    </div>
</div></div>
</section>
@endsectiion