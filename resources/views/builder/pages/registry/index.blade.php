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
                    <h3 class="dashboard--heading text-uppercase mt-4">Wedding Register</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>

            <!-- Card Container -->
            <div class="row about-card">
                    <div class="col-md-6 col-sm-12 mt-2">
                        {{-- <h5 class="mb-2">Groom</h5> --}}
                        <div class="card" style="width: 18rem;">
                            <a href="{{url()->current()}}/add"> <img src="{{asset('img/capture.png')}}" class="card-img-top" alt="add new">
                            <div class="card-body">
                                <a href="{{url()->current()}}/add" class="btn btn-submit text-center mx-auto px-3 py-2" style="opacity:0;" >Add</a>
                            </div>
                            </a>
                        </div>
                    </div>
                <!-- Groom card -->
                @foreach ($data as $item) 
                    <div class="col-md-6 col-sm-12 mt-2">
                        {{-- <h5 class="mb-2">Groom</h5> --}}
                        <div class="card" style="width: 18rem;">
                            <a href="{{$item->register_url}}" target="_blank"><img src="{{asset("images/".$item->register_image)}}" class="card-img-top" alt="{{$item->register_name}}"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->register_name}}</h5>
                                
                                <a href="{{url()->current()}}/edit/{{$item->id}}" class="btn btn-submit ml-0" >Edit</a>
                                <form action="{{url()->current()}}/delete" method="post" style="display:inline;s">
                                    @csrf
                                    <input type="text" value="{{$item->id}}" name="id" hidden>
                                    <button type="submit" class="btn btn-danger" style="border-radius:100px;">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Card container ends -->
        </div>
        
    </div>
    <div class="col-md-5 col-sm-12 web-view">
            @include('builder.pages.iframe')
    </div>
</div>
    
@endsection