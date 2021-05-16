@extends('layouts.admin')

@section('content')

<section class="contact-page pt-30 pb-80">
  <div class="container">
 
<div class="about-page-content pt-10">
<div class="row">
<div class="col-xl-2 col-lg-6">
<div class="about-image-tow mt-60">
    <img src="{{ url('images/images.png') }}" alt="About">
</div> 
</div>
<div class="col-lg-8">
 <div class="login-form loginpages pt-20">
    <div class="">
    
        <div class="panel">
       <h2>Update Profile</h2>
    <hr>
       </div>
       @if(session()->has('success'))
    <div class="alert alert-success col-md-12">
        {{ session()->get('success') }}
    </div>
@endif
         <form name="my-form" onsubmit="return validform()" method="POST" action="{{ route('updateProfile') }}">
            @csrf
            <input type="hidden" value="{{ Auth::id() }}" name="prof_id">
            <input type="hidden" name="user_type" value="2">
           <div class="form-group clearfix">
            <label>Lab Code</label> <input type="text" class="form-control" placeholder="Lab Code" id="lab_code" name="lab_code" value="{{ Auth::user()->lab_code }}" required="required">
            @error('lab_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

           <div class="form-group clearfix">
            <label>Center Name</label> <input type="text" class="form-control" placeholder="Center Name" id="center_name" name="center_name" value="{{ Auth::user()->center_name }}" required="required">
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
            <textarea name="address_first" id="address_first" placeholder="Address-1" data-error="Please,leave us a message." required="">{{ Auth::user()->address1 }}</textarea>
            @error('address1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <textarea name="address_second" id="address_second" placeholder="Address-2" data-error="Please,leave us a message." required="">{{ Auth::user()->address2 }}</textarea>
            @error('address2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="tel" minlength="0" maxlength="6" pattern="[0-9]{6}" name="picode" id="picode" class="form-control" id="pincode" placeholder="Pincode" value="{{ Auth::user()->picode }}" required="required">
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
            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly="readonly">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Email ID</label>
            <input type="email" name="email" id="email" class="form-control" id="inputEmail" value="{{ Auth::user()->email }}" readonly="readonly" required="required">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Phone Number</label>
            <input type="tel" min="1" max="9" class="form-control" id="inputphone" value="{{ Auth::user()->inputphone }}" name="inputphone">
            @error('inputpone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>
            <div class="g-recaptcha">
            <img src="images/googlecaptcha.png" alt="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
        </div>
    </div>
</div> 
</div> 
</div>
</section>
@endsection
