<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Products\Products;
use App\Http\Controllers\Admin\Products\Product;

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

// Route::get('/admin/products/product/edit/{id}', [Products::class, 'get_product']);
// Route::get('/admin/products/product/add', [Products::class, 'add_product']);

Route::resource('/products', Product::class);
