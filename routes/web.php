<?php

use App\Models\properties;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserPageController;
use Illuminate\Auth\Events\Registered;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\FlareClient\View;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/contact', [Controller::class, 'contact']);

Route::middleware(['auth', 'permission:view data'])->group(function () {
    Route::get('user-page', [UserPageController::class, 'index'])->name('user.page');
});

Route::get('/inCard', function(){
    return view('inCard');
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'logout'])->name('logout');

//register
Route::get('/register', [RegisteredUserController::class, 'index'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

//profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/delete', [ProfileController::class, 'delete'])->name('profile.delete');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-page', [DashboardController::class, 'index'])->name('admin.page');
    Route::get('/dashboardcreate', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboardtambah', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::get('/dashboardEdit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboardUpdate/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboardHapus/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});