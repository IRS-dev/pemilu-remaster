<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/dashboard/kandidat',CandidateController::class
)->middleware(['auth', 'verified']);

Route::get('/dashboard/hasilsuara', function () {
    return view('hasilsuara/main');
})->middleware(['auth', 'verified'])->name('hasilsuara');

Route::get('/dashboard/qrcode', function () {
    return view('qrcode/main');
})->middleware(['auth', 'verified'])->name('qrcode');

Route::get('/dashboard/staff', function () {
    return view('staff/main');
})->middleware(['auth', 'verified'])->name('staff');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';