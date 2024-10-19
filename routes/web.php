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
    Route::get('/movie',  'movies')->name('movie'); 
    Route::get('/transcations',  'transcationsDetails')->name('user.transcations')->middleware('auth'); 

    Route::get('/watchtrailer/{id}',  'watchtrailer')->name('watchtrailer')->middleware('auth');

});


Route::get('login', [bannerController::class, 'loginpage'])->name('loginpage');

Route::get('register', [bannerController::class, 'register'])->name('register');

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
Route::get('/home', [App\Http\Controllers\movieController::class, 'home'])->name('homeredirect');




// admin routes
Route::get('/admin-movies', [AdminMovieController::class, 'movies'])->name('admin.movies');
Route::get('/admin-movie-upload-file/{id?}', [AdminMovieController::class, 'moviesupload'])->name('admin.movieupload');
Route::post('/admin-movie-upload-file-post', [AdminMovieController::class, 'moviesuploadfile'])->name('admin.movie.file');

Route::get('/admin-add-movie', [AdminMovieController::class, 'movieadd'])->name('admin.addmovie');
Route::post('/admin-upload-movie', [AdminMovieController::class, 'uploadmovie'])->name('admin.uploadmovie');
Route::get('/admin-addmoredetails', [AdminMovieController::class, 'movieaddmoredetails'])->name('admin.movieaddmoredetails');
Route::get('/admin-bannerdetailsmore', [AdminMovieController::class, 'bannerdetailsmore'])->name('admin.bannerdetailsmore');
Route::get('/admin-movietrailers', [AdminMovieController::class, 'movietrailers'])->name('admin.movietrailers');

//add movies 
Route::get('/admin-movies-order', [AdminMovieController::class, 'moviesorder'])->name('admin.moviesorder');
Route::post('/admin-save-order', [AdminMovieController::class, 'saveorder'])->name('admin.admin-save-order');
Route::get('/adim-homerow-list', [AdminMovieController::class, 'homerowlist'])->name('admin.adim-homerow-list');
Route::get('/adim-homerow-movie-list/{id}', [AdminMovieController::class, 'homerowmovielist'])->name('admin.adim-homerow-movie-list');

Route::get('/admin-movies-addbanner', [AdminMovieController::class, 'addmoviebanner'])->name('admin.admin-movies-addbanner');
Route::post('/admin-movies-savebanner', [AdminMovieController::class, 'savemoviebanner'])->name('admin.admin-movies-savebanner');
Route::get('/admin-movies-viewlist', [AdminMovieController::class, 'viewmovieslist'])->name('admin.admin-movies-viewlist');





