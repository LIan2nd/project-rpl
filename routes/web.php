<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InformationController;
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
Route::get('/informations', [InformationController::class, 'index']);
Route::get('/informations/information/{information:id}', [InformationController::class, 'show']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/article/{article:id}', [ArticleController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
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
