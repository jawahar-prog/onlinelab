@extends('layouts.app')

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
       <h2>Update Profile Password</h2>
    <hr>
       </div>
       @if(session()->has('success'))
    <div class="alert alert-success col-md-12">
        {{ session()->get('success') }}
    </div>
@endif
 @if(session()->has('error'))
    <div class="alert alert-danger col-md-12">
        {{ session()->get('error') }}
    </div>
@endif
         <form name="my-form" onsubmit="return validform()" method="POST" action="{{ route('saveUserPassword') }}">
            @csrf
            
           <div class="form-group clearfix">
            <label>Old Password</label> <input type="password" class="form-control" placeholder="Old Password" id="old_password" name="old_password" value="" required="required">
            @error('old_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

           <div class="form-group clearfix">
            <label>New Password</label> <input type="password" class="form-control" placeholder="New Password" id="password" name="password" value="" required="required">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

           <div class="form-group clearfix">
            <label>Confirm Password</label> <input type="password" class="form-control" placeholder="New Password" id="password_confirmation" name="password_confirmation" value="" required="required">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
