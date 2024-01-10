<!DOCTYPE html>
<html>

<head>
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('layouts/register.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="/registerInsert" method="post">
            @csrf
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="exampleInputfirstname" name="first_name">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="exampleInputlastname" name="last_name">
            </div>
            <div class="form-group">
                <label for="phoneno">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputphoneno" name="phoneno">
            </div>
            <div class="form-group">
                <label for="Email1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email">
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword">Password:</label>
    <input type="text" class="form-control" id="exampleInputPassword" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="create">Sign up</button>
        </form>
    </div>
</body>
<script>
        $(document).ready(function () {
            $('#exampleInputPassword').on('keyup', function () {
                var password = $(this).val();
                var maskedPassword = '';

                for (var i = 0; i < password.length; i++) {
                    maskedPassword += '●'; // Black dot character
                }

                $(this).val(maskedPassword);
            });
        });
</script>
</html>