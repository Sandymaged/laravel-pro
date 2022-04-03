<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected   $fillable = ["body", "course_id", "user_id", "parent_id", "user_name"];
    ///user have 1 comment
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /// this comment have many replies
    public function replies()
    {
        return $this->hasMany("App\User", "parent_id");
    }
}
