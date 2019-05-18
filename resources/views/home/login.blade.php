@extends('master')

@section('style')
    <link href="{{asset('control/css/main.css')}}" rel="stylesheet" media="all">
@endsection

@section('body')
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins signup">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Log In</h2>
                    <form method="POST" class="signupform">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Password" name="password">
                            <!--                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green signupbutton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
