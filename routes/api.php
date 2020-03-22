<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//Uso il metodo POST nelle API perché non voglio che l'utente veda i dati nel browser
Route::namespace('Api')->group(function () {
    Route::post('/students','StudentController@all');
    Route::post('/students/ages','StudentController@getAge');
    Route::post('/students/ages/{eta}','StudentController@getForAge');
    Route::post('/students/filter','StudentController@filter');
});
