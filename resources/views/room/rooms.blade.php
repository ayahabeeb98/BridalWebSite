@extends('master')
@section('body')
    <br><br>
    <section style="width: 50% ; margin: auto" id="main-slider" class="no-margin" data-ride="carousel">
        <div class="carousel side">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slider-to="0" class="active"></li>
                <li data-target="#main-slider" data-slider-to="1" ></li>
                <li data-target="#main-slider" data-slider-to="2" ></li></ol>
            <div class="carousel-inner"> <div class="item-active" ><div class="container">
                    <div class="row slider-margin">
                        <div class="col-md-12"><div class="media services-warp wow fadeInDown">
                            @foreach($roomImage as $img) <img alt="room image" src="{{$img->getImage()}}">
                                @endforeach </div></div></div></div></div></div></div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i> </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i> </a>

    </section><br>

    <style>
        .card{
            border-radius: 30px;
        }
        .card img {
            border-radius: 30px 30px 0 0 ;
            width: 100%;
            height: 100%;
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
    <section class="halls mb-5" style="background-color: #fbf4f8">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8 col-md-6 mb-8" style="margin: auto;">
                    <div class="card">
                        <div class="image">
                            <img src="{{asset($rooms->getImage()}} " alt="room img"
                                 style="height: 350px;width: 100%;margin: auto;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">wedding Hall</h5>
                            <p class="card-text">
                            <p>Name : {{$rooms->name}}</p>
                            <p>Price : {{$rooms->price}}</p>
                            <p>Table : {{$rooms->table}}</p>
                            <p>Chairs : {{$rooms->chairs}}</p>
                            <p>Earnest : {{$rooms->earnest}}</p>
                            <p>Number of people : {{$rooms->no_people}}</p>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection



