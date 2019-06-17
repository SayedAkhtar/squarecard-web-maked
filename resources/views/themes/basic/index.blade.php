<?php

    $groom_name = ($about->groom_name != null) ? $about->groom_name : 'John Doe' ;
    $bride_name = ($about->bride_name != null) ? $about->bride_name : 'Anna Jane' ;
    $count = sizeof($story);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Invitation</title>
    <!-- ICON -->
    <link rel="manifest" href="manifest.json">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="SJ">
    <meta name="apple-mobile-web-app-title" content="SJ">
    <meta name="theme-color" content="#ed2f2f">
    <meta name="msapplication-navbutton-color" content="#ed2f2f">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="https://squarecard.in/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" sizes="192x192" href="img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="192x192" href="img/icons/icon-192x192.png">
    <link rel="icon" sizes="512x512" href="img/icons/icon-512x512.png">
    <link rel="apple-touch-icon" sizes="512x512" href="img/icons/icon-512x512.png">
    <!-- End ICON -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('themes/basic/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/basic/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('themes/basic/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/basic/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/basic/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('themes/basic/css/mobile.css')}}">

</head>
<body data-spy="scroll">
    <section class="welcome-land" style="background-image:url('{{asset('images/'.$basic->cover_image)}}')">
        <div class="overlay"></div>
        <div class="welcome-land__content">
            <h2>We are getting married !</h2>
            <h1>{{explode(' ',$groom_name)[0]}} & {{explode(' ',$bride_name)[0]}}</h1>
        </div>
    </section>
    <section class="navigation-intro" id="home">
        <nav class="navigation-intro__navigation">
            <div class="container-fluid">
                <a href="{{url()->current()}}" class="brand">
                    <h4>{{explode(' ',$groom_name)[0]}} & {{explode(' ',$bride_name)[0]}}</h4>
                </a>
                <span class="mobile-menu-open">
                        <i class="fas fa-bars"></i>
                </span>
                <ul class="navigation-intro__navigation--links-container">
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#home" class="navigation-intro__navigation--links">Home</a></li>
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#schedule" class="navigation-intro__navigation--links">Event / Venue</a></li>
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#family" class="navigation-intro__navigation--links">Our Family</a></li>
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#couple-gallery" class="navigation-intro__navigation--links">Our Gallery</a></li>
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#story" class="navigation-intro__navigation--links">Our Story</a></li>
                    <li class="navigation-intro__navigation--links-list"><a data-scroll href="#info" class="navigation-intro__navigation--links">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <div class="navigation-intro__introduction" id="about">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-12 mx-0 px-0">
                        <div class="person-container person-container--1">
                            <div class="person-container--info">
                                <h3>{{$groom_name}}</h3>
                                <p>Software Engineer</p>
                            </div>
                            <div class="person-container--image">
                                <img src="{{asset('images/'.$about->groom_image)}}" alt="">
                            </div>
                        </div>
                    </div><!--col Ends-->

                    <div class="col-md-6 c0l-sm-12 mx-0 px-0">
                        <div class="person-container">
                            <div class="person-container--image">
                                <img src="{{asset('images/'.$about->bride_image)}}" alt="">
                            </div>
                            <div class="person-container--info">
                                <h3>{{$bride_name}}</h3>
                                <p>Lead Product Engineer</p>
                            </div>
                        </div>
                    </div><!--Col Ends-->
                    
                </div><!--row Ends-->
                
            </div>
        </div>
    </section>
    <section class="our-story" id="story">
        <div class="container-fluid">
            <h5>We're getting married</h5>
            <h1>story</h1>

            <div class="story-timeline">
                @while ($count)
                @php
                    $count--;
                    $data = $story[$count];
                @endphp
                @if (fmod($count ,2) ==0)    
                    <div class="story-timeline__container">
                        <div class="story-timeline__container--image">
                            <img src="img/svg/001-love.svg" alt="">
                        </div>
                        <div class="story-timeline--border"></div>
                        <div class="story-timeline__container--content">
                            <div class="story-timeline__container--content-first">
                                <div class="icon-image"></div>
                            </div>
                            <div class="story-timeline__container--content-second">
                                <span class="date"></span><br>
                                <span class="timeline-heading">{{$data->story_title}}</span>
                                <p class="timeline-para">{{$data->story_short_description}}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="story-timeline__container story-timeline__container-left">
                        <div class="story-timeline__container--content">
                            <div class="story-timeline__container--content-first">
                                <div class="icon-image"></div>
                            </div>
                            <div class="story-timeline__container--content-second">
                                <span class="date"></span><br>
                                <span class="timeline-heading">{{$data->story_title}}</span>
                                <p class="timeline-para">{{$data->story_short_description}}</p>
                            </div>
                        </div>
                        <div class="story-timeline--border"></div>
                        <div class="story-timeline__container--image">
                            <img src="img/svg/001-love.svg" alt="">
                        </div>
                    </div>
                @endif

                @endwhile
            </div> <!-- Timeline -->

        </div>
    </section>
    <section class="event-dates" id="schedule">
        <div class="container-fluid">
            <h3>Save the date</h3>
            <h1>{{$basic->event_date}}</h1>

            <h5 class="venue">{{$basic->venue}}</h5>

            <div class="story-timeline">
                   @php
                       $i = sizeof($schedule);
                   @endphp
                    @while ($i--)
                    @php
                        $data = $schedule[$i];
                    @endphp
                    @if (fmod($i, 2) == 0)
                        
                    <div class="story-timeline__container story-timeline__container-left">
                        <div class="story-timeline__container--content">
                            <!-- <div class="story-timeline__container--content-first">
                               
                            </div> -->
                            <div class="story-timeline__container--content-second">
                                <div class="event-note__container event-note__container--left">
                                    <h5 class="event-note__container--event">{{$data->event_name}}</h5>
                                    <span class="event-note__container--time">{{$data->event_start_date}}</span>
                                    <p class="event-note__container--venue">{{$data->event_venue}}</p>
                                    <input type="button" class="btn btn-outline-danger" value="View On Map" onclick="window.open(`https://www.google.com/maps/place/Reddy's+Function+Hall,+Siddipet/@18.0801881,78.8614574,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcc92c02c0979db:0xc19d2f2acef9b5c2!8m2!3d18.0801881!4d78.8636461`)" />
                                </div>
                            </div>
                        </div>
                        <div class="story-timeline--border"></div>
                    </div>
                    @else
                        
                    <div class="story-timeline__container">
                        <div class="story-timeline--border"></div>
                        <div class="story-timeline__container--content">
                            <!-- <div class="story-timeline__container--content-first">
                               
                            </div> -->
                            <div class="story-timeline__container--content-second">
                                <div class="event-note__container">
                                    <h5 class="event-note__container--event">{{$data->event_name}}</h5>
                                    <span class="event-note__container--time">{{$data->event_start_date}}</span>
                                    <p class="event-note__container--venue">{{$data->event_venue}}</p>
                                    {{-- <input type="button" class="btn btn-outline-danger" value="View On Map" onclick="window.open(`https://www.google.com/maps/place/Bhyri+Anjaiah+Non-A%2Fc+&+Bhyri+BalaLakshmi+A%2Fc+Function+Halls,+Hyderabad+Road,,+Near+Ponnala+By-pass+%2F+Dhaba's,+Siddipet,+Telangana+502103/@18.068202,78.863766,17z/data=!4m2!3m1!1s0x3bcc92f27e9aa771:0x3ebcb4e5a6aec657`)" /> --}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endif
                    @endwhile                    
    
                </div>
        </div>
    </section>
    <section class="couple-gallery" id="couple-gallery">
        <div class="container">
            <h1>Our Gallery</h1>
            @php
                $i = sizeof($photos);
            @endphp
                <div class="gallery-container row">
                @while ($i)
                @php
                    $data = $photos[--$i];
                @endphp
                <div class="gallery-container__image grid col-md-6 col-sm-12 mt-1">
                    <img src="{{asset('images/'.$data->image)}}" alt="" >
                </div>
                @endwhile
            </div>
        </div>
    </section>
    <section class="family-members" id="family">
            <div class="container-fluid">
                <h1>Our Family</h1>
            </div>    
                <div class="family-members--intoduction">
                    <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6 col-sm-12 mx-0 px-0">
                            <div class="person-container person-container--1">
                                <div class="person-container--info">
                                    <h3>{{$groom_name}}</h3>
                                    <p>Software Engineer</p>
                                </div>
                                <div class="person-container--image">
                                    <img src="{{asset('images/'.$about->groom_image)}}" alt="">
                                </div>
                            </div>
                        </div><!--col Ends-->

                        <div class="col-md-6 c0l-sm-12 mx-0 px-0">
                            <div class="person-container">
                                <div class="person-container--image">
                                    <img src="{{asset('images/'.$about->bride_image)}}" alt="">
                                </div>
                                <div class="person-container--info">
                                    <h3>{{$bride_name}}</h3>
                                    <p>Lead product Engineer</p>
                                </div>
                            </div>
                        </div><!--Col Ends-->
                        
                    </div><!--row Ends-->
                    </div>
                </div>
            <div class="family-members__container">
                <div class="owl-carousel owl-theme">
                    @php
                        $i = sizeof($family);
                    @endphp
                    @while ($i--)
                    @php
                        $data = $family[$i];
                    @endphp
                    <div>
                         <div class="family-members__container--slide">
                            <div class="family-members__container--slide-image">
                                <img src="{{asset('img/male-user.jpeg')}}" alt="">
                            </div>
                            <p class="relative-name">{{$data->name}}</p>
                            <p class="relative-relation text-capitalize">{{$data->relation_name}} - {{$data->bride_groom}}</p>
                        </div> 
                    </div>
                    
                    @endwhile

                </div>
            </div>

    </section>
    <footer class="info" id="info">
        <div class="container">
            <div class="info__container">
                @if($basic->address !=null)
                <div class="info__container--content">
                    <div class="icon-container">
                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <h6>Home</h6>
                    <p>{{$basic->address}}</p>
                </div>
                @endif
                @if($basic->phone !=null)
                <div class="info__container--content">
                    <div class="icon-container">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                    </div>
                    <h6>Phone</h6>
                    <p><a href=":phone">(+91){{$basic->phone}}</a></p>
                </div>
                @endif
                @if($basic->email !=null)
                <div class="info__container--content">
                    <div class="icon-container">
                        <span class="icon"><i class="fas fa-at"></i></span>
                    </div>
                    <h6>Email</h6>
                    <p>{{$basic->email}}</p>
                </div>
                @endif

            </div>
        </div>
    </footer>

<div class="mobile-menu">
    <div class="mobile-menu-close">
        <span class="icon"><i class="fas fa-times"></i></span>
    </div>
    <div class="container">
        <div class="mobile-menu__container">
            <ul class="mobile-menu__ul">
                <li class="mobile-menu__li">
                    <a href="#home" data-scroll class="mobile-menu__link">Home</a>
                </li>
                <li class="mobile-menu__li">
                    <a href="#our-story" data-scroll class="mobile-menu__link">Our Story</a>
                </li>
                <li class="mobile-menu__li">
                    <a href="#event-dates" data-scroll class="mobile-menu__link">Event Dates</a>
                </li>
                <li class="mobile-menu__li">
                    <a href="#couple-gallery" data-scroll class="mobile-menu__link">Our Gallery</a>
                </li>
                <li class="mobile-menu__li">
                    <a href="#family-members" data-scroll class="mobile-menu__link">Our Family</a>
                </li>
                <li class="mobile-menu__li">
                    <a href="#info" data-scroll class="mobile-menu__link">Contact Us</a>
                </li>
                <li class="mobile-menu__li ">
                    <a class="btn btn-primary mobile-menu__link install-pwa">Install</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>

<script src="{{asset('themes/basic/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('themes/basic/js/lightbox.min.js')}}"></script>
<script src="{{asset('themes/basic/js/script.js')}}"></script>

<script>
$(document).ready(function(){
    $('.owl-carousel').owlCarousel(
        {
            items: 4,
            nav: true,
            loop:false,
            responsive:{
                0:{
                    items: 1,
                    loop:true,
                },
                800:{
                    items: 3,
                    slideBy: 3,
                }
            }
        }
    );
    var scroll = new SmoothScroll('[data-scroll]',{
        speed: 500,
	    speedAsDuration: true
    });
    
});
</script>

</body>
</html>