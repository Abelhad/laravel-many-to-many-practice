<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $students = Student::all();
        return view('teachers.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'teachers' => 'nullable|array',
            'teachers.*' => 'exists:teachers,id',
        ]);
        $teacher = Teacher::create([
            'name' => $request->name,
        ]);
        $teacher->students()->sync($request->students ?? []);
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
        $students = Student::all();
        return view('teachers.edit', compact('teacher', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);
        $teacher->update([
            'name' => $request->name,
        ]);
        $teacher->students()->sync($request->students ?? []);
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
