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
    餐廳詳細頁

    <a href="/reservations">訂位頁</a>
            <h4>{{$res ->name}}</h4>
            <p>{{$res ->city}}</p>
            <p>{{$res ->content}}</p>

</body>
</html>