<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;


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

Route::get('/useradmin', [UserController::class, 'viewAdminUser']);
Route::get('/userstudent', [UserController::class, 'viewStudentUser']);
Route::get('/userteacher', [UserController::class, 'viewTeacherUser']);

Route::get('/subjectadmin', [SubjectController::class, 'viewAdminSubject']);
Route::get('/subjectstudent', [SubjectController::class, 'viewStudentSubject']);
Route::get('/subjectteacher', [SubjectController::class, 'viewTeacherSubject']);





