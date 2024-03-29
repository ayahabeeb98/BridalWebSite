@extends('master')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Acme&display=swap');
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

        .banner{
            background-image: none;
            min-height: 0;
        }
        .banner::before {
            background-color: transparent;
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
                <div class="mx-auto text-center" style="width: 70%;">
                    <h2 style="font-family:  'Acme', sans-serif; margin-bottom: 2px;">Halls For {{Auth::user()->name}}</h2>
                    <img src="{{asset('control/img/line.png')}}" alt="" class="mx-auto d-block mb-2">
                </div>
                    @if($msg)
                    <div class="container text-center my-5">
                        <div class="alert col-lg-6 mx-auto my-5 py-3 alert-dark">
                            <h1>{{$msg}}</h1>
                            <div class="mt-4 mx-auto" style="width: 50%">
                                <a href="{{route('hall.create')}}" class="btn btn-danger details-btn col-4">Add Hall</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @foreach($halls as $hall)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="image">
                                    <img class="card-img-top" src="{{asset($hall->getImage())}}" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$hall->name}}</h5>
                                    <p class="card-text text-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>{{$hall->address}}</span>
                                    <div class="text-center mb-3">
                                        <i class="fas fa-info-circle"></i>
                                        <span>{{$hall->rooms_num}} Room</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    </div>
                                    </p>
                                    <div class="col-lg-12 mt-3">
                                <a href="{{route('hall.edit' , ['id' => $hall->id])}}" class="btn btn-danger details-btn col-4">Edit Data</a>
                                <a href="{{route('hall.destroy' , ['id' => $hall->id])}}" class="btn btn-danger details-btn col-4">Delete</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection