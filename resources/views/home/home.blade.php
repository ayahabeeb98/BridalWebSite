@extends('master')

@section('style')
    <style>
        .Testimonials .card {
            box-shadow: 5px 5px 5px #dad2d2;
        }


        .Testimonials .p {
            padding-top: 35px;
        }
    </style>
@endsection
@section('body')
    <!--======================================= steps Section =========================================== -->
    <section class="steps">
        <div class="container">
            <div class="row m-auto">
                <div class="col-lg-12 " align="center">
                    <p class="p"> we will plan the wedding of your dreams</p>
                    <img src="{{asset('/control/img/1.png')}}">

                    <p>Organizing a wedding always starts
                        with a confirmed date!</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="bgIcon" align="center"><i class="fa fa-calendar-alt icon"></i></div>
                    <div>
                        <p class="step pl-4">enter your preferred wedding date and venue.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bgIcon" align="center"><i class="fas fa-clock icon"></i></div>
                    <p class="step pl-4">check availability over a 3-week period.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bgIcon" align="center"><i class="fas fa-check icon"></i></div>
                    <p class="step pl-4">Book online and receive confirmation instantly.</p>
                </div>
            </div>
        </div>
    </section>
    <!--======================================= categories Section =========================================== -->
    <section class="categories" id="categories">
        <div class="container">
            <div class="row  m-auto ">
                <div class="col-lg-12" align="center">
                    <p class="p">Categories Of Wedding Halls</p>

                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('/control/img/img/1.png')}}" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-wrap">
                                <img src="{{asset('/control/img/img/2.png')}}" class="img-fluid" alt="">

                            </div>
                            <div class="portfolio-wrap">
                                <img src="{{asset('/control/img/img/3.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="{{asset('/control/img/img/4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
                <!--<div class="portfolio-wrap">-->
                <!--<img src="img/img/3.png" class="img-fluid cat3" alt="">-->
                <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </section>

    <!--======================================= Most booking Section =========================================== -->

    <section class="booking mb-5">
        <!-- <div class="container"> -->
        <p class="p text-center">The Most Booking</p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner container">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/5.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">La Roza wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/6.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">commodore wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/7.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Grand Palace wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/5.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Royal Plaza wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/6.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">La Roza wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('/control/img/7.png')}}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">La Roza wedding hall</h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Gaza, Arashid-street</span>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fas fa-chevron-circle-left fa-2x slide-icon"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fas fa-chevron-circle-right fa-2x slide-icon"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- </div> -->
    </section>
    <!--======================================= Testimonials Section =========================================== -->
    <!-- Section: Testimonials v.1 -->
    <section class="text-center pb-5  Testimonials" id="testimonials">
        <!-- Section heading -->
        <p class="p text-center">Testimonials</p>
        <!-- Grid row -->
        <div class="container">
            <div class="row m-auto">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6  mb-4 ">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up blue-gradient">
                        </div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('/control/img/testimonial_1.png')}}" class="rounded-circle img-fluid">

                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Anna Aston</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
                                maiores repudiandae mollitia architecto.</p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up blue-gradient">
                        </div>
                        <!--Avatar-->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('/control/img/testimonial_2.png')}}" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Anna Aston</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
                                maiores repudiandae mollitia architecto.</p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Card-->
                    <div class="card testimonial-card">
                        <!--Background color-->
                        <div class="card-up blue-gradient">
                        </div>
                        <!--Avatar-->
                        <div class="avatar mx-auto">
                            <img src="{{asset('/control/img/testimonial_1.png')}}" class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <!--Name-->
                            <h4 class="font-weight-bold mb-4">Anna Aston</h4>
                            <hr>
                            <!--Quotation-->
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
                                maiores repudiandae mollitia architecto.</p>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->
            </div>
        </div>
        <!-- Grid row -->
    </section>
    <!-- Section: Testimonials v.1 -->
@endsection