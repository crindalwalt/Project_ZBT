<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBadgeRequest;
use App\Http\Requests\UpdateBadgeRequest;
use App\Models\Badge;
use App\Models\BadgeStudents;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['courses'] = Course::all();
        $data['teachers'] = User::where("role", 2)->get();
        $data['badges'] = Badge::latest()->get();
        return view("pages.admin.students.badges_all")->with($data);
    }

    public function enroll(Request $request, User $student)
    {
        // $data[""] =
        // dd($request->all());

        $badge  = Badge::find($request->input("batch"));
        if ($badge->badgeStudents->contains("user_id", $student->id)) {
            Alert::warning("Student Already added",);
            return redirect()->back();
        } else {


            $badge->badgeStudents()->create(["user_id" => $student->id]);
            $enrollment = Enrollment::find($request->input("enrollment_id"));
            $enrollment->update(["enrollment_status" => "active"]);
            Alert::success("Student added to This Batch", "Student can view and attend the batch now");
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Badge $badge)
    {
        $data['badge'] = $badge;
        $data['students'] = Enrollment::where('course_id', $badge->course_id)
            ->with('enrolled_students')
            ->get()
            ->pluck('enrolled_students')
            ->flatten();

        // dd($data['students']);
        return view("pages.admin.students.badge_create")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBadgeRequest $request)
    {
        Badge::create($request->all());
        Alert::success("Badge Created Successfully ", "Now add the students in their respective badges");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Badge $badge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Badge $badge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function student_store(Request $request, Badge $badge)
    {
        $request->validate([
            'student_id' => ['required', 'array']
        ]);
        foreach ($request->student_id as $key => $value) {
            if ($badge->badgeStudents->contains("user_id", $value)) {
                continue;
            }
            $badge->badgeStudents()->create([
                'user_id' => $value,
            ]);
        }


        Alert::success("Students are added to $badge->name badge");
        return redirect()->route("badges.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Badge $badge)
    {
        //
    }

    public function expel(BadgeStudents $badgeStudent)
    {
        $badgeStudent->delete();
        Alert::success("Student Expeled from this badge");
        return redirect()->back();
    }
}
