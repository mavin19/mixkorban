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
                <form method="POST" action="{{route('owner_reg_store')}}" >
                    @csrf
                    <h3>Profile</h3>
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
                        <img id="profileImage" src="{{ asset('image/default-profile.png') }}" />
                        </div>
                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                    </div> --}}
                    <div><input type="file" name="img" id="real-file" hidden="hidden" />
                        <button type="button" id="custom-button"><i class="fas fa-camera"></i><span id="custom-text"style="color:white;">Choose your Photo</span></button>
                    </div>
                    <div style="text-align: center;">
                        <button  class="btn btn-success button">Submit</button>
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