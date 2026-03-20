<?php

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
