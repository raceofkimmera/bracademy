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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('batches', [\App\Http\Controllers\BatchListController::class, 'index'])->name('batches.batchlist');
    Route::get('batches/create', [\App\Http\Controllers\BatchListController::class, 'create'])->name('batches.create');

    Route::get('employee', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.employeelist');
    Route::get('employee/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');

    Route::get('student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.studentlist');
    Route::get('student/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');

    Route::get('enrollment', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('enrollment.enrollmentlist');
    Route::get('enrollment/create', [\App\Http\Controllers\EnrollmentController::class, 'create'])->name('enrollment.create');
});
