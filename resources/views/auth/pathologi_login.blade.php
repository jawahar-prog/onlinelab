@extends('layouts.app')

@section('content')<section class="contact-page pt-30 pb-80 loginpage">
  <div class="container">
 <ul class="inlink">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>|</li>
            <li>Pathology's Login</li>
        </ul>
 
<div class="about-page-content pt-20">
    <div class="row">
        <div class="container">
        <div class="login-form loginpages">
<div class="main-div">
<a href="{{ url('/') }}"><i class="fa fa-close"></i></a>
    <div class="panel">
   <h2>Pathology's Login</h2>
   <p>Please Fill Document</p>
   </div>
    <form id="Login"method="POST" action="{{ route('login') }}">
    @csrf
     <div class="form-group">
<input type="hidden" name="type" id="type" value="1">
            <label>User Name</label>
             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        
     <div class="form-group">
<input type="hidden" name="type" id="type" value="1">
            <label>Email ID</label>
             <input id="email" type="email" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        

        <div class="form-group">
            <label>Password</label>
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="Loginbtn">Login</button>
        <div class="forgot">
        <p style="text-align:left; float:left;"><a href="#">Forgot password?</a></p>
        <p style="text-align:right;"><a href="collection-center-registration.html">Don't have an account Create Account</a></p>
</div>
    </form>
    </div>
</div>
        </div>
    </div>
</div></div></section>
@endsection
