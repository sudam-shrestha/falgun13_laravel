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

Route::get("/welcome", function () {
    return redirect("/");
});
