<?php

use App\Http\Controllers\addProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileController2;
use App\Http\Controllers\pubscontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ComposeController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\kanbanController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\readController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ContactsController;

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
Route::get('/gallery',[galleryController::class, 'index']);
Route::get('/kanban',[kanbanController::class, 'index']);
Route::get('/mailbox',[InboxController::class, 'index']);
Route::get('/compose',[ComposeController::class, 'index']);
Route::get('/read-mail',[readController::class, 'index']);
Route::get('/projects',[projectsController::class, 'index']);
Route::get('/project-add',[addProjectController::class, 'index']);
Route::get('/teams',[TeamsController::class, 'index']);
Route::get('/contacts',[ContactsController::class, 'index']);


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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
// roles 
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/enseignant/dashboard', [EnseignantController::class, 'index'])->name('enseignant.dashboard');
    Route::get('/membre/dashboard', [MembreController::class, 'index'])->name('membre.dashboard');
});
//project routes 
Route::get('/project-add',[addProjectController::class, 'index']);
Route::post('/project-add', [addProjectController::class, 'store'])->name('project-ajout');
