<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <!-- Add Bootstrap CSS CDN here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Using Bootstrap table-bordered class for borders -->
    <table class="table table-bordered bg-info text-warning table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Father</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pass as $passed)
            <tr>
                <td>{{$passed->name}}</td>
                <td>{{$passed->father}}</td>
                <td>{{$passed->email}}</td>
                <td>{{$passed->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
