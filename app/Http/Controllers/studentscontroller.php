<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class studentscontroller extends Controller
{
    public function index()
    {
    $students = Students::get();
    // dd($students);
    return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Students::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'adress'=>$request->adress,
            'created_at'=> now(),


        ]);
        return redirect()->route('student.index')->with('success', 'Student has been addedd');
    }

    public function edit($student_id)
    {
        $student = Students::where('id', $student_id)->first();

        return view('edit', compact('student'));
    }

    public function update(Request $request, $student)
    {
        Students::where('id', $student)
        ->update([
            'name'=>$request->name,
        'phone'=>$request->phone,
        'adress'=>$request->adress,
        'created_at'=> now()
        ]);

        return redirect()->route('student.index')->with('success', 'Student has been Updated');
    }

    public function destroy($student)
    {
        Students::where('id',$student)
        ->delete();
       return redirect()->route('student.index')->with('success', 'student has been deleted');
    }


}
