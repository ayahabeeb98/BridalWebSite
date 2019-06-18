<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Bridal | LogIn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Icons font CSS-->
{{--    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">--}}
<!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
{{--    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">--}}

<!-- Main CSS-->
    <link href="{{asset('/control/css/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/control/css/signStyle.css')}}" rel="stylesheet" media="all">
</head>

<body>

<!--======================================= Header Section =========================================== -->
<div class="banner">
    <header class="position-sticky">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img src="{{asset('/control/img/3.png')}}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse small" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}#categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}#testimonials">Testimonials</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button class="btn btn-secondary signUp" type="submit">
                                        <a href="{{ route('register') }}">
                                            Sign Up
                                        </a>
                                    </button>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-secondary signUp" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->type == 'manager')
                                        <a class="dropdown-item" href="{{ route('manager.hall') }}">
                                            My Hall
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
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

                </div>
            </div>
        </nav>
    </header>
</div>
<!--======================================= signup Section =========================================== -->
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins signup">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Log In</h2>
                    <form method="POST" class="signupform mb-4" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group">
                            @if ($errors->has('email'))
                                <br>
                                <strong class="alert-danger border" style="font-size: small;">{{ $errors->first('email') }}</strong> <br>
                            @endif
                            <input class="input--style-3 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="input-group">
                            @if ($errors->has('password'))
                                <strong class="alert-danger border" style="font-size: small;">{{ $errors->first('password') }}</strong>
                            @endif

                            <input id="password" type="password" class="input--style-3 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green signupbutton" type="submit">Submit</button>
                        </div>
                    </form>
                    <hr>
                    <small>Not a member yet? <a href="{{route('register')}}">Sign up</a></small>
                </div>
            </div>
        </div>
    </div>


@includeIf('layouts.footer')

</body>
</html>
