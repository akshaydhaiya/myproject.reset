<html>
<head><title>student registrstion</title>

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
<h1>Registration form</h1><br>

<form action="registration" method="post" enctype="multipari/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Name</label>
      <input type="text" class="form-control" name="Name" required>
    </div>
    <div class="form-group col-md-6">
      <label >Last Name</label>
      <input type="text" class="form-control" name="LastName"required >
      </div>
      <div class="form-group d-flex flex-column , form-group col-md-12">
      <label >Upload your Image</label>
      <input type="file" name="image" required>
      
    </div>
    
    <label >Email</label>
      <input type="email" class="form-control" name="Email" required>
    </div>
  
  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" placeholder="1234 Main St" name="Address"required>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="City" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" name="State"required>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pincode</label>
      <input type="text" class="form-control" name="Pincode" required>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
  </div>
@stop
</html>