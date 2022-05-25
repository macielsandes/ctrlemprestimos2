<?php

use App\Http\Controllers\{
    UserController,
    MaterialController
};
use Illuminate\Support\Facades\Route;

Route::delete('/users/{id}',[UserController::class, 'destroy']) -> name('users.destroy');
Route::put('/users/{id}',[UserController::class, 'update']) -> name('users.update');
Route::get('/users/{id}/edit',[UserController::class, 'edit']) -> name('users.edit');
Route::get('/users', [UserController::class, 'index'])-> name('users.index');
Route::get('/users/create', [UserController::class, 'create']) -> name('users.create');
Route::post('/users', [UserController::class, 'store']) -> name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])-> name('users.show');


Route::get('/materials/create', [MaterialController::class, 'create'])-> name('materials.create');
Route::get('/materials', [MaterialController::class, 'index'])-> name('materials.index');
Route::post('/materials', [MaterialController::class, 'store'])-> name('materials.store');
Route::get('/materials/{id}', [MaterialController::class, 'show'])-> name('materials.show');

Route::get('/', function () {
    return view('welcome');
});
