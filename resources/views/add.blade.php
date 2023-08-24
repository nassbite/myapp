@extends('layout') 

@section('contect')
    
<h1>Add Route of Drivers</h1> 

<form method="POST" action="add">
    @csrf  
<div class="col-sm-6">
        <div class="form-group">
          <label for="formGroupExampleInput">Name :</label>
          <input type="text" name="name" class="form-control"  placeholder="Enter Name of Driver">
        </div><br>

        <div class="form-group">
          <label for="formGroupExampleInput2">Email :</label>
          <input type="text" name="email" class="form-control"  placeholder="Enter your Email">
        </div><br>

        <div class="form-group">
              <label for="formGroupExampleInput">Start Route :</label>
              <input type="text" name="start_route" class="form-control"  placeholder="Start Route">
        </div><br>

        <div class="form-group">
              <label for="formGroupExampleInput2">End Route :</label>
              <input type="text" name="end_route" class="form-control"  placeholder="End Route">
        </div> <br>

        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number :</label>
            <input type="text" name="phone_number" class="form-control"  placeholder="Enter Phone No">
      </div><br>

      <div class="form-group">
        <label for="formGroupExampleInput2">Date :</label>
        <input type="date" name="date" class="form-control" >
  </div>
  <br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password:</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password">
</div><br>

    <button type="submit" class="btn btn-secondary">Add</button>    
</form>

@stop