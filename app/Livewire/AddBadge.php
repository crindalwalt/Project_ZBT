<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class AddBadge extends Component
{
    public $badgeName;
    public $courseId;
    public $studentIds = [];
    public $courses = [];
    public $students = [];
    public $teachers = [];

    public function mount()
    {
        $this->courses = Course::all();
        $this->teachers = User::where("role", 2)->get();
        $this->students = collect();
    }

    public function updatedCourseId($value)
    {
        Log::info('updatedCourseId called with value: ' . $value);

        // Fetch students enrolled in the selected course
        $this->students = Enrollment::where('course_id', $value)
                                    ->with('enrolled_students') // Assuming this is a relationship method
                                    ->get()
                                    ->pluck('enrolled_students')
                                    ->flatten();
        
        $this->studentIds = [];
    }

    public function submit()
    {
        $this->validate([
            'badgeName' => 'required|string|max:255',
            'courseId' => 'required|exists:courses,id',
            'studentIds' => 'required|array',
            'studentIds.*' => 'exists:students,id',
        ]);

        // Handle the form submission logic
        // Example: Badge::create([...]);
        
        session()->flash('message', 'Badge created successfully!');
    }

    public function render()
    {
        return view('livewire.add-badge');
    }
}
