<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Styled Form</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
    <div class="form-container">
        {{-- <H6 class="mt-5">{{print_r($errors)}}</H6> --}}

        {{-- SHOW ALL ERROR ON TOP  --}}

        {{-- @if ($errors->any())
         @foreach ($errors->all() as $error )
          <div style="color: red">
            {{$error}}
          </div> --}}
             
         {{-- @endforeach
        @endif --}}
        <form action="/submit" method="post">
            @csrf
            <div class="mt-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"value="{{old('name')}}">
                <span style="color: red">@error('name'){{$message}}@enderror</span>
            
    
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"value="{{old('email')}}">
                <span style="color: greenyellow">@error("email"){{$message}} @enderror</span>
                    
               
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter your city"value="{{old('city')}}">
                <span style="color: red">@error("city"){{$message}}    
                @enderror</span>
            </div>
            <div class="mb-3">
                <h4>User Skills</h4>
                <div class="form-check">
                    <input type="checkbox" name="skill[]" value="php" class="form-check-input" id="php"value="{{old('skill')}}">
                    <label for="php" class="form-check-label">PHP</label>
                    <span style="color: red">@error('skill'){{$message}}@enderror</span>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="skill[]" value="laravel" class="form-check-input" id="laravel"value="{{old('skill')}}">
                    <label for="laravel" class="form-check-label">Laravel</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="skill[]" value="python" class="form-check-input" id="python"value="{{old('skill')}}">
                    <label for="python" class="form-check-label">Python</label>
                    <span style="color: red">@error('skill'){{$message}}@enderror</span>
                </div>
            </div>
            <div class="mb-3">
                <h6>Gender</h6>
                <div class="form-check">
                    <input type="radio" name="gender" value="male" class="form-check-input" id="male" value="{{old('name')}}">
                    <label for="male" class="form-check-label">Male</label>
                   <span style="color: orange">@error("gender"){{$message}}@enderror</span> 
                        
                  
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" class="form-check-input" id="female">
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <h4>Select City</h4>
                <select name="place" id="place" class="form-select">
                    <option value="alwar">Select your opetion</option>
                    <option value="jaipur">Jaipur</option>
                    <option value="bharatpur">Bharatpur</option>
                    <option value="alwar">Alwar</option>
                  
                </select>
            </div>
            <div class="mb-3">
                <h5>Choose Age</h5>
                <input type="range" name="age" class="form-range" min="18" max="100">
            </div>
            <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-success" value="Submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </form>
    </div>
</html>
