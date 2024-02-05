<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HorsesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VetsSupplierController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\BookingsController;

use App\Http\Controllers\HorseController;
use App\Http\Controllers\StableController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\AdminBookingController;

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


Route::get('/horses', [HorsesController::class, 'index'])->name('horses.index');

// In routes/web.php



Route::get('/stable', [StableController::class, 'index'])->name('stable.index');



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

    Route::get('/admin/bookings', [AdminBookingController::class, 'index'])->name('admin.bookings.index');
    Route::patch('/admin/bookings/{booking}/approve', [AdminBookingController::class, 'approve'])->name('admin.bookings.approve');
    Route::patch('/admin/bookings/{booking}/decline', [AdminBookingController::class, 'decline'])->name('admin.bookings.decline');

    //analytics route
    Route::get('/admin/analytics', [App\Http\Controllers\AdminAnalyticsController::class, 'index'])->name('admin.analytics');
});

// Stable Manager specific routes
Route::middleware(['auth', 'role:Stable Manager'])->group(function () {
    Route::get('/stablemanager/home', function () {
        return view('stablemanager.home');
    })->name('stablemanager.home');
    Route::get('/stablemanager/horses', [HorsesController::class, 'index'])->name('stablemanager.horses');
    Route::get('/stablemanager/stable', [StableController::class, 'index'])->name('stablemanager.stable');
    Route::get('/stablemanager/staff', [StaffController::class, 'index'])->name('stablemanager.staff');
    Route::get('/stablemanager/vets-supplier', [VetsSupplierController::class, 'index'])->name('stablemanager.vetssupplier');
    Route::get('/stablemanager/payments', [PaymentsController::class, 'index'])->name('stablemanager.payments');
    Route::get('/stablemanager/notifications', [NotificationsController::class, 'index'])->name('stablemanager.notifications');
});
// Customer specific routes
Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/customer/home', function () {
        return view('customer.home');
    })->name('customer.home');
    Route::get('/customer/bookings', [BookingsController::class, 'index'])->name('customer.bookings');
    Route::post('/customer/bookings', [BookingsController::class, 'store'])->name('submitBooking');
    Route::get('/customer/resources', [ResourcesController::class, 'index'])->name('customer.resources');
    Route::get('/customer/horse', [HorseController::class, 'index'])->name('customer.horse');
    Route::get('/customer/events', function () {return view('customer.events');})->name('customer.events');
});