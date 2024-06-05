<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Landing;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Role;
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

Route::get('/', [Landing::class, 'index'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/User', [UserController::class, 'index'])->name('User-Index');
    Route::post('/User/Store', [UserController::class, 'store'])->name('User-Store');
    Route::put('/User/{id}', [UserController::class, 'update'])->name('User-Update');
    Route::delete('/User/{id}', [UserController::class, 'destroy'])->name('User-Delete');
})->middleware(['auth', 'verified', 'role:Admin']);

Route::middleware('auth')->group(function () {
    Route::get('/Category', [CategoryController::class, 'index'])->name('Category-Index');
    Route::post('/Category/Store', [CategoryController::class, 'store'])->name('Category-Store');
    Route::put('/Category/{id}', [CategoryController::class, 'update'])->name('Category-Update');
    Route::delete('/Category/{id}', [CategoryController::class, 'destroy'])->name('Category-Delete');
})->middleware(['auth', 'verified', 'role:Admin']);

Route::middleware('auth')->group(function () {
    Route::get('/Product', [ProductController::class, 'index'])->name('Product-Index');
    Route::post('/Product/Store', [ProductController::class, 'store'])->name('Product-Store');
    Route::put('/Product/{id}', [ProductController::class, 'update'])->name('Product-Update');
    Route::delete('/Product/{id}', [ProductController::class, 'destroy'])->name('Product-Delete');
})->middleware(['auth', 'verified', 'role:Admin']);

Route::middleware('auth')->group(function () {
    Route::get('/Role', [UserController::class, 'indexrole'])->name('Role-Index');
    Route::post('/Role/Store', [UserController::class, 'storerole'])->name('Role-Store');
    Route::put('/Role/{id}', [UserController::class, 'updaterole'])->name('Role-Update');
    Route::delete('/Role/{id}', [UserController::class, 'destroyrole'])->name('Role-Delete');
})->middleware(['auth', 'verified', 'role:Admin']);

require __DIR__.'/auth.php';
