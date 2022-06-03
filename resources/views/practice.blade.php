<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

</style>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ url('crud') }}" method="POST">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="email">email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <input type="submit" value="view list" id="view_list">

    <!DOCTYPE html>
    <html>





    {{-- /////////////////////////////////////////////////////////////////////////////// --}}


    <head>
        <title>How to Use Yajra Datatables in Laravel 8</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body>
        <input type="button" onclick="ckeck()" value="del;ete">
        <div class="container mt-5">
            <h1 class="mb-4 text-center">User data </h1>
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript">
        $(function() {
            // var user_id = "1";
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('crud') }}",
                    // data: {
                    //     "user_id": user_id
                    // },
                },

                columns: [
                    //   {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'id',
                        // name: 'id'
                    },
                    {
                        data: 'name',
                        // name: 'name'
                    },
                    {
                        data: 'email',
                        // name: 'email'
                    },

                    {
                        data: 'action',
                        // name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });

        function delete_user(id) {
            $.ajax({
                url: "{{ url('delete_destroy') }}",
                type: 'post',
                dataType: 'json',
                async: false,
                data:{
                    'user_id':id,
                    "_token": "{{ csrf_token() }}",
                },
                success:function(){
                    $(".yajra-datatable").dataTable().fnDraw();


                }
            });

        }


        // $('#delete-item').on('click',function(){
        //     console.log('asdfas');
        // });
    </script>






    </html>
