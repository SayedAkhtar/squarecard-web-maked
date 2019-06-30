@extends('builder.layout.app')
@section('content')

<?php
$event = ""; $date = ""; $bride = ""; $groom = ""; $venue = ""; $id ="";
if($details != null || $details != ""){
    $event = $details->event_name;
    $date = $details->event_date;
    $bride = $details->bride_name;
    $groom = $details->groom_name;
    $venue = $details->venue;
    $id = $details->id;
}

$pos = (strrpos(url()->current(), '/'));
$url = (substr(url()->current(),0, $pos));

?>
<div class="row">
    <div class="col-md-7 col-sm-12 main-container evevnt-details">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container event-details__container">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{$url}}" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">Basic Details</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary" id="btn-share-web-url">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary" id="btn-help-modal">Help ?</a> 
                    </div>
                </div>
            <div class="col-md-8">
                <form class="" method="POST" action="{{url()->current()}}/edit" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="event-name" class="important-form-feild">Event Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="event_name" placeholder="Event Name" value="{{$event}}" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="groom-name" class="important-form-feild">Groom Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="groom_name" placeholder="Groom Name" value="{{$groom}}" id="groom-name" required>
                            </div>
                        </div>
                         <div class="col-6">
                            <div class="form-group">
                                <label for="bride-name" class="important-form-feild">Bride Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="bride_name" placeholder="Bride Name" value="{{$bride}}" id="bride-name" require>
                            </div>
                        </div>      
                    </div>
                    <div class="form-group">
                    <label for="event-date" class="important-form-feild">Event Date</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="DD/MM/YYYY" pattern="dd-mm-yyyy" name="event_date" value="{{$date}}" id="event-date" required>
                    </div>
                    <div class="form-group">
                        <label for="event-venue">Event Venue</label>
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Event Venue" name="event_venue" value="{{$venue}}" id="event-venue">
                    </div>
                    <div class="form-group">
                    <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Describe Your Event" name="event_about" rows="5">{{$details->about}}</textarea>
                    </div>
                    @if ($details->cover_image != null)
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('images/'.$details->cover_image)}}" alt="" width="250px">
                            </div>
                        </div>
                    </div>

                    @endif
                    <div class="form-group">
                        <label for="formGroupExampleInput6">Cover Image</label>
                        <input type="file" class="form-control" id="formGroupExampleInput6" placeholder="Cover Photo" name="cover_image">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end">
                        {{-- <button type="button" class="btn btn-cancel"> <a href="/builder/dashboard"> Cancel <span class="text-uppercase"> x </span></a></button> --}}
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

{{-- @section('script')

@endsection --}}