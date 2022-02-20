<?php

use App\Http\Livewire\CreateMachine;
use App\Http\Livewire\CreateMaintenanceItem;
use App\Http\Livewire\Home;
use App\Http\Livewire\ShowAllMachines;
use App\Http\Livewire\ShowAllMaintenances;
use App\Http\Livewire\ShowAllMaintenancesToMachine;
use App\Http\Livewire\ShowHelp;
use App\Http\Livewire\ShowMachine;
use App\Http\Livewire\ShowMaintenance;
use App\Http\Livewire\ShowMaintenanceToMachine;
use App\Http\Livewire\ShowSettings;
use App\Http\Livewire\Test;
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

Route::get('/', Home::class)->name('home');
Route::get('/settings', ShowSettings::class)->name('settings');
Route::get('/help', ShowHelp::class)->name('help');
Route::get('/test', Test::class)->name('test');

Route::prefix('machines')->group(function () {
    Route::get('/', ShowAllMachines::class)->name('show-machines');
    Route::get('/create', CreateMachine::class)->name('create-machine');
    Route::get('/{machine}', ShowMachine::class)->name('show-machine');
    Route::get('/{machine}/maintenances', ShowAllMaintenancesToMachine::class)->name('show-machine-maintenances');
    Route::get('/{machine}/maintenances/{maintenance}', ShowMaintenanceToMachine::class)->name('show-machine-maintenance');
});

Route::prefix('maintenances')->group(function () {
    Route::get('/', ShowAllMaintenances::class)->name('show-maintenances');
    Route::get('/create',  CreateMaintenanceItem::class)->name('create-maintenance-item');
    Route::get('/{maintenanceItem}', ShowMaintenance::class)->name('show-maintenance');
});


