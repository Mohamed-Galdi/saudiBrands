<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/brands', function () {
    return view('brands');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/auth-choice', function () {
    return view('auth.auth_choice');
});
Route::get('/brand-register', function () {
    return view('auth.brand_register');
});
Route::get('/user-register', function () {
    return view('auth.user_register');
});

Route::get('/user-login', function () {
    return view('auth.user_login');
});
Route::get('/brand-login', function () {
    return view('auth.brand_login');
});
Route::get('/admin', function () {
    return view('auth.admin_login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
