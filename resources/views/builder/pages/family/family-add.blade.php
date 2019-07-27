@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container about-info-edit">
        <div class="container-fluid">
                @include('builder.layout.dashboard-heading-pc',['title'=>'Friends & Family | Add', 'back'=> 'builder/dashboard/family-details/'])
                @include('builder.layout.dashboard-heading-mobile',['title'=>'Friends & Family | Add', 'back'=> 'builder/dashboard/family-details/'])

            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <h5 class="mb-2">&nbsp;</h5>
                    <div class="card bg-dark text-white" id="imageInputBtn">
                        <img src="{{asset('img/capture.png')}}" class="card-img" alt="..." id="userImage">
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
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" name="full_name" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control date" id="" name="date" placeholder="Date of Birth">
                        </div>
                        <div class="form-group">
                            <select type="text" class="form-control" id="formGroupExampleInput2" placeholder="Maritial Status" name="maritial_status">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Profession" name="profession">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Relation" name="relation">
                        </div>
                        <div class="form-group">
                            <select type="text" class="form-control" id="formGroupExampleInput2" placeholder="Relation Side" name="bride_groom" required>
                                <option value="bride" selected>Bride</option>
                                <option value="groom">Groom</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="About" name="about" rows="5"></textarea>
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
        @include('builder.pages.iframe')
    </div>
</div>

@endsection