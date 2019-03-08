@extends('layouts.app')
@section('content')
<!-- =========Body Photo ============== -->
<div class="register-photo" style="margin-top:100px">
    <div class="form-container">
           <div class="image-holder"></div>
           <form method="POST" action="{{ route('register') }}">
                         @csrf
                <div class="form-group">
                     <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                             </span>
                         @endif
                 </div>
                <div class="form-group ">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                         @endif
                </div>
                <div class="form-group">
                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('password') }}</strong>
                             </span>
                        @endif
                </div>
                <div class="form-group">
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                 </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                     </button>
                 </div>
            </form>
    </div>
</div>
<!-- =============End photo ============== -->
@endsection
