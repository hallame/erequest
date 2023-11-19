<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

// Guest Middleware Routes
Route::middleware(['guest'])->group(function () {
    //protected routes goes here
    });

    
// Login Contrtoller

Route::get('/', [LoginController::class, 'index']);

// AdminController
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/error401', [AdminController::class, 'error401']);
Route::get('/admin/error500', [AdminController::class, 'error405']);
Route::get('/admin/error404', [AdminController::class, 'error404']);
Route::get('/admin/certificate_form', [AdminController::class, 'certificate_form']);
Route::get('/admin/charts', [AdminController::class, 'charts']);
Route::get('/admin/complaint_form', [AdminController::class, 'complaint_form']);
Route::get('/admin/complaints', [AdminController::class, 'complaints']);
Route::get('/admin/diplomas', [AdminController::class, 'diplomas']);
Route::get('/admin/message_form', [AdminController::class, 'message_form']);
Route::get('/admin/messages', [AdminController::class, 'messages']);
Route::get('/admin/transcript_form', [AdminController::class, 'transcript_form']);
Route::get('/admin/tables', [AdminController::class, 'tables']);
Route::get('/admin/password', [AdminController::class, 'password']);
Route::get('/admin/register', [AdminController::class, 'register']);
Route::get('/admin/login', [AdminController::class, 'login']);


// UserController
Route::get('/already_exists', [UserController::class, 'already_exists']);
Route::get('/certificat_redirect', [UserController::class, 'certificat_redirect']);
Route::get('/certificate_form', [UserController::class, 'certificate_form']);
Route::get('/certificate_process', [UserController::class, 'certificate_process']);
Route::get('/change_password_sucess', [UserController::class, 'change_password_sucess']);
Route::get('/complaint_form', [UserController::class, 'complaint_form']);
Route::get('/complaint_index', [UserController::class, 'complaint_index']);
Route::get('/complaint_process', [UserController::class, 'complaint_process']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/diploma_form', [UserController::class, 'diploma_form']);
Route::get('/diploma_process', [UserController::class, 'diploma_process']);
Route::get('/diploma_redirect', [UserController::class, 'diploma_redirect']);
Route::get('/error', [UserController::class, 'error']);
Route::get('/false_form_filled', [UserController::class, 'false_form_filled']);
Route::get('/forgot_password', [UserController::class, 'forgot_password']);
Route::get('/invalid_credential', [UserController::class, 'invalid_credential']);
Route::get('/invalid_or_expiry', [UserController::class, 'invalid_or_expiry']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/message_sucess', [UserController::class, 'message_sucess']);
Route::get('/not_found', [UserController::class, 'not_found']);
Route::get('/payment_sucess', [UserController::class, 'payment_sucess']);
Route::get('/process', [UserController::class, 'process']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/send_verification_code', [UserController::class, 'send_verification_code']);
Route::get('/test_certificate', [UserController::class, 'test_certificate']);
Route::get('/test_diploma', [UserController::class, 'test_diploma']);
Route::get('/test_transcript', [UserController::class, 'test_transcript']);
Route::get('/test', [UserController::class, 'test']);
Route::get('/transcript_form', [UserController::class, 'transcript_form']);
Route::get('/transcript_redirect', [UserController::class, 'transcript_redirect']);
Route::get('/transcript_process', [UserController::class, 'tetranscript_processst_diploma']);
Route::get('/index_redirect', [UserController::class, 'index_redirect']);


    
// Auth Middleware Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/change_password', function () {
        return view('change_password');
    })->name('change_password');
});
/********************************************************/ 



//Controller routing
/********************************************************/ 

Route::post('/login_post', [AuthController::class, 'login'])->name('login_post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

//complaints routing
Route::get('/complaint', [ComplaintController::class, 'index'])->name('complaint_all');
Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint_send');
Route::get('/complaint/{id}', [ComplaintController::class, 'show'])->name('complaint_one');
Route::put('/complaint/{id}', [ComplaintController::class, 'update'])->name('complaint_update');
Route::delete('/complaint/{id}', [ComplaintController::class, 'destroy'])->name('complaint_delete');
//certificate routing
Route::get('/certificates', [CertificateController::class, 'index']);
Route::post('/certificate_send', [CertificateController::class, 'store'])->name('certificate_send');
Route::get('/certificates/{certificate}', [CertificateController::class, 'show']);
Route::put('/certificates/{certificate}', [CertificateController::class, 'update']);
Route::delete('/certificates/{certificate}', [CertificateController::class, 'destroy']);


//transcript routing
Route::group(['prefix' => 'transcript'], function () {
    Route::get('/', [TranscriptController::class, 'index']);
    Route::post('/', [TranscriptController::class, 'store'])->name(('transcript'));

    Route::get('{transcript}', [TranscriptController::class, 'show']);
    Route::delete('{transcript}', [TranscriptController::class, 'destroy']);
    Route::put('{transcript}', [TranscriptController::class, 'update']);
});

// Diploma routing
Route::group(['prefix' => 'diploma'], function () {
    Route::get('/', [DiplomaController::class, 'index']);
    Route::post('/', [DiplomaController::class, 'store'])->name('diploma');

    Route::get('{diploma}', [DiplomaController::class, 'show']);
    Route::delete('{diploma}', [DiplomaController::class, 'destroy']);
    Route::put('{diploma}', [DiplomaController::class, 'update']);
});



