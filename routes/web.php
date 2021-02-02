<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InventoryLocationController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('pages.dashboard');

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');

    Route::prefix('inventory')->group(function () {
        Route::get('/items', [ItemController::class, 'index'])->name('items.index');
        Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
        Route::post('/items', [ItemController::class, 'store'])->name('items.store');
        Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
        Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
        Route::patch('/items/{item}', [ItemController::class, 'update'])->name('items.update');
        Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

        Route::get('/locations', [InventoryLocationController::class, 'index'])->name('locations.index');
        Route::get('/locations/create', [InventoryLocationController::class, 'create'])->name('locations.create');
        Route::post('/locations', [InventoryLocationController::class, 'store'])->name('locations.store');
        Route::get('/locations/{inventoryLocation}', [InventoryLocationController::class, 'show'])->name('locations.show');
        Route::get('/locations/{inventoryLocation}/edit', [InventoryLocationController::class, 'edit'])->name('locations.edit');
        Route::patch('/locations/{inventoryLocation}', [InventoryLocationController::class, 'update'])->name('locations.update');
        Route::delete('/locations/{inventoryLocation}', [InventoryLocationController::class, 'destroy'])->name('locations.destroy');
    });


    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::patch('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});
