<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

{{-- @php

print_r($errors->all());
@endphp --}}

@if(session()->has('message'))
<div class="alert" style="    color: red;
text-align: center;">
    {{ session()->get('message') }}
  </div>
@endif





<form action="{{url('check_password')}}" method="post">
    @csrf
    {{-- <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> --}}

  <div class="container">
    <label for="email"><b>email</b></label>
    <input type="email" placeholder="Enter email" name="email" >
    <span class="text-denger" style="color: #f44336">
    @error('email')
        {{$message}}
        @enderror
    </span><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
    <span class="text-denger" style="color: #f44336">
        @error('psw')
            {{$message}}
            @enderror
        </span><br><br>

    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">

    <button type="button" class="cancelbtn" ><a href="{{url('login_register_form')}}">Rgistration</a></button>

  </div>
</form>

</body>
</html>
