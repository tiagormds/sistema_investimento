

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

