<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskGroupController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/penugasan', function () {
    return view('pages.penugasan.tugas');
});

Route::get('/task', function () {
    return view('pages.penugasan.task');
});


Route::get('/penugasan/d1t1', function () {
    return view('pages.penugasan.day1.tugas1');
});


// ADMIN
Route::get('/dashboard', [AdminController::class, 'index']);

// News Controller
Route::resource('/admin/berita-dan-pengumuman', NewsController::class);

// Tugas Controller
Route::get('/task-manager', [SubTaskController::class, 'list_tugas']);
Route::resource('task', SubTaskController::class);
Route::resource('task-group', TaskGroupController::class);



// login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/authenticate', [LoginController::class, 'login'])->name('login');

// Route::post('/upload', [FileUploadController::class, 'store'])->name('file.upload');
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('file.upload');
