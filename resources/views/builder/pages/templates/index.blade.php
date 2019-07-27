@extends('builder.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 main-container">
        <div class="container-fluid">
            @include('builder.layout.dashboard-heading-pc',['title'=>'Select Template', 'back'=> '/builder/dashboard'])
            @include('builder.layout.dashboard-heading-mobile',['title'=>'Select Template', 'back'=> '/builder/dashboard'])


            <!-- Card Container -->
            <div class="row">
                @foreach ($data as $item)
                <!-- Groom card -->
                <div class="col-md-3 col-sm-12" >
                    <div class="card bg-dark text-white" @if ($user->template_name == $item->template_name)
                            style="box-shadow: 2px 2px 10px rgba(94,190,206,0.7);"
                        @endif>
                        {{-- <form action="{{url()->current()}}" method="post" style="display:none" id="changeTemplate">
                            @csrf
                            <input type="text" name="template_name" value="{{$item->template_name}}">
                        </form> --}}
                        <a href="{{url()->current()}}/{{$item->template_name}}" style="color:inherit;height: 300px;" >
                        <img src="{{asset('img/templates/'.$item->template_name.'/index.jpg')}}" class="card-img" alt="...">
                        {{-- <div class="card-img-overlay">
                            <p class="card-text text-capitalize">{{}}</p>
                            <p class="card-text">{{}}</p>
                        </div> --}}
                        </a>
                    </div>
                    <h5 class="card-text text-center mt-1 text-capitalize">{{ __($item->template_name ) }}</h5>
                </div>
                @endforeach
            <!-- Card container ends -->
        </div>

    </div>

</div>

@endsection
