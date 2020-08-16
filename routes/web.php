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

Route::get('/about', 'PagesController@viewAbout');
Route::get('/contact', 'PagesController@viewC   ontact');
Route::get('/blog', 'PagesController@viewBlog');


Route::get('/all_orders', 'pizzasController@viewAllOrders')-> middleware('auth');
Route::get('/Completed_Orders', 'pizzasController@viewCompletedOrders')-> middleware('auth');
Route::get('/deleted_Orders', 'pizzasController@deleted_orders')-> middleware('auth');
Route::delete('/pizzas/{id}', 'pizzasController@destroy') -> middleware('auth');
Route::get('/createPizza', 'pizzasController@createPizzaOrder');
Route::get('/pizzas', 'pizzasController@viewPizzas');
Route::get('/order_details', 'pizzasController@orderDetails');
Route::post('/orderPizza', 'pizzasController@storePizza');
Route::post('/custom_pizza', 'EdamamAPIcontroller@fetchAPIdata');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
