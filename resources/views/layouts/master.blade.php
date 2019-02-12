{{-- header --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    @yield('staticfiles')
</head>
<body>



<meta charset="utf-8">
<nav class="navbar navbar-dark navbar-expand-sm my-nav">

    <a class="navbar-brand" id="logo" href="#">MixKorBan</a>
    <form id="search-form">
        <ul class="search-box">
            <input class="search-txt" type="text" name="" placeholder="type to search">
            <a class="search-btn" href ="#">
                <i class="fas fa-search"></i>
            </a>
        </ul>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav mr-auto" id="top-menu">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Restaurant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Food</a>
            </li>
        </ul>
       
        
        <ul id="login-signup-wrapper">
                @guest
                <li class="nav-item">
                    <a class="btn" data-toggle="modal" data-target=".bd-login-modal-md">{{ __('Login') }}</a>
                    <div class="modal fade bd-login-modal-md" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                @include('layouts.login')
                            </div>
                        </div>
                    </div>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn" data-toggle="modal" data-target=".bd-register-modal-md">{{ __('Register') }}</a>                    
                    <div class="modal fade bd-register-modal-md" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                @include('layouts.register')                                        
                            </div>
                        </div>
                    </div>
                </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="text-align:center">
                        <a class="dropdown-item" href="" style="color:black">
                            {{ __('Restaurant') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('/profile') }}" style="color:black">
                            {{ __('Profile') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }} " style="color:black"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                        </div>
                </li>
            @endguest
        </ul>
</nav>
<div class="container under-menu-wrapper">
    <div class="row justify-content-md-center under-menu">
        <div class="col-sm-4 menu">
            <a href="{{url('/home')}}">Home</a>
        </div>
        <div class="col-sm-4 menu">
            <a href="{{url('/restaurant')}}">Restaurant</a>
        </div>
        <div class="col-sm menu">
            <a href="{{url('/home')}}">Food</a>
        </div>
    </div>
</div>

    
{{-- content --}}
    @yield('body')
{{--  --}}

{{-- footer --}}
<footer>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 footer-col">
            <h5>MixKorBan</h5>
            <p>We are the web that can make your finding problem solve.</p>
        </div>
        <div class="col-sm-4 footer-col">
            <h5>KEEP CONNECTED</h5>
            <div>
                <ul id="social-link">
                    <li>
                        <a href="#">
                            <div><i class="fab fa-google-plus-g"></i></div>
                            <div>Like us On Google+</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><i class="fab fa-facebook-f"></i></div>
                            <div>Like us On Facebook</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4 footer-col">
            <h5>CONTACT</h5>
            <div>
                <ul id="contact-place">
                    <li>
                        <div><i class="fas fa-phone"></i></div>
                        <div> 086 30 72 86</div>
                    </li>
                    <li>
                        <div><i class="fas fa-envelope"></i></div>
                        <div> mixkorban@gmail.com</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
{{--  --}}
</body>
</html>
