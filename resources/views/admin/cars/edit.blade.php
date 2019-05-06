@extends('layout.master')
@section('content')
 <h1>  Update cars </h1>

<section class="content">
 @if(!empty($errors->first()))
    <div class="row col-lg-12">
        <div class="alert alert-danger">
            <span>{{ $errors->first() }}</span>
        </div>
    </div>
@endif
    <form  action="{{ route('cars.update',$cars->id)}}" method="post"  enctype="multipart/form-data" >
    {{csrf_field()}}
     @method('PATCH')

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" value="{{$cars->name}}" >
  </div>

   <div class="form-group">
    <label for="category">category</label>
     <select class="form-control" name="category" class="form-control">
      @foreach($categories as $category)
       <option  value="{{$category->id}}"  

        @if($category->id === $cars->category_id)
        selected='selected'
        @endif
        >
        {{$category->name}}
       </option>
         @endforeach
       </select>
  </div>

   <div class="form-group">
   <label for="model">model</label>
    <input type="text" class="form-control" name="model"  value="{{$cars->model}}">
  </div>

  <div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control " id="description"  name="description" >{{$cars->description}}</textarea>
  </div>

  <div class="form-group">
    <label for="image">image</label>
    <input type="file" class="form-control-file"  name="image" value="{{$cars->image}}">
  </div>

<div class="form-group">
    <label for="price">price</label>
     <input type="number"   class="form-control" name="price"  value="{{$cars->price}}">
  </div>



  <button type="submit" class="btn btn-primary">update</button>
</form>
     
    </section>

      
@stop
