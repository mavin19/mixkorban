
@extends('layouts.master')
@section('title')
Owner Register
@endsection

@section('staticfiles')
<link rel="stylesheet" href="{{asset('css/owner_register.css')}}">
@endsection
@section('body')
    <div class="container form-container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <form method="get" action="" >
                    <h3>Register</h3>
                    <div>
                        <label><b>First Name</b></label>
                        <input type="text" required class="form-control" name="firstname" placeholder="">
                    </div> 
                    <div>
                        <label ><b>Last Name</b></label>
                        <input type="text" required class="form-control" name="lastname" placeholder="">
                    </div>
                    <div>
                        <label ><b>Email</b></label>
                        <input type="email" required class="form-control" name="email" placeholder="">
                    </div>
                    <div>
                        <label><b>Phone Number</b></label>
                        <input type="number" required class="form-control" name="phone" placeholder="012 552 444">
                    </div>
                    <div>
                        <label><b>Address</b></label>
                        <input type="text" required class="form-control" name="address" placeholder="">
                    </div>
                    <div >
                        <label><b>Password</b></label>
                        <input type="password" required class="form-control" name="password" placeholder="">
                    </div>
                    <div >
                        <label><b>Confrim Password</b></label>
                        <input type="password" required class="form-control" name="con-password" placeholder="">
                    </div>
                    {{-- <div>
                        <label><b>Profile</b></label>
                        <div id="profile-container">
                        <img id="profileImage" src="{{ asset('image/default-profile.png') }}" />
                        </div>
                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                    </div> --}}
                    <div style="text-align: center;">
                        <button  class="btn btn-success button">Register</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    @section('scripts')
    {{-- <script>
        $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });
        
        function fasterPreview( uploader ) {
            if ( uploader.files && uploader.files[0] ){
                $('#profileImage').attr('src', 
                    window.URL.createObjectURL(uploader.files[0]) );
            }
        }
        
        $("#imageUpload").change(function(){
            fasterPreview( this );
        });
    </script> --}}
    @endsection
@endsection