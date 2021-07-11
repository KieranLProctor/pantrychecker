<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ItemInfoController;
use App\Http\Controllers\NotificationController;
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

Route::view('/', 'welcome');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard', 'pages.dashboard')->name('pages.dashboard');

    Route::resource('/addresses', AddressController::class);

    Route::resource('/companies', CompanyController::class);

    Route::resource('/items', ItemController::class);

    Route::prefix('inventory')->group(function () {
        Route::get('/items', [ItemInfoController::class, 'index'])->name('item-infos.index');
        Route::get('/items/create', [ItemInfoController::class, 'create'])->name('item-infos.create');
        Route::post('/items', [ItemInfoController::class, 'store'])->name('item-infos.store');
        Route::get('/items/{itemInfo}', [ItemInfoController::class, 'show'])->name('item-infos.show');
        Route::get('/items/{itemInfo}/edit', [ItemInfoController::class, 'edit'])->name('item-infos.edit');
        Route::patch('/items/{itemInfo}', [ItemInfoController::class, 'update'])->name('item-infos.update');
        Route::delete('/items/{itemInfo}', [ItemInfoController::class, 'destroy'])->name('item-infos.destroy');

        Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
        Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
        Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
        Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
        Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
        Route::patch('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
        Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');
    });

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');
});
