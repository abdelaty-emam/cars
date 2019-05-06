
@extends('layout.master')
@section('content')
<h1>Edit Caategory</h1>
  <form action="{{route('category.update',$category->id)}}"  method="POST">
{{csrf_field()}}
  <div class="form-group">

        <label for="categoryname">Name</label>

        <input type="text" class="form-control" id="name"  name="name" value="{{$category->name}}">

    </div>

<div class="form-group">

        <label for="description">description</label>

        <input type="text" class="form-control" id="description"  name="description" value="{{$category->description}}>

    </div>
    

  <div class="form-group">
    <button type="submit"  name="add" class="btn btn-primary">updateCategory</button>
  </div>
</form>
      
@stop
