<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //
    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required'
        ]);

        Student::create([
            'name' => $request->nama,
            'score' => $request->nilai,
            'teacher_id' => 11
        ]);

        return Redirect::route('index');
    }
}
