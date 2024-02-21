<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [CategoryController::class,'show'])->name('index');

Route::get('/dashboard', [CategoryController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('menu/{category?}',[PostController::class,'show'])->name('category');
Route::get('searchA',[CategoryController::class,'search'])->name('search');
Route::get('info/{id}',[ExtraController::class,'info'])->name('info');
Route::post('store',[ExtraController::class,'store'])->name('contact.store');

Route::middleware('auth')->group(function (){
    Route::resource('category',CategoryController::class);
    Route::resource('post',PostController::class);
    Route::get('search' ,[PostController::class,'search']);
    Route::get('contact' ,[ExtraController::class,'extra'])->name('contact');
    Route::delete('contact/delete/{id}' ,[ExtraController::class,'destroy'])->name('contact.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
