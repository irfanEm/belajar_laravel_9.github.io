<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        //$pmurid = Student::all();
        $pmurid = Student::paginate(1);
        return view('index', ['murid2'=> $pmurid]);
    }

    public function filter()
    {
        $murid2 = Student::where('score', '=', 99)->get();
        return view('filter', compact('murid2'));
    }
    public function show($id)
    {
        $students = Student::find($id);
        $activities = $students->activity;
        return view('example', ['activities' => $activities, 'students' => $students]);
    }
}
