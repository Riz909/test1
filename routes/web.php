<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistCtrl;
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

Route::get('/', [todolistCtrl::class, 'index']);

Route::post('/additem', [todolistCtrl::class, 'add_todo'])->name('additem');
// Route::post('/', todolistCtrl::class)->name('add_todo');

Route::post('/edit/{id}', [todolistCtrl::class, 'edit'])->name('edit');

Route::post('/delete/{id}', [todolistCtrl::class, 'delete'])->name('delete');
