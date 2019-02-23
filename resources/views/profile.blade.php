@extends('layouts.master')
@section('title')
Profile
@endsection
@section('staticfiles')
<link href="{{ asset('css/profile_picture.css') }}" rel="stylesheet">
<link href="{{ asset('css/button.css') }}" rel="stylesheet">
@stop('staticfiles')

@section('body')
<style>
    .header{
        text-align: center;
        color:#F99E43;
        box-shadow: black;
        margin: 10px;
    }
</style>
@if(Auth::user()->isRestaurantOwner())


<div class="container">
    <h1 class="header">$ 30.00<h1>
    <p style="text-align:center; font-size:25px;"> total cost</p>
    <hr>
</div>
<div class="row justify-content-md-center">
    <div class="col-2">
        <div id="profile-position">
            <div id="profile-container">
                <img id="profileImage" src="{{asset('storage/user_img/'.$user->profile_img)}}" />
            </div>
           
        </div>
    </div>
    <div class="col-2">
        {{-- <p> Name: koung </p> --}}
        <p> Firstname: {{ $user->first_name }} </p>
        <hr>
        <p> Lastname: {{ $user->last_name }} </p>
        <hr>
        <p> Email: {{ $user->email }}</p>
        <hr>
        <p> Tel: {{$restaurant_owner->phone}}</p>
        <hr>
        <p> Address: {{$restaurant_owner->address}}</p>
        <hr>
        <a class="btn-success" style="display:inline-block;border: 1px solid;padding: 5px 15px;" href="/ownerprofileupdate">Edit</a>
    </div>
    

</div>
@else
<div class="row justify-content-md-center">
    <div class="col-2">
        <div id="profile-position">
            <div id="profile-container">
                <img id="profileImage" src="{{asset('storage/user_img/'.$user->profile_img)}}" />
            </div>
            <input id="imageUpload" type="file" 
                    name="profile_photo" placeholder="Photo" required="" capture>
            </div>
        </div>
    <div class="col-2" style="margin-top:60px;">
        {{-- <p> Name: koung </p> --}}
        <p> Firstname : {{ $user->first_name }} </p>
        <hr>
        <p> Lastname : {{ $user->last_name }} </p>
        <hr>
        <p> Email : {{ $user->email }}</p>
    </div>
</div>
@endif
@section('scripts')
<script src="{{ asset('js/profile_picture.js') }}"></script>
<script src="{{ asset('js/button.js ') }}"></script> 
@endsection
@endsection