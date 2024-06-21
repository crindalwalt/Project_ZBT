<?php

use App\Http\Controllers\TeacherController;
use App\Http\Middleware\AdminCheck;
use App\Http\Middleware\TeacherCheck;
use Illuminate\Support\Facades\Route;



// ==================================================================================================
// ==================================================================================================
// ===================================  Teacher Controller  =========================================
// ==================================================================================================




Route::middleware(["auth", TeacherCheck::class])->prefix("/teacher")->group(function () {
    Route::get("/", [TeacherController::class, 'index'])->name("teacher.index");
    Route::get("/students", [TeacherController::class, 'students'])->name("teacher.students");
    Route::get("/badges", [TeacherController::class, "badges"])->name("teacher.badges");
    Route::get("/badge/{badge}/view",[TeacherController::class,"view"])->name("teacher.badge.view");


    # MEETING CRUD
    Route::post("/badge/{badge}/meeting",[TeacherController::class,"store"])->name("meeting.store");
});