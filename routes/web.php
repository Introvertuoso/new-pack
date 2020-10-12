<?php

use App\Http\Controllers\AbilityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RawMaterialController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    Route::post('/users/store', [UserController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/users/{user}/update', [UserController::class, 'update']);
    Route::delete('/users/{user}/delete', [UserController::class, 'destroy']);

    Route::get('/clients', [ClientController::class, 'index'])->name('clients');
    Route::get('/clients/create', [ClientController::class, 'create']);
    Route::get('/clients/{client}', [ClientController::class, 'show']);
    Route::get('/clients/{client}/edit', [ClientController::class, 'edit']);
    Route::post('/clients/store', [ClientController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/clients/{client}/update', [ClientController::class, 'update']);
    Route::delete('/clients/{client}/delete', [ClientController::class, 'destroy']);

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/{product}', [ProductController::class, 'show']);
    Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
    Route::post('/products/store', [ProductController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/products/{product}/update', [ProductController::class, 'update']);
    Route::delete('/products/{product}/delete', [ProductController::class, 'destroy']);

    Route::get('/raw-materials', [RawMaterialController::class, 'index'])->name('raw-materials');
    Route::get('/raw-materials/create', [RawMaterialController::class, 'create']);
    Route::get('/raw-materials/{material}', [RawMaterialController::class, 'show']);
    Route::get('/raw-materials/{material}/edit', [RawMaterialController::class, 'edit']);
    Route::post('/raw-materials/store', [RawMaterialController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/raw-materials/{material}/update', [RawMaterialController::class, 'update']);
    Route::delete('/raw-materials/{material}/delete', [RawMaterialController::class, 'destroy']);

    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/orders/create', [OrderController::class, 'create']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit']);
    Route::post('/orders/store', [OrderController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/orders/{order}/update', [OrderController::class, 'update']);
    Route::delete('/orders/{order}/delete', [OrderController::class, 'destroy']);

    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::get('/roles/create', [RoleController::class, 'create']);
    Route::get('/roles/{role}', [RoleController::class, 'show']);
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit']);
    Route::post('/roles/store', [RoleController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/roles/{role}/update', [RoleController::class, 'update']);
    Route::delete('/roles/{role}/delete', [RoleController::class, 'destroy']);

    Route::get('/abilities', [AbilityController::class, 'index'])->name('abilities');
    Route::get('/abilities/create', [AbilityController::class, 'create']);
    Route::get('/abilities/{ability}', [AbilityController::class, 'show']);
    Route::get('/abilities/{ability}/edit', [AbilityController::class, 'edit']);
    Route::post('/abilities/store', [AbilityController::class, 'store']);
    // TODO: Watch out for these last two
    Route::put('/abilities/{ability}/update', [AbilityController::class, 'update']);
    Route::delete('/abilities/{ability}/delete', [AbilityController::class, 'destroy']);
});




