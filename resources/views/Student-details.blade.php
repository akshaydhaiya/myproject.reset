<html>
<head><title>student details</title>
@extends('layout')

@section('content')


</head>
<body>

<h1>STUDENT DETAILS</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>succesfull</strong> Data stored safley see below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">{{ __('msg.ID')}} </th>
      <th scope="col">{{ __('msg.Name')}}</th>
      <th scope="col">{{ __('msg.Last Name')}}</th>
      <th scope="col">{{ __('msg.Images')}}</th>
      <th scope="col">{{ __('msg.Email')}}</th>
      <th scope="col">{{ __('msg.Address')}}</th>
      <th scope="col">{{ __('msg.City')}}</th>
      <th scope="col">{{ __('msg.State')}}</th>
      <th scope="col">{{ __('msg.Pincode')}}</th>
      <th scope="col">{{ __('msg.Oprations')}}</th>
      
    </tr>
  </thead>

@foreach($data as $item)

  <tbody>
    <tr>
      <th scope="row">{{$item->Id}}</th>
      <td>{{$item->Name}}</td>
      <td>{{$item->LastName}}</td>
      <td><img src="{{URL::asset('storage/images/' . $item->image)}}" alt="image" width="50" height="50"></td>
      <td>{{$item->Email}}</td>
      <td>{{$item->Address}}</td>
      <td>{{$item->City}}</td>
      <td>{{$item->State}}</td>
      <td>{{$item->Pincode}}</td>
      <td><a href="delete/{{$item->Id}}"><i class="fa fa-trash" style="font-size:20px;color:red;"></i></a>&nbsp;&nbsp;
      <a href="edit/{{$item->Id}}"><i class="fa fa-edit" style="font-size:20px;"></i></a></td>
    </tr>
@endforeach
   
  </tbody>
</table>
</body>
@stop
</html>