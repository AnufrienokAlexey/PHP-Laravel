<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Модуль 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">Практическая работа Ануфриенок Алексея</h2>
    <form class="form-floating" action="{{ route('store') }}" method="post">
        @csrf
        <div class="m-3">
            <label for="name" class="form-label">Введите имя:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Иван"/>
        </div>
        <div class="m-3">
            <label for="surname" class="form-label">Введите фамилию:</label>
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Иванов"/>
        </div>
        <div class="m-3">
            <label for="email" class="form-label">Введите адрес электронной почты:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="ivanov@gmail.com"/>
        </div>
        <div class="m-3">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
</body>
</html>
