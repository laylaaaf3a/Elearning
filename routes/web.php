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