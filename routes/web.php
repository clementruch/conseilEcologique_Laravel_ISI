<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\RessourcesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::delete('/user', [UserController::class, 'supprimerCompte'])->name('user.supprimerCompte');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::delete('/participants/{user}', [ParticipantsController::class, 'destroy'])->name('participants.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants');
    Route::post('/participants/{user}/promote', [ParticipantsController::class, 'promote'])->name('participants.promote');
    Route::post('/participants/{user}/demote', [ParticipantsController::class, 'demote'])->name('participants.demote');
});

Route::get('/cours', [CoursController::class, 'index'])->name('cours');

Route::get('/ressources', [RessourcesController::class, 'index'])->name('ressources');

Route::get('/contact', [ContactController::class, 'vueForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

require __DIR__.'/auth.php';
