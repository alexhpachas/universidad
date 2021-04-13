<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Ciclos\CicloIndex;
use App\Http\Livewire\Entidades\EntidadeIndex;
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
/* 
Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('unis.index');
});
 */
/* Route::get('/dashboard', EntidadeIndex::class)->name('dashboard'); */


/* Route::get('/Entidades', [EntidadeIndex::class,'index'])->name('entidades.index'); */

/* Route::get('/Ciclos', [CicloIndex::class,'index'])->name('ciclos.index'); */


Route::get('/',HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
