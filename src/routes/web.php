<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Models\Category;
use App\Models\Contact;
use App\Models\User;

use Laravel\Fortify\Features;

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

Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'index']);
});

if (Features::enabled(Features::registration())) {
    Route::get('/register', [UserController::class, 'create'])
        ->middleware(['guest'])
        ->name('register');

    Route::post('/register', [UserController::class, 'store'])
    ->middleware(['guest'])
    ->name('register.store');
}

Route::get('/login', [UserController::class, 'showLoginForm'])
    ->middleware(['guest'])
    ->name('login');
Route::post('/login', [UserController::class, 'login'])
    ->middleware(['guest']);

