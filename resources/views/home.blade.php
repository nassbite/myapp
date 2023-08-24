@extends('layout') 

@section('contect')
    

<h1>MARUSHWA GENERAL SUPPLY</h1>

@stop

{{-- 
<body>
    <h1>LOGIN PAGE</h1>
    <form action="login" method="POST">
        @csrf 
       
        
        <input type="text" name="username" placeholder="Enter Username"><br>
        <span style="color: red">@error('username'){{$message}}@enderror </span><br>
        
        <input type="password" name="password" placeholder="Enter Password"><br>
        <span style="color: red">@error('password'){{$message}}@enderror </span><br>
        <button type="submit">login</button>
    </form>
</body> --}}
