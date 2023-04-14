<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileController2;
use App\Http\Controllers\pubscontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\TimelineController;

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

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/' , [pubscontroller::class, 'index'])->name('welcome');
Route::get('/index2' , [HomeController::class, 'index']);
Route::get('/profile',[ProfileController2::class, 'index']);
Route::get('/timeline',[TimelineController::class, 'index']);
Route::get('/calendar',[CalendarController::class, 'index']);

//timeline
Route::get('/UI/timeline.blade.php',[TimelineController::class, 'index']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');

Auth::routes();

Route::get('/Recherche',function(){
    return view('Recherche');
});
Route::get('/Publications',function(){
    return view('Publications');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
// roles 
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/enseignant/dashboard', [EnseignantController::class, 'index'])->name('enseignant.dashboard');
    Route::get('/membre/dashboard', [MembreController::class, 'index'])->name('membre.destroy');
});