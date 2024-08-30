<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\movieController;

Route::get('/', function () {

    return view('welcome');
});

Route::controller(movieController::class)->group(function(){
    Route::get('/',  'home')->name('home'); 
    Route::get('/buymovie/{id}',  'buymovie')->name('buymovie'); 

});
Route::group(['prefix' => 'banner'], function () {
    Route::controller(bannerController::class)->group(function(){
        Route::get('/create',  'create')->name('create'); 
        Route::get('/getBanner',  'getBanner')->name('getBanner'); 
        Route::post('/insertBanner',  'insertBanner')->name('insertBanner'); 
    });

});

Route::get('product',[RazorpayController::class,'index']);
Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.payment.store');
