<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form Design</title>
    <link href="{{ asset('layouts/login.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="box">
        @if(session('msg'))
        <script>
        Swal.fire({
            title: "{{ session('msg') }}",
            showCancelButton: true,
            confirmButtonText: 'OK',
            confirmButtonColor: 'rgb(36 63 161)',
            background: 'rgb(105 126 157)',
            customClass: {
                title: 'my-custom-title-class',
            },
        });
        </script>
        @endif
        <h2>Login</h2>
        <form action="/logininsert" method="post">
            @csrf
            <div class="inputBox">
                <input type="text" name="email" required="email">
                <label for="">Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label for="">Password</label>
            </div>
            <div>
                <input type="submit" name="" value="Submit">

                <a style="margin-left:100px;" href="/register">Register</a>
            </div>
        </form>

    </div>
</body>
</html>