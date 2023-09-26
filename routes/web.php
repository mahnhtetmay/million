<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsoController;
use App\Http\Controllers\MilestonesController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\TeamController;
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


Route::get('/',[HomeController::class,'index'])->name('welcome');
Route::get('about',[AboutController::class,'index'])->name('about.index');
Route::get('milestones',[MilestonesController::class,'index'])->name('milestones.index');
Route::get('team',[TeamController::class,'index'])->name('team.index');
Route::get('strategy',[StrategyController::class,'index'])->name('strategy.index');
Route::get('certificates',[IsoController::class,'index'])->name('iso.index');


