@extends('master')
@section('body')



    <section id="main-slider" class="no-margin" data-ride="carousel">
        <div class="carousel side">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slider-to="0" class="active"></li>
                <li data-target="#main-slider" data-slider-to="1" ></li>
                <li data-target="#main-slider" data-slider-to="2" ></li></ol>
            <div class="carousel-inner"> <div class="item-active" ><div class="container">
                    <div class="row slider-margin">
                        <div class="col-md-12"><div class="media services-warp wow fadeInDown">
                            @foreach($rooms as $img) <img alt="room image" src="{{$img->getImage()}}">
                                @endforeach </div></div></div></div></div></div></div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i> </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i> </a>

    </section><br><br><br>
    @foreach($rooms as $room)
        <div style="text-align: center ; background-color: #9561e2 ; border-radius: 5px; align-content: center; margin:auto ;color: deeppink">
            <p>name:.$room->name</p>
            <p>chairs:.$room->chairs</p>
            <p>price:.$room->price</p>
            <p>earnest:.$room->earnest</p>
            <p>number of people:.$room->no_people</p>
        </div>


    @endforeach


@endsection




