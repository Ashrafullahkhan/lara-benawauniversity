<?php

use App\Http\Controllers\AlumuniController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\TeachersController;
use App\Models\Event;
use App\Models\News;
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
Route::get('/dari/dr-policies/Ethics_policy.pdf', [PdfController::class, "index"]);

// //students

//students

Route::get('/dar/student-affairs', function () {
    return view('/dari/dr-student-affairs');
});

Route::get('/dr/financial-assistant', function () {
    return view('/dari/dr-financial-assistant');
});

// Route::get('/financial-assistant', function () {
//     return view('financial-assistant');
// });

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
    return view('pashto/pa-index');
});

Route::get('/pa-admission-info', function () {
    return view('pashto/pa-admission-info');
});

Route::get('/pa-fee-structure', function () {
    return view('pashto/pa-fee-structure');
});

Route::get('/pa-scholarships', function () {
    return view('pashto/pa-scholarships');
});

Route::get('/pa-financial', function () {
    return view('pashto/pa-financial-assistant');
});

Route::get('/pa-Programmes-CS', function () {
    return view('pashto/pa-Programmes-CS');
});

Route::get('/pa-programmes-EN', function () {
    return view('pashto/pa-programmes-EN');
});

Route::get('/pa-courses', function () {
    return view('pashto/pa-courses');
});

Route::get('/pa-computer-lab', function () {
    return view('pashto/pa-computer-lab');
});

Route::get('/pa-Engineering-lab', function () {
    return view('pashto/pa-Engineering-lab');
});

Route::get('/pa-Library', function () {
    return view('pashto/pa-Library');
});

Route::get('/pa-Cafeteria', function () {
    return view('pashto/pa-Cafeteria');
});

Route::get('/pa-why-benawa', function () {
    return view('pashto/pa-why-benawa');
});

Route::get('/pa-founder-of-benawa', function () {
    return view('pashto/pa-founder-of-benawa');
});

Route::get('/pa-chancellor-message', function () {
    return view('pashto/pa-chancellor-message');
});

Route::get('/pa-management-team', function () {
    return view('pashto/pa-management-team');
});

// Route::get('/pa-founder-of-benawa', function () {
//     return view('pashto/pa-founder-of-benawa');
// });

// =======
// >>>>>>> 3f1596847e5adbfafcefd8993bc5c1bd0f8e5394
//main views
Route::get('/', function () {
    return view('index', ['news' => News::all(), 'events' => Event::all(), 'teachers' => Teacher::take(4)->get(),
    ]);
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

//students

Route::get('/student-affairs', function () {
    return view('student-affairs');
});

Route::get('/financial-assistant', function () {
    return view('financial-assistant');
});

Route::get('/academic_rules_and_regulation', function () {
    return view('academic_rules_and_regulation');
});

Route::get('/files/{pdf}');

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

//contacts
Route::get('/contact', function () {
    return view('contact');
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
// admin/staff routes

Route::get('/admin/staffs', [StaffsController::class, "index"]);
Route::post('admin/staffs/insert_data', [StaffsController::class, "insert_data"]);
Route::get('/admin/staffs/{staffs}', [StaffsController::class, "update"]);
Route::patch('staffs/update/{id}', [StaffsController::class, "edit"]);
Route::delete('staffs/delete/{staff}', [StaffsController::class, "destroy"]);

// ENDS OF admin/staff routes

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
Route::get('news_details/{news}', function (News $news) {
    $data = News::all();

    if (request('search')) {
        $data->where('title', 'like', '%' . request('search') . '%');

    }

    return view('news_details', ['news' => $news, 'allnews' => News::take(4)->get()]);
});
Route::get('list_of_news', function () {
    $data = News::latest();

    if (request('search')) {
        $data->where('title', 'like', '%' . request('search') . '%');

    }
    return view('list_of_news', ['data' => $data->paginate(5), 'news' => News::take(4)->get()]);
});

// ENDS OF admin/news routes

// admin/Events routes

Route::get('/admin/events', [EventsController::class, "index"]);
Route::post('admin/event/insert_data', [EventsController::class, "insert_data"]);
Route::get('/admin/create-event', function () {
    return view('admin/events/create-event');
});
Route::get('/admin/event/{event}', [EventsController::class, "update"]);
Route::patch('event/update/{id}', [EventsController::class, "edit"]);
Route::delete('event/delete/{event}', [EventsController::class, "destroy"]);
Route::get('event_details/{event}', function (Event $event) {
    $data = Event::all();

    if (request('search')) {
        $data->where('title', 'like', '%' . request('search') . '%');

    }

    return view('event_details', ['event' => $event, 'allevents' => Event::take(4)->get()]);
});
Route::get('list_of_events', function () {
    $data = Event::latest();

    if (request('search')) {
        $data->where('title', 'like', '%' . request('search') . '%');

    }
    return view('list_of_events', ['data' => $data->paginate(5), 'events' => Event::take(4)->get()]);
});

// ENDS OF admin/Events routes

// admin/Alumuni routes

Route::get('/admin/alumuni', [AlumuniController::class, "index"]);
Route::post('admin/alumuni/insert_data', [AlumuniController::class, "insert_data"]);
Route::get('/admin/add-alumuni', function () {
    return view('admin/alumuni/add-alumuni');
});
Route::get('/admin/alumuni/{alumuni}', [AlumuniController::class, "update"]);
Route::patch('alumuni/update/{id}', [AlumuniController::class, "edit"]);
Route::delete('alumuni/delete/{alumuni}', [AlumuniController::class, "destroy"]);

// ENDS OF admin/Alumuni routes

Route::get('/teacher-profile', function () {
    return view('admin/teacher-profile');
});
