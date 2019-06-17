@extends('builder.layout.app')
@section('content')
<div class="row">
    <div class="col-md-7 col-sm-12 about-main-container main-container">
        <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{env('APP_URL')}}/builder/dashboard" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">About Couple</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>

            <!-- Card Container -->
            <div class="row about-card">

                <!-- Groom card -->
                <div class="col-md-6 col-sm-12">
                    <h5 class="mb-2">Groom</h5>
                    <div class="card bg-dark text-white">
                        <a href="{{url()->current()}}/edit/groom" style="color:inherit;">
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
                        <a href="{{url()->current()}}/edit/bride" style="color:inherit;">
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