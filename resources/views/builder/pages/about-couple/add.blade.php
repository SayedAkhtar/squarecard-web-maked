@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container about-info-edit">
        <div class="container-fluid">
                @include('builder.layout.dashboard-heading-pc',['title'=>'About | Add', 'back'=> '/builder/dashboard/about'])
                @include('builder.layout.dashboard-heading-mobile',['title'=>'About | Add', 'back'=> '/builder/dashboard/about'])

            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <h5 class="mb-2">Groom</h5>
                    <div class="card bg-dark text-white">
                        <img src="img/groom.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                           <button class="btn btn-secondary" id="imageInputBtn"> Change Photo </button>
                        </div>
                    </div>
                </div>
 
                <!-- Form Subbmission -->
                <div class="col-md-7 col-sm-12">
                    <!-- <h5 class="mb-2">Bride</h5> -->
                    <form class="mt-5" method="POST" action="{{url()->current()}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="couple-full-name">Full Name</label>
                            <input type="text" class="form-control" id="couple-full-name" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="couple-date">Age</label>
                            <input type="tex" class="form-control" id="couple-date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="couple-profession">Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession">
                        </div>
                        <div class="form-group">
                            <label for="couple-about">About</label>
                            <small>MAX: 180 Characters</small>
                            <textarea type="text" class="form-control" id="couple-about" placeholder="About" name="about" rows="5" maxlength="180"></textarea>
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
                        <input type="file" name="image" id="imageInput" style="display:none">
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
            {{-- <a href="{{env('APP_URL')}}/{{$user->UserURL}}" class="btn btn-cancel px-4" target="_blank">VIEW LIVE <img src="{{asset("img/internet.png")}}" alt="" class="img-responsive ml-2" height="24px"></a> --}}
            @include('builder.pages.iframe')
    </div>
</div>

@endsection 