<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// HomeController
Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/classes',[HomeController::class,'classes']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/contact',[HomeController::class,'contact']);

Route::post('/add_student',[HomeController::class,'add_student']);

Route::post('/parent_message',[HomeController::class,'parent_message']);

// AdminController
Route::get('/admin_home',[AdminController::class,'admin_home']);

Route::get('/student_enrollment',[AdminController::class,'student_enroll']);

Route::get('/student_message',[AdminController::class,'student_message']);

Route::get('/student_grade',[AdminController::class,'student_grade']);

Route::get('/delete_student/{id}',[AdminController::class,'delete_student']);

Route::get('/delete_message/{id}',[AdminController::class,'delete_message']);

