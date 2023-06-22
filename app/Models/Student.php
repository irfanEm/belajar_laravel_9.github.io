<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'score',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

}
