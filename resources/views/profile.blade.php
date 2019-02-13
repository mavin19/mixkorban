@extends('layouts.master')
@section('title')
Profile
@endsection
@section('staticfiles')
<link href="{{ asset('css/profile_picture.css') }}" rel="stylesheet">
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
<div class="container">
    <h1 class="header">$ 30.00<h1>
    <p style="text-align:center; font-size:25px;"> total cost</p>
    <hr>
</div>
<div class="row justify-content-md-center">
    <div class="col-2">
        <div id="profile-position">
            <div id="profile-container">
                <img id="profileImage" src="http://lorempixel.com/100/100" />
            </div>
            <input id="imageUpload" type="file" 
                    name="profile_photo" placeholder="Photo" required="" capture>
            </div>
        </div>
    <div class="col-2" style="margin-top:60px;">
        {{-- <p> Name: koung </p> --}}
        <p> Name: {{ $user->name }} </p>
        <hr>
        <p> Email: {{ $user->email }}</p>
    </div>
</div>

@section('script')
<script src="{{ asset('js/profile_picture.js') }}"></script>
@endsection
@endsection