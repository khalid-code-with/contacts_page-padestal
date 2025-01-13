<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
             width: 100%;
             height: 100vh;
             display: flex;
             justify-content: center;
             text-align: center;
             align-items: center;
             background: red;
             color: white;
             margin: auto;
             opacity: 0.8;
        }
         form{
            width:90%;
            background: lightcoral;

            height: 500px;
         }
         form:hover{
          background:rgb(21, 209, 106);
          
         }
         input[type="text"]
         {
            padding: 2vh;
           width: 60%;
           border-radius:10px;
           margin:3vh;
           text-decoration: none;
           outline: none;
           
         }
         input[type="range"]
         {
            padding: 2vh;
           width: 40%;
           margin:3vh;
           outline: none;
           border: none;
         }
         input[type="submit"]
         {
            padding: 2vh;
           width:30%;
           margin:3vh;
           background: blue;
           color: white;
           font-size:1rem;
           outline: none;
         }
         input[type="submit"]:hover{
            background: red;
            color: black;
            border-radius:40px;
         
         }
         input[type="reset"]
         {
            padding: 2vh;
           width: 30%;
           margin:3vh;
           background: rgb(136, 136, 174);
           color: white;
           font-size:1rem;
           outline: none; 
         }
         label{
            color: black;
            font-size:1.50rem;
         }
    </style>
</head>
<body>
    <form>
        <label for="name">Name</label>

        <input type="text"name="name"placeholder="enter your name">
         <div>
         <label for="name">Name</label>
        <input type="text"name="email"placeholder="enter your email">
    </div>
    <div>
        <label for="name">pass:</label>

       <input type="text"name="password"placeholder="enter your password">
   </div>
        <label for="">Renge</label>
        <input type="range"name="range"id="40"class="40">

        <input type="submit"value="submit">
       <input type="reset"value="reset">
        <footer style="font-size:1.50rem">@khalid khan bharatpur aale</footer>
        </form> 
</body>
</html>