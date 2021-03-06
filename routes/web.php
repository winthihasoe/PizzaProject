<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[PizzaController::class, 'index'])->name('home');
Route::post('/',[PizzaController::class, 'insert'])->name('insert');
Route::middleware(['auth:sanctum', 'verified'])->get('/pizzas', [PizzaController::class, 'pizzas'])->name('pizzas');
// delete data 
Route::get('/pizzas/{id}', [PizzaController::class, 'delete'])->name('delete');

// edit order 
Route::get('/pizzas/edit/{id}',[PizzaController::class,'edit'])->name('edit');

//update order
Route::post('/update/{id}',[PizzaController::class,'update'])->name('update');

//
Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');