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
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimonials</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-secondary signUp" type="submit">Sign Up</button>
                    </form>
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
                <form method="POST" class="signupform">
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 " type="text" placeholder="Password" name="password">
                        <!--                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <input class="input--style-3" type="text" placeholder="Bank Account" name="bank">

                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green signupbutton" type="submit">Submit</button>
                    </div>
                </form>
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