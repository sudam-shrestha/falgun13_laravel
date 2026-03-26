<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view("enrollment.index", compact('enrollments'));
    }

    public function create()
    {
        $courses = Course::all();
        return view("enrollment.create", compact('courses'));
    }

    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        $enrollment->name = $request->name;
        $enrollment->email = $request->email;
        $enrollment->course_id = $request->course_id;
        $enrollment->save();
        toast("Enrollment created successfully.", "success");
        return redirect()->route("enrollment.create");
    }

    public function delete(string $id)
    {
        // return "delete" . $id;
        Enrollment::find($id)->delete();
        toast("Enrollment Deleted.", "success");
        return redirect()->route("enrollment.index");
    }

    public function edit($id)
    {
        $enrollment = Enrollment::find($id);
        $courses = Course::all();
        return view("enrollment.edit", compact("enrollment", "courses"));
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::find($id);
        $enrollment->name = $request->name;
        $enrollment->email = $request->email;
        $enrollment->course_id = $request->course_id;
        $enrollment->save();
        toast("Enrollment updated.", "success");
        return redirect()->route("enrollment.edit", $enrollment->id);
    }
}
