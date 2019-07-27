<?php 
    
?>

@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
            @include('builder.layout.dashboard-heading-pc',['title'=>'Schedule | Edit', 'back'=> '/builder/dashboard/schedule/'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Schedule | Edit', 'back'=> '/builder/dashboard/schedule/'])

            <div class="col-md-7">
                    
                <form class="" enctype="multipart/form-data" method="POST" action="{{url()->current()}}">
                    @csrf
                    <div class="form-group">
                        <label for="event-title" class="important-form-feild">Event Title</label>
                        <input type="text" class="form-control" id="evet-title" name="event_name"
                        value="{{$data->event_name}}" required
                        >
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                        <label for="event-start-date" class="important-form-feild">Start Date</label>
                        <input type="text" class="form-control date" id="event-start-date" name="event_start_date"
                        value="{{$data->event_start_data}}" required placeholder="Start Date"
                        >
                        </div>
                        <div class="col-6 p-0">
                        <label for="event-start-time" class="important-form-feild">Start Time</label>
                        <input type="time" class="form-control" id="formGroupExampleInput3" name="event_start_time"
                        value="{{$data->event_start_time}}" required placeholder="Start Time"
                        >
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                        <label for="event-end-date">End Date</label>
                        <input type="text" class="form-control date" id="event-end-date" name="event_end_date"
                        value="{{$data->event_end_date}}" placeholder="End Date"
                        >
                        </div>
                        <div class="col-6 p-0">
                        <label for="event-end-time">End Time</label>
                        <input type="time" class="form-control" id="event-end-time" name="event_end_time"
                        value="{{$data->event_end_time}}" placeholder="End Time"
                        >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="evnt-venue">Event Venue</label>
                        <input type="text" class="form-control" id="formGroupExampleInput6" name="event_venue"
                        value="{{$data->event_venue}}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="event-short-description">Short Description</label>
                        <small>MAX: 180 Characters</small>
                        <textarea type="text" class="form-control" id="event-short-description" rows="3" name="event_short_description" maxlength="180">{{$data->event_short_description}}</textarea>
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
                    @if(isset($data->event_image))
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('images/'.$data->event_image)}}" alt="Schedule Image" class="w-100">
                        </div>
                    </div>
                    @endif
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
