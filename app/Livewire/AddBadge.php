<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Livewire\Component;

class AddBadge extends Component
{
    public $courseSelect;
    public $students;
    public $teachers = User::where("role",2)->get();
    public $courses = Course::all();
    public $allStudents = Enrollment::latest()->get();

    public function updatedCourseSelect($value)
    {
        $this->students = array_filter($this->allStudents, function ($student) use ($value) {
            return $student['course_id'] == $value;
        });
    }
    public function __construct(){
        // $this->teachers = User::where("role",2)->get();
        // $this->courses = Course::all();
    }

    public function render()
    {
        
        return view('livewire.add-badge');
    }
}
