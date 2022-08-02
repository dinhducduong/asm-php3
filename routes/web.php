<?php

use App\Http\Controllers\Admin\Category\CategoryController;
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
Route::any('/logout', [\App\Http\Controllers\Frontend\AuthController::class, 'logout']);
//
Route::get('/course', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'index'])->name('course');
Route::get('/course/{id}', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'getCourseDetail'])->name('detail_course');
// Route::get('/checkout', [\App\Http\Controllers\Frontend\Order\OrderController::class, 'checkout'])->name('checkout');

//
//
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
        Route::prefix('course')->group(function () {
            Route::get('/list', [\App\Http\Controllers\Admin\Course\CourseController::class, 'getCourse']);
            Route::any('/add', [\App\Http\Controllers\Admin\Course\CourseController::class, 'addCourse']);
            Route::any('/edit/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'editCourse']);
            Route::any('/delete/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'deleteCourse']);
        });

        Route::prefix('category')->group(function () {
            Route::get('/list', [CategoryController::class, 'getCategory']);
            Route::any('/add', [CategoryController::class, 'addCategory']);
            Route::any('/edit/{id}', [CategoryController::class, 'editCategory']);
            Route::any('/delete/{id}', [CategoryController::class, 'deleteCategory']);
        });
    });
});