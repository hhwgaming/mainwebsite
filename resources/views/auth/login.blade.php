@extends('layouts.app')

@section('content')
<div class="body_wrapper"  style="background-image:url({{asset('images')}}/bg.jpg); padding-top:125px ">
                <div class="form_wrapper">
                    <form method="POST" action="{{ route('login') }}">
                       @csrf
                       <span class="form_title" style="font-family:ABeeZee, sans-serif;">Login</span>

                          <p class="text-justify" id="incorrectDetail" style="color:rgb(255,7,7);font-size:17px; visibility:hidden">Incorrect Email And Password</p>
                            <div class="wrap_input">
                                <span class="input_label" style="font-family:ABeeZee, sans-serif;">Email</span>
                                <input id="email" type="email" placeholder="Enter Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input_text" name="email" value="{{ old('email') }}" required autofocus style="font-family:ABeeZee, sans-serif;">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="wrap_input">
                                <span class="input_label" style="font-family:ABeeZee, sans-serif;">Password</span>
                                <input id="password" type="password" placeholder="Enter password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input_text" name="password" required style="font-family:ABeeZee, sans-serif;">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        <div class="login_btn">
                                <div class="wrap_btn">
                                    <div class="bg_btn"></div>
                                    <button type="submit" class="btn btn-primary btn_icon">
                                   {{ __('Login') }}
                               </button>
                           </div>
                       </div>
                               @if (Route::has('password.request'))
                                   <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                   </a>
                               @endif
                                </div>
                            </div>
                      </form>
                </div>


</div>
@endsection
