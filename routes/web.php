<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\PdfController;
use App\Models\Teacher;
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
    return view('dari/dr-index');
});

//dari admin ''''''''''''
Route::get('/dr/add-listing', function () {
    return view('/dari/admin/dr-add-listing');
});



//dari in fo-------------
Route::get('/dr/admission-info', function () {
    return view('/dari/dr-admission-info');
});
Route::get('/dr/fee-structure', function () {
    return view('/dari/dr-fee-structure');
});
Route::get('/dr/scholarships', function () {
    return view('/dari/dr-scholarships');
});
Route::get('/dr/financial-assistant', function () {
    return view('/dari/dr-financial-assistant');
});
Route::get('/dr/teacher', function () {
    return view('/dari/dr-teacher');
});


// Academic ------ programmes

Route::get('/dr/Programme-CS', function () {
    return view('/dari/dr-programmes-CS');
});
Route::get('/dr/dr-Programme-EN', function () {
    return view('/dari/dr-programmes-EN');
});
Route::get('/dari/dr-policies/Ethics_policy.pdf',[PdfController::class, "index"]);


//students 

Route::get('/dar/student-affairs', function () {
    return view('/dari/dr-student-affairs');
});

Route::get('/dr/financial-assistant', function () {
    return view('/dari/dr-financial-assistant');
});


//facilities


Route::get('/dr/computer-lab', function () {
    return view('/dari/dr-computer-lab');
});

Route::get('/dr/engineering-lab', function () {
    return view('/dari/engineering-lab');
});
Route::get('/dr/library', function () {
    return view('/dari/dr-library');
});
Route::get('/dr/cafeteria', function () {
    return view('/dari/dr-cafeteria');
});



// about us

Route::get('/dr/why-benawa', function () {
    return view('/dari/dr-why-benawa');
});
Route::get('/dr/founder-of-benawa', function () {
    return view('/dari/dr-founder-of-benawa');
});
Route::get('/dr/chancellor-message', function () {
    return view('/dari/dr-chancellor-message');
});
Route::get('/dr/management-team', function () {
    return view('/dari/dr-management-team');
});
Route::get('/dr/cafeteria', function () {
    return view('/dari/cafeteria');
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
    return view('teacher',['teacher' =>Teacher::all()]);
});


// Academic ------ programmes

Route::get('/Programme-CS', function () {
    return view('programmes-CS');
});
Route::get('/Programme-EN', function () {
    return view('programmes-EN');
});
Route::get('/policies/Ethics_policy.pdf',[PdfController::class, "index"]);


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
Route::get('/teachers', [TeachersController::class, "index"]);

Route::post('teachers/insert_image',  [TeachersController::class, "insert_image"]);



Route::patch('teachers/update/{id}', [TeachersController::class, "edit"]);
Route::delete('teachers/delete/{teacher}', [TeachersController::class, "destroy"]);


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
Route::get('/admin/teacher', [TeachersController::class, "index"]);
Route::get('/admin/teachers/{teacher}', [TeachersController::class, "update"]);
Route::get('/teacher-profile', function () {
    return view('admin/teacher-profile');
});
