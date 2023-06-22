<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'mapel'
    ];
    public function student()
    {
       return $this->hasMany(Student::class);
    }
}
