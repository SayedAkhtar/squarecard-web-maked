<?php


?>
@extends('builder.layout.app')
@section('content')

<div class="row">
    <div class="col-md-7 col-sm-12 main-container view-family">
        <div class="container">
                @include('builder.layout.dashboard-heading-pc',['title'=>'Friends & Family', 'back'=> '/builder/dashboard'])
                @include('builder.layout.dashboard-heading-mobile',['title'=>'Friends & Family', 'back'=> '/builder/dashboard'])
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