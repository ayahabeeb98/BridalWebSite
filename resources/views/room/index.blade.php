@extends('master')
@section('style')
    <style>
        .card{
            border-radius: 30px;
        }
        .card img {
            border-radius: 30px 30px 0 0 ;
            width: 100%;
            height: 100%;
        }
        .card .image{
            width: 348px;
            height: 235px;
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

        .banner{
            background-image: none;
            min-height: 0;
        }

        header {
            background-image: linear-gradient(to left, rgba(0,0,0,0.5) ,rgba(0,0,0,0.4) ,  rgba(0,0,0,0.5));
        }

        .banner::before {
            content: none;
        }

    </style>

@endsection

@section('body')
    <section class="halls mb-5">
        <div class="container">
            <div class="row mt-5">
                <div  class="mx-auto text-center" style="width: 70%;">
                    <h2>{{$halls->name}} - Rooms </h2>
                    <img src="{{asset('control/img/line.png')}}" alt="" class="mx-auto d-block mb-2">
                </div>
                @foreach($rooms as $room)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="image">
                            <img class="card-img-top" src="{{asset($room->getImage())}}" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$room->name}} wedding Hall</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{$halls->address}}</span>
                            <div class="text-center">
                                <i class="fas fa-dollar-sign"></i>
                                <span style="font-weight: 600">{{$room->price}}</span>
                            </div>
                            <div>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            </p>
                            <a href="{{route('room.details',['id' => $room->id])}}" class="btn btn-danger details-btn">More Details .. </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection