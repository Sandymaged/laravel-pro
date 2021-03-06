<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name', 'course_description', 'teacher_id', 'duration'];

    public function user()
    {
        return $this->belongsTo('App\User', 'teacher_id');
    }
    function comments()
    {
        return $this->hasMany('App\Models\Comment')->whereNull('parent_id');
    }
}
