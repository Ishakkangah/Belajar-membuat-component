<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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


Route::prefix('admin')->middleware('auth')->group(function () {
    
});
Auth::routes();
 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('profile', [ProfileInformationController::class, '__invoke'])->name('__invoke');
Route::get('contact', [ContactController::class, 'create'])->name('create');
Route::post('contact', [ContactController::class, 'store'])->name('store'); 


Route::middleware('auth')->group(function () {
    Route::post('task', [TaskController::class, 'store'])->name('task.store');
    Route::delete('task/{Task:id}', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('task/{Task}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::patch('task/{Task:id}/update', [TaskController::class, 'update'])->name('task.update');
});
Route::get('task', [TaskController::class, 'index'])->name('task.index');
Route::get('task/{Task}', [TaskController::class, 'show'])->name('task.show');

Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/{User}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{User:username}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::patch('user/{User:username}/update', [UserController::class, 'update'])->name('user.update');


Route::get('tag/{Tag:slug}', [TagController::class, 'show'])->name('tag.index');