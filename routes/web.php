<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

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

Route::get('/', [TableController::class, 'index'])->name('table');
Route::resource('table', TableController::class);
// Route::get('/aboutme', [TabelController::class, 'aboutme'])->name('aboutme');
Route::get('/aboutme', function () {
    return view('aboutme');
});
