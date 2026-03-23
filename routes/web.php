<?php

use App\Models\Booking;
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
