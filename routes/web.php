<?php

use App\Http\Controllers\{
    UserController,
    MaterialController,
    RegisterController,
    indexController
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

Route::get('/index', [IndexController::class, 'index'])-> name('index');

Route::delete('/user/{id}',[UserController::class, 'destroy']) -> name('users.destroy');
Route::put('/user/{id}',[UserController::class, 'update']) -> name('users.update');
Route::get('/user/{id}/edit',[UserController::class, 'edit']) -> name('users.edit');
Route::get('/user', [UserController::class, 'index'])-> name('users.index');
Route::get('/user/create', [UserController::class, 'create']) -> name('users.create');
Route::post('/user', [UserController::class, 'store']) -> name('users.store');
Route::get('/user/{id}', [UserController::class, 'show'])-> name('users.show');


Route::delete('/material{id}',[MaterialController::class, 'destroy']) -> name('materials.destroy');
Route::put('/material/{id}',[MaterialController::class, 'update']) -> name('materials.update');
Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])-> name('materials.edit');
Route::get('/material', [MaterialController::class, 'index'])-> name('materials.index');
Route::get('/material/create', [MaterialController::class, 'create'])-> name('materials.create');
Route::post('/material', [MaterialController::class, 'store'])-> name('materials.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])-> name('materials.show');

Route::get('/register', [RegistersController::class, 'index'])-> name('registers.index');

Route::get('/', function () {
    return view('welcome');
});
