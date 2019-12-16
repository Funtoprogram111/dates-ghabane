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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/cart', 'FrontController@cart')->name('cart.index');
Route::get('/cart/add-item/{id}', 'FrontController@addItem')->name('cart.addItem');
Route::get('/add-item-to-wishlist', 'FrontController@addItemToWishlist')->name('add-Item-To-Wishlist');
Route::delete('/cart/delete-Item/{id}', 'FrontController@deleteItem')->name('cart.deleteItem');
Route::PUT('/cart/update-Item/{id}', 'FrontController@updateItem')->name('cart.updateItem');
Route::get('/dates/{param}', 'FrontController@getProductById')->name('dates');
Route::get('/profile/{user}', 'UserController@edit')->name('edit-user');
Route::PUT('/profile/{user}', 'UserController@update')->name('update-user');

Route::group(['middleware' => ['forceSSL']], function () {
    Route::post('/send/success', 'MessageController@sendMessage')->name('send');
});

Route::group(['middleware'=>['no-cache']], function (){
    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth', 'admin', 'no-cache']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products','ProductsController');
    Route::post('item/delivered/success/{orderId}', 'DashboardController@toggledeliver')->name('toggle-deliver');
    Route::delete('/wishlist/delete-Item/{id}', 'DashboardController@deleteItem');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/checkout/shipping_info', 'CheckoutController@formCheckout')->name('checkout');
    Route::post('/address/create', 'AddressController@store')->name('address_create');
});

