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

@php
$input_html='<input type="text">';

print_r($errors->all());
@endphp

@error('password')
{{$message}}

@enderror


@php
    echo($input_html);
@endphp
{{-- <input type="text" value="how to print a html contener"> --}}

<form action="{{url('user_register')}}" method="post">

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
    <input type="password" placeholder="Enter Password" name="psw" >
    <span class="text-denger" style="color: #f44336">
        @error('psw')
            {{$message}}
            @enderror
        </span><br><br>

      <span type="text" name="append" id="append"> </span>

    <button type="submit">Rgistration</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">

    <button type="button" class="cancelbtn" ><a href="{{url('login')}}">Login</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
$('#append').html('{{$input_html}}');
});
</script>
