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

Auth::routes();

Route::get('/', [
    'as' => 'index.index',
    'uses' => 'Index\\IndexController@index'
]);

Route::get('/signup', [
    'as' => 'signup.index',
    'uses' => 'Auth\\AuthController@showsignup' 
]);

Route::get('/contact', [
    'as' => 'index.contact', 
    'uses' => 'Index\\IndexController@contact'
]);

Route::get('/about', [
    'as' => 'index.about', 
    'uses' => 'Index\\IndexController@about'
]);

Route::post('/feedback/store', [
    'as' => 'feedback.store', 
    'uses' => 'Feedback\\FeedbackController@store'
]);

Route::get('feedback/done', [
    'as' => 'feedback.end',
    'uses' => 'Feedback\\FeedbackController@end'
]);

// Admin Routes
Route::group(['middleware' => ['auth', 'web']], function () {
Route::get('/admin', [
    'as' => 'marketplace.marketplace', 
    'uses' => 'Marketplace\\MarketplaceController@index'
]);

Route::get('/product', [
    'as' => 'product.index', 
    'uses' => 'Product\\ProductController@index'
]);

Route::get('/productCategory', [
    'as' => 'productCategory.index', 
    'uses' => 'ProductCategory\\ProductCategoryController@index'
]);

Route::get('/customer', [
    'as' => 'customer.index', 
    'uses' => 'Customer\\CustomerController@index'
]);

Route::get('/feedback', [
    'as' => 'feedback.index', 
    'uses' => 'Feedback\\FeedbackController@index'
]);

Route::get('/feedback/{id}/view', [
    'as' => 'feedback.view', 
    'uses' => 'Feedback\\FeedbackController@view'
]);

Route::delete('/feedback/{id}', [
    'as' => 'feedback.destroy', 
    'uses' => 'Feedback\\FeedbackController@destroy'
]);

Route::get('cart', [
    'as' => 'cart.index',
    'uses' => 'Cart\\CartController@index'
]);

});