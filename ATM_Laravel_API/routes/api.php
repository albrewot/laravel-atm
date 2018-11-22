<?php

use Illuminate\Http\Request;
use App\Models\User;

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
 
Route::get('users/{id}', function($id) {
    return User::find($id);
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/user', function (Request $request) { return $request->user();});
    Route::get('/user/{id}/balance', 'TransactionController@balance');
    Route::post('/user/{id}/deposit', 'TransactionController@deposit');
    Route::post('/user/{id}/withdraw', 'TransactionController@withdraw');
});

Route::get('users', function() { return User::all(); });
Route::post('login', 'Auth\LoginController@login');
