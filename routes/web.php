<?php

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

use App\Http\Controllers\employeeController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [employeeController::class, 'index'])->name('index');
Route::post('/add', [employeeController::class, 'add'])->name('add');
Route::get('/remove/{id}', [employeeController::class, 'remove'])->name('remove');
Route::get('/calculate-total', [employeeController::class, 'calculateTotal'])->name('calculateTotal');

Route::get('/input-date', function () {
    return view('date');
});

Route::post('/calculateDifference', [employeeController::class, 'DifferenceOfDates'])->name('calculateDifference');
