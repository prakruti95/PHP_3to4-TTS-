<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });

// //basic route
// Route::get('/hello', function () {
//     return "Hello Students, Welcome to Laravel 12!";
// });

// Route::get('/students', [StudentController::class, 'index']);

// Route::get('/student/{id}', function ($id) {
//     return "Student ID is: " . $id;
// });

// Route::get('/students', function () {
//     return "Students List Page";
// })->name('students.list');

// Route::get('/', function () {
//     return view('form');
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);