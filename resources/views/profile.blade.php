@extends('layouts.master')
@section('title')
Profile
@endsection
@section('staticfiles')
<link href="{{ asset('css/profile_picture.css') }}" rel="stylesheet">
@stop('staticfiles')

@section('body')

<div id="profile-position">
    <div id="profile-container">
        <img id="profileImage" src="http://lorempixel.com/100/100" />
    </div>
    <input id="imageUpload" type="file" 
            name="profile_photo" placeholder="Photo" required="" capture>
    </div>
</div>
@section('script')
<script src="{{ asset('js/profile_picture.js') }}"></script>
@endsection
@endsection