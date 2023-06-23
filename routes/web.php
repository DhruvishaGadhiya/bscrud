<?php
namespace App\Http\Controllers;
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

Route::get('/',[BasecrudController::class,'index'])->name('index');
Route::get('/create',[BasecrudController::class,'create'])->name('Basecrud.create');
Route::post('/store',[BasecrudController::class,'store'])->name('Basecrud.store');
Route::get('/delete/{id}',[BasecrudController::class,'destroy'])->name('delete');
Route::get('/edit/{id}',[BasecrudController::class,'edit'])->name('edit');
Route::post('/update',[BasecrudController::class,'update'])->name('Basecrud.update');
?>