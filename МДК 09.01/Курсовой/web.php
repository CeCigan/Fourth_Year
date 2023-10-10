<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Роутинг переключения страниц:
Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/diets', function () {
    return view('diets');
})->name('diets');

//Роутинг загрузки контента
Route::get('/diets', [ContentController::class, 'loadFoods']);
