<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExportCSVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\SuccesStories;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'view'])->name('home.view');

Route::get('/members/add', [MembersController::class,'view'])->name('members.view');
Route::post('/members/store', [MembersController::class,'store'])->name('members.store');
Route::get('/members', [MembersController::class,'viewMembers'])->name('members.viewmembers');
Route::get('/members/edit/{id}', [MembersController::class,'edit'])->name('members.edit');
Route::put('/members/edit/{id}', [MembersController::class,'update'])->name('members.update');
Route::get('/members/delete/{id}', [MembersController::class,'delete'])->name('members.delete');
Route::get('/members/find', [MembersController::class,'findbyEmailOrName'])->name('members.find');

Route::get('/stories', [SuccesStories::class,'view'])->name('stories.view');
Route::get('/stories/add', [SuccesStories::class,'viewAddStory'])->name('stories.viewaddstory');
Route::post('/stories', [SuccesStories::class,'addStory'])->name('stories.addstory');

Route::get('/events/add', [EventsController::class,'viewAddEvent'])->name('events.viewaddstory');
Route::get('/events', [EventsController::class,'view'])->name('events.view');
Route::post('/events', [EventsController::class,'addEvent'])->name('events.addevent');

Route::get('/members/export', [ExportCSVController::class, 'export'])->name('members.export');
