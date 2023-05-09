<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TaskController::class, 'index'])->name('home');

Route::group(['prefix' => 'task'], function() {
    Route::post('store', [TaskController::class, 'store'])->name('save-task');
    Route::get('edit/{id}', [TaskController::class, 'edit'])->name('edit-task');
    Route::post('update', [TaskController::class, 'update'])->name('update-task');
    Route::get('delete/{id}', [TaskController::class, 'delete'])->name('delete-task');
    Route::post('sort-priority',[TaskController::class, 'updateOrder']);
});

Route::group(['prefix' => 'projects'], function() {
    Route::get('index',[ProjectController::class, 'index'])->name('projects');
    Route::get('create', [ProjectController::class, 'create'])->name('create-project');
    Route::post('store', [ProjectController::class, 'store'])->name('save-project');
    Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('edit-project');
    Route::post('update', [ProjectController::class, 'update'])->name('update-project');
    Route::get('delete/{id}', [ProjectController::class, 'delete'])->name('delete-project');
});





