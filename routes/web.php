<?php
use App\Http\Controllers\TrackControllers;
use App\Http\Controllers\CourseControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[TrackControllers::class,'index'])->name('students.index');
  Route::get('/students/{id}',[TrackControllers::class,'view'])->name('students.view');
 
Route::delete('/students/{id}', [TrackControllers::class, 'destroy'])->name('students.destroy');


Route::get('/tracks/create',[TrackControllers::class, 'create'])->name('Track.create');
Route::post('/tracks/store',[TrackControllers::class, 'store'])->name('Track.store');
Route::get('/tracks/edit/{id}',[TrackControllers::class, 'edit'])->name('Track.edit');
Route::post('/tracks/update/{id}',[TrackControllers::class, 'update'])->name('Track.update');

Route::get('/tracks/delete/{id}',[TrackControllers::class, 'delete'])->name('Track.delete');


// shaw fake data and create , update and delete

Route::get('/courses',[CourseControllers::class,'index'])->name('Courses.index');
// view course data
Route::get('/courses/{id}',[CourseControllers::class,'view'])->name('courses.view');
// create data

Route::get('/courses/create',[CourseControllers::class, 'create'])->name('Course.create');
Route::post('/courses/store',[CourseControllers::class, 'store'])->name('Course.store');

// destroy data
Route::get('/courses/delete/{id}',[CourseControllers::class, 'destroy'])->name('Course.delete');

// update data


Route::get('/courses/edit/{id}',[CourseControllers::class, 'edit'])->name('Course.edit');
Route::post('/courses/update/{id}',[CourseControllers::class, 'update'])->name('Course.update');

