@extends('layout') 

@section('contect')
<h1>List Page is Here</h1>
{{-- @if(session::get('status')) --}}
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{-- {{session::get('status')}} --}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
{{-- @endif --}}

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name of Driver</th>
        <th scope="col">Email</th>
        <th scope="col">Start Route</th>
        <th scope="col">End Route</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Date</th>
        <th scope="col">Password</th>
        <th>operater</th>
      </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
      <tr>
        <th scope="row">{{$item->id}} </th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->start}}</td>
        <td>{{$item->destination}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->password}}</td>
        <td>
        <a href="/dalete{{$item->id}}"><button type="button" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button></a>
        <a href="/edit{{$item->id}}"><button type="button" class="btn btn-info"><ion-icon name="create-outline"></ion-icon></button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
   
  </table> 
@stop

