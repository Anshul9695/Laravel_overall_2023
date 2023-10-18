<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\SimpleCrude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SimpleCrudeController extends Controller
{
    public function insert(){
        $course=new course();
       $list= $course->all();
        return view('SimpleCrude.insert')->with('course',$list);
    }
    public function insertRecourd(Request $request){
$validate=Validator::make($request->all(),[
    'student_name'=>'required',
    'email'=>'required',
    'phone'=>'required',
    'course_id'=>'required'
]);

if($validate->fails()){
    return $validate->errors();
}else{
    echo "no error found";
}

    }
}
