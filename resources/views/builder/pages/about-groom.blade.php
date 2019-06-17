@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container about-info-edit">
        <div class="container-fluid">
            <h3 class="about-info-edit--heading text-uppercase mt-4">about couple</h3>

            <!-- Card Container -->
            <div class="row about-info-edit-card">

                <!-- Photo card -->
                <div class="col-md-5 col-sm-12">
                    <h5 class="mb-2">Groom</h5>
                    <div class="card bg-dark text-white">
                        <img src="img/groom.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                           <button class="btn btn-secondary"> Change Photo </button>
                        </div>
                    </div>
                </div>

                <!-- Form Subbmission -->
                <div class="col-md-7 col-sm-12">
                    <!-- <h5 class="mb-2">Bride</h5> -->
                    <form class="mt-5">
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" name="full-name" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="DD/MM/YYYY" name="date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Profession" name="profession">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="About" name="about" rows="5"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-cancel">Cancel <span class="text-uppercase"> x </span></button>
                            <button type="submit" class="btn btn-submit">Submit <span class="text-uppercase"> > </span></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Card container ends -->
        </div>
    </div>
    <div class="col-md-5 col-sm-12 web-view"></div>
</div>

@endsection