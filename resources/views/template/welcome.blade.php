<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('/img/free-icon-russia-2104785.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Гимназия №8 имени Льва Таикешева</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary container">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="/">МОАУ "Гимназия №8 имени Льва Таикешева"</a>
            <p>г. Оренбург</p>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О школе</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('informations')}}">Полезная информация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news')}}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="mt-5 bg-white">
    @yield('content')
</div>
<footer class="bg-dark text-white">
<div class="row container mx-5">
    <div class="col-lg-2">
        <p>Телефон</p>
        <p>8 (3532) 63-70-03</p>
    </div>
    <div class="col-lg-2">
        <p>Факс</p>
        <p>8 (123) 00-00-00</p>
    </div>
    <div class="col-lg-2">
        <p>E-mail</p>
        <p>44@orenschool.ru</p>
    </div>
    <div class="col-lg-4">
    </div>
    <div class="col-lg-2">
        <p>Политика
            конфиденциальности</p>
    </div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
