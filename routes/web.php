<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/major', [MajorController::class,'index'])->name('major.index');
Route::get('/major/create', [MajorController::class,'create'])->name('major.create');
Route::post('/major', [MajorController::class,'store'])->name('major.store');
Route::get('/major/{major}/edit', [MajorController::class,'edit'])->name('major.edit');
Route::put('/major/{major}/update', [MajorController::class,'update'])->name('major.update');
Route::delete('/major/{major}/destroy', [MajorController::class,'destroy'])->name('major.destroy');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');