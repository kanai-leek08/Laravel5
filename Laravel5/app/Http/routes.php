<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('members', 'MemberController');

Route::get('members/{id}/delete', [
    'as' => 'members.delete',
    'uses' => 'MemberController@destroy',
]);

Route::get('api/test',function(){

    $res['status'] = "OK";
    $res['message'] = "No problem";

    return Response::json($res);
});
