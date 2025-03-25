<?php

use App\Http\Controllers\TechGadgetController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/techgadgets', [TechGadgetController::class, 'index'])->name('techgadgets.index');
Route::get('/techgadgets/create', [TechGadgetController::class, 'create'])->name('techgadgets.create');
Route::post('/techgadgets/store', [TechGadgetController::class, 'store'])->name('techgadgets.store');
Route::get('/techgadgets/edit/{id}', [TechGadgetController::class, 'edit'])->name('techgadgets.edit');
Route::post('/techgadgets/update/{id}', [TechGadgetController::class, 'update'])->name('techgadgets.update');
Route::post('/techgadgets/delete/{id}', [TechGadgetController::class, 'destroy'])->name('techgadgets.delete');
