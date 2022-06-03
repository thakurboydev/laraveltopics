<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body  style="background-color:skyblue">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <form class="row g-2" id="validateform">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="inputEmail4"  id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="inputPassword4">
        </div>
        {{-- <div class="col-6">
            <label for="inputAddress" class="form-label">subject</label>
            <input type="text" class="form-control" name="subject" id="subject">

        </div> --}}
        <table class="table table-bordered" id="dynamicAddRemove">
            <tr>
                <th>Subject</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
                </td>
                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
            </tr>
        </table>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

     <script type="text/javascript">

    var i = 0;
    $("#dynamic-ar").click(function () {
        i++;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields id="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );

            $(this).each(function(){
                $('#addMoreInputFields').validate({
                    console.log(i);
                })
            })


    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });





    $('#validateform').validate({
        rules:{
            inputEmail4:{
                required:true
            },
            inputPassword4:{
                required:true
            },
            addMoreInputFields:{
                required:true
            },
        },

    });
    // function addfieldsvalidate(){
    //   $('#dynamicAddRemove').each(function(){
    //     console.log('as')

    //   });
    // }




    // $(document).ready(function(){
    //     $('#dynamicAddRemove').validate({
    //         rules:{
    //             inputEmail4:{
    //                 required:true;
    //             }
    //         },
    //         submitHandler: function (form) { // for demo
    //    alert('valid form');  // for demo
    //    return true;  // for demo
    //     }
    //     })
    // })

</script>

</body>
</html>
