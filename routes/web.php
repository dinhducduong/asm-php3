<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
//
Route::any('/login', [\App\Http\Controllers\Frontend\AuthController::class, 'index'])->name('login');
Route::any('/register', [\App\Http\Controllers\Frontend\AuthController::class, 'register'])->name('register');
Route::any('/logout', [\App\Http\Controllers\Frontend\AuthController::class, 'logout']);
//
Route::get('/course', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'index'])->name('course');
Route::any('/course/{id}', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'getCourseDetail'])->name('detail_course');
// Route::get('/checkout', [\App\Http\Controllers\Frontend\Order\OrderController::class, 'checkout'])->name('checkout');

//
//
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\Frontend\AuthController::class, 'profile']);
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
        Route::prefix('course')->group(function () {
            Route::get('/list', [\App\Http\Controllers\Admin\Course\CourseController::class, 'getCourse'])->name('list_course');
            Route::any('/add', [\App\Http\Controllers\Admin\Course\CourseController::class, 'addCourse']);
            Route::any('/edit/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'editCourse']);
            Route::any('/delete/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'deleteCourse']);
        });

        Route::prefix('category')->group(function () {
            Route::get('/list', [CategoryController::class, 'getCategory'])->name('list_category');
            Route::any('/add', [CategoryController::class, 'addCategory']);
            Route::any('/edit/{id}', [CategoryController::class, 'editCategory']);
            Route::any('/delete/{id}', [CategoryController::class, 'deleteCategory']);
        });

        Route::prefix('order')->group(function () {
            Route::get('/list', [OrderController::class, 'getOrder']);
        });
        Route::prefix('user')->group(function () {
            Route::get('/list', [UserController::class, 'getUsers']);
        });
    });
});