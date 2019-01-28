@extends('layouts.master')


@section('body')
@extends('slide')
<style>
    .picture{
        width:200px;
        height:300px;
    }
    .map{
        width:40%;

    }
</style>
<div class="card-deck">
    <div class="card">
        <img src="restaurant1.jpg" class="card-img-top picture" >
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="restaurant2.jpg" class="card-img-top picture" >
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="restaurant3.jpeg" class="card-img-top picture" >
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    
</div>
    <div class="container map">
        <h2> Nearby </h2>
        <div id="googleMap" style="height:400px;"></div>
    </div>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>
    <script src="{{ asset('index.js') }}"></script> 

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@stop('body')
