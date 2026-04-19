<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Major;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with('major')->get();
        return view('students.index', ['students' => $students]);
        
    }

    public function create(){
        $majors = Major::all(); 
        return view('students.create', compact('majors'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'email'=>'required | email:rfc,dns | unique:students,email',
            'major_id'=>'required | exists:majors,id',
            'semester'=>'required | integer|min:1|max:12'
        ]);

        $newStudent = Student::create($data);

        return redirect(route('student.index'));
    }

    public function edit (Student $student){
        $majors = Major::all(); 
        return view('students.edit', [('student')=>$student], compact('majors'));
    }

    public function update(Student $student, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'email'=>'required | email:rfc,dns | unique:students,email,' . $student->id,
            'major_id'=>'required | exists:majors,id',
            'semester'=>'required | integer|min:1|max:12'
        ]);

        $student->update($data);

        return redirect(route('student.index'))->with('success', 'Datos Actualizados Correctamente');
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect(route('student.index'))->with('success', 'Registro Eliminado Correctamente');
    }
}
