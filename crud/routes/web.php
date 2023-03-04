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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     echo "<h1> Home Page </h1>";
// });

// Route::get('/home',function(){
//     echo "<h1> Home Page </h1>";
// });

// Route::get('/about-us',function(){
//     echo "<h1> About Us Page </h1>";
// });

// Route::get('/services',function(){
//     echo "<h1>Services Page</h1>";
// });

// Route::get('/demo',function(){
//     echo "This is Demo";
// });

// Route::get('/test/{name?}',function($name = null){
//     echo "hello vipan";
//     print_r($name);

// });

// Route::get('/{name?}',function($name = null){
//     $demo = "<h2>Hello Vipan</h2>";
//     $data = compact ('name', 'demo');
//     // print_r($data);
//      return view ('home')-> with ($data);
// });



Route::get('/',function(){
    return view ('home');
});

Route::get('/about',function(){
    return view ('about');
});

Route::get('/services',function(){
    return view ('services');
});