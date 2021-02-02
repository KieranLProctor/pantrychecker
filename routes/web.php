<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InventoryLocationController;
use App\Http\Controllers\ItemController;
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
    Route::get('/dashboard', function() {
        return view('pages.dashboard');
    })->name('pages.dashboard');

    Route::get('/inventory/items', [ItemController::class, 'index'])->name('items.index');
    Route::get('/inventory/items/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/inventory/items', [ItemController::class, 'store'])->name('items.store');
    Route::get('/inventory/items/{item}', [ItemController::class, 'show'])->name('items.show');
    Route::get('/inventory/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::patch('/inventory/items/{item}', [ItemController::class, 'update'])->name('items.update');
    Route::delete('/inventory/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

    Route::get('/inventory/locations', [InventoryLocationController::class, 'index'])->name('locations.index');
    Route::get('/inventory/locations/create', [InventoryLocationController::class, 'create'])->name('locations.create');
    Route::post('/inventory/locations', [InventoryLocationController::class, 'store'])->name('locations.store');
    Route::get('/inventory/locations/{inventoryLocation}', [InventoryLocationController::class, 'show'])->name('locations.show');
    Route::get('/inventory/locations/{inventoryLocation}/edit', [InventoryLocationController::class, 'edit'])->name('locations.edit');
    Route::patch('/inventory/locations/{inventoryLocation}', [InventoryLocationController::class, 'update'])->name('locations.update');
    Route::delete('/inventory/locations/{inventoryLocation}', [InventoryLocationController::class, 'destroy'])->name('locations.destroy');

    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::patch('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
});
