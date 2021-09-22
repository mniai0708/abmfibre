<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffresController;

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
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminEmployeController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\admin\AdminServiceController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminChiffreController;
use App\Http\Controllers\admin\AdminActualiteController;
use App\Http\Controllers\admin\AdminOffreController;
use App\Http\Controllers\CandidatureController;


Route::get('/', [AccueilController::class, "index"]); //laravel 8
// Route::get('/', "AccueilController@index"); //laravel 7,6,5

Route::get('/actualites', [ActualiteController::class, "index"]);


//Route::get('/offres', [OffresController::class, "index"]);
Route::resource('/offres', OffresController::class);
Route::resource('/candidature', CandidatureController::class);

Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "store"]);


Route::prefix('/administrateur')->middleware('auth')->group(function () {

    //public route (remove auth middleware from it)
    Route::get('/login', [LoginController::class, "index"])->withoutMiddleware('auth')->name("login");
    Route::post('/login', [LoginController::class, "login"])->withoutMiddleware('auth')->name("login.submit");

    Route::resource('/offres',AdminOffresController::class)->names('admin.offres');

    Route::get('/', [AdminEmployeController::class, "index"])->name("admin.employe.index");
    Route::post('/',[AdminEmployeController::class, "store"])->name("admin.employe.store");

    Route::get('/services', [AdminServiceController::class, "index"])->name("admin.service.index");
    Route::post('/services', [AdminServiceController::class, "store"])->name("admin.service.store");

    Route::get('/chiffres', [AdminChiffreController::class, "index"])->name("admin.chiffre.index");
    Route::post('/chiffres', [AdminChiffreController::class, "store"])->name("admin.chiffre.store");

    Route::get('/actualites', [AdminActualiteController::class, "index"])->name("admin.actualites.index");
    Route::post('/actualites', [AdminActualiteController::class, "store"])->name("admin.actualites.store");

    Route::get('/offres',[AdminOffreController::class,"index"])->name("admin.offre.index");


});
