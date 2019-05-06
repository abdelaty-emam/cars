
@extends('layout.master')
@section('content')
<section class="content">

  <div class="pull-right">
      <a class="btn btn-primary" href="{{route('cars.create')}}"> Add </a>
    </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Category</th>
        <th>Model</th>
        <th>price</th>
        <th>image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($cars as $item)
      <tr>
        <td>{{$item->id}}</td>    
        <td>{{$item->name}}</td>
        <td>{{$item->category->name}}</td>
        <td>{{$item->model}}</td>
        <td>{{$item->price}}</td>
        <td><img src="{{ URL::to('/') }}/images/{{ $item->image }}" class="img-thumbnail" width="75" /></td>        
        <td>
          <a class="btn btn-primary" href="{{ route('cars.edit',$item->id) }}">Edit</a> 

        </td>
         <td>
                <form action="{{ route('cars.destroy', $item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
  
      </tr>
        @endforeach
    </tbody>
  </table>
</section>
      
@stop
