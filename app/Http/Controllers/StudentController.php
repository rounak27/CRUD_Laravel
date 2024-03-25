<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $datas=Student::all();
        
        return view('Display',compact('datas'));
    }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->back()->with('success', 'Student record deleted successfully.');
    }
    public function create()
    {
        return view('Create');
    }
    
    public function store(Request $request)
    {
        $student = new Student();
        $student->roll = $request->roll;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return redirect()->back()->with('success', 'Student record created successfully.');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        //dd($student);
        return view('Edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->roll = $request->roll;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return redirect('/display')->with('success', 'Student record updated successfully.');
    }
}