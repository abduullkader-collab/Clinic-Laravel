<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PatientAppointment;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\PatientAppointmentController;
use App\Http\Controllers\PatientDashboardController;





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
    return view('HomePage');
});
Route::get('/HomePage', function () {
    return view('HomePage'); 
})->name('homepage');


 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('articles', 'ArticleController');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
//Route::post('/appointments/add', [PatientAppointment::class, 'add'])->name('appointments.add');
Route::post('add', [PatientAppointment::class, 'add']);
Route::post('/add', [PatientAppointmentController::class, 'add'])->name('appointment.add');

//- The auth middleware ensures only logged‑in users can access this page.

Route::middleware(['auth'])->group(function () {
    Route::get('/my-appointments', [PatientAppointmentController::class, 'list'])
        ->name('appointments.list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PatientDashboardController::class, 'index'])
        ->name('dashboard');
});


