<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['user_id', 'course_id', 'date'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
