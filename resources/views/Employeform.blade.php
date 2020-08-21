<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      
      <td><img src="{{ URL::asset('uploads/employe/' . $item->image)}}" alt="image" width="100" height="100"></td>
      <!-- <td><img width="20%" class="img-circle" src="{{ URL::asset('uploads/employe/'. $item->image) }}"></td> -->
    </tr>
  @endforeach
  </tbody>
</table>

</body>
</html>