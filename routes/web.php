<?php

use App\Models\Booking;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/services", function () {
    return view("service");
});


Route::get("/booking", function () {
    $bookings = Booking::all();
    return view("booking.index", compact("bookings"));
});

Route::get("/booking/create", function () {
    return view("booking.create");
});


Route::post("/booking/store", function (Request $req) {
    $booking = new Booking();
    $booking->name = $req->full_name;
    $booking->phone = $req->phone;
    $booking->subject = $req->subject;
    $booking->request = $req->your_request;
    $booking->save();
    toast("Your request has been submitted.", "success");
    return redirect("/booking/create");
});

Route::delete("/booking/delete/{id}", function ($id) {
    // return "delete" . $id;
    Booking::find($id)->delete();
    toast("Booking Deleted.", "success");
    return redirect("/booking");
});

Route::get("/booking/edit/{id}", function ($id) {
    $booking = Booking::find($id);
    return view("booking.edit", compact("booking"));
});

Route::patch("/booking/update/{id}", function (Request $req, $id) {
    $booking = Booking::find($id);
    $booking->name = $req->full_name;
    $booking->phone = $req->phone;
    $booking->subject = $req->subject;
    $booking->request = $req->your_request;
    $booking->save();
    toast("Booking updated.", "success");
    return redirect("/booking");
});


Route::get("/courses", function () {
    $courses = Course::all();
    return view("course.index", compact('courses'));
});

Route::get("/course/create", function () {
    return view("course.create");
});

Route::post("/course/store", function (Request $request) {
    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->save();
    toast("Course created successfully.", "success");
    return redirect("/courses");
});



// CRUD
// Create-POST
// Read-GET
// Update-PUT/PATCH
// Delete-DELETE
