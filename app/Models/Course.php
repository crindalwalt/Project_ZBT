<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
//    use Sluggable;
    public $guarded = [];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function batches(){
        return $this->hasMany(Badge::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students()
    {
        return $this->hasMany(CourseStudent::class);
    }
}
