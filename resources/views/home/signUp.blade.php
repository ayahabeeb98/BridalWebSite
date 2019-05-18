
@extends('master')

@section('body')
<div class="bg-pink">
<div class="container">
    <div class="row signup py-5">
        <div class="col-lg- mx-auto">
            <div class="row bg-light p-5">
                <div class="col-lg-4 d-flex align-items-center">
                    <img src="{{asset('/control/img/signup.png')}}">
                    
                </div>
                <div class="col-lg-8">
                    {{--<div class="container">--}}
                        <h3 class="mb-3">Sign Up</h3>
                        <form method="POST" class="mx-auto d-flex justify-content-center">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name">

                                <input type="password" class="form-control" placeholder="Password">

                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Email">


                                <input type="text" class="form-control" placeholder="Enter your phone number">

                                <input type="text" class="form-control"  placeholder="Enter your bank account">

                                <input type="checkbox" name="checking">
                                I agree to the Terms of Service <br>
                                <br>
                                <button type="button" class="btn btn-light"style="background-color: #D688B5;color: white;">Sign Up</button> Already Have account ? <a href="#"><h6 style="color:#AA5E5E ; display: inline-block;">Log In</h6> </a>
                            </div>
                        </form>

                    {{--</div>--}}

                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
    @endsection
