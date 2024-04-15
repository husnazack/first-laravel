<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}/{name}', function ($id, $name) {
    return "this is home number " . $id . " " . $name;

    // {id} is variable. &id to retrieve variable.
    // use for controller
    // $url for grabbing route
});

Route::get('home/example', array('as' => 'admin.home', function ($id, $name) {
    
    $url = route('admin.home');
    
    // call to access the route
}));

Route::get('/home/{id}/{name}', '\App\Http\Controllers\postController@index');
// to call index function from controller (new update)

// Route::get('/home', [postController::class, 'index']);
// // alternative (new update)

Route::resource('contact', 'postController');
// special static function
// for example: http://127.0.0.1:8000/home/create
// follow url: php artisan route:list

Route::get('/contact/{id}/{name}/{email}', '\App\Http\Controllers\postController@showPost');
// return class showPost

Route::get('/contact', [postController::class, 'contact']);