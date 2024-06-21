<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view("pages.teacher.dashboard");
    }
    public function students()
    {
        $data['students'] = User::where("role", 1)->get();
        return view("pages.teacher.students")->with($data);
    }

    public function badges()
    {
        $teacher_id = auth()->user()->id;
        $data["badges"] = Badge::where("teacher_id", $teacher_id)->get();
        return view("pages.teacher.teacher_badge_all")->with($data);
    }

    public function view(Badge $badge){
        $data['badge'] = $badge;
        return view("pages.teacher.teacher_badge_view")->with($data);
    }
}
