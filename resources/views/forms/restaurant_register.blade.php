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
<link rel="stylesheet" href="{{ asset('snippets/css/sol.css')}}">
@stop('staticfiles')
@section('title')
Restaurant Register
@stop('title')

@section('body')
    <div class="container">
        
        <form action="{{ route('res_store') }}" method="POST" id="my-form" enctype='multipart/form-data'>
            @csrf
            <h3>Retaurant information</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="word">
                <label><b>Retaurant Name *</b></label>
            <input type="text" required class="form-control" name="restaurantName" value="{{ old('restaurantName') }}" placeholder="restaurant's name">
            </div>
            <div class="word">
                <label ><b>Description *</b></label>
                <textarea class="form-control" id="Description" name="description" value="{{ old('description') }}" rows="3" placeholder="write about your restaurant"></textarea>
            </div>
            <div class="word">
                <label ><b>Cusines *</b></label>
                <select id="cusine" name="cusine[]" multiple="multiple">
                    @foreach($cusines as $cusine)
                        <option value="{{$cusine->name}}">{{$cusine->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="word">
                <label ><b>Locations *</b></label>
                <select id="location" name="location[]" multiple="multiple">
                    @foreach($locations as $location)
                        <option value="{{$location->name}}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="word">
                <label ><b>Meals Available *</b></label>
                <select id="meal" name="meal[]" multiple="multiple">
                    @foreach($meals as $meal)
                        <option value="{{$meal->name}}">{{$meal->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="word">
                <label><b>Features *</b></label>
                <select id="feature" name="feature[]" multiple="multiple">
                    @foreach($features as $feature)
                        <option value="{{$feature->name}}">{{$feature->name}}</option>
                    @endforeach
                </select>
            </div>
            <div  class="custom-control custom-checkbox ml-4">
                <input class="form-check-input" type="checkbox" value="{{ old('vegan') }}"  name="vegan" id="checkbox">
                <label class="form-check-label" for="checkbox">
                    &nbsp;&nbsp; Availble for vegan
                </label>    
            </div>
            <div class=" word">
                <label><b>Prince range (KHR) *</b></label>
                <div class="form-row">
                    <div class="col-sm-2 mr-2 ml-5  ">
                        <input type="number"  required step="0.01" min="0.01" class="form-control" value="{{ old('from_khr') }}" name="from_khr" placeholder="From">
                    </div>
                    <div class="col-sm-2 ">
                        <input type="number"  required step="0.01" min="0.01" class="form-control" value="{{ old('to_khr') }}" name="to_khr"  placeholder="To">
                    </div>
                </div>
            </div>
            <div class=" word">
                <label><b>Time range *</b></label>
                <div class="form-row">
                    <div class="col-sm-2 mr-2 ml-5  ">
                        <input type="time" class="form-control" name="from_time"value="{{ old('from_time') }}" placeholder="From">
                    </div>
                    <div class="col-sm-2 ">
                        <input type="time" class="form-control" name="to_time" value="{{ old('to_time') }}" placeholder="To">
                    </div>
                </div>
            </div>
            <div class="word">
                <label><b>Phone number *</b></label>
                <input type="tel"  required class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Phone number">
                
            </div>
            <div class="word">
                <label><b>Address *</b></label>
                <input type="text"  required class="form-control" value="{{ old('address') }}" name="address" placeholder="Enter your Address">
            </div>
            <div class="word">
                <label><b>Website</b></label>
                <input type="url" class="form-control" value="{{ old('website') }}" name="website" placeholder="Enter your website's link">
            </div>
            <div  class="custom-control custom-checkbox ml-4">
                <input class="form-check-input" type="checkbox" value="{{ old('publish') }}"  name="publish" id="checkbox">
                <label class="form-check-label" for="checkbox">
                    &nbsp;&nbsp; Publish
                </label>    
            </div>
            <div class="word">
                <label for=""><b>Photo *</b></label>
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
            <div style="text-align:center;">
                <button type="submit" class="btn btn-success button">Submit</button>
            </div>
        </form>
    </div>
@section('scripts')

    <script src="{{ asset('snippets/js/upload_img.js')}}"></script>
    <script src="{{ asset('snippets/js/sol.js')}}"></script>
    <script src="{{asset('js/restaurant_form.js')}}"></script>

    <script>
        $(function() {
            // initialize sol
            $('#cusine').searchableOptionList();
            $('#location').searchableOptionList();
            $('#meal').searchableOptionList();
            $('#feature').searchableOptionList();
        });
    </script>
    @endsection
@endsection