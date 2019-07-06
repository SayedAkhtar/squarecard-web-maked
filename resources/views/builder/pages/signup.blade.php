<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="FmNAJu0Pzpo23knxFSZV6uD35zU3Pjmlahn5v2amqzE" />
    <title>Squarecaard- Login/Sign Up</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/mobile.css")}}">
    
    <style>
  </style>
    

    
</head>
<body>
    <div class="login-container">
        <h1 class="login-container-heading">sign up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="signup form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input id="mobile" type="tel" class="signup form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" placeholder="mobile" required>

                @if ($errors->has('mobile'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <small>Min: 8 Characters</small>
                <input id="password" type="password" class="signup form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="signup form-control" name="password_confirmation" placeholder="confirm password" required>
                </div>
            </div>
            <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    {{$item}}
                @endforeach
            @endif
            <div class="login-container__social">
                <h6 class="login-container__social--heading">Already a member? <a href="/builder">login</a></h6>
                <div class="login-container__social--buttons">
                    <a href="#">
                        <img src="{{asset('img/buttons/001-search.svg')}}" alt="">
                    </a>
                     <a href="#">
                        <img src="{{asset('img/buttons/002-facebook.svg')}}" alt="">
                    </a>
                </div>
            </div>
            <button type="submit" class="btn login-container__social--submit">Continue</button>
        </form>
    </div>
</body>
</html>