<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');
Route::get('/kontak-alamat', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');
Route::get('/licensing', function () {
    return view('pages.licensing');
})->name('licensing');
Route::get('/menu/{id}', [MenuController::class, 'show']);
Route::post('/testimonials', [TestimonialController::class, 'store'])
    ->name('testimonials.store');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    Route::middleware('auth:admin')->group(function () {

        // Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/*', [AuthController::class, 'layout'])->name('layout');

        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

        Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
        Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

        Route::get('/menu', [MenuController::class, 'create'])->name('menu.admin.create');
        Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
        Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

        Route::get('/package', [PackageController::class, 'index'])->name('package.index');
        Route::post('/package', [PackageController::class, 'store'])->name('package.store');
        Route::delete('/package/{id}', [PackageController::class, 'destroy'])->name('package.destroy');
        Route::put('/package/{id}', [PackageController::class, 'update'])->name('package.update');
        Route::get('/users/create', [AuthController::class, 'create'])->name('create');
        Route::post('/users/create', [AuthController::class, 'store'])->name('store');
        
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
