<?php
use App\Http\Controllers\TrackControllers;
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
