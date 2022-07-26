<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [ContactController::class, 'index']);

Route::post('/', [ContactController::class, 'index']);

Route::get('/meuscontatos', [ContactController::class, 'meuscontatos']);

Route::get('/minhasempresas', [CompanyController::class, 'minhasempresas']);

Route::get('/contacts/formContato', [ContactController::class, 'create']);

Route::get('/companies/formEmpresa', [CompanyController::class, 'create']);

Route::get('/contacts/{id}', [ContactController::class, 'show']);

Route::get('/companies/{id}', [CompanyController::class, 'show']);

Route::post('/contacts', [ContactController::class, 'store']);

Route::post('/companies', [CompanyController::class, 'store']);

Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);

Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);

Route::get('/contacts/edit/{id}',[ContactController::class,'edit']);

Route::get('/companies/edit/{id}',[CompanyController::class,'edit']);

Route::put('/contacts/update/{id}',[ContactController::class, 'update']);

Route::put('/companies/update/{id}',[CompanyController::class, 'update']);

Route::get('/companies/formEmpresa', [CompanyController::class, 'create']);


