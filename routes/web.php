<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=> ['auth','admin']],function(){
    Route::get('/admin', function () {
        return view('addEvent');
    });
});
Route::get('/cart2', function () {
    return view('cart2');
});

Route::post('/saveEvent','EventController@store');


Route::get('/event','EventController@show');
Route::get('/event/{id}','EventController@index');

Route::get('/event/type/{type}','EventController@spec');

Route::get('/event/{name}/buy/ticket','EventController@ticket');
Route::post ('/add-cart','EventController@addtocart');
Route::match(['get','post'], '/cart','EventController@cart');
Route::get('/cart/delete/{id}','EventController@delete');
Route::get('events-popular','EventController@popular');
Route::get('events-free','EventController@free');
Route::post('/add-to/wishlist','WishlistController@store');


Auth::routes();

Route::get('/wishlist/{id}','WishlistController@delete');
Route::get('/pastwishlist/{id}','WishlistController@deletepast');
Route::get('/wishlist','WishlistController@index2');
Route::get('/thank','EventController@thank');
Route::get('/search',function () {
    return view('search');
});

Route::match(['get','post'],'/search-results','EventController@search');



