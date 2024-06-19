<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadgeStudents extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function badge(){
        return $this->belongsTo(Badge::class, 'badge_id');
    }

}
