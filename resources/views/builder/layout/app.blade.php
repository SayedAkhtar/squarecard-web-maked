<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="FmNAJu0Pzpo23knxFSZV6uD35zU3Pjmlahn5v2amqzE" />
    <title>Squarecaard @yield('title')</title>
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
  <div id="before-loader">
    <div class="loader">Loading...</div>
  </div>

    @yield('content')
    @include('builder.pages.share-modal')
    @include('builder.pages.help-modal')



    <div id="mobile-in-landscape">
      <div class="in-center">
        <h2 class="text-center">Please rotate your device.</h2>
        <h1 class="mt-2"><i class="fas fa-sync-alt"></i></h1>
      </div>

    </div>

<!-- Script -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/jquery-ui.min.js")}}"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/dashboardScript.js")}}"></script>
{{-- <script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script> --}}

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
    $('#before-loader').fadeOut(100);
    $("#imageInputBtn").click(function(){
        $("#imageInput").trigger("click");
    });

    $("#imageInputBtn").vclick(function(){
            $("#imageInput").trigger("click");
        });

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

$('.important-form-feild').each(function(e){
   $(this).append(`<small class="text-danger inportant-asterix">*</small>`);
});

$(".login.form-control").each(function(){
  this.nextElementSibling.remove();
});
$(".signup.form-control").each(function(){
  this.nextElementSibling.remove();
});

$(document).ready(function(){
        $('.ui-loader').hide();
        //Modal Hide
        $("#modal-help-close").click(function(){
          $(".help-modal-background").fadeOut(200);
        });

        //Modal Show Up
        $("#btn-help-modal").click(function(){
            console.log('Hi');
          $(".help-modal-background").fadeIn(100);
        });
        $("#btn-help-modal").click(function(){
           $(".help-modal-background").show();
        });

      //Modal show Up
      $("#modal-share-close").click(function(){
          $(".background").fadeOut(200);
          $("#share-web-url > input").prop('disabled', false);
          $("#share-web-url > small").css('opacity',0);
        });

        //Modal Hide
        $("#btn-share-web-url").click(function(){
          $(".background").fadeIn(100);
        });

        $("#share-web-url").click(function(){

          $("#share-web-url > input").select();
          document.execCommand('copy');
          $("#share-web-url > input").prop('disabled', true);
          $("#share-web-url > small").css('opacity',1);

        });

      $( window ).on( "orientationchange", function( event ) {
        if(event.orientation == 'landscape'){
          $('#mobile-in-landscape').css('display','flex');
        }
        else{
          $('#mobile-in-landscape').css('display','none');
        }
      });
      var width = $(window).width();
      var height = $(window).height();
      if((height < 400 ) && (width > height)){
        $('#mobile-in-landscape').css('display','flex');
      }

      $('.share-clickable-button').click(function(){
          if($(this).hasClass('active')){
              $('#share-1').css('transform','translateY(0px)');
              $('#share-2').css('transform','translateY(0px)');
              $('#share-3').css('transform','translateY(0px)');
          }else{
              $('#share-1').css('transform','translateY(-50px)');
              $('#share-2').css('transform','translateY(-100px)');
              $('#share-3').css('transform','translateY(-150px)');
          }
          $(this).toggleClass('active');
      });

      $('#mobile-heading-menu').click(function(){
        $(".mobile-heading-menu--container").toggle();
      });

    $(".date").datepicker();


});

</script>

@yield('script')
</body>
</html>
