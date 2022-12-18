<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EquipmentsController;

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

//Auth routes
Route::get('/',[AuthController::class, 'loginForm'])->name('login'); 
Route::post('/',[AuthController::class, 'login']); 
Route::get('/register',[AuthController::class, 'registerForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::group(['middleware'=> ['auth', 'verified']],function(){
    
    Route::prefix('equipments')->group(function(){
        Route::controller(EquipmentsController::class)->group(function (){
            Route::get('/index', 'index')->name('admin-index')->middleware('role:admin');
            Route::get('/uindex', 'uindex')->name('user-index');
            Route::get('/create', 'create')->name('add-to-inventory')->middleware('role:admin');
            Route::get('/update/{equipment}', 'update')->name('update-item')->middleware('role:admin');
            Route::get('/delete/{equipment}', 'delete')->name('delete-item')->middleware('role:admin');
            Route::get('/like/{equipment}', 'like')->name('like');
            Route::get('/add-to-cart/{equipment}', 'addToCart')->name('add-to-cart')->middleware('role:customer');
        });
    });

    Route::controller(SiteController::class)->group(function (){
        Route::get('/home', 'home')->name('home')->middleware('role:customer');
        Route::get('/cart', 'cart')->name('cart')->middleware('role:customer');
        Route::get('/checkout', 'checkout')->name('checkout')->middleware('role:customer');
    });
    
});










