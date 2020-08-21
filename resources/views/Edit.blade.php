<html>
<head><title>student update</title>

@extends('layout')

@section('content')

<style type="text/css">

.frame{
  background-color:#C0C0C0;
  padding:0px 100px 100px 100px;
}

</style>

</head>
<div class="frame">
<h1>EDIT form</h1><br>

<form action="edit" method="post">
      @csrf
      <input type="hidden" class="form-control" name="Id" value="{{$data->Id}}" >

  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Name</label>
      <input type="text" class="form-control" name="Name" value="{{$data->Name}}" required>
    </div>
    <div class="form-group col-md-6">
      <label >Last Name</label>
      <input type="text" class="form-control" name="LastName"required value="{{$data->LastName}}" >
    </div>
    <label >Email</label>
      <input type="email" class="form-control" name="Email" required value="{{$data->Email}}">
    </div>
  
  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" placeholder="1234 Main St" name="Address"required value="{{$data->Address}}">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="City" required value="{{$data->City}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" name="State"required value="{{$data->State}}">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pincode</label>
      <input type="text" class="form-control" name="Pincode" required value="{{$data->Pincode}}">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
  </div>
@stop
</html>