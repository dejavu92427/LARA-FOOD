<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <h1>我的訂位頁</h1>
    @foreach ($myReservation as $k => $v)
    <li>第{{$k}}篇
    <p>餐廳：{{$v->restaurant['name']}}</p>
    <p>訂位人：{{$v->user['name']}}</p>
    </li>
    @endforeach



    
</body>
</html>