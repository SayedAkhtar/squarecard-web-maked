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
            @include('builder.layout.dashboard-heading-pc',['title'=>'Registry | Add', 'back'=> '/builder/dashboard/registry/'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Registry | Add', 'back'=> '/builder/dashboard/registry/'])
            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <small>Max size : 1 MB</small>
                    <div class="card bg-dark text-white" id="imageInputBtn">
                        <img src="{{asset('img/capture.png')}}"
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
                            <input type="text" class="form-control" id="formGroupExampleInput" name="register_name" placeholder="Full name"
                            >
                        </div>
                        <div class="form-group">
                            <input type="url" class="form-control" id="formGroupExampleInput2" placeholder="Registry Url" name="register_url"
                            >
                        </div>
                        <input type="file" name="image" id="imageInput" style="" hidden>
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
