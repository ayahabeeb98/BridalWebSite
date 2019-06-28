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
        <div class="mx-auto text-center" style="width: 30% ; background-color: grey ;
        border-radius: 5px; align-content: center; margin:auto ;color: white">
           <img src="{{asset('control/img/1.png')}}" alt="room img" >
           <p>Name : {{$rooms->name}}</p>
            <p>Price : {{$rooms->price}}</p>
            <p>Table : {{$rooms->table}}</p>
            <p>Chairs : {{$rooms->chairs}}</p>
            <p>Earnest : {{$rooms->earnest}}</p>
            <p>Number of people : {{$rooms->no_people}}</p>
        </div>




@endsection



