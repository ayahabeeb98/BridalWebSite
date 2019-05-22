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
    <title>Au Register Forms by Colorlib</title>
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
    <link href="{{asset('/control/css/createRoomStyle.css')}}" rel="stylesheet" media="all">
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

<!--======================================= edit room Section =========================================== -->
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins signup">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">edit the Room</h2>
    <form method="post" action="{{route('room.update',['id' => $room->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

         <div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
            </div>
            
         <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Room name" name="name" value="{{$room->name}}">
            <span class="error col-md-12">{{$errors->first('name')}}</span>

        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of Tables</label>
            <input type="number" min="0"  class="form-control" id="inputPassword4" placeholder="Number of Tables" name="tables" value="{{$room->tables}}">
            <span class="error col-md-12">{{$errors->first('tables')}}</span>
        </div>


     <div class="form-group col-md-6">
            <label for="inputPassword4">Number of Chairs</label>
            <input type="number" min="0" class="form-control" id="inputPassword4" placeholder="Number of Chairs" name="chairs" value="{{$room->chairs}}">
            <span class="error col-md-12">{{$errors->first('chairs')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">The Price</label>
            <input type="number"  min="0"  class="form-control" id="inputPassword4" placeholder="The Price" name="price" value="{{$room->price}}">
            <span class="error col-md-12">{{$errors->first('price')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Earnest</label>
            <input type="number"  min="0" class="form-control" id="inputPassword4" placeholder="Enter The Initial Price" name="earnest" value="{{$room->earnest}}">
            <span class="error col-md-12">{{$errors->first('earnest')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of People</label>
            <input type="number"  min="0" class="form-control" id="inputPassword4" placeholder=" no_people" name="no_people" value="{{$room->no_people}}">
            <span class="error col-md-12">{{$errors->first('no_people')}}</span>
        </div>

   <!--  <div class="form-group col-md-6">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="inputEmail4" placeholder="Image" name="image">
        <span class="error col-md-12">{{$errors->first('image')}}</span>


    </div> -->

        <div class="form-group col-md-6">
            <label for="inputEmail4">Hall Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="hall_name" name="hall_id" value="{{$room->hall_id}}">
            <span class="error col-md-12">{{$errors->first('hall_id')}}</span>

        </div>


        <button type="submit" class="btn btn-primary" style="background-color: #E73D89 ; border-color:#f5f5f5">Edit</button>
    </form>
                </div>
            </div>
        </div>
    </div>


@includeIf('layouts.footer')

</body>
</html>