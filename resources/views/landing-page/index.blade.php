<?php
$failed = false;
$sent = false;
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile-number"];
    if(isset($_POST["date"])){
        $date = $_POST["date"];
    }else{
        $date = "Not Provided";
    }
    $to = "shivamagarwal.790@gmail.com";
    //$to = "sayed182@gmail.com";
    $subject = "This a Enquiry message form ShareJoy.";

    $headers = "From: SquareCard.in \r\n";
    $headers .= "CC: ".$to."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    $message = "<h2>This is an Enquiry submitted through ShareJoy</h2>";
    $message.= "<br>";
    $message.= "<p> Name = $name </p> <br>";
    $message.="<p> Email = $email </p> <br>";
    $message.="<p> Mobile = $mobile_number </p>.";
    $message.="<p> Date = $date </p>.";
                
    if(mail($to,$subject,$message, $headers)){
      $sent = true;
    }else{
       $sent = false;
       $failed = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareJoy</title>
    <link rel="stylesheet" href="{{asset('landing-page/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing-page/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('landing-page/css/main.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
</head>
<body>
    <section class="welcome" id="home">
        <nav class="navigation">
            <ul class="navigation__nav">
                <li class="navigation__nav--list">
                    <a data-scroll href="#home" class="navigation__nav--links" >Home</a>
                </li>
                <li class="navigation__nav--list" style="position:relative;">
                    <a data-scroll href="/builder" class="navigation__nav--links" >Builder</a>
                    <small class="beta-test" style="    right: 6px;
                    color: white;
                    background: limegreen;
                    padding: 3px;
                    border-radius: 100px;
                    font-size: 8px;
                    position: absolute;
                    top: 6px;">Beta</small>
                </li>
                <li class="navigation__nav--list">
                    <a data-scroll href="#services" class="navigation__nav--links" >Services</a>
                </li>
                <li class="navigation__nav--list">
                    <a href="#about" class="navigation__nav--links" >About Us</a>
                </li>
                <li class="navigation__nav--list">
                    <a data-scroll href="#home" class="navigation__nav--links" >Contact Us</a>
                </li>
            </ul>
        </nav>
        <div class="welcome__content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="welcome__content--left-content wow fadeInLeft">
                        <h1>Your marriage is on us.</h1> 
                        <a href="#" class="btn primary-color">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                <?php
                        if(!$sent){?>
                   <div class="contact-form wow fadeInDown">
                       <?php if($failed){echo '<div class="alert alert-danger" role="alert">Query was Not sent</div>'; } ?>
                       <form action="/" method="post" class="contact-form__container">
                           <div class="form-group">
                               <input type="text" class="form-control required" placeholder="Full Name" required name="name">
                           </div>
                           <div class="form-group">
                               <input type="email" class="form-control required" placeholder="Email ID" required name="email">
                           </div>
                           <div class="form-group">
                               <input type="tel" pattern="[0-9]{3,14}" class="form-control required" placeholder="Mobile Number" name="mobile-number" required>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-5 col-sm-12 d-flex align-items-center ">
                                   <label for="date-picker" class="my-0"> Date Of Event *</label>
                               </div>
                               <div class="col-md-7 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Date" id="date-picker" name="date">
                               </div>
                           </div>
                           <small>* are optional</small>
                           <input type="submit" class="btn submit-button" placeholder="Submit" name="submit">
                       </form>
                   </div>
                   <?php }else{ ?>
                        <div class="alert alert-success thankyou-note" role="alert">
                            <h4 class="alert-heading">ThankYou</h4>
                            <p>Thankyou for stopping by and showing intrest in pur service</p>
                            <hr>
                            <p class="mb-0">Our team will soon contact you.</p>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        </div>
        <div class="row scroll-to-bottom">
            <a href="#about" class="scroll-to-bottom-btn">Scroll To Know More</a>
            <a href="#about" class="scroll-to-bottom-arrow">&darr;</a>
        </div>
    </section>
    <section class="info" id="about">
        <div class="info__icons-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="info__icons-section--container">
                            <img src="{{asset('landing-page/img/connect.svg')}}" alt="" class="info__icons-section--img">
                            <p class="info__icons-section--heading">all in one website</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">    
                        <div class="info__icons-section--container">
                            <img src="{{asset('landing-page/img/Tradational-Modern.png')}}" alt="" class="info__icons-section--img">
                            <p class="info__icons-section--heading">Bes traditional and modern designs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">    
                        <div class="info__icons-section--container">
                            <img src="{{asset('landing-page/img/responsive.png')}}" alt="" class="info__icons-section--img">
                            <p class="info__icons-section--heading">Mobile, tablet and desktop responsive</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">    
                        <div class="info__icons-section--container">
                            <img src="{{asset('landing-page/img/24-hours.png')}}" alt="" class="info__icons-section--img">
                            <p class="info__icons-section--heading">24X7 Available</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Icons Section Ended -->
        <div class="info__main">
            <div class="container">
                <div class="row info__main--icon-row">
                    <div class="col-md-3 ">
                        <div class="info__main--icon-container">
                            <h2>With us go digital</h2>
                            <p>Get your Own Digital invitation card with RSVPs, Guest List at one click</p>
                            <img src="{{asset('landing-page/img/hugo-uploading.png')}}" alt="" class="info__main--icon-container--img">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info__main--icon-container">
                            <h2>With us go digital</h2>
                            <p>Share time, date, venue and other details in the most convenient manner</p>
                            <img src="{{asset('landing-page/img/hugo-chatbot.png')}}" alt="" class="info__main--icon-container--img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 info__main--icon-container--centerContainer">
                        <img src="{{asset('landing-page/img/section-1.png')}}" alt="" class="info__main--icon-container--centerImg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row info__main--icon-row">
                    <div class="col-md-3">
                        <div class="info__main--icon-container">
                            <h2>Story</h2>
                            <p>Spice it up with your story. Allow Guest to know the bride and groom better.</p>
                            <img src="{{asset('landing-page/img/hugo-uploading.png')}}" alt="" class="info__main--icon-container--img">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info__main--icon-container">
                            <h2>Photoes</h2>
                            <p>Let the guests mesmerize at your chemistry via your photoes.</p>
                            <img src="{{asset('landing-page/img/hugo-chatbot.png')}}" alt="" class="info__main--icon-container--img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <section class="news-letter" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="news-letter__imageContainer">
                        <img src="{{asset('landing-page/img/eastwood-order-completed.png')}}" alt="" class="news-letter__imageContainer--img w-100">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 news-letter__contentContainer">
                    <h1 class="news-letter--h1">100% Satisfaction</h1>
                    <h3 class="news-letter--h3">We will provide our benchmark services and thats a promise</h3>
                </div>
            </div>        
        </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="news-letter__formContainer">
                        <div class="container">
                            <h1>Subscribe to Our Newsletter</h1>
                            <form action="/" method="post" class="news-letter__form">
                                <input type="text" class="news-letter__form--input" placeholder="abc@example.com">
                                <input type="Submit" class="btn submit-button" placeholder="Subscribe" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<footer class="footer">
    <div class="container">
        <div class="row social-links">
            <div class="col-md-6 col-sm-12">
                <ul class="social-links__container">
                    <li class="social-links--list">
                        <a href="" class="social-links--links">
                            <img src="{{asset('landing-page/img/facebook.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="social-links--list">
                        <a href="" class="social-links--links">
                            <img src="{{asset('landing-page/img/twitter.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="social-links--list">
                        <a href="" class="social-links--links">
                            <img src="{{asset('landing-page/img/instagram.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="social-links--list">
                        <a href="" class="social-links--links">
                            <img src="{{asset('landing-page/img/pinterest.svg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 footer-copyright-container">
                <p>2019 &copy; The Share Joy, All Rights Reserved</p>
            </div>
            <div class="col-md-6 col-sm-12 footer-links-container">
                <ul class="footer__container">
                    <li class="footer--list">
                        <a href="#" class="footer--links">Contact</a>
                    </li>
                    <li class="footer--list">
                        <a href="#" class="footer--links">FAQ</a>
                    </li>
                    <li class="footer--list">
                        <a href="#" class="footer--links">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   
<script src="{{asset('landing-page/js/zenscroll-min.js')}}"></script>
<script src="{{asset('landing-page/js/wow.min.js')}}"></script>
<script>

window.addEventListener('DOMContentLoaded',(e) => {
        
new WOW().init();

$( function() {
    $( "#date-picker" ).datepicker();
} );

document.querySelector('.contact-form').addEventListener("keyup", (e) => {

    if((document.querySelectorAll('[name="name"]')[0].value != "") && (document.querySelectorAll('[name="email"]')[0].value !="") && (document.querySelectorAll('[name="mobile-number"]')[0].value !="")){
        document.querySelector(".contact-form .submit-button").style.background = "#f55d94";
    }
    else{
        document.querySelector(".contact-form .submit-button").style.background = "#e8c5d2";
    }
})

});
</script>
</body>
</html>