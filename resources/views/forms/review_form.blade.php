@extends('layouts.master')
@section('title')
Review_form
@stop('title')
@section ('staticfiles')
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <style>
        .list > li > div {
            display: inline-block;

        }
        .list > li > div:first-child{
            width:200px;
        }
        .button{
            margin-left: 50%;
        }
    </style>
</head>
@stop('staticfiles')
@section('body')
    <div class="container">
        <div style="margin-top:60px; margin-bottom:10px;">
            <img src="/image/panorama.jpg" width="250px" height="200px" alt="bar"> 
            <h3 style="display: inline-block;">{{$restaurant->name}}</h3>
        </div>
        <hr>
        <div>
            <form method="POST" enctype="multipart/form-data" action="{{route('review_post')}}">
                @csrf
                <p> <b>Overall Rate</b></p>
                    @include("star")
                <div class="form-group">
                    <label for="review title"><b>Review's title</b></label>
                    <input type="text" class="form-control" id="review title" name="title" >
                </div>
                

                <div class="form-group">
                    <label for="your review"><b>Your Review</b></label>
                    <textarea class="form-control" id="your review" rows="3" name="description"></textarea>
                </div>
                <p><b>Select to rate</b></p>
                <ul type=none class="list" >
                    <li><div>Service</div>
                        <div> 
                            @include("star")
                        </div>
                    </li>
                    <li><div>Food</div>
                        <div> 
                            @include("star")
                        </div>
                    </li>
                    <li><div>Value</div>
                        <div> 
                            @include("star")
                        </div>
                    </li>
                    <li><div>Environment</div>
                        <div>
                            @include("star")
                        </div>
                    </li>

                </ul>
                <div><input type="file" id="real-file" hidden="hidden" />
                    <button type="button" id="custom-button">Add Photo</button><span id="custom-text">(Optional)</span></div>
                <div><button type="submit" class="btn btn-info button">Submit</button></div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/button.js ') }}"></script> 
@stop(body)     
