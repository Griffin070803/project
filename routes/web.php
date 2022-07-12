<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
    return view('');
});

Route::get('/', [HomeController::class, 'master'])->name('master');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/information', [HomeController::class, 'information'])->name('information');

Route::get('login', [LoginController::class, 'getlogin'])->name('getlogin');
Route::post('login', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register',[RegisterController::class,'getRegister'])->name('getRegister');
Route::post('/store',[CartController::class,'storeCart'])->name('storeCart');
Route::get('/send-email/{id}',[CartController::class,'sendEmail'])->name('sendEmail');
Route::get('/take-email/{id}',[CartController::class,'takeEmail'])->name('takeEmail');

//Cart
Route::get('/cart',[CartController::class,'index'])->name('index');
Route::get('them-vao-gio-hang/{id}',[CartController::class,'addToCart'])->name('addToCart');
Route::get('gio-hang',[CartController::class,'cart'])->name('cart');

Route::prefix('admin')->name('admin.')->group(function() {

    Route::prefix('member')->name('member.')->group(function() {
        Route::get('/', [MemberController::class, 'index'])->name('index');

        Route::get('index', [MemberController::class, 'index'])->name('index');
        Route::get('delete/{id}', [MemberController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        Route::get('create', [MemberController::class, 'create'])->name('create'); 
        Route::post('store', [MemberController::class, 'store'])->name('store'); 
       
        Route::get('edit/{id}', [MemberController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); 
        Route::post('update/{id}', [MemberController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });

    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('index',[CategoryController::class, 'index'])->name('index');

        Route::get('delete/{id}',[CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        Route::get('create',[CategoryController::class, 'create'])->name('create');
        Route::post('store',[CategoryController::class, 'store'])->name('store');

        Route::get('edit/{id}',[CategoryController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}',[CategoryController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });

    Route::prefix('event')->name('event.')->group(function() {
        Route::get('/', [EventController::class, 'index'])->name('index');

        Route::get('index', [EventController::class, 'index'])->name('index');
        Route::get('delete/{id}', [EventController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        Route::get('create', [EventController::class, 'create'])->name('create'); 
        Route::post('store', [EventController::class, 'store'])->name('store');

        Route::get('edit/{id}', [EventController::class, 'edit'])->name('edit')->where('id', '[0-9]+'); 
        Route::post('update/{id}', [EventController::class, 'update'])->name('update')->where('id', '[0-9]+'); 
    });

    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('index',[CategoryController::class, 'index'])->name('index');

        Route::get('delete/{id}',[CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        Route::get('create',[CategoryController::class, 'create'])->name('create');
        Route::post('store',[CategoryController::class, 'store'])->name('store');

        Route::get('edit/{id}',[CategoryController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}',[CategoryController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });

    Route::prefix('contact')->name('contact.')->group(function(){
        Route::get('/',[ContactController::class, 'index'])->name('index');
        Route::get('index',[ContactController::class, 'index'])->name('index');
        Route::get('delete/{id}',[CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
    
});

