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
    return view("booking.index");
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
    return redirect("/booking/create");
});
