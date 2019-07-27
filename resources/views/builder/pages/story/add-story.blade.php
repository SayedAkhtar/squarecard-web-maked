@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
                <div class="col-md-12">
                    @include('builder.layout.dashboard-heading-pc',['title'=>'Story | Add', 'back'=> '/builder/dashboard/story/'])
                    @include('builder.layout.dashboard-heading-mobile',['title'=>'Story | Add', 'back'=> '/builder/dashboard/story/'])              
            
                    <div class="row">
                    <div class="col-md-5 col-sm-12">
                            <h5 class="mb-2"></h5>
                            <div class="card bg-light text-white" id="imageInputBtn">
                                <img src="{{asset("img/capture.png")}}" class="card-img" alt="..." id="userImage">
                                <div class="card-img-overlay">
                                    
                                </div>
                            </div>
                        </div>
                   
                <div class="col-md-7">
                <form class="" method="POST" action="{{url()->current()}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="story-title" class="important-form-feild">Story Title</label>
                    <input type="text" class="form-control" id="story-title" name="story_title" placeholder="Story Title" required>
                    </div>
                    <div class="form-group">
                        <label for="story-start-date">Story Date</label>
                    <input type="text" class="form-control date" id="story-start-date" name="story_start_date" >
                    </div>
                    <div class="form-group">
                        <label for="story-place">Story Place</label>
                    <input type="text" class="form-control" id="story-place" placeholder="Place" name="story_place" >
                    </div>
                    <div class="form-group">
                        <label for="story-description" class="important-form-feild">Story Description</label>
                    <textarea type="text" class="form-control" id="story-description" placeholder="Describe Your Moment" name="about" rows="5" required></textarea>
                    </div>
                    <input type="file" name="image" id="imageInput" hidden>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-cancel">Cancel <span class="text-uppercase"> x </span></button>
                        <button type="submit" class="btn btn-submit">Submit <span class="text-uppercase"> > </span></button>
                    </div>
                </form>
            </div>    
            </div>
             </div>
    </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view">
        @include('builder.pages.iframe')
    </div>
</div>

@endsection