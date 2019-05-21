@extends('master')

@section('body')

    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>
    <form method="post" action="{{route('room.update',['id' => $room->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

         <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Room name" name="name" value="{{$room->name}}">
            <span class="error col-md-12">{{$errors->first('name')}}</span>

        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of Tables</label>
            <input type="number" min="0"  class="form-control" id="inputPassword4" placeholder="Number of Tables" name="tables" value="{{$room->tables}}">
            <span class="error col-md-12">{{$errors->first('tables')}}</span>
        </div>


     <div class="form-group col-md-6">
            <label for="inputPassword4">Number of Chairs</label>
            <input type="number" min="0" class="form-control" id="inputPassword4" placeholder="Number of Chairs" name="chairs" value="{{$room->chairs}}">
            <span class="error col-md-12">{{$errors->first('chairs')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">The Price</label>
            <input type="number"  min="0"  class="form-control" id="inputPassword4" placeholder="The Price" name="price" value="{{$room->price}}">
            <span class="error col-md-12">{{$errors->first('price')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Earnest</label>
            <input type="number"  min="0" class="form-control" id="inputPassword4" placeholder="Enter The Initial Price" name="earnest" value="{{$room->earnest}}">
            <span class="error col-md-12">{{$errors->first('earnest')}}</span>


        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of People</label>
            <input type="number"  min="0" class="form-control" id="inputPassword4" placeholder=" no_people" name="no_people" value="{{$room->no_people}}">
            <span class="error col-md-12">{{$errors->first('no_people')}}</span>
        </div>

   <!--  <div class="form-group col-md-6">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="inputEmail4" placeholder="Image" name="image">
        <span class="error col-md-12">{{$errors->first('image')}}</span>


    </div> -->

        <div class="form-group col-md-6">
            <label for="inputEmail4">Hall Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="hall_name" name="hall_id" value="{{$room->hall_id}}">
            <span class="error col-md-12">{{$errors->first('hall_id')}}</span>

        </div>


        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection