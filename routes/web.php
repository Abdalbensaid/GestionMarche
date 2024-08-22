<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonnelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('admin/gestion/')->group(function () {
    //routes pour le tableau de bord
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //routes pour les secteurs d'acivités 
    Route::get('secteur', [SecteurController::class, 'index'])->name('secteur.index');
    Route::get('secteur/create', [SecteurController::class, 'create'])->name('secteur.create');
    Route::get('secteur/edit', [SecteurController::class, 'edit'])->name('secteur.edit');

    //routes pour les contrats
    Route::get('contrat', [ContratController::class, 'index'])->name('contrat.index');

    //routes pour la gestion de Personnels
    Route::get('personnels', [PersonnelController::class, 'index'])->name('personnel.index');
    
    //routes pour la gestion de finances
    Route::get('finances', [FinancesController::class, 'index'])->name('finance.index');
    Route::get('finances', [FinancesController::class, 'index'])->name('finance.index');
});