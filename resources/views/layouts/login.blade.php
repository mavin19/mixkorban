<div style="color:black;">
    <div>
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('Login') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        $(document).ready(function(){
            a =$('#s');
            a.trigger('click');
        })
        
    </script>
    <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">{{ __('E-Mail ') }}</label>

                <div class="col-sm-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">{{ __('Password') }}</label>
                <div class="col-sm-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 offset-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-sm-8 offset-sm-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link"  style="display:inline-block;color:black;text-shadow:none;" href="{{ route('password.request') }}" style = "color: black">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
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
        </form>

    </div>
</div>

@if ($errors->has('email'))
    <script>
        $(document).ready(function(){
            var a = $('#login_btn');
            a.trigger('click');
        })
    </script>
@endif
