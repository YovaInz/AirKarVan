<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [BackendController::class, 'getProducts']);

Route::post('/producto', [BackendController::class, 'postProduct']);

Route::get('/producto/{id}', [BackendController::class, 'getProduct']);

Route::get('/user/{id}', [BackendController::class, 'getUser']);
