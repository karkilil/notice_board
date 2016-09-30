<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

$api=app('Dingo\Api\Routing\Router');

$api->version('v1',['namespace'=>'Notice\Http\Controllers\Api'],function ($api){
    
    $api->get('faculty',['uses'=>'UserController@getFaculty']);
    $api->get('semester',['uses'=>'UserController@getSemester']);

    $api->any('register',['uses'=>'UserController@getRegister']);
});