<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacultyController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::view('/', 'showData');
Route::view('/add', 'addForm');

Route::get('/', [TeacherController::class, 'index'])->name('home');
Route::get('/addLecturer', [TeacherController::class, 'create'])->name('addLecturer');
Route::get('associatedFacultyModules/{id}', [TeacherController::class, 'associatedFacultyModules'] );
Route::post('/addLecturer/store', [TeacherController::class, 'store'])->name('storeLecturer');


Route::get('/faculties', [FacultyController::class, 'index'])->name('faculties');