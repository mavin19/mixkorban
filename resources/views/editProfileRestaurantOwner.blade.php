@extends('layouts.master')
@section('title')
Owner Register
@endsection

@section('staticfiles')
<link rel="stylesheet" href="{{asset('css/owner_register.css')}}">
<link href="{{ asset('css/button.css') }}" rel="stylesheet">
@endsection
@section('body')
    <div class="container form-container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <form method="POST" enctype="multipart/form-data" action="{{route('update_restaurant_owner')}}" >
                    @csrf
                    <h3>Register</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div>
                        <label><b>First Name</b></label>
                        <input type="text" required class="form-control" name="firstname" value="{{ $user->first_name }}" placeholder="">
                    </div> 
                    <div>
                        <label ><b>Last Name</b></label>
                        <input type="text" required class="form-control" name="lastname" value=" {{ $user->last_name }} " placeholder="">
                    </div>
                    <div>
                        <label ><b>Email</b></label>
                        <input type="email" required class="form-control" name="email" value="{{ $user->email }}" placeholder="">
                    </div>
                    <div>
                        <label><b>Phone Number</b></label>
                        <input type="tel"  required class="form-control" name="phone" value=" {{$restaurant_owner->phone}}" placeholder="012 456 7890">
                    </div>
                    <div>
                        <label><b>Address</b></label>
                        <input type="text" required class="form-control" name="address" value="{{$restaurant_owner->address}}" placeholder="">
                    </div>
                    <div >
                        <label><b>Password</b></label>
                        <input id="main-password" type="password" class="form-control" name="password" placeholder="">
                    </div>
                    <div >
                        <label><b>Confrim Password</b></label>
                        <input id="confirm_password" type="password" class="form-control" name="con-password" placeholder="">
                        <span id='message'></span>
                    </div>
                    {{-- <div>
                        <label><b>Profile</b></label>
                        <div id="profile-container">
                        <img id="profileImage" src="{{ asset('image/IMG_8966.jpg') }}" />
                        </div>
                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                    </div> --}}
                    <div><input type="file" name="img" id="real-file" accept="image/*" hidden="hidden" />
                        <button type="button" id="custom-button"><i class="fas fa-camera"></i><span id="custom-text"style="color:white;">Choose your Photo</span></button>
                    </div>
                    <div style="text-align: center;">
                        <button  class="btn btn-success button">Register</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    @section('scripts')

    <script>
        // $("#profileImage").click(function(e) {
        //     $("#imageUpload").click();
        // });
        
        // function fasterPreview( uploader ) {
        //     if ( uploader.files && uploader.files[0] ){
        //         $('#profileImage').attr('src', 
        //             window.URL.createObjectURL(uploader.files[0]) );
        //     }
        // }
        
        // $("#imageUpload").change(function(){
        //     fasterPreview( this );
        // });
        $('#main-password, #confirm_password').on('keyup', function () {
            if ($('#main-password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else 
                $('#message').html('Not Matching').css('color', 'red');
        });
    </script>
    <script src="{{ asset('js/button.js ') }}"></script> 
    @endsection
@endsection