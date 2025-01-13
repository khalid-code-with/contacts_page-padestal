<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
 <form action="/login" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="user" id="name" placeholder="Enter name">
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Enter password"><br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
 </form>
</body>
</html>
