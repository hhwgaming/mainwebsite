@extends('layouts.app')

@section('content')
@include('include.topnav')
<div class="container">
    <div class="row justify-content-center">
        <div class="body_wrapper" style="background-image:url({{asset('images')}}/bg.jpg);">
                <div class="form_wrapper">
                    <form method="post"><span class="form_title" style="font-family:ABeeZee, sans-serif;">Login</span>
                        @csrf
                          <p class="text-justify" id="incorrectDetail" style="color:rgb(255,7,7);font-size:17px; visibility:hidden">Incorrect Email And Password</p>
                            <div class="wrap_input"><span class="input_label" style="font-family:ABeeZee, sans-serif;">Email</span><input type="email"  name="email" placeholder="Enter your Email" class="form-control input_text" id="inputEmail" style="font-family:ABeeZee, sans-serif;" /></div>
                            <div class="wrap_input"><span class="input_label" style="font-family:ABeeZee, sans-serif;">Password</span><input type="password" name="password" placeholder="Enter your password" class="form-control input_text" id="inputPassword" style="font-family:ABeeZee, sans-serif;" /></div>
                            <div class="text-right" style="padding-bottom:31px;padding-top:8px;"><a href="#" class="forgot_link" style="font-family:ABeeZee, sans-serif;">Forgot Password?</a></div>
                            <div class="login_btn">
                                <div class="wrap_btn">
                                    <div class="bg_btn"></div>
                                    <button class="btn btn-primary btn_icon" type="button" id="btn_signIn">LOGIN</button>
                                </div>
                            </div>
                      </form>
                </div>
            </div>
    </div>
</div>
@endsection
