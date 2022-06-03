<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 jQuery Validation Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <style>
    .error{
     color: #FF0000;
    }
  </style>
</head>
<body>
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
      <div class="card-header text-center font-weight-bold">
          <h2>form validation</h2>
        </div>
        <div class="card-body">
            <form name="product-add" id="product-add" method="post" action="{{url('register-user')}}" >

                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Contect No:</label>
                    <input type="text" id="contect_no" name="contect_no" class=" form-control">
                </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Product Code</label>
          <input type="text" id="code" name="code" class=" form-control"><b> <span id="formerror"></span></b>
          @error('code')

              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
{{-- /////////////////////////////////////////// --}}
            <select name="select_field" id="select_field">
                <option  id="options"selected >select one</option>
                <option id="options"  >2</option>
                <option id="options" >3</option>
            </select>
        </div>



        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="@error('description') is-invalid @enderror form-control"></textarea><b> <span id="formerror"></span></b>
          @error('description')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit"  class="btn btn-primary" id="submit">Submit</button>

      </form>
      <div class="ajax_data"></div>
    </div>
  </div>
  <div class="digital_column">
    <style>
      table, th, td {
        border:1px solid black;
      }
      </style>
      <body>

      <h2>A basic HTML table</h2>

      <table style="width:100%">
        <tr>
          <th>subject </th>
          <th>action</th>

        </tr>
        <tr>
          <td> <input type="text" placeholder="Enter your subject" id="subject-box" ></td>
          <td><input type="button" type="submit" value="ADD Subject" id="add_subject"  name="add_subject"></td>

        </tr>
        <tr>
          <span id="append"></span>
        </tr>

      </table>

      <p>To undestand the example better, we have added borders to the table.</p>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>


<script>
  $(document).ready(function(){
    input='<td> <input type="text" placeholder="Enter your subject" id="subject-box" > <br></td> ';
   $('#add_subject').on('click',function(){
     $('#append').append(input);
   });
  });









$(document).ready(function () {
    $("#product-add").validate({
   // alert('sdfgsfd');

   rules: {
    contect_no: {
           required: true,
           number:true,
           minlength:10,
           maxlength:15

       },
       code: {
           required: true,
           minlength: 5  // <-- removed underscore

       },

   },
   messages: {
    contect_no: {
           required: "this field is required",
           number:"accept only number "
       },
       code: {
           required: "enter the code",
           minlength: "min* length is 5" // <-- removed underscore
       },
       },
   submitHandler: function (form) { // for demo
       alert('valid form');  // for demo
       return false;  // for demo
   }
});


});
// $(document).ready(function(){
// $.ajax({
// url:"{{url('ajax_responce')}}",
// type:'GET',
// dataType:'html',
// async: false,
// success:function(data){
//     var response=data;
//     console.log(response);
//     // console.log(response);
//     $('#append').append(respons

// }
// });
// });

// $(document).ready(function(){
//    $val= $("#select_field").val()=="select one"?true:false,

// });

</script>

</body>

