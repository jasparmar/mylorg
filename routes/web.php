<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\AdminCheckSession;

#frontend Controller
Route::get('/', function () {
    return view('welcome');
});


#Admin Panel Controller
Route::prefix('admin')->group(function () {
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/register', [LoginController::class, 'registerStore'])->name('register-store');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
        // Route::get('/roles', [DashboardController::class, 'roles'])->name('roles');
        // dummy for the time for testing works
        Route::get('/datatable', [DashboardController::class, 'datatable'])->name('datatable');
        Route::get('/get-database-data', [DashboardController::class, 'getDatabaseData'])->name('get_datatable_data');
        Route::get('/user', [UserController::class, 'index']);
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        // Admin Users and Permissions with Roles
        Route::get('/admin-users', [AdminUsersController::class, 'index'])->name('admin-users');
        Route::get('/permissions', [PermissionsController::class, 'index'])->name('permissions');
        Route::get('/get-roles', [RolesController::class, 'getRoleListing'])->name('get_roles');
        Route::resource('/roles', RolesController::class);

        Route::get('/students', [StudentController::class, 'index'])->name('students');
        Route::get('/standards', [StudentController::class, 'getStandard'])->name('standards');
        Route::get('/results', [StudentController::class, 'getResult'])->name('results');
        Route::get('/students/records', [StudentController::class, 'records'])->name('students/records');
        Route::get('/users-data',[StudentController::class, "getData"])->name('user_data');
    });
});
