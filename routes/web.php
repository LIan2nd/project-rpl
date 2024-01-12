<?php

use App\Http\Controllers\AdminInformationController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContributorRegistrationController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardController;
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
// Route with Controller
// Route Group Login n Register
Route::group(['middleware' => 'guest'], function () {
    // Login Route
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    // Register Route
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/contributorRegister', [ContributorRegistrationController::class, 'index']);
    Route::post('/contributorRegister', [ContributorRegistrationController::class, 'store']);
});


// Route Group Dashboard
Route::group(['middleware' => 'auth'], function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Route aneh-anehh
    Route::get('/logout', function () {
        return view('etc.mauKemana');
    });

    // Logout Route
    Route::post('/logout', [LoginController::class, 'logout']);

    // Dashboard Route
    Route::get('/dashboard/admin/informations', [AdminInformationController::class, 'index']);
    Route::delete('/dashboard/admin/informations/{information:id}', [AdminInformationController::class, 'destroy']);
    Route::get('/dashboard/admin/users', [AdminUserController::class, 'index']);
    Route::post('/dashboard/admin/users/validate/{user:id}', [AdminUserController::class, 'contValidate']);

    // Articles Dashboard Route
    Route::resource('/dashboard/articles', DashboardArticleController::class);
});

// Route Without Group
Route::get('/informations', [InformationController::class, 'index']);
Route::get('/informations/information/{information:id}', [InformationController::class, 'show']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/article/{article:id}', [ArticleController::class, 'show']);


// Route with Controller End

// Route Without Controller
Route::get('/home', function () {
    return view('index', [
        'title' => "Home"
    ]);
});
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
    return view('start');
});
