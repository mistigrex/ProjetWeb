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
Route::get('/contact', [
    'uses'=>'PagesController@Contact',
    'as' => 'contact',
    'middleware' => 'roles',
    'roles' => ['Etudiant']
]);
Route::get('/evenements', 'PagesController@Evenements');
Route::get('/mentions', 'PagesController@Mentions');
Route::get('/confidentialité', 'PagesController@Confidentialité');
Route::get('/dashboard', 'DashboardController@index');


Route::resource('products', 'ProductsController');

Route::resource('administrations', 'AdministrationsController');

Route::resource('manifestations', 'ManifestationsController');
Route::get('/add-to-cart/{id}', [
        'uses' => 'ProductsController@getAddToCart',
        'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
        'uses' => 'ProductsController@getCart',
        'as' => 'product.getCart'
]);

Route::get('/deleteProduct', [
        'uses' => 'ProductsController@deleteProduct',
        'as' => 'product.deleteProduct'
]);

Route::get('/sendMail', [
        'uses' => 'MailsController@sendemail',
        'as' => 'Mails.sendemail'
]);

Route::get('/download', 'DownloadController@transfertzip');


Auth::routes();
