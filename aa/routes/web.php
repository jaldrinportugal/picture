<?php


use App\Http\Controllers\AuthController;

//admin Controller
use App\Http\Controllers\admin\LandingPageController;
use App\Http\Controllers\admin\PatientListController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\PaymentInfoController;
use App\Http\Controllers\admin\CalendarController;
use App\Http\Controllers\admin\CommunityForumController;

//patient Controller
use App\Http\Controllers\patient\PatientAppointmentController;
use App\Http\Controllers\patient\PatientPaymentInfoController;
use App\Http\Controllers\patient\PatientMessagesController;
use App\Http\Controllers\patient\PatientCommunityForumController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LandingPageController::class,'index'])->name('landingpage');


// for Admin
Route::group(['namespace'=>'a   dmin'], function(){
Route::get('/admin/login',[AuthController::class,'index'])->name('login');
Route::post('/admin/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/admin/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/patientlist',[PatientListController::class,'index'])->name('patientlist');
Route::get('/patientlist/{patienttId}/patient', [PatientListController::class, 'showPatient'])->name('patientlist.show-patient');
Route::get('/patientlist/edit/{id}', [PatientListController::class, 'edit'])->name('patientlist.edit');
Route::put('/patientlist/update/{id}', [PatientListController::class, 'update'])->name('patientlist.update');
Route::delete('/patientlist/delete/{id}', [PatientListController::class, 'destroy'])->name('patientlist.destroy');

Route::get('/admin/messages',[MessagesController::class,'index'])->name('messages');
Route::get('/admin/paymentinfo',[PaymentInfoController::class,'index'])->name('paymentinfo');
Route::get('/admin/calendar',[CalendarController::class,'index'])->name('calendar');
Route::get('/admin/communityforum',[CommunityForumController::class,'index'])->name('communityforum');
});

// for Patient
Route::get('/patient/register',[AuthController::class,'registration'])->name('registration');
Route::post('/patient/register',[AuthController::class,'register'])->name('register');
Route::post('/patient/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/patient/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/patient/appointment',[PatientAppointmentController::class,'index'])->name('appointment');

Route::get('/patient/messages',[PatientMessagesController::class,'index'])->name('messages');

Route::get('/patient/paymentinfo',[PatientPaymentInfoController::class,'index'])->name('paymentinfo');

Route::get('/patient/communityforum',[PatientCommunityForumController::class,'index'])->name('communityforum');

// for Student
