@extends('master')

        @section('body')

            <div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
            </div>
<form method="post" action="{{route('hall.create')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Hall name" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Number of rooms</label>
            <input type="number" min="0" max="10" class="form-control" id="inputPassword4" placeholder="Number of rooms" name="rooms_num">
        </div>
    <div class="form-group col-md-6">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="inputEmail4" placeholder="Image" name="image">
    </div>


        <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" class="form-control" name="category_id">
                <option value="1">Gaza</option>
                <option value="2">North Gaza</option>
                <option value="3">South Gaza</option>
                <option value="4">Central</option>
            </select>
        </div>


    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection