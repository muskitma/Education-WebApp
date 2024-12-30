<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    // Display the registration form and list of students
    public function viewForm()
    {
        $students = Student::all();
        return view('student-reg',['students' => $students]);
    }
    public function addStudent(Request $request){
        Student::create($request->all());
        return redirect()->route('student-list')->with('message', 'Student added successfully');
    }

   
    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('edit-student', compact('student'));
    }
    
    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);
    
        // Update student data
        $student->update($request->all());
    
        return redirect()->route('student-list')->with('message', 'Student updated successfully');
    }
    

    // Delete a student
    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student-list')->with('message', 'Student deleted successfully');
    }

}
