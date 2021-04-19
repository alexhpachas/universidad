<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\unis\HomeController;

use App\Http\Livewire\Modulos\Ciclos\CiclosIndex;
use App\Http\Livewire\Modulos\Cursoplanes\CursoPlanesIndex;
use App\Http\Livewire\Modulos\Cursoplanes\PlanCursosIndex;
use App\Http\Livewire\Modulos\Cursos\CursosIndex;
use App\Http\Livewire\Modulos\Entidades\EntidadeIndex;
use App\Http\Livewire\Modulos\Entidades\EntidadesIndex;
use App\Http\Livewire\Modulos\Facultades\FacultadesIndex;
use App\Http\Livewire\Modulos\Grupos\GruposIndex;
use App\Http\Livewire\Modulos\Periodos\PeriodosIndex;
use App\Http\Livewire\Modulos\Personas\PersonasIndex;
use App\Http\Livewire\Modulos\PlanEstudios\PlanEstudiosIndex;
use App\Http\Livewire\Modulos\Programas\ProgramasIndex;
use App\Models\Programa;

Route::get('',[HomeController::class,'index'])->name('unis.home');

Route::get('entidades',[EntidadesIndex::class,'index'])->name('unis.entidades');

Route::get('ciclos',[CiclosIndex::class,'index'])->name('unis.ciclos');

Route::get('periodos',[PeriodosIndex::class,'index'])->name('unis.periodos');

Route::get('grupos',[GruposIndex::class,'index'])->name('unis.grupos');

Route::get('planestudios',[PlanEstudiosIndex::class,'index'])->name('unis.planestudios');

Route::get('personas',[PersonasIndex::class,'index'])->name('unis.personas');

Route::get('facultades',[FacultadesIndex::class,'index'])->name('unis.facultades');

Route::get('programas',[ProgramasIndex::class,'index'])->name('unis.programas');

Route::get('cursos',[CursosIndex::class,'index'])->name('unis.cursos');

Route::get('cursoplanes',[CursoPlanesIndex::class,'index'])->name('unis.cursoplanes');



