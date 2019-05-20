@extends('master')

@section('body')

    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>
    <form method="post" action="{{route('hall.update',['id' => $hall->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Hall name" name="name" value="{{$hall->name}}">
            <span class="error col-md-12">{{$errors->first('name')}}</span>

        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of rooms</label>
            <input type="number" min="0" max="10" class="form-control" id="inputPassword4" placeholder="Number of rooms" name="rooms_num" value="{{$hall->rooms_num}}">
            <span class="error col-md-12">{{$errors->first('rooms_num')}}</span>

        </div>
        <div class="form-group col-md-6">
            <img src="{{asset($hall->getImage())}}" alt="">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="inputEmail4" placeholder="Image" name="image" >
            <span class="error col-md-12">{{$errors->first('image')}}</span>

        </div>


        <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" class="form-control" name="category_id">
                <option value="1" {{$hall->category_id == intval("1") ?'selected' :''}}>Gaza</option>
                <option value="2" {{$hall->category_id == intval("2") ?'selected' :''}}>North Gaza</option>
                <option value="3" {{$hall->category_id == intval("3") ?'selected' :''}}>South Gaza</option>
                <option value="4" {{$hall->category_id == intval("4") ?'selected' :''}}>Central</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection