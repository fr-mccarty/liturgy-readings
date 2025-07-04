<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Dashboard::class);
Route::get('/dashboard', \App\Http\Livewire\Dashboard::class)->name('dashboard');
Route::get('wedding-readings', \App\Http\Livewire\WeddingReadings::class)->name('wedding-readings');
Route::get('wedding-readings/print', \App\Http\Livewire\PrintWedding::class)->name('wedding-readings-print');
Route::get('wedding-prayers', \App\Http\Livewire\WeddingPrayers::class)->name('wedding-prayers');
Route::get('wedding-prayers/print', \App\Http\Livewire\PrintWeddingPrayers::class)->name('wedding-prayers-print');
Route::get('funeral-readings', \App\Http\Livewire\FuneralReadings::class)->name('funeral-readings');
Route::get('funeral-readings/print', \App\Http\Livewire\PrintFuneral::class)->name('funeral-readings-print');
Route::get('funeral-prayers', \App\Http\Livewire\FuneralPrayers::class)->name('funeral-prayers');
Route::get('funeral-prayers/print', \App\Http\Livewire\PrintFuneralPrayers::class)->name('funeral-prayers-print');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//
//    Route::get('wedding', \App\Http\Livewire\Reading::class)->name('wedding');
//    Route::get('wedding/print', \App\Http\Livewire\PrintWedding::class);
//});
