<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('layouts/profile.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <title>Personal Details</title>
</head>
<body>
    <form>
        @csrf <!-- Include CSRF token -->
<div class = "container-fluid">
    <button type="button" value="" style="float: right; margin: 20px; "><a href="/"><a href="/" style="color:red;"><img src="/images/logout-svgrepo-com.svg" alt="Logout here">
logout</a>
</button>
</div>
        <table id="myTable">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact no</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="packqtyuom" class="order-list">
                @foreach($Data as $Value)
                <tr data-id="{{ $Value->id }}">
                    <td><input type="text" class="fristname" value="{{$Value->first_name}}"></td>
                    <td><input type="text" class="lastname" value="{{$Value->last_name}}"></td>
                    <td><input type="text" class="phoneno" value="{{$Value->phoneno}}"></td>
                    <td><input type="text" class="email" value="{{$Value->email}}"></td>
        <td><input type="button" class="update-btn" value="Update"></td>
        

                </tr>
                @endforeach
            </tbody>
        </table>
    </form>

   <script>
    $(document).ready(function () {
        $('.update-btn').click(function() {
            // Assuming each row has a unique data-id attribute
            var id = $(this).closest('tr').data('id');
                       

            var fristname = $(this).closest('tr').find('.fristname').val();
            var lastname = $(this).closest('tr').find('.lastname').val();
            var phoneno = $(this).closest('tr').find('.phoneno').val();
            var email = $(this).closest('tr').find('.email').val();

            $.ajax({
                url: '/update-User/' + id,
                type: "POST",
                data: {
                    fristname: fristname,
                    lastname: lastname,
                    phoneno: phoneno,
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    // Handle success, e.g., show a success message
                },
                error: function(xhr, status, error) {
                    // Handle error, e.g., show an error message
                }
            });
        });       
    });
</script>


</body>

</html>
