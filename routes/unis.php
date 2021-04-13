<?php

use App\Http\Livewire\Entidades\EntidadeIndex;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\unis\HomeController;
use App\Http\Livewire\Ciclos\CicloIndex;
use App\Http\Livewire\Modulos\Ciclos\CiclosIndex;
use App\Http\Livewire\Modulos\Grupos\GruposIndex;
use App\Http\Livewire\Modulos\Periodos\PeriodosIndex;

Route::get('',[HomeController::class,'index'])->name('unis.home');

Route::get('entidades',[EntidadeIndex::class,'index'])->name('unis.entidades');

Route::get('ciclos',[CiclosIndex::class,'index'])->name('unis.ciclos');

Route::get('periodos',[PeriodosIndex::class,'index'])->name('unis.periodos');

Route::get('grupos',[GruposIndex::class,'index'])->name('unis.grupos');



