@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header" style="text-align: center">EDIT Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
       @csrf
        @method("put")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"><br>
        <label>Address</label><br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
   
  </div>
</div>
 
@stop