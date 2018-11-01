<?php

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

use Gloudemans\Shoppingcart\Facades\Cart;

//Homepage route
Route::get('/', 'HomepageController@index')->name('userIndex');

//Shop Products Route
Route::resource('shop', 'ShopController');

//Cart Products Route
Route::resource('cart', 'CartController');

Route::get('/about', function(){
    return view('users.about');
})->name('userAbout');

Route::get('/contact', function(){
    return view('users.contact');
})->name('userContact');

//empty cart
Route::get('empty', function(){
    Cart::destroy();
});
/*
Route::get('/products', function(){
    return view('users.products');
})->name('userProducts');

Route::get('/products/details', function(){
    return view('users.product-details');
})->name('userProductDetails');

Route::get('/cart', function(){
    return view('users.cart');
})->name('userCart');
*/
Route::get('/blog', function(){
    return view('users.blog');
})->name('userBlog');

Route::get('/blog/details', function(){
    return view('users.blog-details');
})->name('userBlogDetails');

Route::get('/sample', 'HomepageController@index')->name('samplepage');