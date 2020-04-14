<?php
use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'MainController@index')->name('index');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/whishlist/{product}', 'CartController@addToWishlist')->name('cart.wishlist');

Route::get('empty', function(){
    Cart::destroy();
});

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
