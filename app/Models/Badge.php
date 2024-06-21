<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function course()
    {
        return $this->belongsTo(Course::class, "course_id");
    }

    public function badgeStudents()
    {
        return $this->hasMany(BadgeStudents::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function meetings(){
        return $this->hasMany(BadgeMeeting::class);
    }
}