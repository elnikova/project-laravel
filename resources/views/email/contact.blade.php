<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Письмо с сайта "Фабрика мебели"</p>
    <p>Клиент: {{ $data['name'] }}</p> 
    <p>Email: {{ $data['email'] }}</p>
    <p>Сообщение: {{ $data['message'] }}</p>
</body>
</html>