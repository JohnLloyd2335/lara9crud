<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//1. Use Student Model
use App\Models\Student;

class StudentController extends Controller
{
    //2. Create a Function to ftech data
    public function index(){
        $data = Student::get();// use student model
        // return $data;
        return view('student-list',compact('data'));
    }

    public function addStudent(){
        
        return view('add-student');
       
    }

    public function saveStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $name = $request->name; 
        $email = $request->email;
        $phone = $request->phone; 
        $address = $request->address;

        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->phone = $phone;
        $student->address = $address;
        $student->save();

        return redirect()->back()->with("success","Student Added Successfully");
    }

    public function editStudent($id){
        $data = Student::where('id','=', $id)->first();
        return view('edit-student',compact('data'));
    }

    public function updateStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $id = $request->id; 
        $name = $request->name; 
        $email = $request->email;
        $phone = $request->phone; 
        $address = $request->address;

        Student::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ]);

        return redirect()->back()->with("success","Student Updated Successfully");
    }

    public function deleteStudent($id){
        Student::where('id','=',$id)->delete();
        return redirect()->back()->with("success","Student Deleted Successfully");
    }
}
