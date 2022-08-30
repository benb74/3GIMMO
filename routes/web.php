<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index_property');
Route::get('/addProperty', [MainController::class, 'addProperty'])->name('add_property');
Route::post('/addProperty', [MainController::class, 'saveProperty'])->name('save_property');
Route::get('/editProperty/{id}', [MainController::class,'editProperty'])->name('edit_property');
Route::get('/deleteProperty/{id}', [MainController::class,'deleteProperty'])->name('delete_property');
Route::post('/updateProperty', [MainController::class, 'updateProperty'])->name('update_property');
