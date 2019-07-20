@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
            @include('builder.layout.dashboard-heading-pc',['title'=>'Story | Edit', 'back'=> '/builder/dashboard/story/'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Story Edit', 'back'=> '/builder/dashboard/story/'])

            <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-5 col-sm-12">
                            
                            <div class="card bg-dark text-white" id="imageInputBtn" style="cursor:pointer">
                                <img src="@if($story->story_image !=null || $story->story_image !=''){{asset("images/".$story->story_image)}}@else{{asset("img/capture.png")}}@endif" class="card-img" alt="..." id="userImage">
                                <div class="card-img-overlay">
                                    {{-- <button class="btn btn-secondary" > Change Photo </button> --}}
                                </div>
                            </div>
                        </div>
                   
                <div class="col-md-7">
                <form class="" method="POST" action="{{url()->current()}}" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="story-title" class="important-form-feild">Story Title</label>
                    <input type="text" class="form-control" id="story-title" name="story_title" value="{{$story->story_title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="story-start-date">Story Date</label>
                        <input type="text" class="form-control date" id="story-start-date" name="story_start_date" value="{{$story->date}}">
                    </div>
                    <div class="form-group">
                    <label for="story-place">Story Place</label>
                    <input type="text" class="form-control" id="story-place"  name="story_place" value="{{$story->story_venue}}">
                    </div>
                    <div class="form-group">
                        <label for="story-momentd" class="important-form-feild">Story Description</label><small>MAX: 250 Characters.</small>
                    <textarea type="text" class="form-control" id="story-moments" placeholder="Describe Your Moment" name="about" rows="5" required>{{isset($story)&& $story->story_short_description ? $story->story_short_description: old('about')}}</textarea>
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