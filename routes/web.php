<?php

use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ClientMessagesController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardHomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rtech\RtechHomeController;
use App\Http\Controllers\Rtech\EventManagementController;
use App\Http\Controllers\Rtech\IT\GraphicDesignController;
use App\Http\Controllers\Rtech\IT\WebDevelopmentController;
use App\Http\Controllers\Rtech\ScienceTechnologyController;
use App\Http\Controllers\Rtech\TechnicalServicesController;
use App\Http\Controllers\Rtech\IT\DigitialMarketingController;
use App\Http\Controllers\Rtech\IT\SoftwareDevelopmentController;

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

Route::prefix('/')->group(function () {
    Route::controller(RtechHomeController::class)->group(function () {
        Route::get('/', 'index')->name('rtech.index');
        Route::post('/', 'store')->name('rtech.store');
    });

    Route::get('technical-services', [TechnicalServicesController::class, 'index'])->name('technical_services.index');
    Route::get('science-technology', [ScienceTechnologyController::class, 'index'])->name('science_technology.index');
    Route::get('science-technology/single_post', [ScienceTechnologyController::class, 'single_post'])->name('science_technology.single_post');
    Route::get('event-management', [EventManagementController::class, 'index'])->name('event_management.index');
});

Route::prefix('it/')->group(function () {
    Route::get('web-development', [WebDevelopmentController::class, 'index'])->name('web_development.index');
    Route::get('software-development', [SoftwareDevelopmentController::class, 'index'])->name('software_development.index');
    Route::get('graphic-design', [GraphicDesignController::class, 'index'])->name('graphic_design.index');
    Route::get('digital-marketing', [DigitialMarketingController::class, 'index'])->name('digital_marketing.index');
});

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Posts
    Route::controller(PostsController::class)->group(function () {
        Route::get('posts/', 'index')->name('posts.index');
    });

    // Categories
    Route::controller(CategoriesController::class)->group(function () {
        Route::get('categories/', 'index')->name('categories.index');
    });

    // Client Messages
    Route::controller(ClientMessagesController::class)->group(function () {
        Route::get('client-messages/', 'index')->name('client-messages.index');
    });

    // Clients
    Route::controller(ClientsController::class)->group(function () {
        Route::get('clients/', 'index')->name('clients.index');
    });

    // Sales
    Route::controller(SalesController::class)->group(function () {
        Route::get('sales/', 'index')->name('sales.index');
    });

    // Accounts
    Route::controller(AccountsController::class)->group(function () {
        Route::get('accounts/', 'index')->name('accounts.index');
    });

    // HR
    Route::controller(EmployeesController::class)->group(function () {
        Route::get('employees/', 'index')->name('employees.index');
        Route::get('employees/create', 'create')->name('employees.create');
    });

    // Attendance
    Route::controller(AttendanceController::class)->group(function () {
        Route::get('attendance/', 'index')->name('attendance.index');
    });

    // Users
});

Auth::routes();