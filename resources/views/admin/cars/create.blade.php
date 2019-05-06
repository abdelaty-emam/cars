@extends('layout.master')
@section('content')
 <h1>  Create cars </h1>

<section class="content">
  @if(!empty($errors->first()))
    <div class="row col-lg-12">
        <div class="alert alert-danger">
            <span>{{ $errors->first() }}</span>
        </div>
    </div>
@endif

    <form  action="{{ route('cars.store') }}" method="post"  enctype="multipart/form-data" >
    {{csrf_field()}}

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control"  name="name"  placeholder="Enter name">
  </div>

   <div class="form-group">
    <label for="category">category</label>
     <select class="form-control" name="category">
      @foreach($categories as $category)
       <option  value="{{$category->id}}">{{$category->name}}</option>
         @endforeach
       </select>
  </div>

   <div class="form-group">
   <label for="model">model</label>
    <input type="text" class="form-control"  name="model" placeholder="model">
  </div>

  <div class="form-group">
    <label for="describtion">describtion</label>
    <textarea class="form-control " name="description"  ></textarea>
  </div>



  <div class="form-group">
    <label for="image">image</label>
    <input type="file" class="form-control-file"  name="image">
  </div>
<div class="form-group">
    <label for="price">price</label>
     <input type="number"   class="form-control"  name="price">
  </div>



  <button type="submit"  value="Add" class="btn btn-primary">Add</button>
</form>
     
    </section>

      
@stop
