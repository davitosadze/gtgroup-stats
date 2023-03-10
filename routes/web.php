<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Employers\EmployerController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\StatsController;
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

// Auth::routes(['register' => false]);

Route::get('/',  [StatsController::class, 'index'])->name('stats.index');

// Route::get('/stats', [StatsController::class, 'index'])->name('stats.index');


Route::get('/information', [InformationController::class, 'index'])->name('information.index');
Route::get('/information/create', [InformationController::class, 'create'])->name('information.create');
Route::get('/information/show/{date}', [InformationController::class, 'show'])->name('information.show');
Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');
Route::get('/information/delete/{date}', [InformationController::class, 'delete'])->name('information.delete');

Route::resource("employers", EmployerController::class);
// Route::middleware('auth')->group(function () {
// });
