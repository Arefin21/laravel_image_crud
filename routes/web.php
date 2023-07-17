<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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

Route::get('/',[ImageController::class,'all_products'])->name('all.product');
Route::get('/add-new-product',[ImageController::class,'add_new_product'])->name('add.product');
Route::post('/store-product',[ImageController::class,'store_product'])->name('store.product');
Route::get('/edit-product/{id}',[ImageController::class,'edit_product'])->name('edit.product');
Route::post('/update-product/{id}',[ImageController::class,'update_product'])->name('update.product');
Route::get('/delete-product/{id}',[ImageController::class,'delete_products'])->name('delete.product');