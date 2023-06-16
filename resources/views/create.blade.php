@extends('layout.base')
@section('name')
<div class="container">
    <form action="{{ url('/home') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-element my-4">
            <label for="">NAME:</label>
            <input name="name" type="text" placeholder="enter name" id="name" class="form-control">
        </div>
        <div class="form-element my-4">
            <label for="">ADDRESS:</label>
            <input name="address" type="text" placeholder="enter your address" id="address" class="form-control">
        </div>
        <div class="form-element my-4">
           
            <input  name="image" type="file"  id="image" class="image">
        </div>
        <div class="form-element my-4">
            <label for="">MOBILE :</label>
            <input name="number" type="text" placeholder="enter phone number" id="number" class="form-control">
        </div>
<button type="submit"  class="btn btn-success">CREATE</button>
        </form>
    </div>
@endsection