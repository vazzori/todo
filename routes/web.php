<?php

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

//Route::get('/', 'App\Http\Controllers\TasksController@index');
Route::get('/', [\App\Http\Controllers\TasksController::class, 'index']);
Route::get('/tasks', [\App\Http\Controllers\TasksController::class, 'index']);
Route::get('/tasks/create', [\App\Http\Controllers\TasksController::class, 'create']);

Route::post('/tasks', [\App\Http\Controllers\TasksController::class, 'store']);

Route::patch('/tasks/{id}', [\App\Http\Controllers\TasksController::class, 'update']);

Route::delete('/tasks/{id}', [\App\Http\Controllers\TasksController::class, 'delete']);

//Route::get('tasks/create', function () {
//    return view('tasks.create');
//});

//Route::group(['prefix' => 'tasks'], function (){
//    Route::get('/tasks/create', \App\Http\Controllers\TasksController::class)->name('tasks.create');
//});
