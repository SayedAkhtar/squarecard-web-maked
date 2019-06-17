@extends('builder.layout.app')
@section('content')
    
    <div class="login-container">
        <h1 class="login-container-heading">login</h1>
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <div class="form-group">
                <input type="email" class="login form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="email" value="{{ old('email') }}" name="email">
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            {{-- <div class="form-group">
                <input type="tel" class="form-control" id="mobile" placeholder="mobile number" pattern="[0-9]{3-14}">
            </div> --}}
            <div class="form-group">
                <input type="password" class="login form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div class="login-container__social">
            
            <h6 class="login-container__social--heading">Not Signed Up Yet? <a href="{{url()->current()}}/signup">Sign Up</a></h6>
                <div class="login-container__social--buttons">
                    <a href="#">
                        <img src="img/buttons/001-search.svg" alt="">
                    </a>
                     <a href="#">
                        <img src="img/buttons/002-facebook.svg" alt="">
                    </a>
                </div>
            </div>
            <h6 class="login-container__social--heading">Forgot Password? <a href="{{ route('password.request') }}">Reset Password</a></h6>
            <button type="submit" class="btn login-container__social--submit">Continue</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
        </form>
    </div>

@endsection
