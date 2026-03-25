<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Booking;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "index"]);

Route::get("/about", [PageController::class, "about"]);

Route::get("/services", [PageController::class, "service"]);

// Booking Routes
Route::get("/booking", [BookingController::class, "index"]);

Route::get("/booking/create", [BookingController::class, "create"]);


Route::post("/booking/store", [BookingController::class, "store"]);

Route::delete("/booking/delete/{id}", [BookingController::class, 'delete']);

Route::get("/booking/edit/{id}", [BookingController::class, "edit"]);

Route::patch("/booking/update/{id}", [BookingController::class, "update"]);


// Course Routes
Route::get("/courses", [CourseController::class, 'index']);

Route::get("/course/create", [CourseController::class, "create"]);

Route::post("/course/store", [CourseController::class, "store"]);

Route::delete("/course/delete/{id}", [CourseController::class, 'delete']);

Route::get("/course/edit/{id}", [CourseController::class, "edit"]);

Route::patch("/course/update/{id}", [CourseController::class, "update"]);


// CRUD
// Create-POST
// Read-GET
// Update-PUT/PATCH
// Delete-DELETE
