@extends('layout.base')
@section('name')
<div class="container">
    
    <form action="/home/{{$data->id}}" enctype="multipart/form-data" method="POST">
        @method("PUT")
    @csrf
        
   
        <div class="form-element my-4">
            <label for="">NAME:</label>
            <input type="hidden" name="id" value="{{ $data->id }}">
            <input name="name" type="text" placeholder="enter name" value="{{ $data->name }}" id="name" class="form-control">
        </div>
        <div class="form-element my-4">
            <label for="">ADDRESS:</label>
            <input type="text" name="address" value="{{ $data->address }}" placeholder="enter your address" id="address" class="form-control">
        </div>
        <div class="form-element my-4">
           
            <input  name="image" type="file"  id="image" class="image">
        </div>
        <div class="form-element my-4">
            <label for="">MOBILE :</label>
            <input type="text" name="number" value="{{ $data->number }}" placeholder="enter phone number" id="mobile" class="form-control">
        </div>
<button type="submit" class="btn btn-success">UPDATE</button>
       
</form>
    </div>
@endsection