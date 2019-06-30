<?php
$length = count($data);
$i = $length ;
?>
@extends('builder.layout.app')
@section('content')
 
<div class="row">
    <div class="col-md-12 col-sm-12 main-container photo-album">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger text-center" role="alert">
                    Failed to upload {{$errors->first()}}
                </div>
            @endif
            <div class="d-flex align-items-center justify-content-sm-between mb-3">
                    <div class="action__button">
                        <div class="action__button--left">
                            <a href="{{env('APP_URL')}}/builder/dashboard" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                            <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                        </div>
                    </div>
                <h3 class="dashboard--heading text-uppercase mt-4">Photos </h3>
                <div class="dashboard__head-buttons">
                    <a href="#" class="btn btn-secondary" id="brn-share-web-url">Share 
                        <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                    </a> 
                    <a href="#" class="btn btn-secondary" id="btn-modal-help">Help ?</a> 
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card bg-light text-white" >
                        <img src="{{asset("img/capture.png")}}" class="card-img" alt="..." id="imageInputBtn">
                        <div>
                            <form action="{{url()->current()}}/add" method="post" enctype="multipart/form-data" id="photoUpload">
                            @csrf
                            <input type="file" name="image[]" id="imageInput" onchange="document.getElementById('photoUpload').submit();" hidden multiple>
                            <input type="submit" class="" hidden>
                            </form>
                        </div>
                    </div>
                </div>

                @while ($i--)
                <div class="col-3">
                    <div class="card bg-dark text-white">
                        <img src="{{asset("images/".$data[$i]->image)}}" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <form action="{{url()->current()}}/delete" method="post" id="deletePhoto">
                                    @csrf
                                <input type="text" value="single" name="type" hidden>
                                <input type="number" value="{{$data[$i]->id}}" name="id" hidden>
                                <a type="submit" class="no-link-style"  onclick="document.getElementById('deletePhoto').submit()">
                                    <i class="fas fa-times"></i>
                                </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endwhile
            </div>
            
        </div>
    </div>
    {{-- <div class="col-md-5 col-sm-12 web-view"></div> --}}
</div>

@endsection
