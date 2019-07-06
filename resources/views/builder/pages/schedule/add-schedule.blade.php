<?php 
    
?>

@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
                @include('builder.layout.dashboard-heading-pc',['title'=>'Schedule | Add', 'back'=> '/builder/dashboard/schedule/'])
                @include('builder.layout.dashboard-heading-mobile',['title'=>'Echedule | Add', 'back'=> '/builder/dashboard/schedule/'])
            <div class="col-md-7">
                <form class="" enctype="multipart/form-data" method="POST" action="{{url()->current()}}">
                    @csrf
                    <div class="form-group">
                        <label for="event-title" class="important-form-feild">Event Title</label>
                        <input type="text" class="form-control" id="event-title" name="event_name" required>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                            <label for="event-stat-date" class="important-form-feild">Start Date</label>
                        <input type="text" class="form-control date" id="event-start-date" name="event_start_date" required>
                        </div>
                        <div class="col-6 p-0">
                            <label for="event-start-time" class="important-form-feild">Start Time</label>
                        <input type="time" class="form-control" id="formGroupExampleInput3" name="event_start_time" required>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-6 p-0">
                        <label for="event-end-date">End Date</label>
                        <input type="text" class="form-control date" id="event-end-date"  name="event_end_date">
                        </div>
                        <div class="col-6 p-0">
                        <label for="event-end-time">End Time</label>
                        <input type="time" class="form-control" id="event-end-time"  name="event_end_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event-venue">Event Venue</label>
                        <input type="text" class="form-control" id="event-venue" name="event_venue" >
                    </div>
                    <div class="form-group">
                        <label for="event-short-description">Short Description</label>
                        <small>MAX: 180 Characters</small>
                        <textarea type="text" class="form-control" id="event-short-description" placeholder="Event Short Description" rows="3" name="event_short_description" maxlength="180"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="event-long-description">Long Description</label>
                        <textarea type="text" class="form-control" id="event-long-description" placeholder="Event Long Description" rows="5" name="event_long_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="event-note">Event Note</label>
                        <input type="text" class="form-control" id="event-note" placeholder="Event Note" name="event_note">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="formGroupExampleInput10" placeholder="Event Image" name="image">
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
    <div class="col-md-5 col-sm-12 web-view">
            @include('builder.pages.iframe')
    </div>
    </div>
</div>

@endsection