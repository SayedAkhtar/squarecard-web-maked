<?php
$length  = count($story);

?>

@extends('builder.layout.app')
@section('content')


<div class="row">
    <div class="col-md-7 col-sm-12 main-container view-story">
        <div class="container">
        <div class="d-flex align-items-center justify-content-sm-between mb-3">
                <div class="action__button">
                    <div class="action__button--left">
                        <a href="{{env('APP_URL')}}/builder/dashboard" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                        <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                    </div>
                </div>
            <h3 class="dashboard--heading text-uppercase mt-4" >Story</h3>
            <div class="dashboard__head-buttons">
                <a href="#" class="btn btn-secondary" id="btn-share-web-url">Share 
                    <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                </a>
                <a href="#" class="btn btn-secondary" id="btn-help-modal">Help ?</a> 
            </div>
        </div>
                <div class="row mt-5 mx-auto">
                <?php
                    while ($length){
                        
                ?>
                {{-- <div class="card mr-3" style="width: 18rem;">
                    <img src="{{$story[$length-1]->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$story[$length-1]->story_title}}</h5>
                        <p class="card-text">{{$story[$length-1]->story_short_description}}</p>
                        <a href="{{url()->current()}}/edit/{{$story[$length-1]->id}}" class="btn btn-submit">Edit</a>
                        <a href="{{url()->current()}}/edit/{{$story[$length-1]->id}}" class="btn btn-submit">Remove</a>
                    </div>
                </div> --}}
                <div class="card mb-3" style="min-height: 200px; width:100%;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="{{asset('images/'.$story[$length-1]->story_image)}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$story[$length-1]->story_title}}</h5>
                            <p class="card-text">{{$story[$length-1]->story_date}}</p>
                            <p class="card-text">{{$story[$length-1]->story_venue}}</p>
                            <p class="card-text"><small class="text-muted">{{$story[$length-1]->story_short_description}}</small></p>
                            <a href="{{url()->current()}}/edit/{{$story[$length-1]->id}}" class="btn btn-submit">Edit</a>
                            <form action="{{url()->current()}}/delete" method="post" class="d-inline">
                                @csrf
                                <input type="text" value="{{$story[$length-1]->id}}" name="id" hidden>
                                <input type="submit" class="btn btn-submit" value="Remove"></a>
                            </form>
                            
                        </div>
                        </div>
                    </div>
                </div>
                <?php $length--; } ?>
                <div class="card mb-3 d-flex justify-content-center align-items-center view-story__add-button" style="min-height: 200px; width:100%;">
                    <div class="row no-gutters">
                        
                        <div class="col-md-12 ">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <a href="{{url()->current()}}/add" class="h2 no-link-style " >
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 web-view">
            @include('builder.pages.iframe')
        </div>
</div>
    
@endsection