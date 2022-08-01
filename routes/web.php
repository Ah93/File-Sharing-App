<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\utemfilesharing;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

Route::get('index', [utemfilesharing::class, 'index']);

Route::post('/add_document', [utemfilesharing::class, 'fileUpload'])->name('file.store');

Route::get('get_home_page',[utemfilesharing::class, 'getRecords']);

Route::get('get_manage_document',[utemfilesharing::class, 'getRecordsMD']);

Route::get('/file-upload/download/{file}', [utemfilesharing::class, 'fileDownload']);

Route::get('/file/{id}/edit', [utemfilesharing::class, 'updateFile'])->name('file.update');

Route::get('/file/{id}/delete', [utemfilesharing::class, 'deleteFile'])->name('file.destroy');

Route::post('/fileEdit/{id}', [utemfilesharing::class, 'edit'])->name('file.edit');

Route::post('/fileDelete/{id}', [utemfilesharing::class, 'destroy'])->name('file.delete');

Route::get('/add_document', function () {
    return view('/add_document');
});

Route::get('/home_page', function () {
    return view('/home_page');
});


Route::get('/manage_document', function () {
    return view('/manage_document');
});


Route::get('/', [AuthController::class, 'loginPage'])->name('login');
Route::post('submit-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('submit-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail']);
Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);
