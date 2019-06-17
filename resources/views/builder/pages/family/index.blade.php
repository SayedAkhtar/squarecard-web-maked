<?php


?>
@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container view-family">
        <div class="container">
            <div class="d-flex align-items-center justify-content-sm-between mb-3">
                    <div class="action__button">
                        <div class="action__button--left">
                            <a href="{{env('APP_URL')}}/builder/dashboard" class="mr-3"><img src="{{asset('img/back.png')}}" alt="" class="img-responsive" height="30px"></a>
                            <a href="{{env('APP_URL')}}/builder/dashboard"><img src="{{asset('img/home.png')}}" alt="" class="img-responsive" height="30px"></a>
                        </div>
                    </div>
                <h3 class="dashboard--heading text-uppercase mt-4">All Story</h3>
                <div class="dashboard__head-buttons">
                    <a href="#" class="btn btn-secondary">Share 
                        <img src="{{asset("img/share.png")}}" alt="" class="img-responsive" height="16px">
                    </a>
                    <a href="#" class="btn btn-secondary">Help ?</a> 
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h5 class="text-uppercase">Team Groom</h5>
                    <div class="container">
                        <div class="row">
                                <div class="owl-carousel owl-theme">
                                    @php
                                        $length = count($groom);
                                    @endphp
                                    @for ($i = 0; $i < $length; $i++)
                                    @php
                                        $data = $groom[$i]
                                    @endphp
                                    {{-- <a href="{{url()->current()}}/edit/{{$data->id}}" class="no-link-style"> --}}
                                    <div class="item">
                                        @include('builder.pages.family.card',['data' => $data])
                                    </div>
                                    {{-- </a> --}}
                                    @endfor    
                                </div>
                        </div>                            
                    </div>
                </div>
            </div>

            {{-- Bride --}}
            <div class="row mt-4">
                <div class="col-12">
                    <h5 class="text-uppercase">Team Bride</h5>
                    <div class="container">
                        <div class="row">
                            <div class="owl-carousel owl-theme">
                                    @php
                                    $length = count($bride);
                                @endphp
                                @for ($i = 0; $i < $length; $i++)
                                @php
                                    $data = $bride[$i]
                                @endphp
                                {{-- <a href="{{url()->current()}}/edit/{{$data->id}}" class="no-link-style"> --}}
                                <div class="item">
                                    @include('builder.pages.family.card',['data' => $data])
                                </div>
                                {{-- </a> --}}
                                @endfor 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            {{-- Cards Ends --}}
            <div class="row mt-4">
                <div class="col-12">
                    {{-- <h5 class="text-uppercase">Add</h5> --}}
                    <div class="container mx-auto">
                        <div class="row add-button">
                          <a href="{{url()->current()}}/add" class="no-link-style">
                            <i class="fas fa-plus"></i>
                          </a>
                        </div> 
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