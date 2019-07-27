@extends('builder.layout.app')
@section('title', '- Dashboard')
@section('content')

<?php
$id = Auth::user()->id;
?>
<div class="row">

    <div class="col-md-7 col-sm-12 main-container dashboard">
        <div class="container-fluid">
            {{-- Heading Button --}}
            @include('builder.layout.dashboard-heading-pc', ['title'=>'Dashboard'])
            @include('builder.layout.dashboard-heading-mobile', ['title'=>'Dashboard' , 'weburl'=>App\User::find(Auth::user()->id)->UserUrl->UserURL])
            <!-- Head Button Ended -->
            <div class="dashboard-main mt-3">
                <div class="dashboard_website-design">
                    <h6 class="text-uppercase">Website Design</h6>
                    <div class="d-flex flex-wrap">
                        <a href="{{url()->current()}}/template-edit" class="btn btn-dashboard">
                            <img src="{{asset("img/template.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Template</h6>
                        </a>
                        {{-- <a href="{{url()->current()}}/font-select" class="btn btn-dashboard ">
                            <img src="{{asset("img/font-size.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Font</h6>
                        </a> --}}
                    </div>
                </div>

                <div class="dashboard_wedding-details mt-3">
                    <h6 class="text-uppercase">Wedding Details</h6>
                    <div class="d-flex flex-wrap">
                        <a href="{{url()->current()}}/basic-details" class="btn btn-dashboard">
                            <img src="{{asset("img/information.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Basic Details</h6>
                        </a>
                        <a href="{{url()->current()}}/story" class="btn btn-dashboard ">
                            <img src="{{asset("img/like.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Story</h6>
                        </a>
                        <a href="{{url()->current()}}/schedule" class="btn btn-dashboard">
                            <img src="{{asset("img/clock.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Schedule</h6>
                        </a>
                        <a href="{{url()->current()}}/family-details" class="btn btn-dashboard ">
                            <img src="{{asset("img/user.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Friends & Family</h6>
                        </a>
                        <a href="{{url()->current()}}/about" class="btn btn-dashboard">
                            <img src="{{asset("img/relationship.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">About Couple</h6>
                        </a>
                        <a href="{{url()->current()}}/registry" class="btn btn-dashboard ">
                            <img src="{{asset("img/in.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Registry</h6>
                        </a>
                        <a href="{{url()->current()}}/photo-gallery" class="btn btn-dashboard">
                            <img src="{{asset("img/picture.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Photo Gallery</h6>
                        </a>
                        {{-- <a href="#{{url()->current()}}/other-services" class="btn btn-dashboard ">
                            <img src="{{asset("img/internet.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Other Services</h6>
                        </a> --}}
                    </div>
                </div>

                <div class="dashboard_manage mt-3">
                    <h6 class="text-uppercase">Manage</h6>
                    <div class="d-flex">
                        <a href="#{{url()->current()}}/rsvp" class="btn btn-dashboard" data-toggle="tooltip" data-placement="top" title="Under Development">
                            <img src="{{asset("img/pros-and-cons.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">RSVP</h6>
                        </a>
                        {{-- <a href="#{{url()->current()}}/settings" class="btn btn-dashboard ">
                            <img src="{{asset("img/settings.png")}}" alt="" class="img-responsive">
                            <h6 class="dashboard--linkname">Settings</h6>
                        </a> --}}
                    </div>
                </div>
                <div class="dashboard_manage mt-3">
                    <h6 class="text-uppercase"></h6>
                    <div class="d-flex">
                        <a class="btn btn-dashboard" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                             <img src="{{asset("img/power.png")}}" alt="" class="img-responsive">
                             <h6 class="dashboard--linkname">logout</h6>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view ">
        @include('builder.pages.iframe')
    </div>
</div>

@include('builder.layout.floating-share')

@endsection

