@extends('layouts.master')
@section('title')
Profile
@endsection
@section('staticfiles')
<link href="{{ asset('css/res-css.css') }}" rel="stylesheet">
@stop('staticfiles')
@section('body')
<div class="container mt-5 mb-5">
    <form action="">
        @csrf
        <div class="row">
            <div class="col-sm-4 pb-3 bg-light">
                <label for="First Name" class="col-form-label">{{ __('First Name') }}</label>
                <input id="" type="name" class="form-control" name="name">
                <label for="Email Address" class="col-form-label">{{ __('Email Address') }}</label>
                <input id="" type="name" class="form-control" name="name" >
                <label for="Password" class="col-form-label">{{ __('Password') }}</label>
                <input id="" type="password" class="form-control" name="pwd" >
                <button type="submit" class="btn btn-success mt-3">
                    {{ __('save') }}
                </button>
            </div>
            <div class="col-sm-4 pb-3 bg-light">
                <label for="Last Name" class="col-form-label">{{ __('Last  Name') }}</label>
                <input id="" type="name" class="form-control" name="name" >
                <label for="Contact Phone" class="col-form-label">{{ __('Contact Phone') }}</label>
                <input id="" type="name" class="form-control" name="name" >
                <label for="Comfirm Password" class="col-form-label">{{ __('Comfirm Password') }}</label>
                <input id="" type="password" class="form-control" name="pwd">
            </div>
            <div class="col-sm-4 ">
                
            </div>
        </div>
    </form>
</div>
@endsection