<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Student,History};

class StudentsController extends Controller
{
    public function index(){
        $students = Student::paginate(10);
        return view('back-end.student.index',compact('students'));
    }

    public function create(){
        return view('back-end.student.create');
    }

    public function store(Request $request){

        if( $request->image ){
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }else{
            $imageName = "";
        }
        $student = new Student();
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->province = $request->province;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->order = $request->order;
        $student->image = $imageName;
        $student->save();
        return redirect()->route('student.index');
        
    }

    public function edit($id){
        $student = Student::find($id);
        return view('back-end.student.edit',compact('student'));
    }

    public function update(Request $request,$id){
        
        if( $request->image ){
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }else{
            $imageName = $students->image;
        }
        $student = Student::find($id);
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->province = $request->province;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->order = $request->order;
        $student->image = $imageName;
        $student->save();
        return redirect()->route('student.index');
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }

    public function history($id){
        $histories = History::where('student_id',$id)->paginate(10);
        return view('back-end.student.history',compact('histories'));
    }

    
}
