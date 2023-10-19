<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\SimpleCrude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SimpleCrudeController extends Controller
{
    public function insert()
    {
        $course = new course();
        $list = $course->all();
        return view('SimpleCrude.insert')->with('course', $list);
    }
 
 
    public function insertRecourd(Request $request)
    {
        // $request->validate([
        //     'student_name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,JPG,jpg,gif,svg|max:2025',
        //     'course_id' => 'required'
        // ]);
        $validate = Validator::make($request->all(), [
            'student_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,JPG,jpg,gif,svg|max:2025',
            'course_id' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->getMessageBag());
        } else {
            $student = new SimpleCrude();
            $student->student_name = $request->student_name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $file_name = time() . '.' . $extention;
                $file->storeAs('public/studentImage', $file_name);
                $student->image = $file_name;
            }
            $student->course_id = $request->course_id;
            $student->save();
            return redirect()->back()->with('message', 'Student recored Saved successfully..');
        }
    }
    public function list()
    {
 $list=SimpleCrude::all();
return view('SimpleCrude.studentList')->with('list',$list);
    }
  

}
