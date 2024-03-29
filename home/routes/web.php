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
    return "this is home number" . $id . " " . $name;

    // {id} is variable. &id to retrieve variable.
    // use for controller
    // $url for grabbing route
});

Route::get('home/example', array('as' => 'admin.home', function ($id, $name) {
    
    $url = route('admin.home');
    
    // call to access the route
}));

Route::get('/home', '\App\Http\Controllers\postController@index');
// to call index function from controller (new update)

// Route::get('/home', postController::class, 'index');
// // alternative (new update)