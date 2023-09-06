<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
    return view('login');
});

Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/login1',[SessionController::class,'create'])
    ->middleware('guest')
    ->name('login1.index');

Route::post('/login1',[SessionController::class,'store'])->name('login1.store');

Route::get('/logout',[SessionController::class,'destroy'])
    ->middleware('auth')
    ->name('login1.destroy');

Route::get('/admin',[AdminController::class,'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/users',[UserController::class,'users'])
    ->middleware('auth.users')
    ->name('users.index');



Route::get('/citas', [AdminController::class,'cita'])
    ->name('admin.citas.cita');

Route::get('/add-cita', [AdminController::class,'add_cita'])
    ->name('admin.citas.add-cita');

Route::get('/edit-cita', [AdminController::class,'edit_cita'])
    ->name('admin.citas.edit-cita');



Route::get('/doctores', [AdminController::class,'doctores'])
        ->name('admin.doctores.doctors');
 Route::get('/add-doctor', [AdminController::class,'add_doctores'])
        ->name('admin.doctores.add-doctor');
Route::get('/edit-doctor', [AdminController::class,'edit_doctor'])
        ->name('admin.doctores.edit-doctor');


 Route::get('/pacientes', [AdminController::class,'paciente'])
        ->name('admin.pacientes.paciente');

 Route::get('/add-paciente', [AdminController::class,'add_paciente'])
        ->name('admin.paciente.add-paciente');

 Route::get('/edit-paciente', [AdminController::class,'edit_paciente'])
        ->name('admin.paciente.edit-paciente');



Route::get('/servicios', [AdminController::class,'servicio'])
        ->name('admin.servicios.servicio');

Route::get('/add-servicio', [AdminController::class,'add_servicio'])
        ->name('admin.servicios.add-servicio');

Route::get('/edit-servicio', [AdminController::class,'edit_servicio'])
        ->name('admin.servicios.edit-servicio');



