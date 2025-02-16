<?php
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

    Route::get('/', function (Request $request) {
    return view('welcome');
    })->name('dashboard');
    // Route::get('/pageTest', function (Request $request) {
    //     return view('htmlTest');
    //     });
    // Route::get('/courses', [CourseController::class, 'ViewCourses'])->name('courses');
    // Route::get('/semester', [SemesterController::class, 'viewSemester'])->name('semester');
    // Route::get('/department', [DepartmentController::class, 'viewDepartment'])->name('department');
    // Route::get('/class', [ClassroomController::class, 'viewClass'])->name('class');
    // Route::get('/teacher', [TeacherController::class, 'viewTeacher'])->name('teacher');
    // Route::get('/student', [StudentController::class, 'viewStudent'])->name('student');
    // Route::get('/role', [RoleController::class, 'viewRole'])->name('role');
    // Route::patch('/role', [RoleController::class, 'updateRole'])->name('role.update');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';
