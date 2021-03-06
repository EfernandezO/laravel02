<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Paises;
use App\Http\Livewire\PostComponent;



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


Route::get('/', PostComponent::class);

//Route::view('/', 'welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function () {
    return'prueba exitosa';
    
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function(){
    return'No autorizado';
});

Route::get('paises',Paises::class);