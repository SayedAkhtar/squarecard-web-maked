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
<body><!-- Script -->

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
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <div class="login-container__social">

                <h6 class="login-container__social--heading">Not Signed Up Yet? <a href="{{url()->current()}}/signup">Sign Up</a></h6>
                    <div class="login-container__social--buttons">
                        <a href="{{ route('google-login') }}">
                            <img src="img/buttons/001-search.svg" alt="">
                        </a>
                        <a href="{{ route('facebook-login') }}">
                            <img src="img/buttons/002-facebook.svg" alt="">
                        </a>
                    </div>
                </div>
                <h6 class="login-container__social--heading">Forgot Password?
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Reset Password') }}
                        </a>
                    @endif
                </h6>
                <button type="submit" class="btn login-container__social--submit">Continue</button>

            </form>
        </div>




    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("js/jquery-ui.min.js")}}"></script>
    <script src="{{asset("js/popper.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/dashboardScript.js")}}"></script>

    <script>

    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

    $(document).ready(function(){
        $("#imageInputBtn").click(function(){
            $("#imageInput").trigger("click");
        });
        // $('[data-toggle=tooltip]').tooltip('show');
    });

    function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#userImage').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
    }

    $("#imageInput").change(function() {
    readURL(this);
    });

    $( function() {
          $( ".date" ).datepicker();
    } );

    $('.form-control').each(function(e){
    });


    </script>
    </body>
    </html>



