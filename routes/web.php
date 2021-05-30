<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/diagnostic-center', function () {
    return view('diagonosis-center');
});

Route::get('/book-appointment', function () {
    return view('book-appointment');
});

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/term-and-condition', function () {
    return view('term-condition');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class ,'index'])->name('home');
// update user password
Route::get('/update-password', [App\Http\Controllers\HomeController::class,'updatePassword'])->name('updateUserPassword');
Route::post('/update-password',[App\Http\Controllers\HomeController::class,'savePassword'])->name('saveUserPassword');
//admin
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
//update profile
Route::get('/admin/update-profile',[App\Http\Controllers\AdminController::class,'getProfile'])->name('getProfile');
Route::post('/admin/update-profile',[App\Http\Controllers\AdminController::class,'updateProfile'])->name('updateProfile');
Route::get('/admin/patient',[App\Http\Controllers\AdminController::class,'Patient'])->name('patient');
Route::get('/admin/patient-data',[App\Http\Controllers\AdminController::class,'PatientData'])->name('patientData');
Route::get('/admin/appointments',[App\Http\Controllers\AdminController::class,'appointmentsList'])->name('appointments');
Route::get('/admin/pathology-centers',[App\Http\Controllers\AdminController::class,'pathologyCenter'])->name('center');
Route::get('/pathologist',[App\Http\Controllers\PathologyController::class,'index'])->name('pathology');
Route::get('/download-appointment',[App\Http\Controllers\AdminController::class,'downloadAppointment'])->name('downloadAppointment');
Route::get('/download-patient',[App\Http\Controllers\AdminController::class,'downloadPatient'])->name('downloadPatient');
Route::get('/download-center',[App\Http\Controllers\AdminController::class,'downloadCenter'])->name('downloadCenter');

Route::get('/admin/appointments/soft-delete/{id}',[App\Http\Controllers\AdminController::class,'deleteAppointment'])->name('deleteAppointment');
Route::get('/admin/patient/soft-delete/{id}',[App\Http\Controllers\AdminController::class,'deletePatient'])->name('deletePatient');
Route::get('/admin/center/soft-delete/{id}',[App\Http\Controllers\AdminController::class,'deleteCenter'])->name('deleteCenter');
Route::get('/admin/update-password',[App\Http\Controllers\AdminController::class,'updatePassword'])->name('updatePassword');
Route::post('/admin/update-password',[App\Http\Controllers\AdminController::class,'savePassword'])->name('savePassword');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
