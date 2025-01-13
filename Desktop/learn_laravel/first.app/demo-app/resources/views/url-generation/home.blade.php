<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>this is home page in url-generation folder mai</h1> 
   <a href="about">abouts us</a>
      
   {{-- second method of creating of link --}}
   <a href="{{URL::to('services')}}">services</a>
  
</body>
</html> <a href="{{ URL::to('services', ['home']) }}">{{ URL::to('services', ['home']) }}</a>