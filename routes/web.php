<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'lihatdash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(
    function () {
        Route::get('/data', [Controller::class, 'datatable'])->name('datatable');
        Route::get('/tambahkaryawan', [Controller::class, 'viewtambahkaryawan'])->name('viewtambahkaryawan');
        Route::get('/karyawanedit/{id}', [Controller::class, 'vieweditkaryawan'])->name('karyawanedit');
        Route::post('/kirimtambahkaryawan', [Controller::class, 'tambahkaryawan'])->name('tambahkaryawan');
        Route::post('/updatekaryawan', [Controller::class, 'updatekaryawan'])->name('updatekaryawan');
    }
);

require __DIR__ . '/auth.php';
