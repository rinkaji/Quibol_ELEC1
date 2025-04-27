<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    public function showQrCode($id)
    {
        $url = url('http://127.0.0.1:8000/students/' . $id);
        $qr = QrCode::generate($url);

        return view('qr', compact('qr'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('Student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|int',
            'grade' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'grade' => $request->grade
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('Student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $studentInfo = Student::findOrFail($student->id);
        return view('Student.edit', compact('studentInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|int',
            'grade' => 'required',
        ]);

        $studentInfo = Student::findOrFail($id);

        $studentInfo->Update([
            'name' => $request->name,
            'age' => $request->age,
            'grade' => $request->grade,
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $studentInfo = Student::findOrFail($student->id);
        $student->delete();
        return redirect()->route('students.index');
    }
    

}
