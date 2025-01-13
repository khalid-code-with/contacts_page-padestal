{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>User data</h1>
     <ul>
        <li>
            <span>Time Updated: <b>{{$user['time']['updated']}}</b></span>
        </li>
        <li>
            <span>Disclaimer: <b>{{$user['disclaimer']}}</b></span>
        </li>
        <li>
            <span>Chart Name: <b>{{$user['chartName']}}</b></span>
        </li>
        <li>
            <span>USD Rate: <b>{{$user['bpi']['USD']['rate']}}</b></span>
        </li>
        <li>
            <span>GBP Rate: <b>{{$user['bpi']['GBP']['rate']}}</b></span>
        </li>
        <li>
            <span>EUR Rate: <b>{{$user['bpi']['EUR']['rate']}}</b></span>
        </li>
     </ul>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <table border="2" style="display: flex;justify-content:center;align-item:center;padding:10vh">
        <caption>Employee record</caption>
        <tr>
            <th style="padding: 4vh">name</th>
            <th style="padding: 4vh">Count</th>
            <th style="padding: 4vh">gender</th>
            <th style="padding: 4vh">Probobility</th>          
        </tr>
        <tr>
            <td style="padding: 4vh">{{$user["name"]}}</td>
            <td style="padding: 4vh">{{$user["count"]}}</td>
            <td style="padding: 4vh">{{$user["gender"]}}</td>
            <td style="padding: 4vh">{{$user["probability"]}}</td>
        </tr>
    </table>
    <h2>my api fetching is successfully</h2>
     <h1>{{print_r($user)}}</h1>
      
     <h1>user list </h1>
     <span>name: <b>{{$user["name"]}}</b></span>
     <span>gender: <b>{{$user["count"]}}</b></span>
     <span>: <b>{{$user["gender"]}}</b></span>
     <span>name: <b>{{$user["probability"]}}</b></span>
</body>
</html>
