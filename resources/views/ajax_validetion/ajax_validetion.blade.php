<html lang="en">
<head>
    <title>Laravel Ajax Validation Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>


<div class="container">
        <h3 class="jumbotron">Laravel Ajax Validation</h3>
    <form id="form" action="checkvalidetion" method="POST">
        @csrf
        <div class="form-group">
            <label>Footballer Name</label>
            <input type="text" name="footballername" class="form-control" placeholder="Enter Footballer Name" id="footballername">
        </div>


        <div class="form-group">
            <label>Club</label>
            <input type="text" name="club" class="form-control" placeholder="Enter Club" id="club">
        </div>


        <div class="form-group">
            <strong>Country</strong>
            <input type="text" name="country" class="form-control" placeholder="Enter Country" id="country">
        </div>


        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script>


    $('#form').validate({


    submitHandler: function(form) {
        $.ajax({
            url: form.action,
            type: form.method,

            data: $(form).serialize(),
            "_token": "{{ csrf_token() }}",

            success: function(response) {
                console.log( response );
            },
            errors:function(error){
                console.log(error.footballername);
            }
        });
    },
    });
</script>
