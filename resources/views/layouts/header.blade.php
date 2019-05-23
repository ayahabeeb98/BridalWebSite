<!--======================================= Header Section =========================================== -->
<div class="banner">


    <header class="position-sticky" >
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
                                        <a class="dropdown-item" href="{{ route('manager.hall')}}">
                                            My Hall
                                        </a>

                                        <a class="dropdown-item" href="{{ route('hall.create')}}">
                                            Add New Hall
                                        </a>

                                        <a class="dropdown-item" href="{{ route('room.create')}}">
                                            Add New Room
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
                    {{--<form class="form-inline my-2 my-lg-0">--}}
                    {{--<button class="btn btn-secondary signUp" type="submit">Sign Up</button>--}}
                    {{--</form>--}}
                </div>

            </div>
        </nav>

    </header>
</div>
