<?php

use Illuminate\Support\Facades\Route;

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

// Web Routes
Route::get('/home', function () {
    return view('index');
});
Route::get('/information', function () {
    return view('information');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/artikel-details', function () {
    return view('artikel-details');
});

// tidak terpakai 
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/gallery', function () {
//     return view('gallery');
// });
// Route::get('/team', function () {
//     return view('team');
// });
// Route::get('/appointment', function () {
//     return view('appointment');
// });
// batas tidak terpakai

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ikeh', function () {
    return view('dashboard.index');
});