
@extends('master')
@section('style')
    <style>
        .card{
            border-radius: 30px;
        }

        .card img {
            border-radius: 30px 30px 0 0 ;
        }

        @media (max-width: 991px) {
            .room {
                margin-left: 40px;

            }

            .card{
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {


            .halls .card{
                margin-bottom: 20px;
            }

            .room {
                margin-left: 8.2rem;
            }

        }

        @media (max-width: 575px) {
            .halls .card{
                margin-bottom: 20px;
            }
        }


        header {
            background-image: linear-gradient(to left, rgba(0,0,0,0.5) ,rgba(0,0,0,0.4) ,  rgba(0,0,0,0.5));
        }

        /*.navbar-light .navbar-nav .nav-link {
            color: #fff;
        }
    </style>

@endsection

@section('body')
    <section class="halls mb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h2>Gaza Government Wedding Halls</h2>
                    {{--<img src="{{asset('control/img/line.png')}}" alt="" class="mx-auto d-block mb-2">--}}
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">  @foreach($rooms as $img)
                            <img src="{{$img->getImage(1)}}" alt="Card image cap"> <img src="{{$img->getImage(2)}}" alt="Card image cap"> @endforeach
                        <div class="card-body text-center">
                            <h5 class="card-title">La Roza wedding hall</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gaza, Arashid-street</span>
                            <div class="text-left room">
                                <i class="fas fa-info-circle"></i>
                                <span>6 Room</span>
                            </div>
                            <div>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                               @foreach($rooms as $img)
                            <img src="{{$img->getImage(3)}}"  alt="Card image cap"> <img src="{{$img->getImage(4)}}" alt="Card image cap"> @endforeach                        <div class="card-body text-center">
                            <h5 class="card-title">commodore wedding hall</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gaza, Arashid-street</span>
                            <div class="text-left room">
                                <i class="fas fa-info-circle"></i>
                                <span>6 Room</span>
                            </div>
                            <div>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        @foreach($rooms as $img)
                            <img src="{{$img->getImage(5)}}" alt="Card image cap"> <img src="{{$img->getImage(6)}}" alt="Card image cap"> @endforeach                        <div class="card-body text-center">
                            <h5 class="card-title">Grand Palace wedding hall</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gaza, Arashid-street</span>
                            <div class="text-left room">
                                <i class="fas fa-info-circle"></i>
                                <span>6 Room</span>
                            </div>
                            <div>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection