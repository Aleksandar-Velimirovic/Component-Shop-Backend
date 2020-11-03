<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/verification/{token}', [LoginController::class, 'verification']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/products', [ProductController::class, 'getPopularProductsOfAnyCategory']);
Route::get('/products/search/{searchTerm}', [ProductController::class, 'searchProductsOfAnyCategory']);
Route::get('/ratings', [ProductController::class, 'setProductRating']);
Route::get('/categories', [ProductCategoryController::class, 'getCategories']);
Route::get('/category/attributes/filters/{categoryId}', [ProductCategoryController::class, 'getProductCategoryFiltersById']);
Route::get('/products/category/{category_id}', [ProductController::class, 'getProductsByCategoryId']);
Route::get('/rating', [ProductController::class, 'setProductRating']);





