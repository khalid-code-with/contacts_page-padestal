<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <!-- Form Starts Here -->
                <form action="upload-file" method="post" enctype="multipart/form-data">
                    <!-- Email Input -->
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                    </div>
                    
                    <!-- Textarea Input -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Enter your message" required></textarea>
                    </div>
                    
                    <!-- File Upload -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload File</label>
                        <input class="form-control" type="file" name="file" id="formFile" name="file" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="mb-3">
                        <input type="submit" value="upload file" class="btn btn-outline-primary">
                    </div>
                </form>
                <!-- Form Ends Here -->
            </div>
        </div>
    </div>
</body>
</html>
