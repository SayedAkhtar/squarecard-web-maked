<?php

    $length = count($schedule);
?>
@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container schedule">
        <div class="container-fluid">
            @include('builder.layout.dashboard-heading-pc',['title'=>'Schedule', 'back'=> '/builder/dashboard'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Schedule', 'back'=> '/builder/dashboard'])


            <!-- Card Container -->
            <div class="row d-flex justify-content-center">
                <?php 
                while($length){
                    $length--;
                    $data = $schedule[$length];
                ?>
                <div class="card col-md-5 p-2 m-2" >
                    <img src="{{asset("images/".$data->event_image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->event_name}}</h5>
                        <div class="row d-flex justify-content-sm-between px-3 pb-2">
                            <small>
                                {{$data->event_start_date}} &nbsp; {{$data->event_start_time}}
                                 <span>
                                     <img src="{{asset("img/calender.png")}}" alt="" class="img-responsive" height="20px">
                                </span>
                            </small>

                            <small>
                               {{$data->event_end_date}} &nbsp; {{$data->event_start_time}}
                                <span>
                                     <img src="{{asset("img/calender.png")}}" alt="" class="img-responsive" height="20px">
                                </span>
                            </small>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-capitalize">{{$data->event_venue}}</h4>
                                {{-- <small class="text-capitalize">{{$data->event_venue}}</small> --}}
                                <!-- <small><button class="btn btn-secondary bg-secondary px-2 py-1 mx-0 mt-1 text-light">Find on Map</button></small> -->

                            </div>
                            {{-- <div class="col-5 schedule-map-container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14734.46643140521!2d88.33850499722443!3d22.593438325502127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277c343ece61b%3A0x8310e0b3c040f62e!2sSam+Garden!5e0!3m2!1sen!2sin!4v1556110906832!5m2!1sen!2sin" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> --}}

                        </div>
                        <h6 class="card-text mt-3 pb-3">{{$data->event_short_description}}</h6>
                        <div style="position: absolute; bottom: 5px;" >
                        <a href="{{url()->current()}}/edit/{{$data->id}}" class="btn btn-submit text-capitalize mx-0">change</a>
                        <form action="{{url()->current()}}/delete/{{$data->id}}" method="post" class="d-inline">
                            @csrf
                            <input type="submit" value="Delete" class=" btn btn-submit">
                        </form>
                        </div>
                        {{-- <a href="{{url()->current()}}/delete/{{$data->id}}" class="btn btn-submit text-capitalize mx-0">delete</a> --}}
                    </div>      
                </div> 
            <?php } ?>

            </div>
            <a href="{{url()->current()}}/add" class="btn btn-submit text-capitalize mx-auto my-3 d-block w-3">Add</a>             
    </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view">
        @include('builder.pages.iframe')
    </div>
    </div>
</div>

@endsection