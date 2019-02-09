@extends('layouts.master')



@section("staticfiles")
<link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <style>
        #my-form{
            border:1px solid black;
            margin:50px;
            padding: 30px;
        }
        .word{
            margin: 20px;
        }
        #map {
            height: 100%;
            /* width: 60%; */
            margin:auto;
        }

    </style>
<link rel="stylesheet" href="{{ asset('snippets/css/upload_img.css')}}">
@stop('staticfiles')
@section('title')
Restaurant Register
@stop('title')

@section('body')
    <div class="container">
        
        <form action="{{ route('payment_store') }}" method="POST" id="my-form" enctype='multipart/form-data'>
            <h3>Retaurant information</h3>
            <div class="word">
                <label><b>Retaurant name</b></label>
                <input type="text" class="form-control" name="restaurantName" placeholder="restaurant's name">
            </div>
            <div class="word">
                <label ><b>Description</b></label>
                <textarea class="form-control" id="Description" name="description" rows="3" placeholder="write about your restaurant"></textarea>
            </div>
            <div class="word">
                <label ><b>Cusine</b></label>
                <select id="cusine" class="form-control" name="cusine">
                    <option value="khmer food" selected>Khmer food</option>
                    <option value="franch food">Franch food</option>
                </select>
            </div>
            <div class="word">
                <label><b>Feature</b></label>
                <input type="text" class="form-control" name="feature" placeholder="feature">
                
            </div>
            <div  class="custom-control custom-checkbox ml-4">
                <input class="form-check-input" type="checkbox"  name="vegan" id="checkbox">
                <label class="form-check-label" for="checkbox">
                    Availble for vegan
                </label>    
            </div>
            <div class=" word">
                <label><b>Prince range (KHR)</b></label>
                <div class="form-row">
                    <div class="col-sm-2 mr-2 ml-5  ">
                        <input type="number" class="form-control" name="from_khr" placeholder="From">
                    </div>
                    <div class="col-sm-2 ">
                        <input type="number" class="form-control" name="to_khr"  placeholder="To">
                    </div>
                </div>
            </div>
            <div class=" word">
                <label><b>Time range</b></label>
                <div class="form-row">
                    <div class="col-sm-2 mr-2 ml-5  ">
                        <input type="time" class="form-control" name="from_time" value="08:56" placeholder="From">
                    </div>
                    <div class="col-sm-2 ">
                        <input type="time" class="form-control" name="to_time" value="08:56" placeholder="To">
                    </div>
                </div>
            </div>
            <div class="word">
                <label><b>Phone number</b></label>
                <input type="tel" class="form-control" name="phonenumber" placeholder="Phone number">
                
            </div>
            <div class="word">
                <label><b>Address</b></label>
                <input type="text" class="form-control" name="address" placeholder="Enter your Address">
            </div>
            <div class="word">
                <label><b>Web site</b></label>
                <input type="url" class="form-control" name="website" placeholder="Enter your website's link">
                <input type="file" id="real-file" hidden="hidden" />
            </div>
            <div id="map"></div>
            <div class="word">
                <label for=""><b>Photo</b></label>
                <div id="wrapper" class="wrapper">
                    <div class="sections">
                    
                        <section class="active">                    
                            <div class="images">
                                <div class="pic">
                                    add photo
                                </div>
                            </div> 
                        </section>                    
                    </div>
                </div>
            </div>
            <div class="notification"></div>
            {{-- <div style="margin-left:20px">
                <button type="button" id="custom-button" name="picture">Add Photo</button><span id="custom-text">(Optional)</span>
            </div> --}}
            <div style="margin-left:50%;">
                <button type="submit" class="btn btn-success button">Submit</button>
            </div>
        </form>
    </div>
@section('scripts')
    
    <script src="{{ asset('snippets/js/upload_img.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeobNlpB8Ew1yG-wP739q37ISheMulafI&callback=initMap" async defer></script>

    <script src="{{asset('js/restaurant_form.js')}}"></script>
    @endsection
@endsection