<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | INVESTINDO</title>
    @yield('css-view')
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
</head>
<body>

    @include('templates.menu-lateral')
    @yield('conteudo-view')
    @yield('js-view')

</body>
</html>
