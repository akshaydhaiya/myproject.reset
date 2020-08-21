<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<style type="text/css">
.mar{
    margin:20px 0px 0px 20px;
}
</style>
</head>

<body>
<div class="mar">

<h1>User Signup</h1>



<form action="signupdata" method="post">
@csrf
  <div class="form-group">
  <div class="col-sm-5">
  <label >Name</label>
    <input type="text" class="form-control" name="Name" placeholder="name">
  
  </div>
  <div class="col-sm-5">
  <label >Phone Number</label>
    <input type="text" class="form-control" name="PhoneNo" placeholder="91+">
  
  </div>
  <div class="col-sm-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="Email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  
  <div class="col-sm-5">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Password" placeholder="Password">
  </div>
  
  <div class="form-group form-check"><br>
  
  <button type="submit" class="btn btn-primary">SIGNUP</button>
  </div>
</form>

</form>

</body>
</html>