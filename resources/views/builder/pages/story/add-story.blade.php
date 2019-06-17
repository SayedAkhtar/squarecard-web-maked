@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container add-story">
        <!-- <h5 class="mb-2">Bride</h5> -->
        <div class="container add-story__container">
                <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-sm-between mb-3">
                        <div class="action__button">
                            <div class="action__button--left">
                                <a href="{{env('APP_URL')}}/builder/dashboard/story" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                                <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                            </div>
                        </div>
                    <h3 class="dashboard--heading text-uppercase mt-4">Stroy | Add</h3>
                    <div class="dashboard__head-buttons">
                        <a href="#" class="btn btn-secondary">Share 
                            <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                        </a>
                        <a href="#" class="btn btn-secondary">Help ?</a> 
                    </div>
                </div>
            
                    <div class="row">
                    <div class="col-md-5 col-sm-12">
                            <h5 class="mb-2">Groom</h5>
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
                    <input type="text" class="form-control" id="formGroupExampleInput" name="story_title" placeholder="Story Title" >
                    </div>
                    <div class="form-group">
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="DD/MM/YYYY" name="story_start_date" >
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Place" name="story_place" >
                    </div>
                    <div class="form-group">
                    <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Describe Your Moment" name="about" rows="5"></textarea>
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