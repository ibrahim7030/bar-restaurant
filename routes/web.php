<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PositionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/create/user', [UserController::class, 'create'])->name('user.create');

Route::get('/position', [PositionController::class, 'index'])->name('positions.index');
Route::get('/create/position', [PositionController::class, 'create'])->name('position.create');
Route::post('/add-position', [PositionController::class, 'position'])->name('position.store');
Route::get('/edit-position/{id}', [PositionController::class, 'edit']);
Route::put('/update-position/{id}', [PositionController::class, 'update']);
Route::get('/delete-position/{id}', [PositionController::class, 'destroy']);

Route::get('/employee', [employeeController::class, 'index'])->name('employees.index');
Route::get('/create/employee', [employeeController::class, 'create'])->name('employee.create');
Route::post('/add-employee', [employeeController::class, 'store'])->name('employee.store');
Route::get('/edit-employee/{id}', [employeeController::class, 'edit']);
Route::put('/update-employee/{id}', [employeeController::class, 'update']);
Route::get('/delete-employee/{id}', [employeeController::class, 'destroy']);

Route::get('/store', [StoreController::class, 'index'])->name('stores.index');
Route::get('/create/store', [StoreController::class, 'create'])->name('store.create');
Route::post('/add-store', [StoreController::class, 'store'])->name('store.store');
Route::get('/edit-store/{id}', [StoreController::class, 'edit']);
Route::put('/update-store/{id}', [StoreController::class, 'update']);
Route::get('/delete-store/{id}', [StoreController::class, 'destroy']);

Route::get('/table', [TableController::class, 'index'])->name('tables.index');
Route::get('/create/table', [TableController::class, 'create'])->name('table.create');
Route::post('/add-table', [TableController::class, 'store'])->name('table.store');
Route::get('/edit-table/{id}', [TableController::class, 'edit']);
Route::put('/update-table/{id}', [TableController::class, 'update']);
Route::get('/delete-table/{id}', [TableController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/create/category', [CategoryController::class, 'create'])->name('category.create');
Route::post('/add-category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('/update-category/{id}', [CategoryController::class, 'update']);
Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);

Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/create/product', [ProductController::class, 'create'])->name('product.create');
Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('/update-product/{id}', [ProductController::class, 'update']);
Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);


