<?php

use App\Http\Controllers\BrandController;
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

//home page
Route::get('/makeClothes', [BrandController::class, 'index'])->name('brand.index');


/*create clothes
1.select brand
2.add database to card
3.jump
*/
Route::get('/makeClothes/create/select', [BrandController::class, 'select'])->name('brand.select');
Route::get('/makeClothes/create/{name}', [BrandController::class, 'create'])->name('brand.create');
