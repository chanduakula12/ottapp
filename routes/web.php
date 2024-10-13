<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\paymentController;
use App\Http\Middleware\LoginCheckMiddleware;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;


// ->middleware(LoginCheckMiddleware::class);
Route::middleware(['web'])->group(function () {
    // Your routes here
});
Route::get('/', function () {

    return view('welcome');
});

Route::controller(movieController::class)->group(function(){
    Route::get('/',  'home')->name('home'); 
    Route::get('/buymovie/{id}',  'buymovie')->name('buymovie')->middleware('auth'); 
    Route::get('/movies',  'movies')->name('movies')->middleware('auth'); 
    Route::get('/transcations',  'transcationsDetails')->name('user.transcations')->middleware('auth'); 

    Route::get('/watchtrailer/{id}',  'watchtrailer')->name('watchtrailer')->middleware('auth');

});


Route::get('login', [bannerController::class, 'loginpage'])->name('loginpage');

Route::controller(paymentController::class)->group(function(){
    Route::post('response',  'response')->name('response')->middleware('auth'); 
   

});
Route::group(['prefix' => 'banner'], function () {
    Route::controller(bannerController::class)->group(function(){
        Route::get('/create',  'create')->name('create')->middleware('auth'); 
        Route::get('/getBanner',  'getBanner')->name('getBanner')->middleware('auth'); 
        Route::post('/insertBanner',  'insertBanner')->name('insertBanner')->middleware('auth'); 
    });

});
Route::get('product',[RazorpayController::class,'index'])->middleware('auth');
Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.payment.store')->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\movieController::class, 'home'])->name('home');




// admin routes
Route::get('/admin-movies', [AdminMovieController::class, 'movies'])->name('admin.movies');
Route::get('/admin-add-movie', [AdminMovieController::class, 'movieadd'])->name('admin.addmovie');
Route::post('/admin-upload-movie', [AdminMovieController::class, 'uploadmovie'])->name('admin.uploadmovie');



