
<h2>add new user</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session("message"))
    <p class="message">{{session("message")}}</p>
    @else
    @endif
    {{-- second message pass here --}}
    @if (session("name"))
    <p class="message">{{session("name")}}</p>
    @else
    @endif

    {{-- {{session()->reflash()}} --}} 

    {{-- meessage ko permanent show karta hai ye hame --}}

   <span>{{ session()->keep(["name"]) }}</span> 
   {{-- ek message ko rakhne  ke liye  --}}
 <form action="/loginflash" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="username" id="name" placeholder="Enter name">
    <span style="color: red">@error("username"){{$message}} @enderror</span>
    <br><br>
    <label for="password">email</label>
    <input type="password" name="email" id="password" placeholder="Enter email">
    <span style="color: red">@error("email"){{$message}} @enderror</span><br>
    <label for="">phone</label><br>
    <input type="text"name="number"placeholder="enter phone number"><br>
    <span style="color: red">@error("number"){{$message}} @enderror</span><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
 </form>
 <style>
    .message{
    color: black;
    background: green;
    color: orange;
    width: 34%;
    display: flex;
    padding: 2vh
}

 </style>
</body>
</html>
