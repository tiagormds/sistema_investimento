<?php

Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@telaLogin']);
Route::post('/login', ['as'=>'login.entrar', 'uses'=>'DashboardController@auth']);
//Route::post('/login', ['as'=>'user.dashboard', 'uses'=>'DashboardController@index']);
