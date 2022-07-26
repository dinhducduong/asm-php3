<?php

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
Route::get('/login', [\App\Http\Controllers\Frontend\AuthController::class, 'index'])->name('login');
Route::get('/course', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'index'])->name('course');
Route::get('/course/{id}', [\App\Http\Controllers\Frontend\Course\CourseController::class, 'getCourseDetail'])->name('detail_course');
// Route::get('/checkout', [\App\Http\Controllers\Frontend\Order\OrderController::class, 'checkout'])->name('checkout');

//

 Route::prefix('admin')->group(function () {
     Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
     Route::prefix('course')->group(function (){
         Route::get('/list', [\App\Http\Controllers\Admin\Course\CourseController::class, 'getCourse']);
         Route::any('/add', [\App\Http\Controllers\Admin\Course\CourseController::class, 'addCourse']);
         Route::any('/edit/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'editCourse']);
         Route::any('/delete/{id}', [\App\Http\Controllers\Admin\Course\CourseController::class, 'deleteCourse']);
     });
 });
