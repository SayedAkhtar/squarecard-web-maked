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
    <div class="login-container">
        <h1 class="login-container-heading">One more step ...</h1>
        <form action="{{url()->current()}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="groom-name" placeholder="Groom's Name" name="groom_name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="bride-name" placeholder="Bride's Name" name="bride_name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="event-name" placeholder="Event name" name="event_name">
            </div>
            <div class="form-group">
                <select name="userurl" id="option" class="form-control" 
                style="border-left: none;
                       border-right: none;
                       border-top: none;
                       border-radius: 0px;
                       border-width: 2px;">
                    <option value="" selected> Chose Your URL </option>
                </select>
                {{-- <a href="#" id="check-available"><small>Check available</small></a> --}}
            </div>
            @if ($errors->all())    
                <div class="form-group">
                  @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{$item}}
                    </div>
                  @endforeach
                </div>
            @endif
            
           <div class="p-2 m-5"></div>
            <button type="submit" class="btn login-container__social--submit">Continue</button>
        </form>
    </div>

<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/dashboardScript.js")}}"></script>
<script>
    $(document).ready(function(){
        var url = `/builder/information/checkurl`;
        var x,y;
        $("#groom-name").on('keyup', function(e){
            x = $(this)[0].value;
        })
        $("#bride-name").on('keyup', function(e){
            y = $(this)[0].value;
        })
        $("#option").click(function(){           
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Access-Control-Allow-Origin': '*' 
                },
            data: { groom_name: x, bride_name: y}, 
            url: url,
            method: 'post',
            success: function(data){
                data.forEach(element => {
                    $( "#option" ).append( `<option value="${element}">${element}</option>" `);
                    // console.log(element);
                });
            }
        });
        });
    });
</script>
</body>
</html>
