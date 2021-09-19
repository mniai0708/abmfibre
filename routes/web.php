<?php

use App\Http\Controllers\CandidatureController;
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
//     return view('accueil');
// });
use App\Http\Controllers\OffresController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;

Route::get('/', [AccueilController::class, "index"]); //laravel 8
// Route::get('/', "AccueilController@index"); //laravel 7,6,5

Route::get('/actualites', [ActualiteController::class, "index"]);


//Route::get('/offres', [OffresController::class, "index"]);
Route::resource('/offres', OffresController::class);
Route::resource('/candidature', CandidatureController::class);

Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "store"]);


//routes admin

Route::prefix('/admin')->group(function () {

    Route::get('/login', [LoginController::class, "index"])->name("login");

    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, "index"])->name("admin.index");
    });
});
