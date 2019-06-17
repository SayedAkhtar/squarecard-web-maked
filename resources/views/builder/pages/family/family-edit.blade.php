@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container about-info-edit">
        <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{env('APP_URL')}}/builder/dashboard/family-details" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">About Couple | Edit</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>

            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <h5 class="mb-2">Groom</h5>
                    <div class="card bg-dark text-white" id="imageInputBtn">
                    <img src="@if($data->image != null || $data->image != ''){{asset('images/'.$data->image)}}@else{{asset('img/capture.png')}}@endif" class="card-img" alt="..." id="userImage">
                        <div class="card-img-overlay">
                           {{-- <button class="btn btn-secondary"> Change Photo </button> --}}
                        </div>
                    </div> 
                </div>

                <!-- Form Subbmission -->
                <div class="col-md-7 col-sm-12">
                    <!-- <h5 class="mb-2">Bride</h5> -->
                    <form class="mt-5" method="POST" action="{{url()->current()}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" name="full_name" placeholder="Full name" 
                            value="{{$data->name}}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Age" name="date" value="{{$data->age}}">
                        </div>
                        <div class="form-group">
                        <select type="text" class="form-control" id="formGroupExampleInput3" placeholder="Maritial Status" name="maritial_status" value="{{$data->maritial_status}}">
                                <option value="single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Profession" name="profession" value="{{$data->profession}}">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Relation" name="relation" value="{{$data->relation_name}}">
                        <input type="text" class="form-control" name="bride_groom" value="{{$data->bride_groom}}" hidden>
                        </div>
                        <div class="form-group">
                        <textarea type="text" class="form-control" id="formGroupExampleInput6" placeholder="About" name="about" rows="5">{{$data->about}}</textarea>
                        <input type="file" name="image" id="imageInput" style="display:none">
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
                            {{-- <button type="button" class="btn btn-cancel">Cancel <span class="text-uppercase"> x </span></button> --}}
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