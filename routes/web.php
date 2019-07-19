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

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');


// Route::get('customers','CustomersController@index');
// Route::get('customers/create','CustomersController@create');

// Route::post('customers','CustomersController@store');
// Route::get('customers/{customer}','CustomersController@show');
// Route::get('customers/{customer}/edite','CustomersController@edite');
// Route::patch('customers/{customer}','CustomersController@update');
// Route::delete('customers/{customer}','CustomersController@de');

Route::resource('customers', 'CustomersController');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('contact', function(){

//         return view('contact');
// });
// Route::get('about' , function(){

//     return view('about');

// });
