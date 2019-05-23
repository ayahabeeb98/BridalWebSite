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
    <title>Bridal | SignUp</title>
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
                <h2 class="title">Registration Info</h2>
                <form method="POST" class="signupform mb-4"  action="{{ route('register') }}">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-3 {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 {{ $errors->has('userName') ? ' is-invalid' : '' }}" type="text" placeholder="User Name" name="userName" value="{{ old('userName') }}" required>
                        @if ($errors->has('userName'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('userName') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" name="password" required>
                        <!--                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <input class="input--style-3 {{ $errors->has('bank_account') ? ' is-invalid' : '' }}" type="text" placeholder="Bank Account" name="bank_account" value="{{ old('bank_account') }}" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email"  name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green signupbutton" type="submit">Submit</button>
                    </div>
                </form>
                <hr>
                <small>Already have an account? <a href="{{route('login')}}">LogIn</a></small>
            </div>
        </div>
    </div>
</div>

@includeIf('layouts.footer')

<!-- Jquery JS-->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
<!-- Vendor JS-->
{{--<script src="vendor/select2/select2.min.js"></script>--}}
{{--<script src="vendor/datepicker/moment.min.js"></script>--}}
{{--<script src="vendor/datepicker/daterangepicker.js"></script>--}}

<!-- Main JS-->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->