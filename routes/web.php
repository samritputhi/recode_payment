<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{StudentsController,PaymentController};  
use App\Http\Middleware\Authenticate; 


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

Route::get('/student',[StudentsController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentsController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentsController::class,'store'])->name('student.store');
Route::get('/student/edit/{id}',[StudentsController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentsController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentsController::class,'delete'])->name('student.delete');
Route::get('/student/history/{id}',[StudentsController::class,'history'])->name('student.history');

Route::get('/payment',[PaymentController::class,'index'])->name('payment.index');
Route::get('/payment/create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/payment/store',[PaymentController::class,'store'])->name('payment.store');
Route::get('/payment/edit/{id}',[PaymentController::class,'edit'])->name('payment.edit');
Route::get('/payment/update/{id}',[PaymentController::class,'update'])->name('payment.update');
Route::get('/payment/delete/{id}',[PaymentController::class,'delete'])->name('payment.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
