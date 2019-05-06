
@extends('layout.master')
@section('content')
<h1>Add Caategory</h1>
  <form action="{{route('category.store')}}"  method="POST">
{{csrf_field()}}
  <div class="form-group">

        <label for="categoryname">Name</label>

        <input type="text" class="form-control" id="name" placeholder="categoryname" name="name">

    </div>

<div class="form-group">

        <label for="description">description</label>

        <input type="text" class="form-control" id="description" placeholder="categoryname" name="description">

    </div>
    

  <div class="form-group">
    <button type="submit"  name="add" class="btn btn-primary">AddCategory</button>
  </div>
</form>
      
@stop
