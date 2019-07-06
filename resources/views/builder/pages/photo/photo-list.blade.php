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
            @include('builder.layout.dashboard-heading-pc',['title'=>'Photoes', 'back'=> '/builder/dashboard'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Photoes', 'back'=> '/builder/dashboard'])
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
