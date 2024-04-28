<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
// ////////////////// Home Pages /////////////////////////
Route::get('/', function () {return view('home');});
Route::get('/about-us', function () {return view('about_us');});


// ////////////////// Authentication /////////////////////////
Route::get('/auth-choice', function () {return view('auth.auth_choice');})->name('auth.choice');
Route::get('/brand-register', function () {return view('auth.brand_register');});
Route::get('/user-register', function () {return view('auth.user_register');});
Route::get('/user-login', function () {return view('auth.user_login');});
Route::get('/brand-login', function () {return view('auth.brand_login');});
Route::get('/admin', function () {return view('auth.admin_login');});

Route::post('/user-register', [UserController::class, 'storeUser'])->name('user.store');
Route::post('/brand-register', [UserController::class, 'storeBrandOwner'])->name('brandOwner.store');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('user.login');
Route::post('/brand-login', [UserController::class, 'brandOwnerLogin'])->name('brand.login');
Route::post('/admin-login', [UserController::class, 'adminLogin'])->name('admin.login');
Route::get('/user-page', [UserController::class, 'userPage'])->name('user.page');
Route::get('/brand-owner-page', [UserController::class, 'brandOwnerPage'])->name('brandOwner.page');
Route::get('/admin-page', [UserController::class, 'adminPage'])->name('admin.page');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


// ////////////////// Brands /////////////////////////
Route::get('/categories',[BrandController::class, 'categories'])->name('brands.categories');
Route::get('/clothes',[BrandController::class, 'listClothes'])->name('brands.clothes');
Route::get('/perfumes',[BrandController::class, 'listPerfumes'])->name('brands.perfumes');
Route::get('/cafes',[BrandController::class, 'listCafes'])->name('brands.cafes');
Route::get('/restaurants',[BrandController::class, 'listRestaurants'])->name('brands.restaurants');
Route::post('/favorites/{brand}',[BrandController::class, 'addFavorite'])->name('addToFavorites');
Route::post('/remove-favorites/{brand}',[BrandController::class, 'removeFavorite'])->name('removeFromFavorites');
Route::delete('/delete-brand/{brand}',[BrandController::class, 'deleteBrand'])->name('deleteBrand');
Route::post('/add-brand',[BrandController::class, 'addBrand'])->name('brand.store');
Route::get('/edit-brand/{brand}',[BrandController::class, 'editBrand'])->name('brand.edit');
Route::put('/update-brand/{brand}',[BrandController::class, 'updateBrand'])->name('brand.update');























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
