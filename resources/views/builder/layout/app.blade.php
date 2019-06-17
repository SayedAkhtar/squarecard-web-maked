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

</head>
<body>

    @yield('content')
    
<!-- Script -->
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
    var ParentElement = $(this)[0].offsetParent;
    var content = $(this)[0].placeholder;
    if($(this)[0].type != 'file'){
        $(ParentElement).append(`<small id='appended-text'>${content}</small>`)
    }
});

$(".login.form-control").each(function(){
  this.nextElementSibling.remove();  
});
$(".signup.form-control").each(function(){
  this.nextElementSibling.remove();  
});



</script>
@yield('script')
</body>
</html>