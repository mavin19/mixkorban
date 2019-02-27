@extends('layouts.master')

@section('title')
Home
@endsection
@section('staticfiles')

<style>
    .picture{
        height:200px;
    }
   
    .mapouter{
        height:400px;
        width:700px;
        }
    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        height:500px;
        width:600px;
        }
</style>
@endsection
@section('body')
@include('slide')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($restaurants as $restaurant)
            <div class="card-deck col-md-3">
                <div class="card">
                    <a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}"><img src="{{asset('storage/restaurant_imgs/'.$restaurant->getOneImgLoc()) }}" width="300"></a>
                    <!-- <img src="/image/restaurant1.jpg" class="card-img-top picture" > -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}">{{ $restaurant->name }}</a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
       
</div>
<div class="container mapouter" style="margin-top:20px;" >
    <h2> Nearby </h2>
    <div class="gmap_canvas">
        <iframe  width="700px" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=phnom%20penh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.pureblack.de/webseite-erstellen-lassen/"></a>
    </div>
</div>
    
<script src="{{ asset('index.js') }}"></script> 

@stop('body')
