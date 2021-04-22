<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ServiceCategoryController;
use App\Http\Controllers\User\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//--------------------------------------------------------------------USER----------------------------------------------------------------------------
//Vendor
Route::get('/index', 'App\Http\Controllers\User\VendorController@index');
Route::get('/newVendor', 'App\Http\Controllers\User\VendorController@newVendor');
Route::get('/topVendor', 'App\Http\Controllers\User\VendorController@topVendor');
Route::get('/vendor/detail/{id}', 'App\Http\Controllers\User\VendorController@detail');
Route::get('/vendor/detail/plan/{id}', 'App\Http\Controllers\User\VendorController@detailPlan');
Route::get('/vendor/search', 'App\Http\Controllers\User\VendorController@search');
// Route::get('vendor/search','VendorController@showSearch');
// Route::post('vendor/search','VendorController@getSearch');

//Product
Route::get('/product/detail/{id}', 'App\Http\Controllers\User\ProductController@detail');

//Purpose
Route::get('/purpose', 'App\Http\Controllers\User\PurposesController@index');


//Service
Route::get('/service', 'App\Http\Controllers\User\ServiceCategoryController@index');
Route::get('/product1', [ServiceController::class, 'getAllCategory1']);
Route::get('/product11', [ServiceController::class, 'getAllCategory11']);
Route::get('/product2', [ServiceController::class, 'getAllCategory2']);
Route::get('/product21', [ServiceController::class, 'getAllCategory21']);
Route::get('/product3', [ServiceController::class, 'getAllCategory3']);
Route::get('/product31', [ServiceController::class, 'getAllCategory31']);
Route::get('/product41', [ServiceController::class, 'getAllCategory41']);
Route::get('/product4', [ServiceController::class, 'getAllCategory4']);
Route::get('/product5', [ServiceController::class, 'getAllCategory5']);
Route::get('/product51', [ServiceController::class, 'getAllCategory51']);

Route::get('/service/detail/{id}', [ServiceCategoryController::class, 'detail']);

//Cart
Route::get('/user/cart', [CartController::class, 'index']);

//Comment

Route::get('/totalComment/{id}', [CommentController::class, 'getCommentByVendor']);
Route::post('/addComment/{id}', [CommentController::class, 'addComment']);

//------------------------------------------------------------ADMIN---------------------------------------------------------------------------------------------------





































//-------------------------------------------------------------------------VENDOR-------------------------------------------------------------------------------------