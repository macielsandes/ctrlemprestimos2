<?php

use App\Http\Controllers\{
    UsersController,
    MaterialsController,
    RegistersController,
    HomeController
};

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

Route::get('/home', [HomeController::class, 'index'])-> name('home');

Route::delete('/users/{id}',[UsersController::class, 'destroy']) -> name('users.destroy');
Route::put('/users/{id}',[UsersController::class, 'update']) -> name('users.update');
Route::get('/users/{id}/edit',[UsersController::class, 'edit']) -> name('users.edit');
Route::get('/users', [UsersController::class, 'index'])-> name('users.index');
Route::get('/users/create', [UsersController::class, 'create']) -> name('users.create');
Route::post('/users', [UsersController::class, 'store']) -> name('users.store');
Route::get('/users/{id}', [UsersController::class, 'show'])-> name('users.show');


Route::delete('/materials{id}',[MaterialsController::class, 'destroy']) -> name('materials.destroy');
Route::put('/materials/{id}',[MaterialsController::class, 'update']) -> name('materials.update');
Route::get('/materials/{id}/edit', [MaterialsController::class, 'edit'])-> name('materials.edit');
Route::get('/materials', [MaterialsController::class, 'index'])-> name('materials.index');
Route::get('/materials/create', [MaterialsController::class, 'create'])-> name('materials.create');
Route::post('/materials', [MaterialsController::class, 'store'])-> name('materials.store');
Route::get('/materials/{id}', [MaterialsController::class, 'show'])-> name('materials.show');

Route::get('/registers', [RegistersController::class, 'index'])-> name('registers.index');

Route::get('/', function () {
    return view('welcome');
});
