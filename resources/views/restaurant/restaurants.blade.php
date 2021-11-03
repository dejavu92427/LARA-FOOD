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
    餐廳列表頁
    @foreach ($resList as $v)
    <ul>
    <li><a href="/restaurants/detail/{{$v ->id}}">
        <h4>{{$v ->name}}</h4>
        <p>{{$v ->city}}</p>
        </a>
        <p>{{$v ->content}}</p>
    </li>
    </ul>
    @endforeach
</body>
</html>