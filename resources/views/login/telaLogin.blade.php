<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <title>Login | INVESTINDO</title>
</head>
<body>

<div class="background">

</div>



<section class="login" id="conteudo-view">

    <h1>Investindo</h1>
    <h3>Nosso gerenciador de investimento</h3>

    {!! Form::open(['route'=>'login.entrar', 'method'=>'post']) !!}

    <p>Acesse o Sistema</p>

    <label for="">
        {!! Form::text('username', null, ['class'=>'input', 'placeholder'=>'Usuário']) !!}
    </label>

    <label for="">
        {!! Form::password('password', ['placeholder'=>'Senha']) !!}
    </label>

    {!! Form::submit('Entrar') !!}


    {!! Form::close() !!}
</section>

</body>
</html>