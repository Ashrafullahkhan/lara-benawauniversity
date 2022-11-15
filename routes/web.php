<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TeachersController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------u------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// dari views

Route::get('/dr', function () {
    return view('dari/index');
});

Route::get('/dr/admission-info', function () {
    return view('/dari/dr-admission-info');
});
Route::get('/fee-structure', function () {
    return view('fee-structure');
});
Route::get('/scholarships', function () {
    return view('scholarships');
});
Route::get('/financial-assistant', function () {
    return view('financial-assistant');
});
Route::get('/teacher', function () {
    return view('teacher');
});

// Academic ------ programmes

Route::get('/Programme-CS', function () {
    return view('programmes-CS');
});
Route::get('/Programme-EN', function () {
    return view('programmes-EN');
});
Route::get('/policies/Ethics_policy.pdf', [PdfController::class, "index"]);

//students

Route::get('/student-affairs', function () {
    return view('student-affairs');
});

Route::get('/financial-assistant', function () {
    return view('financial-assistant');
});

//facilities

Route::get('/computer-lab', function () {
    return view('computer-lab');
});

Route::get('/engineering-lab', function () {
    return view('engineering-lab');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/cafeteria', function () {
    return view('cafeteria');
});

// about us

Route::get('/why-benawa', function () {
    return view('why-benawa');
});
Route::get('/founder-of-benawa', function () {
    return view('founder-of-benawa');
});
Route::get('/chancellor-message', function () {
    return view('chancellor-message');
});
Route::get('/management-team', function () {
    return view('management-team');
});
Route::get('/cafeteria', function () {
    return view('cafeteria');
});

// pashto views

Route::get('/pashto', function () {
    return view('pashto/index2');
});

//main views
Route::get('/', function () {
    return view('index');
});

Route::get('/admission-info', function () {
    return view('admission-info');
});
Route::get('/fee-structure', function () {
    return view('fee-structure');
});
Route::get('/scholarships', function () {
    return view('scholarships');
});
Route::get('/financial-assistant', function () {
    return view('financial-assistant');
});
Route::get('/teacher', function () {
    return view('teacher', ['teacher' => Teacher::all()]);
});

// Academic ------ programmes

Route::get('/Programme-CS', function () {
    return view('programmes-CS');
});
Route::get('/Programme-EN', function () {
    return view('programmes-EN');
});
Route::get('/policies/Ethics_policy.pdf', [PdfController::class, "index"]);

//students

Route::get('/student-affairs', function () {
    return view('student-affairs');
});

Route::get('/financial-assistant', function () {
    return view('financial-assistant');
});

//event details

Route::get('/event-details', function () {
    return view('event-details');
});
//facilities

Route::get('/computer-lab', function () {
    return view('computer-lab');
});

Route::get('/engineering-lab', function () {
    return view('engineering-lab');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/cafeteria', function () {
    return view('cafeteria');
});

// about us

Route::get('/why-benawa', function () {
    return view('why-benawa');
});
Route::get('/founder-of-benawa', function () {
    return view('founder-of-benawa');
});
Route::get('/chancellor-message', function () {
    return view('chancellor-message');
});
Route::get('/management-team', function () {
    return view('management-team');
});
Route::get('/cafeteria', function () {
    return view('cafeteria');
});

Route::get('/courses', function () {
    return view('courses');
});

//admin views

Route::get('/dashboard', function () {
    return view('admin/admin');
});

Route::get('/admin/courses', function () {
    return view('admin/courses');
});
Route::get('/admin/add-listing', function () {
    return view('admin/add-listing');
});
Route::get('/teacher-profile', function () {
    return view('admin/teacher-profile');
});

// admin/teachers routes

Route::get('/admin/teachers', [TeachersController::class, "index"]);
Route::post('admin/teachers/insert_data', [TeachersController::class, "insert_data"]);
Route::get('/admin/teachers/{teacher}', [TeachersController::class, "update"]);
Route::patch('teachers/update/{id}', [TeachersController::class, "edit"]);
Route::delete('teachers/delete/{teacher}', [TeachersController::class, "destroy"]);

// ENDS OF admin/teachers routes

// admin/news routes

Route::get('/admin/news', [NewsController::class, "index"]);
Route::post('admin/news/insert_data', [NewsController::class, "insert_data"]);
Route::get('/admin/create-news', function () {
    return view('admin/news/create-news');
});

Route::get('/admin/news/{news}', [NewsController::class, "update"]);
Route::patch('news/update/{id}', [NewsController::class, "edit"]);
Route::delete('news/delete/{news}', [NewsController::class, "destroy"]);

// ENDS OF admin/news routes

Route::get('/teacher-profile', function () {
    return view('admin/teacher-profile');
});
