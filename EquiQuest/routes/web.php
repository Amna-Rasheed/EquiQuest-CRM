<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home');
    // User CRUD operations
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('/admin/users/create', [App\Http\Controllers\AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/admin/users/store', [App\Http\Controllers\AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/admin/users/edit/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/admin/users/update/{id}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.users.delete');

    // Horses CRUD operations
    Route::get('/admin/horses', [AdminController::class, 'listHorses'])->name('admin.horses.index');
    Route::get('/admin/horses/{id}', [AdminController::class, 'showHorse'])->name('admin.horses.show');
    Route::get('/horses/create', [AdminController::class, 'createHorse'])->name('admin.horses.create');
    Route::post('/admin/horses/store', [AdminController::class, 'storeHorse'])->name('admin.horses.store');
    Route::get('/admin/horses/edit/{id}', [AdminController::class, 'editHorse'])->name('admin.horses.edit');
    Route::put('/admin/horses/update/{id}', [AdminController::class, 'updateHorse'])->name('admin.horses.update');
    Route::delete('/admin/horses/delete/{id}', [AdminController::class, 'deleteHorse'])->name('admin.horses.delete');

});

// Stable Manager specific routes
Route::middleware(['auth', 'role:Stable Manager'])->group(function () {
    Route::get('/stablemanager/home', function () {
        return view('stablemanager.home');
    })->name('stablemanager.home');
});