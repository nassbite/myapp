@extends('layout') 

@section('contect')
    
<h1>Edit Route of Drivers</h1> 

<form method="POST" action="add">
    @csrf  
<div class="col-sm-6">
  Name<input type="text" name="id" class="form-control" value="{{$data->id}}">
        <div class="form-group">
          <label for="formGroupExampleInput">Name :</label>
          <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name of Driver">
        </div><br>

        <div class="form-group">
          <label for="formGroupExampleInput2">Email :</label>
          <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter your Email">
        </div><br>

        <div class="form-group">
              <label for="formGroupExampleInput">Start Route :</label>
              <input type="text" name="start_route" class="form-control" value="{{$data->start}}" placeholder="Start Route">
        </div><br>

        <div class="form-group">
              <label for="formGroupExampleInput2">End Route :</label>
              <input type="text" name="end_route" class="form-control" value="{{$data->destination}}" placeholder="End Route">
        </div> <br>

        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number :</label>
            <input type="text" name="phone_number" class="form-control" value="{{$data->phone}}" placeholder="Enter Phone No">
      </div><br>

      <div class="form-group">
        <label for="formGroupExampleInput2">Date :</label>
        <input type="date" name="date" class="form-control" value="{{$data->data}}" >
  </div>
  <br>

    <button type="submit" class="btn btn-secondary">Add</button>    
</form>

@stop