<?php

namespace App\Models;

use App\Models\Contact;
use App\Models\Teacher;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }
}
