@extends('layout.base')
@section('name')
    
 
<div class="container">
    <div class="container my-4">
        <a href="{{ url('/home/') }}" class="btn btn-success"> GO BACK </a>
    </div>
    <div class="card">
        <div class="card-header text-bg-primary">
            <p class="text-center "> welcome to the detail page </p>

        </div>
        <div class="card-body ">
            <div class="container d-flex flex-column align-items-center justify-content-center">
                
                        
                           <p>{{ $data->name }}  </p> 



<div class="container d-flex justify-content-center align-items-center mb-2">

    <img class="img-thumbnail  "  src="{{ $data->image?asset('/storage/'.$data->image):'no image found' }}" alt="">
</div>

           <p>{{ $data->address }} </p>   
           <p>{{ $data->number }}  </p> 
        </div>
           <div class="card-footer d-flex justify-content-center align-items-center  my-4">
            <a href="/home/{{ $data->id}}/edit" class="btn mx-3 btn-success">UPDATE</a>
            <form action="/home/{{ $data->id }}" method="post">
            @csrf
            @method('DELETE')
                <input type="submit" class="btn btn-danger" value="DELETE">
            </form>
         
           </div>
         
        </div>
    </div>
</div>


@endsection