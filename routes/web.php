<?php

Route::get('/',['uses'=>'Web\LayoutController@layout','as'=>'home']);

Route::get('register','Web\AuthController@showRegisterForm');
Route::post('userRegister',['uses'=>'Web\AuthController@showRegisterForm','as'=>'userReg']);




Route::get('dashboard','Web\LayoutController@dashboard');