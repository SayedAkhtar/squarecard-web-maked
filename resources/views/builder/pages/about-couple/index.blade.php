@extends('builder.layout.app')
@section('content')
<div class="row">
    <div class="col-md-7 col-sm-12 about-main-container main-container">
        <div class="container-fluid">
                @include('builder.layout.dashboard-heading-pc',['title'=>'About', 'back'=>'/builder/dashboard'])
                @include('builder.layout.dashboard-heading-mobile',['title'=>'About', 'back'=>'/builder/dashboard'])

            <!-- Card Container -->
            <div class="row about-card">

                <!-- Groom card -->
                <div class="col-md-6 col-sm-12">
                    <h5 class="mb-2">Groom</h5>
                    <div class="card bg-dark text-white">
                        <a href="{{url()->current()}}/edit/groom" style="color:inherit; min-height: 400px;">
                        <img src="@if($data->groom_image != null){{asset("images/".$data->groom_image)}}@else{{asset('img/capture.png')}}@endif" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h2 class="card-title text-capitalize">{{$data->groom_name}}</h2>
                            <p class="card-text text-capitalize">{{$data->groom_profession}}</p>
                            <p class="card-text">{{$data->groom_dob}}</p>
                        </div>
                        </a>
                    </div>
                </div>

                <!-- Bride card -->
                <div class="col-md-6 col-sm-12">
                    <h5 class="mb-2">Bride</h5>
                    <div class="card bg-dark text-light">
                        <a href="{{url()->current()}}/edit/bride" style="min-height: 400px;color:inherit;">
                        <img src="@if($data->bride_image != null){{asset("images/".$data->bride_image)}}@else{{asset('img/capture.png')}}@endif" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h2 class="card-title text-capitalize">{{$data->bride_name}}</h2>
                            <p class="card-text text-capitalize">{{$data->bride_profession}}</p>
                            <p class="card-text">{{$data->bride_dob}}</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card container ends -->
        </div>

    </div>
    <div class="col-md-5 col-sm-12 web-view">
           @include('builder.pages.iframe')

    </div>
</div>

@endsection
