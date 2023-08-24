@extends('layout') 

@section('contect')
<h1>LOGIN DRIVER</h1>
<form action="login" method="post">
@csrf
    <div class="col-sm-6">
    <div class="form-group">
        <label for="formGroupExampleInput2">Email :</label>
        <input type="email" name="email" class="form-control"  placeholder="Enter your Email">
      </div><br>

      <div class="form-group">
          <label for="formGroupExampleInput2">Password:</label>
          <input type="password" name="password" class="form-control"  placeholder="Enter your Password">
        </div><br>
    </div>
    <button type="submit" class="btn btn-secondary">Login</button>   
</form>
@stop