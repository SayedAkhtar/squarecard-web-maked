@php
    $url = explode('/',url()->current());
    $length = sizeof($url)-1;
    $page_name = $url[$length];
@endphp
@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container about-info-edit">
        <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                            <div class="action__button">
                                <div class="action__button--left">
                                    <a href="{{env('APP_URL')}}/builder/dashboard/about" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                    <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                                </div>
                            </div>
                        <h3 class="dashboard--heading text-uppercase mt-4">About Couple | Edit</h3>
                        <div class="dashboard__head-buttons">
                            <a href="#" class="btn btn-secondary" id="btn-share-web-url">Share 
                                <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                            </a>
                            <a href="#" class="btn btn-secondary" id="btn-help-modal">Help ?</a> 
                        </div>
                    </div>

            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <h5 class="mb-2 text-capitalize">{{$page_name}}</h5>
                    <div class="card bg-dark text-white" id="imageInputBtn">
                        <img src="@if($image != null){{asset("images/".$image) }}@endif"
                            class="card-img" id="userImage" alt="...">
                        <div class="card-img-overlay">
                           {{-- <button class="btn btn-secondary" > Change Photo </button> --}}
                        </div>
                    </div>
                </div>

                <!-- Form Subbmission -->
                <div class="col-md-7 col-sm-12">
                    <!-- <h5 class="mb-2">Bride</h5> -->
                    <form class="mt-5" method="POST" action="{{url()->current()}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="full-name" class="important-form-feild">Full Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="full_name"
                            value="@if($name != null){{$name}}@endif" required id="full-name">
                        </div>
                        <div class="form-group">
                            <label for="couple-age">Age</label>
                            <input type="text" class="form-control" id="couple-age" placeholder="" name="date"
                            value="@if($dob != null){{$dob}}@endif">
                        </div>
                        <div class="form-group">
                            <label for="couple-prfession"></label>
                            <input type="text" class="form-control" id="couple-profession" name="profession"
                            value="@if($profession != null){{$profession}}@endif">
                        </div>
                        <input type="file" name="image" id="imageInput" style="display:none" required>
                        <div class="form-group">
                            <label for="couple-about"></label>
                            <small>MAX: 180 Characters</small>
                            <textarea type="text" class="form-control" id="couple-about" placeholder="About" name="about" rows="5" maxlength="180">@if($about != null){{$about}}@endif</textarea>
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
                            {{-- <a type="button" class="btn btn-cancel" href="/builder/dashboard/about/">Cancel <span class="text-uppercase"> x </span></a> --}}
                            <button type="submit" class="btn btn-submit">Submit <span class="text-uppercase"> > </span></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Card container ends -->
        </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view">
            @include('builder.pages.iframe')
    </div>
</div>

@endsection
