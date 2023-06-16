@extends('layout.base')
@section('name')

<a href="{{ url('/home/create') }}" class=" btn btn-success my-4"> CREATE A NEW TODO </a>
  
<table class="table table-bordered vw-100 text-center my-4">
    
    
    <thead >
    <tr class="" >

        <th scope="col">image</th>
        <th scope="col">name</th>
        <th scope="col">address </th>
        <th scope="col"> mobile</th>
    </tr>
</thead>
<tbody class=" ">
    @foreach ($data as $item)
        
    <tr class=" text-center" >
        <td>
            <div class="mw-1" class="container">

                <img  class="image d-fluid"  src="{{ $item->image?asset('/storage/'. $item->image) :'no image found' }}" alt=" no image"> 
            </div>
        </td>
        <td>{{ $item->name  }}</td>
        <td> {{ $item->address}}</td>
        <td>{{ $item->number}}</td>
        <td>
        <a class="btn btn-primary" href="/home/{{ $item->id }}">VIEW </a>
           
            </form>
            </td>
       

    </tr>
    @endforeach
</tbody>
</table>
@endsection