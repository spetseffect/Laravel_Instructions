<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Инструкции')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <style>
            body{margin-top: 10px;}
            label{display: block;}
            h1{margin-top: 20px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName()=='home'?' active':'' }}" href="{{ route('home') }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Route::currentRouteName()=='instruct.create'?' active':'' }}" href="{{ route('instruct.create') }}">Новая инструкция</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link{{Route::current()==route('home')?' active':''}}" href="#">Авторизация</a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
            @yield('content')
        </div>

    </body>
</html>
