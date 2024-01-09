<?php

use App\Http\Controllers\ContributorRegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InformationController;

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
    return view('index', [
        'title' => "Home"
    ]);
});
Route::get('/informations', [InformationController::class, 'index']);
Route::get('/informations/information/{information:id}', [InformationController::class, 'show']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/article/{article:id}', [ArticleController::class, 'show']);

Route::get('/contact', function () {
    return view('contact', [
        'title' => "Contact"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});
Route::get('/login', [LoginController::class, 'index']);

// Register Route
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/contributorRegister', [ContributorRegistrationController::class, 'index']);
Route::post('/contributorRegister', [ContributorRegistrationController::class, 'store']);



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