<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderMasterController;
use App\Http\Controllers\CustomerController;

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
    return view('landing');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/customer/register', function () {
    return view('auth.customer-register');
})->name('customer.register');

// Creating a group middleware for chefs
Route::group(['middleware' => ['auth']], function () {

    Route::get('chef/dashboard', function () {
        return view('chefs.index');
    })->middleware(['auth']);

    // Will chages these routes to resources

    // Food Category Routes
    Route::get('chef/category', [CategoryController::class, 'index'])->name('category');
    Route::post('chef/category', [CategoryController::class, 'store'])->name('category.store');
    // Dishes Routes
    Route::get('chef/dish', [DishController::class, 'index'])->name('dish');
    Route::post('chef/dish', [DishController::class, 'store'])->name('dish.store');

    // Order Routes
    Route::get('chef/orders', [OrderMasterController::class, 'index'])->name('order');
    Route::post('chef/orders', [OrderMasterController::class, 'store'])->name('order.store');
    Route::get('chef/orders/show/{id}', [OrderMasterController::class, 'show'])->name('order.show');

});

// Creating a group middleware for customers
Route::group(['middleware' => ['auth']], function () {

    Route::get('/customer/dashboard', [CustomerController::class, 'index']);

    Route::get('customer/chefs/detail/{id}', [CustomerController::class, 'show']);

    // Will chages these routes to resources

    // Food Category Routes
    Route::get('chef/category', [CategoryController::class, 'index'])->name('category');
    Route::post('chef/category', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/customer/dishes/add-to-cart/{id}', [CustomerController::class, 'addToCart']);

    Route::get('/customer/dishes/cart/checkout', [CustomerController::class, 'cartCheckout']);

    Route::get('/customer/dishes/cart/proceed-heckout', [CustomerController::class, 'proceedCheckout']);

});


require __DIR__.'/auth.php';
