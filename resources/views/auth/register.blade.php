@extends('layouts.app')

@section('content')
    <section class="contact-page pt-30 pb-80 loginpage">
      <div class="container">
        <ul class="inlink">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li>|</li>
            <li>Collection Center Registration</li>
        </ul>

            <div class="login-form loginpages pt-20">
    <div class="main-div">
    <a href="index.html"><i class="fa fa-close"></i></a>
        <div class="panel">
       <h2>Collection Center Registration</h2>
    <hr>
       </div>
         <form name="my-form" onsubmit="return validform()" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" name="user_type" value="2">
           <div class="form-group clearfix">
            <label>Lab Code</label> <input type="text" class="form-control" placeholder="Lab Code" id="lab_code" name="lab_code" required="required">
            @error('lab_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

           <div class="form-group clearfix">
            <label>Center Name</label> <input type="text" class="form-control" placeholder="Center Name" id="center_name" name="center_name" required="required">
            @error('center_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>


            <div class="form-group">
            <label>Address</label>
            <br>
            <div class="box">
            <textarea name="address_first" id="address_first" placeholder="Address-1" data-error="Please,leave us a message." required=""></textarea>
            @error('address1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <textarea name="address_second" id="address_second" placeholder="Address-2" data-error="Please,leave us a message." required=""></textarea>
            @error('address2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="tel" minlength="0" maxlength="6" pattern="[0-9]{6}" name="picode" id="picode" class="form-control" id="pincode" placeholder="Pincode" required="required">
            @error('picode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>

            <div class="form-group">
            <label>Contact Details</label>
            <br>
            <div class="box">
            <label>Person Name</label>
            <input type="text" class="form-control" id="name" name="name" required="required" >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Email ID</label>
            <input type="email" name="email" id="email" class="form-control" id="inputEmail" required="required">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Phone Number</label>
            <input type="tel" min="1" max="10" pattern="[0-9]{10}" class="form-control" id="inputphone" name="inputphone" required="required">
            @error('inputpone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>
            <div class="forgot">
            <p style="font-weight:500;">I Agree <input type="checkbox" required="required"> <a href=" {{ url('term-and-condition') }}">Term &amp; Condition</a></p>

    </div>
            <div class="g-recaptcha">
    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
      <br/><!-- 
            <img src="images/googlecaptcha.png" alt=""> -->
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
        </div>
    </div>

        </div>
    </section>
@endsection