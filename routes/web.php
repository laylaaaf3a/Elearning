<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP Methode:
 * 1. Get : untuk menampilkan
 * 2. Post : untuk mengirim data
 * 3. Put : untuk meng-update data
 * 4. Delete : untuk menghapus data
 */

// route untuk menampilkan teks salam
Route::get('admin/dashboard',[DashboardController::class, 'index']);

// rootes untuk menampilkan halaman student
Route::get('/admin/student', [StudentController::class, 'index']);

Route::get('/admin/course', [CourseController::class, 'index']);

// Route untuk Menampilkan Form Tambah Student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk Menampilkan Data Student Baru
Route::post('admin/student/store', [StudentController::class, 'store']);

// Route untuk Menampilkan Halaman Edit Student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk Menyimpan Hasil Update Student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// Route untuk Menghapus Student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);


// Route untuk Menampilkan Form Tambah Courses
Route::get('admin/course/create', [CourseController::class, 'create']);

// Route untuk Menampilkan Data Courses Baru
Route::post('admin/course/store', [CourseController::class, 'store']);

// Route untuk Menampilkan Halaman Edit Courses
Route::get('admin/course/edit/{id}', [CourseController::class, 'edit']);

// Route untuk Menyimpan Hasil Update Courses
Route::put('admin/course/update/{id}', [CourseController::class, 'update']);

// Route untuk Menghapus Courses
Route::delete('admin/course/delete/{id}', [CourseController::class, 'destroy']);