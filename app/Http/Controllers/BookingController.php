<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view("booking.index", compact("bookings"));
    }

    public function create()
    {
        return view("booking.create");
    }

    public function store(Request $req)
    {
        $booking = new Booking();
        $booking->name = $req->full_name;
        $booking->phone = $req->phone;
        $booking->subject = $req->subject;
        $booking->request = $req->your_request;
        $booking->save();
        toast("Your request has been submitted.", "success");
        return redirect("/booking/create");
    }

    public function delete(string $id)
    {
        // return "delete" . $id;
        Booking::find($id)->delete();
        toast("Booking Deleted.", "success");
        return redirect("/booking");
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        return view("booking.edit", compact("booking"));
    }

    public function update(Request $req, $id)
    {
        $booking = Booking::find($id);
        $booking->name = $req->full_name;
        $booking->phone = $req->phone;
        $booking->subject = $req->subject;
        $booking->request = $req->your_request;
        $booking->save();
        toast("Booking updated.", "success");
        return redirect("/booking");
    }
}
