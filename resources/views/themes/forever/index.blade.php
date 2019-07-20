<?php

    $groom_name = ($about->groom_name != null) ? $about->groom_name : 'John Doe' ;
    $bride_name = ($about->bride_name != null) ? $about->bride_name : 'Anna Jane' ;
    $count = sizeof($story);
    function day($datetime){
        $datetime = explode(' ' ,Carbon\Carbon::parse($datetime)->format('d F Y'));
        $d = $datetime[0];
        return $d;
    }
    function month($datetime){
        $datetime = explode(' ' ,Carbon\Carbon::parse($datetime)->format('d F Y'));
        $m = $datetime[1];
        return $m;
    }
    function year($datetime){
        $datetime = explode(' ' ,Carbon\Carbon::parse($datetime)->format('d F Y'));
        $y = $datetime[2];
        return $y;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ucfirst(explode(' ',$groom_name)[0])}} & {{ucfirst(explode(' ',$bride_name)[0])}}</title>
    <link rel="stylesheet" href="{{asset('themes/forever/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/forever/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/forever/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/forever/css/labs.css')}}">
    <link rel="stylesheet" href="{{asset('themes/forever/css/masonry.css')}}">
    <link rel="stylesheet" href="{{asset('themes/forever/css/style.css')}}">
</head>
<body>
<header style="background-image:url('{{asset('images/'.$basic->cover_image)}}')">
<div class="overlay"></div>
<div class="container on-top">
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="navbar-nav--list">
                <a href="#home" class="navbar-nav--links">Home</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#couple" class="navbar-nav--links">Couple</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#story" class="navbar-nav--links">Story</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#schedule" class="navbar-nav--links">Schedule</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#gallery" class="navbar-nav--links">gallery</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#friends-family" class="navbar-nav--links">Friends & Family</a>
            </li>
            <li class="navbar-nav--list">
                <a href="#contact" class="navbar-nav--links">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="wedding--heading">
        <h1 class="wedding-title">{{explode(' ',$groom_name)[0]}} & {{explode(' ',$bride_name)[0]}}</h1>
        <p class="heading-5">We are getting married</p>
    </div>

    <div class="bottom-dates">
    <h2 class="wedding-date-display">{{day($basic->event_date)}} <small>th</small></h2>
    <h2 class="wedding-month-display">{{month($basic->event_date)}}</h2>
    </div>
</div>
</header>

<section class="only-mobile navigation">
        <div class="mobile-dates">
            <h2 class="wedding-date-display">{{day($basic->event_date)}}</h2>
            <h2 class="wedding-month-display">{{month($basic->event_date)}}</h2>
        </div>

        <nav class="mobile-navigation">
                <ul class="navbar-nav">
                    <li class="navbar-nav--list">
                        <a href="#home" class="navbar-nav--links">Home</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#couple" class="navbar-nav--links">Couple</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#story" class="navbar-nav--links">Story</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#schedule" class="navbar-nav--links">Schedule</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#gallery" class="navbar-nav--links">Gallery</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#friends-family" class="navbar-nav--links">Friends & Family</a>
                    </li>
                    <li class="navbar-nav--list">
                        <a href="#contact" class="navbar-nav--links">Contact</a>
                    </li>
                </ul>
        </nav>
</section>

<section class="story" id="story">
    <div class="container">
        <div class="story--header">
            <h1 class="story--header-h1 header-1">Story</h1>
        </div>
        @while ($count)
        @php
            $count--;
            $data = $story[$count];
        @endphp
        @if (fmod($count ,2) ==0)
        <div class="row story-row">
            <div class="col-md-6 col-sm-12 story__text">
                <p class="display-4 text-capitalize story__text--heading">{{$data->story_title}}</p>
                <div class="story__text--info">
                    <p class="display-5 story__text--info-date"><span class="text-capitalize story-day">{{day($data->story_date)}}</span> <span class="text-capitalize story-month">{{month($data->story_date)}}</span> <span class="text-capitalize story-year">{{year($data->story_date)}}</span></p>
                    <p class="display-5 story__text--info-place">{{$data->story_venue}}</p>
                </div>
                <div class="story__text--para">
                    {{$data->story_short_description}}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 story--image">
                <img src="{{asset('images/'.$data->story_image)}}" alt="" class="img-responsive h-100">
            </div>
        </div>
        @else
        <div class="row row-reverse story-row">
            <div class="col-md-6 col-sm-12 story__text">
                <p class="display-4 text-capitalize story__text--heading">{{$data->story_title}}</p>
                <div class="story__text--info">
                    <p class="display-5 story__text--info-date"><span class="text-capitalize story-day">{{day($data->story_date)}}</span> <span class="text-capitalize story-month">{{month($data->story_date)}}</span> <span class="text-capitalize story-year">{{year($data->story_date)}}</span></p>
                    <p class="display-5 story__text--info-place">{{$data->story_venue}}</p>
                </div>
                <div class="story__text--para para para-2">
                    {{$data->story_venue}}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 story--image">
                <img src="{{asset('images/'.$data->story_image)}}" alt="" class="img-responsive h-100">
            </div>
        </div>
        @endif
        @endwhile
    </div>
</section>
<!-- Story Section ended -->

<section class="about-couple" id="couple">
    <div class="container">
        <div class="about-couple--header">
            <h1 class="about-couple--header-h1 header-1">About Couple</h1>
        </div>
        <!-- Bride Div -->
        <div class="row about-couple__container">
            <div class="col-md-6 col-sm-12">
                <div class="row about-couple__container--couple text-align-right">
                    <div class="col-md-6 col-sm-12 about-couple__container--couple-text">
                        <p class="display-5 text-capitalize text-bold">{{$about->bride_name}}</p>
                        <small><i>Age</i> - <span class="couple-age">{{$about->bride_dob}}</span></small>
                        <p class="display-6 text-capitalize couple-profession">
                            {{$about->bride_profession}}
                        </p>
                        <p class=" text-capitalize couple-bio para para-3">
                           {{$about->bride_about}}
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 about-couple__container-couple-image">
                        <img src="{{asset('images/'.$about->bride_image)}}" alt="" class="img-responsive couple-image" id="bride-image">
                    </div>
                </div>
            </div>
    
        <!-- Groom Div -->
    
            <div class="col-md-6 col-sm-12">
                <div class="row about-couple__container--couple row-reverse">
                    <div class="col-md-6 col-sm-12 about-couple__container--couple-text">
                        <p class="display-5 text-capitalize text-bold">{{$about->groom_name}}</p>
                        <small><i>Age</i> - <span class="couple-age">{{$about->groom_dob}}</span></small>
                        <p class="display-6 text-capitalize couple-profession">
                            {{$about->groom_profession}}
                        </p>
                        <p class=" text-capitalize couple-bio para para-3">
                            {{$about->groom_about}}
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 about-couple__container-couple-image">
                        <img src="{{asset('images/'.$about->groom_image)}}" alt="" class="img-responsive couple-image" id="groom-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule -->

<section class="schedule" id="schedule">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-1 img-responsive">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-2 img-responsive">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-3 img-responsive">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-4 img-responsive">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-5 img-responsive">
    <img src="{{asset('themes/forever/img/pink-flower.png')}}" alt="" class="schedule--flower schedule--flower-6 img-responsive">
    <div class="container">
        <div class="schedule--header">
            <h1 class="schedule--header-h1 header-1">Schedule</h1>
        </div>
        <div class="schedule--container">
            <div class="row justify-content-center">
                @php
                    $i = sizeof($schedule);
                @endphp
                @while ($i--)
                @php
                    $data = $schedule[$i];
                @endphp
                <div class="col-md-4 col-sm-12">
                    <h3 class="schedule--heading">{{$data->event_name}}</h3>
                    <div class="display-6 text-capitalize schedule--place"><i>{{$data->event_venue}}</i></div>
                    {{-- <small class="schedulr--address"><i>22 Jump Street</i> </small> --}}

                    <span class="h4 text-bold">{{$data->event_start_date}}</span>
                    <span class="display-5 text-bold">April</span>
                </div>
                @endwhile

                <!-- End  -->
                {{-- <div class="col-md-4 col-sm-12">
                    <h3 class="schedule--heading">Reception</h3>
                    <div class="display-6 text-capitalize schedule--place"><i>Cafe House</i></div>
                    <small class="schedulr--address"><i>22 Walton Street</i> </small>

                    <span class="h4 text-bold">28</span>
                    <span class="display-5 text-bold">April</span>
                </div> --}}
                <!-- End -->
                {{-- <div class="col-md-4 col-sm-12">
                    <h3 class="schedule--heading">Party</h3>
                    <div class="display-6 text-capitalize schedule--place"><i>Mary's House</i></div>
                    <small class="schedulr--address"><i>At house</i> </small>

                    <span class="h4 text-bold">2</span>
                    <span class="display-5 text-bold">May</span>
                </div> --}}

            </div>
        </div>
    </div>
</section>

<!-- Gallery -->

<section class="gallery" id="gallery">
    <div class="container">
        <div class="gallery--header">
            <h1 class="gallery--header-h1 header-1">Gallery</h1>
        </div>
        <div class="masonry">
        @php
            $i = sizeof($photos);
        @endphp
        @while ($i)
        @php
            $data = $photos[--$i];
        @endphp
            <div class="brick">
                <img src="{{asset('images/'.$data->image)}}" alt="" title="Image">
            </div>
        @endwhile
            
        </div><!-- .masonry -->
    </div>
</section>

<!-- family -->

<section class="family" id="friends-family">
    <div class="container">
        <div class="family--header">
            <h1 class="family--header-h1 header-1">Friends & Family</h1>
        </div>
        <div class="owl-carousel owl-theme">
            @php
                $i = sizeof($family);
            @endphp
            @while ($i--)
            @php
                $data = $family[$i];
                $path = isset($data->image)?'images/'.$data->image:'img/male-user.jpeg';
            @endphp
            <div class="item">
                <div class="family__container col-sm-12">
                    <div class="family__container--image">
                        <img src="{{asset($path)}}" alt="" class="family__container--image-img">
                    </div>
                    <div class="family__container--text">
                        <p class="text-bold">{{$data->name}}</p>
                        <small>{{$data->relation_name}} - {{$data->bride_groom}}</small>
                    </div>
                </div>
            </div>
            @endwhile
        </div>
    </div>
</section>

<!-- contact -->
@if(isset($basic->phone) || isset($basic->email))
<section class="contact" id="contact">
    <div class="container">
        <div class="contact--header">
            <h1 class="contact--header-h1 header-1">Contact</h1>
        </div>
        <div class="contact--container">
            @if(isset($basic->phone))
            <p class="contact--number text-bold">(+91) {{$basic->phone}}</p>
            @endif
            @if(isset($basic->email))
            <p class="contact--email">{{$basic->email}}</p>
            @endif
        </div>
    </div>
</section>
@endif

<footer>
    <div class="col-3"></div>
    <div class="col-9"></div>
</footer>



<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('themes/forever/js/owl.carousel.min.js')}}"></script>
<script>
$('.owl-carousel').owlCarousel({
    nav:true,
    autoWidth: false,
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
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>