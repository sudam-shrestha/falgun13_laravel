<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view("course.index", compact('courses'));
    }

    public function create()
    {
        return view("course.create");
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $file = $request->image;
        if ($file) {
            $file_name = time() . "." . $file->getClientOriginalExtension();  //images/hero.jpg
            $file->move("images/", $file_name);
            $course->image = "images/$file_name";
        }
        $course->save();
        toast("Course created successfully.", "success");
        return redirect("/courses");
    }

    public function delete(string $id)
    {
        // return "delete" . $id;
        Course::find($id)->delete();
        toast("Course Deleted.", "success");
        return redirect("/courses");
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view("course.edit", compact("course"));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->price = $request->price;
        $file = $request->image;
        if ($file) {
            $file_name = time() . "." . $file->getClientOriginalExtension();  //images/hero.jpg
            $file->move("images/", $file_name);
            $course->image = "images/$file_name";
        }
        $course->save();
        toast("Course updated.", "success");
        return redirect("/courses");
    }
}
