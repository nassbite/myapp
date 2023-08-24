@extends('layout') 

@section('contect')

<h1>Register New Driver</h1>
<form method="POST" action="register">
@csrf
<div class="col-sm-6">
        <div class="form-group">
          <label for="formGroupExampleInput">Name :</label>
          <input type="text" name="name" class="form-control"  placeholder="Enter Name">
        </div><br>

        <div class="form-group">
          <label for="formGroupExampleInput2">Email :</label>
          <input type="email" name="email" class="form-control"  placeholder="Enter your Email">
        </div><br>

        <div class="form-group">
            <label for="formGroupExampleInput2">Password :</label>
            <input type="password" name="password" class="form-control"  placeholder="Enter Password">
          </div><br>

        <div class="form-group">
            <label for="formGroupExampleInput2">Contact:</label>
            <input type="text" name="contact" class="form-control"  placeholder="Enter Phone No">
      </div><br>

      <div class="form-group">
        <label for="formGroupExampleInput2">Date :</label>
        <input type="date" name="date" class="form-control" >
  </div>
  <br>
<button type="submit" class="btn btn-secondary">Register</button>    
</form>

@stop