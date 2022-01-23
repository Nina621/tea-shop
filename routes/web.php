<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\TeaFlavorController;
use App\Http\Controllers\NatureCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'dashboard']) -> name ('dashboard');

/**User routes */
Route::get('/users', [UserController::class, 'index']) -> name ('users.index');
Route::get('/users/delete/{user}',[UserController::class, 'destroy'])-> name ('users.destroy');
Route::get('/users/edit/{user}',[UserController::class, 'edit'])-> name ('users.edit');
Route::post('/users/update/{user}',[UserController::class, 'update'])-> name ('users.update');
Route::put('/users/update/{user}',[UserController::class, 'update'])-> name ('users.update');


/**Country routes */
Route::get('/countries',[CountryController::class, 'index'])-> name ('countries.index');
Route::get('/countries/delete/{country}',[CountryController::class, 'destroy'])-> name ('countries.destroy');
Route::get('/countries/edit/{country}',[CountryController::class, 'edit'])-> name ('countries.edit');
Route::put('/countries/update/{country}',[CountryController::class, 'update'])-> name ('countries.update');
Route::post('/countries/update/{country}',[CountryController::class, 'update'])-> name ('countries.update');


/**City routes */
Route::get('/cities',[CityController::class,'index'])->name('cities.index');
Route::get('/cities/delete/{city}',[CityController::class, 'destroy'])-> name ('cities.destroy');
Route::get('/cities/edit/{city}',[CityController::class, 'edit'])-> name ('cities.edit');
Route::put('/cities/update/{city}',[CityController::class, 'update'])-> name ('cities.update');
Route::post('/cities/update/{city}',[CityController::class, 'update'])-> name ('cities.update');


/**Tea routes */
Route::get('/teas',[TeaController::class,'index'])-> name('teas.index');
Route::get('/teas/delete/{tea}',[TeaController::class, 'destroy'])-> name ('teas.destroy');
Route::get('/teas/edit/{tea}',[TeaController::class, 'edit'])-> name ('teas.edit');
Route::put('/teas/edit/{tea}',[TeaController::class, 'update'])-> name ('teas.update');
Route::post('/teas/edit/{tea}',[TeaController::class, 'update'])-> name ('teas.update');


/**Nature categoriy routes */
Route::get('/nature_categories',[NatureCategoryController::class,'index'])->name('nature_categories.index');
Route::get('/nature_categories/delete/{nature_category}',[NatureCategoryController::class, 'destroy'])-> name ('nature_categories.destroy');
Route::get('/nature_categories/edit/{nature_category}',[NatureCategoryController::class, 'edit'])-> name ('nature_categories.edit');
Route::put('/nature_categories/edit/{nature_category}',[NatureCategoryController::class, 'update'])-> name ('nature_categories.update');
Route::post('/nature_categories/edit/{nature_category}',[NatureCategoryController::class, 'update'])-> name ('nature_categories.update');


/**Tea flavors routes */
Route::get('/tea_flavors',[TeaFlavorController::class,'index'])->name('tea_flavors.index');
Route::get('/tea_flavors/delete/{tea_flavor}',[TeaFlavorController::class, 'destroy'])-> name ('tea_flavors.destroy');
Route::get('/tea_flavors/edit/{tea_flavor}',[TeaFlavorController::class, 'edit'])-> name ('tea_flavors.edit');
Route::put('/tea_flavors/edit/{tea_flavor}',[TeaFlavorController::class, 'update'])-> name ('tea_flavors.update');
Route::post('/tea_flavors/edit/{tea_flavor}',[TeaFlavorController::class, 'update'])-> name ('tea_flavors.update');

/* authorization */
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'attemptLogin'])->name('auth.attempt_login');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'attemptRegister'])->name('auth.attempt_register');

