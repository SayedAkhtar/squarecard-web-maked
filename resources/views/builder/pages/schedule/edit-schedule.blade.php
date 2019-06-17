<?php 
    
?>

@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{env('APP_URL')}}/builder/dashboard/schedule" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">Schedule |edit</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>
            <div class="col-md-7">
                    
                <form class="" enctype="multipart/form-data" method="POST" action="{{url()->current()}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="event_name" placeholder="Event Title"
                        value="{{$data->event_name}}" required
                        >
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                        <input type="text" class="form-control date" id="formGroupExampleInput2" placeholder="DD/MM/YYYY" name="event_start_date"
                        value="{{$data->event_start_data}}" required
                        >
                        </div>
                        <div class="col-6 p-0">
                        <input type="time" class="form-control" id="formGroupExampleInput3" placeholder="DD/MM/YYYY" name="event_start_time"
                        value="{{$data->event_start_time}}" required
                        >
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                        <input type="text" class="form-control date" id="formGroupExampleInput4" placeholder="DD/MM/YYYY" name="event_end_date"
                        value="{{$data->event_end_date}}"
                        >
                        </div>
                        <div class="col-6 p-0">
                        <input type="time" class="form-control" id="formGroupExampleInput5" placeholder="DD/MM/YYYY" name="event_end_time"
                        value="{{$data->event_end_time}}"
                        >
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput6" placeholder="Place" name="event_venue"
                        value="{{$data->event_venue}}" required
                        >
                    </div>
                    <div class="form-group">
                        <small>MAX: 180 Characters</small>
                        <textarea type="text" class="form-control" id="formGroupExampleInput7" placeholder="Event Short Description" rows="3" name="event_short_description" maxlength="180">{{$data->event_short_description}}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <textarea type="text" class="form-control" id="formGroupExampleInput8" placeholder="Event Long Description" rows="5" name="event-long-description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput9" placeholder="Event Note" name="event-note">
                    </div> --}}
                    <div class="form-group">
                    <input type="file" class="form-control" id="formGroupExampleInput10" placeholder="Event Image" name="image" >
                    </div>
                    <div class="form-group">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-cancel">Cancel <span class="text-uppercase"> x </span></button>
                        <button type="submit" class="btn btn-submit">Submit <span class="text-uppercase"> > </span></button>
                    </div>
                </form>
             </div>
    </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view">
        @include('builder.pages.iframe')
    </div>
</div>

@endsection
