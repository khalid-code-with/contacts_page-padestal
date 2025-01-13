<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .vd_red {
            color: red;
            font: 800;
        }

        label.error {
            color: red;
            font-size: 0.9em;
            display: block;
            margin-top: 5px;
        }

        .message {
            display: flex;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: green;
            background: lightblue;
            width: 26%;
            border-radius: 10px;
           margin-left: 40px;
        }
        .red{
            display: flex;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color:red;
            background: orange;
            background: lightblue;
            width: 26%;
            border-radius: 10px;
           margin-left: 40px;
        }
    </style>
</head>

<body>
    <div> 
       {{-- @if (session('message'))
    <p class="message">{{ session('data') }}</p>  
@else
    <p class="red">Data not submitted</p>
@endif --}}
           </div>
    <div class="container mt-5">
        <h1>Registration Form</h1>

        <form id="formid" action="{{ url('validationflash') }}" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Name<span class="vd_red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="fathername">Father's Name:<span class="vd_red">*</span></label>
                            <input type="text" class="form-control" id="fathername" name="fathername">
                        </div>

                        <div class="form-group">
                            <label for="fullname">Full Name:<span class="vd_red">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:<span class="vd_red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#formid").validate({
                rules: {
                    name: {
                        required: true
                    },
                    fathername: {
                        required: true
                    },
                    fullname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    name: {
                        required: "Name is required"
                    },
                    fathername: {
                        required: "Father's Name is required"
                    },
                    fullname: {
                        required: "Full Name is required"
                    },
                    email: {
                        required: "Email is required",
                        email: "Please enter a valid email"
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 6 characters"
                    }
                }
            });
        });
    </script>
</body>

</html>
