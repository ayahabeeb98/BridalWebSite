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

        .banner {
            background-image: none;
            min-height: 0;
        }

        header {
            background-image: linear-gradient(to left, rgba(0,0,0,0.5) ,rgba(0,0,0,0.4) ,  rgba(0,0,0,0.5));
        }

        .navbar-light .navbar-nav .nav-link {
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
                @foreach($halls as $hall)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img class="card-img-top" src="{{asset($hall->getImage())}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$hall->name}}</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{$hall->address}}</span>
                            <div class="text-left room">
                                <i class="fas fa-info-circle"></i>
                                <span>{{$hall->rooms_num}}</span>
                            </div>
                            <div>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            </p>
                            <a href="#" class="btn btn-danger details-btn">More Details .. </a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection