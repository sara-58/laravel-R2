<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('addPlace', [PlacesController::class, 'create']);
Route::get('places', [PlacesController::class, 'index']);
Route::post('Places', [PlacesController::class, 'store'])->name('storePlace');
Route::get('place', [PlacesController::class, 'place']);
Route::get('blog1', [PlacesController::class, 'blog1']);
