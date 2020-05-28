<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/platos', function ($id) {
    $platos=DB::table('platos')->get();
    return $platos;
});

Route::get('/platos', 'Homecontroller@index');
Route::post('/platos', 'Homecontroller@store');
Route::put('/platos/{id}', 'Homecontroller@update');
