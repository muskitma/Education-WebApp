<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Models\Student;
use Illuminate\Http\Request;



Route::get('/',[StudentController::class,'viewForm'] )->name('student-list');
Route::post('/add-student',[StudentController::class,'addStudent'] );
Route::delete('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('delete-student');



Route::get('/hi',[LoginController::class,'login'] )->name('hi');
Route::post('/check-Login',[LoginController::class,'checkLogin'] );

Route::get('/wed', function () {
    return view('wed');
})->name('wed');


// -----------------------------





Route::get('/', [StudentController::class, 'viewForm'])->name('student-list');
Route::post('/add-student', [StudentController::class, 'addStudent'])->name('add-student');
Route::delete('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('delete-student');
Route::get('/edit-student/{id}', [StudentController::class, 'editStudent'])->name('edit-student');
Route::put('/update-student/{id}', [StudentController::class, 'updateStudent'])->name('update-student');
