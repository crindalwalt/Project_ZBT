<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\Course;
use Cviebrock\EloquentSluggable\Services\SlugService;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['courses'] = Course::all();
        return view("pages.admin.courses_all")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view("pages.admin.course_create")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $courseType = "paid";
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = "Course_" . time() . "." . $image->extension();
            $image->storeAs("public/CourseImages", $imageName);
        }
        if ($request->input("regular_price") <= 0) {
            $courseType = "free";
        }
        $slug = Str::of($request->title)->slug("-");
        Course::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'video' => $request->video,
            'image' => "storage/CourseImages/" . $imageName,
            'start_date' => $request->start_date,
            'language' => $request->language,
            'duration' => $request->duration,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'type' => $courseType,
            'category_id' => $request->category_id,
            'price_id' => $request->price_id,
        ]);

        Alert("success", "Course Published Successfully");
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $data['categories'] = Category::all();
        $data['course'] = $course;
        return view("pages.admin.course_edit")->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $courseType = $course->type;
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = "storage/CourseImages/" . "Course_" . time() . "." . $image->extension();
            $image->storeAs("public/CourseImages", $imageName);
        } else {
            $imageName = $course->image;
        }
        if ($request->input("regular_price") <= 0) {
            $courseType = "free";
        }

        $course->update([
            'title' => $request->title,
            'slug' => $course->slug,
            'description' => $request->description,
            'video' => $request->video,
            'image' => "storage/CourseImages/" . $imageName,
            'start_date' => $request->start_date,
            'language' => $request->language,
            'duration' => $request->duration,
            'regular_price' => $request->regular_price,
            'discount_price' => $request->discount_price,
            'type' => $courseType,
            'category_id' => $request->category_id,
            'price_id' =>$request->price_id,
        ]);


        Alert::success("success", "Course updated Successfully");
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        Alert::success("success", "Course Deleted Successfully");
        return redirect()->back();
    }


    public function all_courses()
    {


        $data['courses'] = Course::all();
        $data['total_courses'] = count($data['courses']);
        return view("pages.user.courses")->with($data);
    }

    public function course_detail(Course $course)
    {
        $data['course'] = $course;
        $data['similar_courses'] = Course::inRandomOrder()->take(3)->get();
        return view("pages.user.course_detail")->with($data);
    }
}
