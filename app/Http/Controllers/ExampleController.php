<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExampleController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        // return view('index', ['murids'=>$students]);
        $pmurid = Student::all();
        $pmurid = Student::paginate(5);
        $gurus = Teacher::paginate(5);
        return view('index', ['murid2'=> $pmurid, 'gurus'=>$gurus]);
    }

    public function filter2()
    {
        $gurus = Teacher::where('age', '>=', 5)->where('name', 'LIKE', '%a%')->get();
        return view('filter', compact('gurus'));
    }
    public function filter()
    {
        $murid2 = Student::where('score', '=', 99)->get();
        return view('filter', compact('murid2'));
    }

    public function showg($id)
    {
        $guru2 = Teacher::find($id);
        $murid2 = Student::where('teacher_id', '=', $guru2->id)->get();
        return view('detail', ['guru2' => $guru2, 'murid2' => $murid2]);
    }
    public function show($id)
    {
        $students = Student::find($id);
        $activities = $students->activity;
        return view('example', ['activities' => $activities, 'students' => $students]);
    }

    public function create()
    {
        return view('create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'mapel' => 'required'
        ]);

        Teacher::create([
            'name' => $request->nama,
            'age' => $request->umur,
            'mapel' => $request->mapel
        ]);

        return Redirect::route('index');
    }
}
