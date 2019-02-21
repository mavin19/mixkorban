<div style="color:black;">
    <div>
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black;">{{ __('Sign up to continue') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div id="owner_register_btn">
                <a href="{{ route('owner_register')}}">I am a restaurant owner</a>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">{{ __('Firstname') }}</label>

                <div class="col-sm-7">
                    <input id="name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('Firstname') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
           
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">{{ __('Lastname') }}</label>
                    <div class="col-sm-7">
                        <input id="name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('Lastname') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                        @endif
                    </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">{{ __('E-Mail Address') }}</label>

                <div class="col-sm-7">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">{{ __('Password') }}</label>

                <div class="col-sm-7">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-sm-4 col-form-label">{{ __('Confirm Password') }}</label>

                <div class="col-sm-7">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <div style="text-align: center;">
                <div class="col-sm-6 offset-sm-4">
                    <button type="submit" class="btn btn-primary mb-4">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div>
        <div style="text-align: center;">
            <label>Or Sign up with</label>
        </div>
        <div style="text-align: center;" class="pb-4">
            <button class="btn btn-default" style="background-color:white;">
                <img src="/image/fb.png" width="150">
            </button>
            <button class="btn btn-default" style="background-color:white;">
                <img src="/image/1gg.png" width="150" >
            </button>
        </div>
    </div>
</div>