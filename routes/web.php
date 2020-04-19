<?php
use Gloudemans\Shoppingcart\Facades\Cart;

// Main
Route::get('/', 'MainController@index')->name('index');
// Route::get('/{product}', 'MainController@show')->name('index.show');

// Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/{product}', 'CartController@addToWishlist')->name('cart.wishlist');
// Whishlist
Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');
Route::post('/wishlist/{product}', 'WishlistController@store')->name('wishlist.store');

Route::get('empty', function(){
    Cart::destroy();
});

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
