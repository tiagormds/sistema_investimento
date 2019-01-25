<?php

Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@telaLogin']);
Route::post('/login', ['as'=>'login.entrar', 'uses'=>'LoginController@fazerLogin']);
