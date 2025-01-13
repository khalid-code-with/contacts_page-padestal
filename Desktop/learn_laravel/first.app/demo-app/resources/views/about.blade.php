<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        /* Styling for the navbar */
        nav {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ff6347; /* Tomato color on hover */
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }
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
    <x-reuse msg="You are successfully logged in!" class="compo" />

    <h1>This is the about page for new routing</h1>
    <h1>{{ $anil }}</h1>
    <h3> OUR CURRENT URL->{{URL::full()}}</h3>
     {{-- <h4>{{URL::previous()}}</h4> --}}
    <nav>
        <ul>
            <!-- <li><a href="/">Home Page</a></li> -->
            <li><a href="/">Demo Page</a></li>
            <li><a href="/about/anil">About Page</a></li>
            <li><a href="/contact">About Page</a></li>
            <li><a href="/calculater">calculater</a></li>
        </ul>
    </nav>
</body>
</html>
