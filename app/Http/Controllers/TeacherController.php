<?php

namespace App\Http\Controllers;

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

    public function badges(){
        $data["badges"] = auth()->user()->badge_teacher;
        return view("pages.teacher.teacher_badge_all")->with($data);
    }
}