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

Route::get('/', function () {
    return view('students');
});

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;

Route::resource('students', StudentController::class);
Route::get('sayHello', [StudentController::class, 'hello']);
Route::get('sayexcel', [StudentController::class, 'excel'])->name('excel');
Route::get('student_child', [StudentController::class, 'child'])->name('appchild');



Route::resource('hotels', HotelController::class);
Route::get('f1', [HotelController::class, 'f1'])->name('hotel-f1');
Route::get('f2', [HotelController::class, 'f2'])->name('hotel-f2');
Route::get('f3', [HotelController::class, 'f3'])->name('hotel-f3');