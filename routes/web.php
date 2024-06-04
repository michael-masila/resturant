<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[HomeController::class,'homepage']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/users',[AdminController::class,'user']);
Route::get('/delete_user/{id}', [AdminController::class,'delete_user']);
Route::get('/foods',[AdminController::class,'food']);
Route::post('/post_food',[AdminController::class,'post_food']);
Route::get('/showfood',[AdminController::class,'showfood']);
Route::get('/delete_item/{id}',[AdminController::class,'item_delete']);
Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/show_reservation',[AdminController::class,'showreservation']);

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
