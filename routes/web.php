<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pubscontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//pubs route
 Route::get('/' , [pubscontroller::class, 'index']);
 Route::get('/index2' , [HomeController::class, 'index']);
//  Route::get('/index2' , [pubscontroller::class, 'index']);
//  Route::get('/' , [HomeController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');
// Route::get('/index2', function(){
//     return view('index2');
// });
Route::get('/Recherche',function(){
    return view('Recherche');
});
Route::get('/Publications',function(){
    return view('Publications');
});

Route::get('/', function () {
    return view('welcome');
});
