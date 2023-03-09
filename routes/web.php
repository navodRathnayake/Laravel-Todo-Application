<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('/todo')->group(function (){
    Route::get('/',[ToDoController::class,'index'])->name('todo');
    Route::post('/store',[ToDoController::class,'store'])->name('todo.store');
    Route::get('/{task_id}/delete',[ToDoController::class,'delete'])->name('todo.delete');
    Route::get('/{task_id}/update',[ToDoController::class,'update'])->name('todo.update');
});