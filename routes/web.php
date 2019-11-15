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

use App\Http\Controllers\PagesController;

Route::get('/', 'PagesController@Acceuil');
Route::get('/activites', 'PagesController@Activites');
Route::get('/boutique', 'PagesController@Boutique');
Route::get('/contact', 'PagesController@Contact');
Route::get('/evenements', 'PagesController@Evenements');
Route::get('/mentions', 'PagesController@Mentions');
Route::get('/manifestations', 'PagesController@Manifestations');
Route::get('/confidentialité', 'PagesController@Confidentialité');
Route::get('/dashboard', 'DashboardController@index');


Route::resource('products', 'ProductsController');

Route::resource('administrations', 'AdministrationsController');


Route::get('/add-to-cart/{id}', [
        'uses' => 'ProductsController@getAddToCart',
        'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
        'uses' => 'ProductsController@getCart',
        'as' => 'product.getCart'
]);

Route::post('/postcheckout', [
        'uses' => 'ProductsController@postCheckout',
        'as' => 'checkout'
]);

Route::get('/checkout', [
        'uses' => 'ProductsController@deleteProduct',
        'as' => 'product.deleteProduct'
]);

Route::get('/sendMail', [
        'uses' => 'MailsController@sendemail',
        'as' => 'Mails.sendemail'
]);

Route::post('/alertemail', [
        'uses' => 'MailsController@alertemail',
        'as' => 'Mails.alertemail'
]);

Auth::routes();
