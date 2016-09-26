<?php

Route::get('/','Web\LayoutController@layout');

Route::get('register','Web\FormController@register');

Route::get('dashboard','Web\LayoutController@dashboard');