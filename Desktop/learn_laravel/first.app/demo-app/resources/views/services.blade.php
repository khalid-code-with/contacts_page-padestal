<h1>services page</h1>
<div>
  @include('user')

   <div style="background-color:red">
   @include('home')
   <h2>thanks ji your file is succesfull</h2>
   </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css"/>
  <style>
    .compo{
      color:green;
      background: yellow;
      font-size: 1rem;
      cursor: pointer;
      padding:4vh;
      width:28%; 
    }
  </style>
</head>
<body>
  <h1>
    <x-reuse msg="You are successfully logged in!" class="compo" />
  </h1>
  <h1 id="head">this is my heading</h1>
  <h1 id="head" onclick="fun()">can apply from another table se</h1>
  <div class="container">
  </div>
  {{-- <div class="container">
    <x-reuseble /> --}}
</div>
  <script src="js/custom.js"></script>
</body>
</html>