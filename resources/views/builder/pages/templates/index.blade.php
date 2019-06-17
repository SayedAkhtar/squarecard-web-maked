@extends('builder.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 main-container">
        <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-sm-between mb-1">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{env('APP_URL')}}/builder/dashboard" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">Templates </h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>

            <!-- Card Container -->
            <div class="row">
                @foreach ($data as $item)
                <!-- Groom card -->
                <div class="col-md-3 col-sm-12" >
                    <div class="card bg-dark text-white" @if ($user->template_name == $item->template_name)
                            style="box-shadow: 2px 2px 10px rgba(94,190,206,0.7);"
                        @endif>
                        <a href="{{url()->current()}}/" style="color:inherit;">
                        <img src="{{asset('img/templates/'.$item->template_name.'/index.jpg')}}" class="card-img" alt="...">
                        {{-- <div class="card-img-overlay">
                            <p class="card-text text-capitalize">{{}}</p>
                            <p class="card-text">{{}}</p>
                        </div> --}}
                        </a>
                    </div>
                    <h5 class="card-text text-center mt-1 text-capitalize">{{ __($item->template_name ) }}</h5>
                </div>
                @endforeach
            <!-- Card container ends -->
        </div>
        
    </div>
   
</div>
    
@endsection