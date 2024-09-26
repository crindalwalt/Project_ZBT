<?php

namespace App\Http\Controllers;

use App\Mail\ClassNotificationMail;
use App\Models\Badge;
use App\Models\BadgeStudents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $assignedBatches = Badge::where("teacher_id", "$user->id")->get();
        $studentCount = 0;
        foreach ($assignedBatches as $batch) {
            // dd($batch->badgeStudents);
            $studentCount += count($batch->badgeStudents);
        }

        $data['course_count'] = count($assignedBatches);
        $data['student_count'] = $studentCount;
        $data['batches'] = $assignedBatches;

        // dd($data);
        return view("pages.teacher.dashboard")->with($data);
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

    public function view(Badge $badge)
    {
        $data['badge'] = $badge;
        return view("pages.teacher.teacher_badge_view")->with($data);
    }


    public function store(Request $request, Badge $badge)
    {

        $request->validate([
            'meeting_link' => ["required", 'string']
        ]);
        $badge->meetings()->create([
            'link' => $request->meeting_link,
        ]);
        // dd($badge->badgeStudents[0]->user->email);
        // Mail::to("shahzadfarooqdev@gmail.com")->send(new ClassNotificationMail("Shahzad Farooq"));
        foreach($badge->badgeStudents as $student){
            Mail::to($student->user->email)->send(new ClassNotificationMail($student->name));
        }
        // $toEmail = 'shahzadfarooqdev@gmail.com';
        // $subject = 'Your Quran Class is Live now';
        // $messageBody = 'Hurry up and join now.';

        // Mail::raw($messageBody, function ($message) use ($toEmail, $subject) {
        //     $message->to($toEmail)
        //             ->subject($subject);
        // });
        // TODO: generate notification here
        Alert::success("Meeting Created", "Students are notified and soon they\'ll be in the meeting ");
        return redirect()->back();
    }

    public function profile()
    {
        $user = auth()->user();
        $data['teacher'] = $user;
        $data['batches'] = Badge::where("teacher_id", "$user->id")->get();
        return view("pages.teacher.teacher_profile")->with($data);
    }
}
